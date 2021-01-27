<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add(Request $request){
        Cart::add(['id' => $request->product_id,'name' => $request->name,'price' => $request->price,'qty' => $request->quantity,'weight' => 0]);
        return redirect()->route('cart.view');
    }

    public function addMultiple(Request $request){
        $products = Product::whereIn('id',$request->product_id)->get();
        $arrayCart = array();
        foreach ($products as $product){
            $arrayCart[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => !empty($product->sale_price) ? $product->sale_price : $product->price,
                'qty' => 1,
                'weight' => 0
            ];
        }
        Cart::add($arrayCart);
        return redirect()->route('cart.view');
    }

    public function view(){
        $cart = Cart::content();
        $mandatoryProducts = Product::active()->additionalType()->where('mandatory',1)->get();
        $additionalProducts = Product::active()->additionalType()->where('mandatory',0)->get();
        return view('front.cart.view',compact('cart','mandatoryProducts','additionalProducts'));
    }

    public function update(Request $request){
        Cart::update($request->rowId, ['qty' => $request->qty]);
        return back();
    }

    public function remove(Request $request){
        Cart::remove($request->rowId);
        return back();
    }

}
