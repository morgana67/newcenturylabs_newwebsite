@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('../front/images/testmenu2.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2></h2>
                <h3>ABO Group and RH Type </h3>
            </div>
        </div>
    </section>
    <section class="description-area">
        <div class="container">
            <div class="description-box col-sm-6">
                <div class="description__inr">
                    <div class="description__cont">
                        <h3>Description</h3>
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
            <div class="description-box col-sm-6">
                <div class="description__inr">

                    <div class="circle__cont text-center">
                        <div>
                            <h3>{{ $product->name }}</h3>
                            @if ($product->sale_price != null)
                                <h2><sup>$</sup>{{ floatval($product->sale_price) }}</h2>
                                <strong>Average competitors price</strong>
                                <h4><sup>$</sup>{{floatval($product->price)}}</h4>
                            @else
                                <h2><sup>$</sup>{{ floatval($product->price) }}</h2>
                                <strong>Average competitors price</strong>
                            @endif
                            <strong>Pricing based on average direct to consumer pricing.</strong>
                            <div class="checkout-area">
                                <button id="btn_add_to_cart" class="out-btn btn btn-default">CHECKOUT</button>
                                {{--                            <form id="form_add_to_cart" class="prod-detail-form">--}}
                                {{--                                <input type="hidden" value="1" name="quantity" id="quantity"/>--}}
                                {{--                                <input type="hidden" name="total_price" id="total_price" value="29"/>--}}
                                {{--                                <input type="hidden" name="price" id="price" value="29"/>--}}
                                {{--                                <input type="hidden" name="product_id" id="product_id" value="8"/>--}}
                                {{--                            </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fasting-area">
        <div class="container">
            <div class="fasting-cont fasting-list clrlist listview">
                {!! $product->requirement !!}
            </div>
        </div>
    </section>
@endsection
