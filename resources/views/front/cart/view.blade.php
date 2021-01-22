@extends('layouts.site')
@section('title'){{ 'Cart' }}@endsection
@section('description'){{ 'Cart' }}@endsection
@section('keywords'){{ 'Cart' }}@endsection
@section('content')
    <section class="box-area text-center pb50">
        <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
                 style="background-image:url({{asset('/front/images/bnr-cart1.jpg')}});">
            <div class="container">
                <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                    <h2>YOUR CURRENT ORDER</h2>
                    <h4></h4>
                </div>
            </div>
        </section>
        <section class="container table-area cart-table pt30" style="font-size: 17px">
            @if(count($cart) == 0)
                <div class="alert alert-success">
                    <h4><i class="icon fa fa-check"></i> &nbsp  Your Basket is empty</h4>
                </div>
            @else
                <div class="table-area col-sm-12">
                    <table class="table cart-item-table table-bordered table-topbot table-valign">
                        <thead>
                            <th class="col-sm-6 ">LAB TEST</th>
                            <th class="col-sm-2 text-center">PRICES</th>
                            <th class="col-sm-2 text-center">QUANTITY</th>
                            <th class="col-sm-2 text-center">TOTAL</th>
                        </thead>
                        <tbody>
                            @foreach ($cart as $product)
                                <tr>
                                    <td class="text-left">
                                        <a href="{{route('product_detail',['slug' => $product->id])}}" class="view-cat-link">{{$product->name}}</a>
                                        <button class="btn-xs btn-danger delete_product" type="button">remove</button>
                                        <form action="{{route('cart.update')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{$product->rowId}}">
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        ${{$product->price}}
                                    </td>
                                    <td class="text-center">
                                        <div class="form-group d-flex justify-content-center">
                                            <form action="{{route('cart.update')}}" method="POST">
                                                @csrf
                                                <input type="number" class="form-control" name="qty" value="{{$product->qty}}" style="outline: none">
                                                <input type="hidden" name="rowId" value="{{$product->rowId}}">
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        ${{$product->subtotal}}
                                    </td>
                                </tr>
                            @endforeach
                            @php
                                $priceMandatory = 0;
                            @endphp
                            @if($mandatoryProducts->isNotEmpty())
                                @foreach($mandatoryProducts as $product)
                                    @php
                                        $price = !empty($product->sale_price) ? floatval($product->sale_price) : floatval($product->price);
                                        $priceMandatory += $price;
                                    @endphp
                                    <tr>
                                        <td class="text-left">
                                            <a class="view-cat-link">{{$product->name}}</a>
                                        </td>
                                        <td class="text-center">
                                            ${{$price}}
                                        </td>
                                        <td class="text-center">
{{--                                            {{$product->qty}}--}}
                                        </td>
                                        <td class="text-center">
                                            ${{$price}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                @if($additionalProducts->isNotEmpty())
                <div class="table-total-area col-sm-6 pul-lft">
                    <table class="table  table-bordered table-topbot">
                        <tbody>
                        @foreach($additionalProducts as $product)
                            @php  $price = !empty($product->sale_price) ? floatval($product->sale_price) : floatval($product->price); @endphp
                            <tr>
                                <td class="text-left">
                                    {{$product->name}} (Optional)  <button class="btn-xs btn-success add_cart" type="button">Add</button>
                                    <form method="POST" action="{{route('cart.add')}}">
                                        @csrf
                                        <input type="hidden" value="1" name="quantity" id="quantity"/>
                                        <input type="hidden" name="price" id="price" value="{{$price}}"/>
                                        <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}"/>
                                        <input type="hidden" name="name" id="name" value="{{$product->name}}"/>
                                    </form>
                                </td>
                                <td><span class="txt-price">${{$price}}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
                <div class="table-total-area col-sm-4 col-sm-offset-2 pul-rgt">
                    <table class="table  table-bordered table-topbot">
                        <thead>
                        <tr><th colspan="2">CART TOTALS</th>
                        </tr></thead>

                        <tbody><tr>
                            <td class="text-left">Subtotal</td>
                            <td>${{str_replace(',','',Cart::total()) + number_format($priceMandatory,2)}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total</td>
                            <td>${{str_replace(',','',Cart::total()) + number_format($priceMandatory,2)}}</td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="clearfix"></div>
                <div class="btn-group pul-rgt pr20">
                    <a href="{{route('shop')}}" class="btn  btn-primary">Continue Shopping <i class="fa fa-arrow-right"></i></a>
                    <a href="{{is_customer() ? route('cart.checkout') : route('login')}}" class="btn  btn-success">Proceed to Checkout <i class="fa fa-shopping-cart"></i></a>
                </div>
            @endif
        </section>
    </section>
@endsection
@section('script')
    <script>
        $('.add_cart').on('click',function(){
            $(this).parent('td').find('form').submit();
        })

        $('[name=qty]').on('change',function () {
            $(this).parent('form').submit();
        })

        $('.delete_product').on('click',function () {
            if(confirm('Are you sure you want to delete the product ?')){
                return $(this).parent('td').find('form').submit();
            }else{
                return false;
            }
        })
    </script>
@endsection
