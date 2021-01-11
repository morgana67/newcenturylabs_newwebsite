@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('front/images/bnr-signup.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>SIGN UP</h2>
                <h4></h4>
            </div>
        </div>
    </section>


    <section class="inr-intro-area pt30">
        <div class="container">


        </div>
    </section>

    <form method="POST" action="{{route('register')}}" class="form" name="register">
        @csrf
        <section class="billing-area ">
            <div class="container">

                <div class="fom fom-shad pt20 col-sm-9 p0 pul-cntr">

                    <div class="form-group col-sm-6">
                        <input placeholder="First Name *" class="form-control" required="required" name="firstName"
                               type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Last Name *" class="form-control" required="required" name="lastName"
                               type="text" maxlength="191">
                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Email *" class="form-control" required="required" name="email" type="email">
                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Password *" class="form-control"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" name="password"
                               type="password" value="">

                    </div>

                    <div class="form-group col-sm-12">
                        <input data-match-error="Whoops, these don&#039;t match" placeholder="Confirm Password *"
                               data-match="#password" class="form-control" required="required"
                               name="password_confirmation" type="password" value="">
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="alert alert-info">
                            Your password must contain minimum 8 characters, at least 1 uppercase alphabet, 1 lowercase
                            alphabet, 1 number and 1 special character.
                        </div>
                    </div>

                    <div class="form-group col-sm-6 clrhm">
                        <h5><label for="gender">Gender *</label></h5>
                        <div class="inline-form">

                            <input checked="checked" name="gender" type="radio" value="m" id="gender">
                            <label for="Male">Male</label>
                            <input name="gender" type="radio" value="f" id="gender">
                            <label for="Female">Female</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 clrhm">
                        <label><label for="gender">Date of birth*</label></label>
                        <br>
                        <div class="form-group col-sm-2 pl0">
                            <select class="form-control" required="required" name="date">
                                @for($i = 1;$i <= 31; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <select class="form-control" required="required" name="month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <select class="form-control" required="required" name="year">
                                @for($i = 2016;$i >= 1930; $i--)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Country United States (US)" class="form-control" readonly="readonly"
                               required="required" name="country" type="text">
                    </div>

                    <div class="form-group col-sm-6">
                        <select name="state" id="state" required class="form-control">
                            <option>State *</option>
                            @foreach(\App\Models\State::get() as $state)
                                <option value="{{$state->code}}">{{$state->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="City *" class="form-control" required="required" name="city" type="text">
                    </div>


                    <div class="form-group col-sm-12">
                        <input placeholder="Address *" class="form-control" required="required" name="address"
                               type="text">
                    </div>


                    <div class="form-group col-sm-6">
                        <input placeholder="Postal Code / Zipcode *" class="form-control" required="required" name="zip"
                               type="text">
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="Phone *" class="form-control" required="required" name="phone" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <script type="text/javascript">
                            var RecaptchaOptions = {"curl_timeout": 1, "lang": "en"};
                        </script>
                        <script src='../www.google.com/recaptcha/api0125.js?render=onload&amp;hl=en'></script>
                        <div class="g-recaptcha" data-sitekey="6LfDeBEUAAAAADjEUrNZafnWg0Em4-dhHWf60Zn4"></div>
                        <noscript>
                            <div style="width: 302px; height: 352px;">
                                <div style="width: 302px; height: 352px; position: relative;">
                                    <div style="width: 302px; height: 352px; position: absolute;">
                                        <iframe
                                            src="https://www.google.com/recaptcha/api/fallback?k=6LfDeBEUAAAAADjEUrNZafnWg0Em4-dhHWf60Zn4"
                                            frameborder="0" scrolling="no"
                                            style="width: 302px; height:352px; border-style: none;">
                                        </iframe>
                                    </div>
                                    <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;">
                <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                          class="g-recaptcha-response"
                          style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0; padding: 0; resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </noscript>
                    </div>
                    <div class="form-group col-sm-6 text-right">
                        <button type="submit" class="btn btn-flat btn-primary ">SIGNUP</button>
                    </div>
                    <div class="form-group col-sm-12">
                        <small>We do not support orders from the following states:
                            <strong>NY, NJ RI, MD, HI</strong></small>
                    </div>
                    <input name="role_id" type="hidden" value="2">
                </div>
            </div>
        </section>
    </form>
@endsection
