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
                    <h2><p>Your Order number is <strong><a>{{'#'.$id}}</a></strong></p></h2>
                </div>

                <p>Your lab order will be emailed to you within a 4 hour window of your order, during our hours of operation 8 AM PST to 10 PM PST. Please note if you have scheduled for a MD consult, your results must be complete before communication. We look forward to serving you!</p>

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

