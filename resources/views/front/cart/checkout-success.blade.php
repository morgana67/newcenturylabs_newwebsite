@extends('layouts.site')
@section('content')

    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner" style="background-image:url('{{ asset('/front/images/bnr-thankyou.jpg') }}');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Thank you for your Order!</h2>
                <h4></h4>
            </div>
        </div>
    </section>

    <section class="inr-intro-area ">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page__title">
                    <h2><p>Your Order number is <strong><a href="{{route('orderDetail', $order->id)}}">{{'#'.$order->id}}</a></strong></p></h2>
                </div>
                <p><strong>Next Steps:</strong><span style="font-weight: 400;"><br></span><span
                        style="font-weight: 400;">Please print your lab order and take it with you to your local Quest Diagnostics draw center, you will need to present your ID card at the front desk. You do&nbsp;</span><strong>NOT</strong><strong>&nbsp;</strong><span
                        style="font-weight: 400;">need to present your insurance card, and you do&nbsp;</span><strong>NOT</strong><strong>&nbsp;</strong><span
                        style="font-weight: 400;">need to make an appointment-- walk-ins are always welcome.</span><span
                        style="font-weight: 400;"><br></span></p>
                <br>
                <p><a href="{{route('downloadRequisitionOrder', $order->pwh_order_id)}}" style="padding: 6px 12px; border: 1px solid #357ebd;  border-radius: 4px; background: #428bca; color: #fff;">Download Requisition Order</a></p>
                <br>
                <p><strong>Test prep Info:</strong><span
                        style="font-weight: 400;"> see laboratory information below:</span><span
                        style="font-weight: 400;"><br></span><a
                        href="https://testdirectory.questdiagnostics.com/test/home"><strong>TEST
                            INFORMATION</strong><span style="font-weight: 400;"><br></span><span
                            style="font-weight: 400;"><br></span></a><span style="font-weight: 400;">Please use this link below to access your local Quest Draw Center:</span>
                </p>
                <br>
                <p>
                    <a href="https://secure.questdiagnostics.com/hcp/psc/jsp/SearchLocation.do?newSearch=FindLocation"><strong>FIND
                            A DRAW CENTER NEARBY</strong></a></p>
                <div class="clrlist listview list-icon">
                    <ul>
                        <li><i class="fa fa-phone"></i><a href="tel:{{ setting('site.hotline')}}">Tel.: {{ setting('site.hotline') }}</a></li>
                        <li><i class="fa fa-envelope"></i> {{ setting('site.email_receive_notification') }}</li>
                    </ul>

                    <h5>Thanks again and have a proactive day.</h5>

                </div>
            </div>
        </div>
    </section>
@endsection

