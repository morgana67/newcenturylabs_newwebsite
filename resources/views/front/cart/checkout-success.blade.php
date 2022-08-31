@extends('layouts.site')
@section('content')

    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner" style="background-image:url('{{ asset('/front/images/bnr-thankyou.jpg') }}');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Order Successful</h2>
            </div>
        </div>
    </section>

    <section class="inr-intro-area " style="padding: 50px 0">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                {!! str_replace('@{{ order_id }}', '<a href="'.route('orderDetail', $order->id).'">'."#{$order->id}".'</a>', setting('site.order_success_page')) !!}
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        @php
            $products = [];
            foreach($order->details as $key => $productDetail) {
                $product = $productDetail->product;
                $products[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $productDetail->name,
                    'quantity' => $productDetail->quantity,
                    'index' => $key
                ];
            }
        @endphp
        var products = JSON.parse('{{json_encode($products)}}');
        dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
        dataLayer.push({
            'ecommerce': {
                'purchase': {
                    'actionField': {
                        'id': '{{$order->transaction_id?? ""}}',// Transaction ID. Required for purchases and refunds.
                        'affiliation': 'Online Store',
                        'revenue': '{{$order->total?? "0"}}',  // Total transaction value
                        'currencyCode': 'USD'
                    },
                    'products': products
                }
            }
        });
    </script>
@stop
