@extends('layouts.site')
@section('content')

    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner" style="background-image:url('{{ asset('/front/images/bnr-thankyou.jpg') }}');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Order Successfully!</h2>
            </div>
        </div>
    </section>

    <section class="inr-intro-area " style="padding: 50px 0">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p>Thank you for order! Your order number is <strong><a href="{{route('orderDetail', $order->id)}}">{{'#'.$order->id}}</a></strong></p>
                <br>
                <p>Your lab req has been added to our queue, please standby for us to review and approve your order.</p>
                <p>Your lab req will be available between 30 minutes to 1 hour.</p>
                <hr>
                <p><strong>What's next?</strong></p>
                <p style="margin-bottom: 5px">You will be notified via email in just a few short moments that your lab order is ready with a secure link. </p>
                <p style="margin-bottom: 5px">You can access your lab order directly from your email, and your account  portal by going to “My Account” then “My Order Detail” to download your lab req after you’ve been notified via email
                </p>
                <br>
                <p><strong>Specimen Collection:</strong></p>
                <p style="margin-bottom: 5px">Once you have downloaded your req, take it with you to your local Quest PSC, make sure you present  Identification such as a drivers licenses and your lab req. Appointments are not needed, and walk-ins are always welcome. </p>
                <p>Find a Quest location nearest you:</p>
                <p><a href="https://appointment.questdiagnostics.com/patient/confirmation" style="font-weight: bold">MyQuest (questdiagnostics.com)</a></p>
                <br>
                <p><strong>Accessing Your Results:</strong></p>
                <p>Normally test results are available 72 hours from the time of your draw. Depending on some tests, results can take slightly longer. Your results will be located under your “My Account” My Orders tab in your portal. </p>
                <br>
                <div class="clrlist listview list-icon">
                    <p>Thank you for your patients, we look forward to serving you!</p>
                </div>
            </div>
        </div>
    </section>
@endsection

