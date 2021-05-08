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
                <div class="page__title">
                    <p>
                        <strong>
                            Thank you for your order, it has been added to our queue to review for approval which will be completed with 4 business hours between 8 AM and 10 PM PST/PDT.
                        </strong>
                    </p>
                </div>
                <p><strong>Your Order number is <a href="{{route('orderDetail', $order->id)}}">{{'#'.$order->id}}</a></strong></p>
                <hr>
                <p><strong>What's next?</strong></p>
                <ul style="font-weight: 400;">
                    <li style="margin-bottom: 10px">Once our staff approve your order we will send you another email with a link to your Requisition Order which you must deliver to your medical provider.</li>
                    <li style="margin-bottom: 10px">They will draw your blood and deliver it to the testing company. When they have completed yours test(s), they will upload your results and you will
                        receive another email from us notifying you it's available for download.
                    </li>
                </ul>
                <p><strong>Additional Details</strong></p>
                <p>In addition to the emails you receive, they will also be available on our website under
                    My Account > Orders > And selecting the Details button beside any Order.</p>
                <br>
                <p><strong>Note:</strong> If you do not see "My Account" you must first login by clicking the Login button.</p>
                <br>
                <p><strong>Note:</strong> If you do not remember your password or username you must use the recovery link below the login form on the website.</p>
                <br>
                <div class="clrlist listview list-icon">
                    <strong>Thanks again and have a proactive day.</strong>
                </div>
            </div>
        </div>
    </section>
@endsection

