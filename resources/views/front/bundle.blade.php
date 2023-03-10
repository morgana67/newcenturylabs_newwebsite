@php
    use Jenssegers\Agent\Agent as Agent;
    $Agent = new Agent();
@endphp
@extends('layouts.site')
@section('title'){{ 'Bundle' }}@endsection
@section('description'){{'Bundle'}}@endsection
@section('keywords'){{'Bundle'}}@endsection
@section('css')
   <style>
       .sticky{
           position: fixed;
           top: 80px;
       }
       .sticky2{
           position: fixed;
           bottom: 0;
       }

       .footer_cart{
           width: 100%;
           display: flex;
           font-weight: 700;
           font-size: 20px;
           text-align: center;
           background-color: #0076c4;
           color: #fff;
       }
       .footer_cart > div{
           border: 1px solid #aaa!important;
           padding: 10px;
       }
       .footer_cart > div:nth-child(1){
            width: 114px;
       }
       .footer_cart > div:nth-child(2){
           width: 342px;
       }
       .footer_cart > div:nth-child(3) , .footer_cart > div:nth-child(4), .footer_cart > div:nth-child(5),.footer_cart > div:nth-child(6){
           width: 171px;
       }
   </style>
@endsection
@section('content')
    <section class="inr-intro-area pt100 pb40">
        <div class="container">
            <div class="page__title text-center mb30">
                <h2>BUNDLE PACKAGE TEST</h2>
                <span></span>
            </div>

            <p>We want you to get the most information about your body when information about “you” matter most. From
                wellness starters to proactive warrior&reg; tests holding over 100 bio markers, you get actionable
                information at your fingertips. You can order bundle tests and add individual tests from our test
                menu</p>
        </div>
    </section>
    <section class="packages-area bg-snow p30 mb30 box-scale--hover">
        <div class="container">
            <?php
            $thHead = "";
            $thPrice = "";
            $thBody = "";
            $tdBottom = "";
            $thBottom ="";
            foreach ($model as $product) {

            if ($product->sale_price != null)
                $price = $product->sale_price;
            else
                $price = $product->price;


            $thHead .= '<th width="15%">' . $product->name . '</th>';
            $thPrice .= "<th>".setting('site.currency') . format_price($price) . "</th>";
            $tdBottom .= '<div width="15%">'.setting('site.currency') . format_price($price) .'
                            <div class="lnk-btn inline-btns">
                                    <form method="POST" action="'.route('cart.add').'">
                                       <input type="hidden" value="'.csrf_token().'" name="_token" />
                                        <input type="hidden" value="1" name="quantity" id="quantity"/>
                                        <input type="hidden" name="price" id="price" value="'.$price.'"/>
                                        <input type="hidden" name="product_id" id="product_id" value="'.$product->id.'"/>
                                        <input type="hidden" name="name" id="name" value="'.$product->name.'"/>
                                        <input type="hidden" name="slug" id="slug" value="'.$product->slug.'"/>
                                        <button id="btn_add_to_cart" class="out-btn btn btn-default">CHECKOUT</button>
                                    </form>
                            </div>
                        </div>';
            $thBottom .= '<th width="15%">'.setting('site.currency') . format_price($price) .'
                            <div class="lnk-btn inline-btns">
                                    <form method="POST" action="'.route('cart.add').'">
                                       <input type="hidden" value="'.csrf_token().'" name="_token" />
                                        <input type="hidden" value="1" name="quantity" id="quantity"/>
                                        <input type="hidden" name="price" id="price" value="'.$price.'"/>
                                        <input type="hidden" name="product_id" id="product_id" value="'.$product->id.'"/>
                                        <input type="hidden" name="name" id="name" value="'.$product->name.'"/>
                                        <input type="hidden" name="slug" id="slug" value="'.$product->slug.'"/>
                                        <button id="btn_add_to_cart" class="out-btn btn btn-default">CHECKOUT</button>
                                    </form>
                            </div>
                        </th>';
            ?>
            <div class="pack-box col-sm-3 ">
                <div clsas="pack__hed">
                    <h4><?php echo $product->name; ?></h4>
                    <h2>
                        @if($product->sale_price !=  null)
                            <span id="old_price" style="text-decoration: line-through;">${{ format_price($product->price) }}</span>
                            <span id="price">{{setting('site.currency')}}{{ format_price($product->sale_price) }}</span>
                        @else
                            <span id="price">{{setting('site.currency')}}{{ format_price($product->price) }}</span>
                        @endif
                    </h2>
                    <div class="rating-area clrlist">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="cont">
                    <p>{!! $product->description  !!} </p>
                    <div class="lnk-btn inline-btns">
                        <form method="POST" action="{{route('cart.add')}}">
                            @csrf
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="price" id="price" value="{{$price}}"/>
                            <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}"/>
                            <input type="hidden" name="name" id="name" value="{{$product->name}}"/>
                            <input type="hidden" name="slug" id="slug" value="{{$product->slug}}"/>
                            <button id="btn_add_to_cart" class="out-btn btn btn-default">CHECKOUT</button>
                        </form>

                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </section>
    <section class="table-area0 pack-table pt30 pb30 table-valign a--hidden">
        <div class="container">

            <div class="table-responsive">

                <table class="table table-hover">
                    <colgroup>
                        <col width="10%">
                        <col width="30%">
                        <col width="15%">
                        <col width="15%">
                        <col width="15%">
                        <col width="15%">
                    </colgroup>
                    <thead class="cart-sticky">
                        <tr>
                            <th width="10%">Category</th>
                            <th width="30%">Bio Markers</th>
                            {!! $thHead !!}
                        </tr>
                    </thead>
                    <tr>
                        <th></th>
                        <th></th>
                        {!! $thPrice !!}
                    </tr>

                    <?php
                    foreach ($categories as $id => $category) {
                    if (empty($category['categories'])) {
                        continue;
                    }
                    ?>
                    <tr>
                        <td colspan="<?php echo count($model) + 2; ?>"><?php echo $category['name']; ?></td>
                    </tr>
                    <?php
                        foreach ($category['categories'] as $subCatId => $subCategory) {
                    ?>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td><?php echo $subCategory; ?></td>

                        <?php
                        foreach ($model as $product) {
                            if (isset($productCategories[$product->id]) && in_array($subCatId, $productCategories[$product->id])) {
                                $class = "check";
                            } else {
                                $class = "times";
                            }
                        ?>
                        <td><i class="fa fa-<?php echo $class; ?>"></i></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                    @if(!$Agent->isDesktop())
                        <thead class="cart-sticky">
                            <tr>
                                <th width="10%"></th>
                                <th width="30%"></th>
                                {!! $thBottom !!}
                            </tr>
                        </thead>
                    @endif
                </table>
                @if($Agent->isDesktop())
                    <div class="footer_cart">
                        <div></div>
                        <div></div>
                        {!! $tdBottom !!}
                    </div>
                @endif
            </div>

        </div>
    </section>
@endsection
@section('script')
    @if($Agent->isDesktop())
    <script>
        $(function (){
            let cartOffset = $('.cart-sticky').offset().top;
            let footer_cart = $('.footer_cart').offset().top;
            $(window).scroll(function (event) {
                let scroll = $(window).scrollTop();
                if(scroll > cartOffset-100){
                    $('.cart-sticky').addClass('sticky');
                    $('.sticky').css('width',$('tbody').width());
                }else{
                    $('.cart-sticky').removeClass('sticky');
                }

                if(scroll >= cartOffset && scroll < parseInt(footer_cart)-1000){
                    $('.footer_cart').addClass('sticky2');
                    $('.sticky2').css('width',$('tbody').width());
                }else{
                    $('.footer_cart').removeClass('sticky2');
                }

            });
        })
    </script>
    @endif
@endsection
