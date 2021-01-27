@extends('layouts.site')
@section('css')
    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('{{ asset('/front/images/bnr-checkout.jpg') }}');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Checkout</h2>
                <h4></h4>
            </div>
        </div>
    </section>
    <form action="{{route('cart.checkoutProceed')}}" method="POST" id="payment-form">
        @csrf
        <section class="billing-area pt50">
            <div class="container">
                @include('layouts.alert')
                <div style="display: none;" class="payment-errors alert alert-danger"></div>
                <div class="address col-sm-6">
                    <div class="patient col-sm-12  fom-shad">
                        <h3>
                            <mark>1</mark>
                            Patient's Information
                        </h3>
                        <div class="patient col-sm-12">
                            <input type="checkbox" name="is_different" id="is_different" value="1" {{old('is_different') ? 'checked' : ''}}>
                            <label for="is_different">Patient information different from my information.</label>
                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="firstName">First Name *</label></h5>
                            <input class="form-control" placeholder="First Name *" id="firstName" required="required"
                                   name="firstName" type="text" value="{{old('firstName','')}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="lastName">Last Name *</label></h5>
                            <input class="form-control" placeholder="Last Name *" id="lastName" required="required"
                                   name="lastName" type="text" value="{{old('lastName','')}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="email">Email *</label></h5>
                            <input class="form-control" placeholder="Email *" id="email" name="email" type="text"
                                   value="{{old('email','')}}" >
                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="gender">Gender *</label></h5>
                            <div class="inline-form">
                                <input checked="checked" {{old('gender','')  == 'm' ? 'checked' : ''}} name="gender" type="radio" value="m" id="gender">
                                <label for="Male">Male</label>
                                <input name="gender" {{old('gender','')  == 'f' ? 'checked' : ''}} type="radio" value="f" id="gender">
                                <label for="Female">Female</label>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <h5><label for="Address Line 1 *">Address Line 1 *</label></h5>
                            <input class="form-control" placeholder="Street Address *" id="address" required="required"
                                   name="address" type="text" value="{{old('address','')}}">
                        </div>

                        <div class="form-group col-sm-12">
                            <h5><label for="Address Line 2">Address Line 2</label></h5>
                            <input class="form-control" placeholder="Appartment.Suite (Optional)" id="address2"
                                   name="address2" type="text" value="{{old('address2','')}}">
                        </div>
                        <div class="form-group col-sm-12 ">
                            <h5><label for="Country *">Country *</label></h5>
                            <select class="form-control" required="required" name="country_id">
                                <option>Country *</option>
                                @foreach(\App\Models\Country::get() as $country)
                                    <option {{old('country') == $country->id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6 ">
                            <h5><label for="state *">State *</label></h5>
                            <input class="form-control" placeholder="State / Region *" id="state" required="required"
                                   name="state" type="text" value="{{old('state','')}}">

                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="city *">City *</label></h5>
                            <input class="form-control" placeholder="Town / City *" id="city" required="required"
                                   name="city" type="text" value="{{old('city','')}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="zip *">Zip *</label></h5>
                            <input class="form-control" placeholder="Postal Code / Zipcode *" id="zip"
                                   required="required" name="zip" type="text" value="{{old('zip','')}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <h5><label for="phone *">Phone *</label></h5>
                            <input class="form-control" placeholder="Phone *" id="phone" required="required"
                                   name="phone" type="text" value="{{old('phone','')}}">
                        </div>
                    </div>
                </div>

                <div class="col2 col-sm-6">

                    <div class="order-summary col-sm-12  fom-shad mb30">

                        <h3>
                            <mark>2</mark>
                            Order Summary
                        </h3>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>LAB TEST</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach(Cart::content() as $product)
                                <tr>
                                    <td for="LAB TEST">{{$product->name}}</td>
                                    <td for="TOTAL">{{setting('site.currency')}}{{$product->price}}</td>
                                </tr>
                            @endforeach

                            @php $priceMandatory = 0 @endphp
                            @foreach($mandatoryProducts as $product)
                                @php
                                    $price = !empty($product->sale_price) ? floatval($product->sale_price) : floatval($product->price);
                                    $priceMandatory += $price;
                                @endphp
                                <tr>
                                    <td for="LAB TEST">{{$product->name}}</td>
                                    <td for="TOTAL">{{setting('site.currency')}}{{$price}}</td>
                                </tr>
                            @endforeach
                            <tr class="h4">
                                <td for="LAB TEST">Total</td>
                                <td for="TOTAL">{{setting('site.currency')}}{{str_replace(',','',Cart::total()) + $priceMandatory}}</td>
                                <input type="hidden" name="totalAmount" value="{{str_replace(',','',Cart::total()) + $priceMandatory}}">
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="payment-info col-sm-12  fom-shad mb30">
                        <h3>
                            <mark>3</mark>
                            Payment Information
                        </h3>
                        <div class="form-group" id="cc-group">
                            <label for="cc">Credit card number:</label>
                            <input class="form-control" required="required" data-stripe="number"
                                   data-parsley-type="number" maxlength="16" data-parsley-trigger="change focusout"
                                   data-parsley-class-handler="#cc-group" name="cc" type="text" id="cc" value="{{old('cc','')}}">

                        </div>

                        <div class="form-group" id="ccv-group">
                            <label for="CVC">CVC (3 or 4 digit number):</label>
                            <input class="form-control" required="required" data-stripe="cvc" data-parsley-type="number"
                                   data-parsley-trigger="change focusout" maxlength="4"
                                   data-parsley-class-handler="#ccv-group" name="cvc" type="text" value="{{old('cvc','')}}">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" id="exp-m-group">
                                    <label for="expMonth">Ex. Month</label>
                                    <select class="form-control" required="required" data-stripe="exp-month" id="expMonth" name="expMonth">
                                        @for($i = 1; $i <= 12; $i++ )
                                            <option {{old('expMonth',1) == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group" id="exp-y-group">
                                    <label for="expYear">Ex. Year</label>
                                    <select class="form-control" required="required" data-stripe="exp-year" id="expYear" name="expYear">
                                        @php($year = \Carbon\Carbon::now()->year)
                                        @for($i = $year; $i <= $year+10;$i++)
                                            <option {{old('expYear',1) == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="payment-info col-sm-12 fom-shad mb30">
                        <div class="form-group">
                            <h3>
                                <mark>4</mark>
                                <label for="message" style="font-weight: 500">Additional Message</label>
                            </h3>
                            <textarea class="form-control" id="message" name="message" cols="105" rows="7">{{old('message','')}}</textarea>

                        </div>
                        <div class="terms col-sm-12">
                            <div style="display: none;" class="terms-errors alert alert-danger">
                            </div>
                            <input type="checkbox" name="terms" id="terms" {{old('terms') == 1 ? 'checked' : ''}} value="1" $required="">
                            I accept the <a target="_black" href="https://newcenturylabs.com/terms">Terms of Service</a>.
                        </div>
                        <div class="form-group col-sm-12 p0 mb30">
                            <button id="place_order" class="form-control btn-primary w100">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
@section('script')
    <script src="https://js.stripe.com/v2/"></script>
    <link href="{{asset('front\plugin\select2\css\select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('front\plugin\select2\js\select2.min.js')}}"></script>
    <script>
        $("[name=country_id]").select2({});
        Stripe.setPublishableKey('{{env('STRIPE_SECRET_PK')}}');
        function check_terms_services() {
            var terms = jQuery("#terms").prop("checked");
            if (terms === false) {
                let termSelector = $('.terms-errors');
                termSelector.show();
                termSelector.text('Please accept our terms of service.');
                termSelector.addClass('alert alert-danger');
                return false;
            }

        }
        $('#payment-form').submit(function (event) {
            $('.terms-errors').hide();
            $('.payment-errors').hide();
            var term = check_terms_services();
            if (term === false) {
                return false;
            }

            var form = $('#payment-form');
            form.find('#place_order').prop('disabled', true);
            Stripe.card.createToken(form, stripeResponseHandler);
            return false;
        });


        function stripeResponseHandler(status, response) {
            // Grab the form:
            var $form = $('#payment-form');
            if (response.error) { // Problem!
                // Show the errors on the form
                $form.find('.payment-errors').show();
                $form.find('.payment-errors').text(response.error.message);
                $form.find('button').prop('disabled', false); // Re-enable submission

                var scrollPos = $form.offset().top;
                $(window).scrollTop(scrollPos);
            } else { // Token was created!

                // Get the token ID:
                var token = response.id;

                // Insert the token into the form so it gets submitted to the server:
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));

                // Submit the form:
                $form.get(0).submit();
            }
        }


        $("#firstName").val('{{ old('firstName',$user->firstName ?? '') }}');
        $("#lastName").val('{{ old('lastName',$user->lastName ?? '') }}');
        $("#email").val('{{ old('email',$user->email ?? '') }}');
        $("#address").val('{{ old('address',$address['billing']->address ?? '') }}');
        $("#address2").val('{{ old('address2',$address['billing']->address2 ?? '') }}');
        $("#state").val('{{ old('state',$address['billing']->state ?? '') }}');
        $("#city").val('{{ old('city',$address['billing']->city ?? '') }}');
        $("#zip").val('{{ old('zip',$address['billing']->zip ?? '')}}');
        $("#phone").val('{{ old('phone',$address['billing']->phone ?? '') }}');
        $("[name=country_id]").val('{{ old('country_id',$address['billing']->country_id)}}').trigger('change');
        $('#gender[value="{{ old('gender',$user->gender ?? 'm')  }}"]').prop("checked",true);
        $("#is_different").on("change", function () {
            if ($("#is_different").is(':checked')) {
                $("#firstName").val('');
                $("#lastName").val('');
                $("#email").val('');
                $("#address").val('');
                $("#address2").val('');
                $("#state").val('');
                $("#city").val('');
                $("#zip").val('');
                $("#phone").val('');
                $("[name=country_id]").val('').trigger('change');
                $('#gender[value="m"]').prop("checked",true);
            } else {
                $("#firstName").val('{{ $user->firstName ?? '' }}');
                $("#lastName").val('{{ $user->lastName ?? '' }}');
                $("#email").val('{{ $user->email ?? '' }}');
                $("#address").val('{{ $address['billing']->address ?? '' }}');
                $("#address2").val('{{ $address['billing']->address2 ?? '' }}');
                $("#state").val('{{ $address['billing']->state ?? '' }}');
                $("#city").val('{{ $address['billing']->city ?? '' }}');
                $("#zip").val('{{ $address['billing']->zip ?? '' }}');
                $("#phone").val('{{ $address['billing']->phone ?? '' }}');
                $("[name=country_id]").val('{{$address['billing']->country_id }}').trigger('change');
                $('#gender[value="{{ $user->gender }}"]').prop("checked",true);
            }
        });
    </script>
@endsection
