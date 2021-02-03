<?php

namespace App\Http\Controllers;

use App\Events\SendMailProcessed;
use App\Functions\Functions;
use App\Models\Address;
use App\Models\Customer;
use App\Models\MailConfig;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use DB;

class CheckoutController extends Controller
{
    public function __construct()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_SK'));
    }

    public function view(){
        $user = Customer::where('id',user()->id)->first();
        if ($user == null) return redirect()->route('login');

        $addressTable = Address::where('customer_id',user()->id)->get();

        $mandatoryProducts = Product::active()->additionalType()->where('mandatory',1)->get();

        $address['billing'] = array();
        $address['patient'] = array();
        foreach($addressTable as $e){
            if ($e->addressType == 'billing'){
                $address['billing'] = $e;
            }else{
                $address['patient'] = $e;
            }
        }

        return view('front.cart.checkout',compact('user','address','mandatoryProducts'));
    }

    public function checkoutProceed(Request $request){
        $validator = \Validator::make($request->all(),[
            'firstName' => ['required', 'string', 'max:191'],
            'lastName' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191'],
            'address' => 'required|max:191',
            'country_id' => 'required',
            'state' => 'required|max:191',
            'city' => 'required|max:191',
            'zip' => 'required|numeric',
            'phone' => 'required|numeric',
            'cc' => 'required|max:16',
            'cvc' => 'required|max:4',
            'expMonth' => 'required',
            'expYear' => 'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
        };
        DB::beginTransaction();
        try {
            $token = \Stripe\Token::create([
                'card' => [
                    'number' => $request->cc,
                    'exp_month' => $request->expMonth,
                    'exp_year' => $request->expYear,
                    'cvc' => $request->cvc,
                ],
            ]);
            if (isset(user()->stripe_customer_id)) {
                $stripeCustomerId = user()->stripe_customer_id;
                $customer = \Stripe\Customer::update($stripeCustomerId, array('source' => $token['id']));
            }else{
                $customer = \Stripe\Customer::create([
                    'source' => $token['id'],
                    'email' => $request->email,
                    'metadata' => [
                        "First Name" => $request->firstName,
                        "Last Name" => $request->lastName
                ]]);
                Customer::where('id',user()->id)->update(['stripe_customer_id' => $customer['id']]);
                $stripeCustomerId = $customer['id'];
            }
            $defaultSource = $customer['default_source'];

            $mandatoryProducts = Product::select('id','price','sale_price')->active()->additionalType()->where('mandatory',1)->get();

            $order = new Order();
            $order->customer_id = user()->id;
            $order->firstName = $request->firstName;
            $order->lastName = $request->lastName;
            $order->email = $request->email;
            $order->address = $request->address;
            $order->address2 = $request->address2;
            $order->city = $request->city;
            $order->country_id = $request->country_id;
            $order->state = $request->state;
            $order->phone = $request->phone;
            $order->message = $request->message;
            $order->zip = $request->zip;
            $order->totalAmount = $request->totalAmount;
            $order->nick_name = $request->nick_name;
            $order->gender = $request->gender;
            $order->save();

            $charge = \Stripe\Charge::create([
                'amount' => $request->totalAmount * 100,
                'currency' => 'usd',
                'customer' => $stripeCustomerId,
                'source' => $defaultSource,
                'metadata' => [
                    "Order ID" => $order->id,
//                    "Link" => url('admin/order/' . $order_id)
                ],
                'capture' => true]);
            $order->paymentStatus = $charge->status;
            $order->save();


            $orderDetail = array();
            foreach (Cart::content() as $product){
                $orderDetail[] = [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'price' => $product->price,
                    'quantity' => $product->qty,
                ];
            }

            foreach ($mandatoryProducts as $mandatoryProduct){
                $price = !empty($mandatoryProduct->sale_price) ? floatval($mandatoryProduct->sale_price) : floatval($mandatoryProduct->price);
                $orderDetail[] = [
                    'order_id' => $order->id,
                    'product_id' => $mandatoryProduct->id,
                    'price' => $price,
                    'quantity' => 1,
                ];
            }

            OrderDetail::insert($orderDetail);
            DB::commit();
            Cart::destroy();
            return redirect()->route('order-success',['id' => $order->id,'sendmail' => 1]);
        }catch(\Exception $exception) {
            DB::rollBack();
            return redirect()->back()->withInput($request->all())->withErrors($exception->getMessage());
        }
    }


    public function orderSuccess($id = null){
        if(!empty(request()->get('sendmail'))){
            $order = Order::where('id',$id)->where('customer_id',user()->getAuthIdentifier())->with('details','customer','country')->firstOrFail();
            $message = 'You have received an order from ' . $order->firstName.' '.$order->lastName . '. Their order is as follows:';
            $bodyRender = view('emails.mail-order',compact('order','message'))->render();
            event(new SendMailProcessed(setting('site.email_receive_notification'),'New Order | '.setting('site.title'),$bodyRender));

            $mailConfig = MailConfig::where('code','order_confirmation')->first();
            $message = '';
            $bodyRender = view('emails.mail-order',compact('order','message'))->render();
            $body =  Functions::replaceBodyEmail($mailConfig->body,user());
            $body = str_replace("{{ID}}", $order->id , $body);
            $body = str_replace("{{ORDERINFO}}", $bodyRender , $body);

            event(new SendMailProcessed($order->email,$mailConfig->subject,$body));
        }
        return view('front.cart.checkout-success',compact('id'));
    }



    public function findOldInfoByNickname(Request $request): \Illuminate\Http\JsonResponse
    {
        $order = Order::where('nick_name',$request->nick_name)->where('customer_id',user()->getAuthIdentifier())->latest()->first();
        if($order){
            return response()->json(['status' => 'success','data' => $order],200);
        }else{
            return response()->json(['status' => 'fail'],200);
        }
    }

}
