<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::paginate(10);
        return view('admin.orders.index',compact('orders'));
    }

    public function detail(Request $request,$id){
        $order = Order::where('id',$id)->with('details','customer','country')->firstOrFail();
        return view('admin.orders.detail',compact('order'));
    }

    public function destroy($id){
        $res = Order::where('id',$id)->delete();
        OrderDetail::where('id',$id)->delete();
        $data = $res
            ? [
                'message'    => __('voyager::generic.successfully_deleted')." Order",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager::generic.error_deleting')." Order",
                'alert-type' => 'error',
            ];
        return redirect()->back()->with($data);
    }


    public function updateOrderStatus(Request $request,$id){
        $res = Order::where('id',$id)->update(['orderStatus' => $request->orderStatus]);
        $data = $res
            ? [
                'message'    => __('voyager::generic.successfully_deleted')." Order",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager::generic.error_deleting')." Order",
                'alert-type' => 'error',
            ];
        return redirect()->back()->with($data);
    }

    public function updatePaymentStatus(Request $request,$id){
        $res = Order::where('id',$id)->update(['paymentStatus' => $request->paymentStatus]);
        $data = $res
            ? [
                'message'    => "Successfully Update Order Order",
                'alert-type' => 'success',
            ]
            : [
                'message'    => "Failed Update Order",
                'alert-type' => 'error',
            ];
        return redirect()->back()->with($data);
    }
}
