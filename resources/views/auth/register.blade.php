@extends('layouts.site')
@section('css')
    <style>
        .require::after {
            content: '*';
            font-size: 36px;
            position: absolute;
            top: -5px;
            right: 20px;
            color: red;
        }
        .require-label {
            font-size: 36px;
            position: absolute;
            top: -10px;
            color: red;
        }
    </style>
@stop
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('front/images/bnr-signup.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                @if(isset($is_doctor_register))
                    <h2>SIGN UP DOCTOR</h2>
                @else
                    <h2>SIGN UP</h2>
                @endif
            </div>
        </div>
    </section>

    <form method="POST" action="{{route('postRegister')}}" class="form" name="register">
        @csrf
        @if(isset($is_doctor_register))
            <input type="hidden" name="is_doctor_register" value="1">
        @endif
        <section class="billing-area ">
            <div class="container">
                <div class="fom fom-shad mt20 col-sm-9 p0 pul-cntr">
                    <div class="col-md-12">
                        @include('layouts.alert')
                        <h4 class="mt20 mb20">User Information</h4>
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="First Name *" class="form-control" required="required" name="firstName"
                               type="text" value="{{old('firstName')}}">
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Last Name *" class="form-control" required="required" name="lastName"
                               type="text" maxlength="191" value="{{old('lastName')}}">
                        <span class="require"></span>

                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Email *" class="form-control" required="required" name="email" type="email"
                               value="{{old('email')}}" >
                        <span class="require"></span>

                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Password *" class="form-control"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" name="password"
                               type="password" value="">
                        <span class="require"></span>

                    </div>

                    <div class="form-group col-sm-12">
                        <input data-match-error="Whoops, these don&#039;t match" placeholder="Confirm Password *"
                               data-match="#password" class="form-control" required="required"
                               name="password_confirmation" type="password" value="">
                        <span class="require"></span>

                    </div>
                    <div class="form-group col-sm-12">
                        <div class="alert alert-info">
                            Your password must contain minimum 8 characters, at least 1 uppercase alphabet, 1 lowercase
                            alphabet, 1 number and 1 special character.
                        </div>
                    </div>
                    @if(!isset($is_doctor_register))
                    <div class="form-group col-sm-12">
                        <label for="gender">Gender <span class="require-label">*</span></label>
                        <div class="inline-form">
                            <input {{old('gender') == 'm' || empty(old('gender')) ? 'checked' : ''}} name="gender" type="radio" value="m" id="gender">
                            <label for="Male">Male</label>
                            <input {{old('gender') == 'f' ? 'checked' : ''}} name="gender" type="radio" value="f" id="gender">
                            <label for="Female">Female</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 ">
                        <label for="gender">Date of birth <span class="require-label">*</span></label>
                    </div>

                    <div class="form-group col-sm-2 col-xs-4">
                        <select class="form-control" required="required" name="date">
                            @for($i = 1;$i <= 31; $i++)
                                <option  {{old('date') == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-sm-3 col-xs-4">
                        <select class="form-control" required="required" name="month">
                            <option {{old('month') == 1 ? 'selected' : ''}} value="1">January</option>
                            <option {{old('month') == 2 ? 'selected' : ''}} value="2">February</option>
                            <option {{old('month') == 3 ? 'selected' : ''}} value="3">March</option>
                            <option {{old('month') == 4 ? 'selected' : ''}} value="4">April</option>
                            <option {{old('month') == 5 ? 'selected' : ''}} value="5">May</option>
                            <option {{old('month') == 6 ? 'selected' : ''}} value="6">June</option>
                            <option {{old('month') == 7 ? 'selected' : ''}} value="7">July</option>
                            <option {{old('month') == 8 ? 'selected' : ''}} value="8">August</option>
                            <option {{old('month') == 9 ? 'selected' : ''}} value="9">September</option>
                            <option {{old('month') == 10 ? 'selected' : ''}} value="10">October</option>
                            <option {{old('month') == 11 ? 'selected' : ''}} value="11">November</option>
                            <option {{old('month') == 12 ? 'selected' : ''}} value="12">December</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-2 col-xs-4">
                        <select class="form-control" required="required" name="year">
                            @for($i = 2016;$i >= 1930; $i--)
                                <option {{old('year') == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-12" style="opacity: 0;margin-bottom: -20px">--</div>
                    @endif
                    <div class="form-group col-sm-6">
                        <input placeholder="Country United States (US)" class="form-control" readonly="readonly"
                               required="required" name="country" type="text">
                        <span class="require"></span>

                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Postal Code / Zipcode *" class="form-control" required="required" name="zip"
                               type="text" value="{{old('zip')}}">
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-6">
                        <select name="state" id="state" required class="form-control">
                            <option value="">State *</option>
                            @foreach(\App\Models\State::get() as $state)
                                @if($state->code == 'HI' && isset($is_doctor_register)) @continue @endif
                                <option {{old('state') == $state->code ? 'selected' : ''}} value="{{$state->code}}">{{$state->title}}</option>
                            @endforeach
                        </select>
                        <span class="require"></span>
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="City *" class="form-control" required="required" name="city" type="text" value="{{old('city')}}">
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-12">
                        <input placeholder="Address *" class="form-control" required="required" name="address"
                               type="text" value="{{old('address')}}">
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Phone *" class="form-control" required="required" name="phone" type="text"
                               value="{{old('phone')}}" >
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Fax @if(isset($is_doctor_register))*@endif" class="form-control" name="fax" type="text"
                               value="{{old('fax')}}" >
                        @if(isset($is_doctor_register))<span class="require"></span>@endif

                    </div>
                    @if(isset($is_doctor_register))
                    <div class="col-md-12">
                        <h4 class="mt20 mb20">Doctor Information</h4>
                    </div>
                    <div class="form-group col-sm-12">
                        <input placeholder="Physician Name*" class="form-control" required="required" name="physician_name"
                               type="text" value="{{old('physician_name')}}">
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Physician License Number*" class="form-control" required="required" name="physician_license_number"
                               type="text" value="{{old('physician_license_number')}}">
                        <span class="require"></span>
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Physician NPI Number*" class="form-control" required="required" name="physician_npi_number"
                               type="text" value="{{old('physician_npi_number')}}">
                        <span class="require"></span>
                    </div>

                    <div class="form-group col-sm-12">
                        <label style="margin-bottom: 5px">Do you draw patients in your office?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="draw_patients" id="draw_patients1" value="1" @if(empty(old('draw_patients')) || old('draw_patients') == 1) checked @endif>
                            <label class="form-check-label" for="draw_patients1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="draw_patients" id="draw_patients2" value="0" @if(old('draw_patients') === 0) checked @endif>
                            <label class="form-check-label" for="draw_patients2">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label style="margin-bottom: 5px">Do you need blood draw supplies?</label>
                        <div class="form-check ml-10">
                            <input class="form-check-input" type="radio" name="blood_draw" id="blood_draw1" value="1" @if(empty(old('blood_draw')) || old('blood_draw') == 1) checked @endif>
                            <label class="form-check-label" for="blood_draw1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="blood_draw" id="blood_draw2" value="0" @if(old('blood_draw') === 0) checked @endif>
                            <label class="form-check-label" for="blood_draw">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea class="form-control" style="min-height: 40px" placeholder="Do you have any special requests?" name="special_requests">{{old('special_request')}}</textarea>
                    </div>
                    <div class="form-group col-sm-12">
                        <small style="color: #31708f">
                            <strong>Your account will be open within the next 5 business days!</strong>
                        </small>
                    </div>
                    @endif
                    <div class="form-group col-sm-6">
                        <small>We do not support orders from the following states:
                            <strong>NY, NJ RI, MD, HI</strong></small>
                    </div>
                    <div class="form-group col-sm-6 text-right">
                        <button type="submit" class="btn btn-flat btn-primary ">SIGNUP</button>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
