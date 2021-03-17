<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Hash;
use DB;
class ProfileController extends Controller
{
    public function profile(Request $request){
        $user = Customer::where('id',user()->getAuthIdentifier())->with(['address' => function ($query){
            return $query->where('addressType','=','billing');
        }])->first();
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(), [
                'firstName' => ['required', 'string', 'max:191'],
                'lastName' => ['required', 'string', 'max:191'],
                'email' => 'required|unique:customers,email,'.user()->getAuthIdentifier(),
                'state' => 'required|max:191',
                'city' => 'required|max:191',
                'address' => 'required|max:191',
                'zip' => 'required|max:191',
                'phone' => 'required|regex:/^[01]?[- .]?([2-9]\d{2})?[- .]?\d{3}[- .]?\d{4}$/',
                'facebook' => 'nullable|url',
                'twitter' => 'nullable|url',
                'instagram' => 'nullable|url',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
            }

            DB::beginTransaction();
            try {
                $dataCustomer = [
                    'firstName' => $request['firstName'],
                    'lastName' => $request['lastName'],
                    'email' => $request['email'],
                    'gender' => $request['gender'],
                    'dob' => $request['year'] . "-" . $request['month'] . "-" . $request['date'],
                    'facebook' => $request['facebook'],
                    'twitter' => $request['twitter'],
                    'instagram' => $request['instagram'],
                ];

                $customerId = Customer::where('id',user()->getAuthIdentifier())->update($dataCustomer);

                $dataAddress = [
                    'phone' => $request['phone'],
                    'country_id' => 230,
                    'state' => $request['state'],
                    'city' => $request['city'],
                    'address' => $request['address'],
                    'zip' => $request['zip']
                ];
                Address::where([
                    ['customer_id' , '=', user()->getAuthIdentifier()],
                    ['addressType', '=', 'billing']
                ])->update($dataAddress);
                DB::commit();
                message_set('Profile updated successfully','success');
                return redirect()->back();
            }catch (\Exception $exception){
                DB::rollback();
                return redirect()->back()->withInput($request->all())->withErrors($exception->getMessage());
            }
        }
        return view('profile.index',compact('user'));
    }
    public function changePassword(Request $request){
        if($request->isMethod('POST')){
            if (!Hash::check($request->old_password, user()->getAuthPassword())){
                message_set('Old passwords do not match','danger');
                return redirect()->back();
            }else{
                $validator = Validator::make($request->all(),[
                    'old_password' => 'required',
                    'password' => 'required|min:8|confirmed',
                ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator->getMessageBag());
                }

                Customer::where('id',\user()->getAuthIdentifier())->update(['password' => bcrypt($request->password)]);
                message_set('Password changed successfully','success');
                return redirect()->back();
            }
        }
        return view('profile.change-password');
    }

    public function myOrder(){
        $orders = Order::where('customer_id',user()->getAuthIdentifier())->orderBy('id','desc')->with('details','customer','country')->paginate(20);
        return view('profile.my-order',compact('orders'));
    }

    public function orderDetail(Request $request,$id){
        $order = Order::where('id',$id)->where('customer_id',user()->getAuthIdentifier())->with('details','customer','country')->firstOrFail();
        return view('profile.order-detail',compact('order'));
    }

    public function downloadRequisitionOrder(Request $request,$id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api-staging.pwnhealth.com/v2/labs/orders/{$id}/pdfs/requisition");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $token = generateToken();
        $headers = [
            'Accept: application/json',
            'Content-Type: application/json',
            "Authorization:Bearer {$token}"
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec ($ch);
        curl_close ($ch);

        header('Cache-Control: public');
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename="RequisitionOrder'.$id.'.pdf"');
        header('Content-Length: '.strlen($server_output));
        echo $server_output;
        exit();
    }

    public function curl($field = array()){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api-staging.pwnhealth.com/v2/labs/orders");
        if ($field && !empty($field)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $field);
        } //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $token = generateToken();
        $headers = [
            'Accept: application/json',
            'Content-Type: application/json',
            "Authorization:Bearer {$token}"
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return json_decode($server_output);
    }

}
