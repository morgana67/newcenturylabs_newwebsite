@php
    use Carbon\Carbon as Carbon
@endphp
@extends('layouts.site')
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
                                        @if(user()->role_id == 1)
                                            <tr>
                                                <td>Nick Name:</td>
                                                <td><input type="text" name="nick_name" value="{{$order->nick_name}}"></td>
                                            </tr>
                                        @endif
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
                    @if(user()->role_id == 1)
                        <div class="col-md-12 pb50">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                Collapsible Group 1</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                Collapsible Group 2</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                Collapsible Group 3</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script !src="">
    $('[name=nick_name]').on('change',function (){
        let nickname = $(this).val();
        $.ajax({
            url: "{{route('updateNickName',['id' => $order->id])}}",
            data : {
                '_token' : '{{csrf_token()}}',
                'nick_name' : nickname,
            },
            success: function(result){
                if (result.status == 'success'){
                    $('.panel-heading').first().html(`<div class="alert alert-success" role="alert">
                      Successfully update nick name order !
                    </div>`);
                }
            }});
    });
</script>
@endsection
