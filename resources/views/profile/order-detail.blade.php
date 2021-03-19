@php
    use Carbon\Carbon as Carbon
@endphp
@extends('layouts.site')
@section('title')
    Order Detail
@endsection
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('/front/images/bnr-signup.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Detail Order</h2>
                <h4></h4>
            </div>
        </div>
    </section>
    <section class="billing-area ">
        <div class="container">
            <div class="page-content read container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-bordered" style="padding-bottom:5px;">
                            <div class="panel-heading" style="border-bottom:0;">
                            </div>

                            <div class="panel-body" style="padding-top:0;">
                                <div class="col-md-6" style="font-size: 15px">
                                    <table class="table ">
                                        <tbody>

                                        <tr>
                                            <td>Order ID:</td>
                                            <td>#{{$order->id}}</td>
                                        </tr>

                                        <tr>
                                            <td>Name:</td>
                                            <td>{{$order->firstName.' '.$order->lastName}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td>{{$order->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>{{$order->address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Address2:</td>
                                            <td>{{$order->address2}}</td>
                                        </tr>
                                        <tr>
                                            <td>County:</td>
                                            <td>{{$order->country->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>State:</td>
                                            <td>{{$order->state}}</td>
                                        </tr>
                                        <tr>
                                            <td>City:</td>
                                            <td>{{$order->city}}</td>
                                        </tr>
                                        <tr>
                                            <td>Zip:</td>
                                            <td>{{$order->zip}}</td>
                                        </tr>
                                        <tr>
                                            <td>Message:</td>
                                            <td>{{$order->message}}</td>
                                        </tr>
                                        <tr>
                                            <td>Payment Type:</td>
                                            <td>{{$order->paymentType}}</td>
                                        </tr>
                                        <tr>
                                            <td>Order Status:</td>
                                            <td>
                                               {{$order->orderStatus}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment Status:</td>
                                            <td>
                                               {{$order->paymentStatus}}
                                            </td>
                                        </tr>
                                        @if($order->public_pwh_result == 1)
                                            <tr>
                                                <td>Pwnhealth Requisition Order:</td>
                                                <td>
                                                    @if(!empty($order->pwh_order_id))
                                                        <form action="{{route('downloadRequisitionOrder',$order->pwh_order_id)}}" method="GET">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Download Requisition Order</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pwnhealth Order Link:</td>
                                                <td style="word-break: break-all;"><a href="{{$order->pwh_order_link}}">{{$order->pwh_order_link}}</a></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>

                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <table class="table cart-item-table table-bordered table-topbot table-valign">
                                            <thead>
                                            <tr>
                                                <th class="col-sm-6 ">LAB TEST</th>
                                                <th class="col-sm-2 text-center">PRICES</th>
                                                <th class="col-sm-2 text-center">QUANTITY</th>
                                                <th class="col-sm-2 text-center">TOTAL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($order->details as $product)
                                                <tr>
                                                    <td class="text-left">
                                                        <a href="{{route('product_detail',['slug' => $product->product_id])}}"
                                                           class="view-cat-link">{{$product->product->name}}</a>
                                                    </td>
                                                    <td class="text-center">
                                                        {{setting('site.currency')}}{{format_price($product->price)}}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-group d-flex justify-content-center">
                                                            {{$product->quantity}}
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        {{setting('site.currency')}}{{format_price($product->price * $product->quantity)}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 col-lg-offset-6">
                                        <table class="table table-bordered table-topbot">
                                            <thead>
                                            <tr>
                                                <th colspan="2">CART TOTALS</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="text-left" for="LAB TEST">Subtotal</td>
                                                <td for="PRICES">{{setting('site.currency')}} {{format_price($order->totalAmount)}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" for="LAB TEST">Total</td>
                                                <td for="PRICES">{{setting('site.currency')}} {{format_price($order->totalAmount)}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
