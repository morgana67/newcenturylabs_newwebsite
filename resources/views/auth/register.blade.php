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

    <form method="POST" action="{{route('postRegister')}}" class="form" name="register">
        @csrf
        <section class="billing-area ">
            <div class="container">

                <div class="fom fom-shad pt20 col-sm-9 p0 pul-cntr">

                    <div class="form-group col-sm-6">
                        <input placeholder="First Name *" class="form-control" required="required" name="firstName"
                               type="text" value="{{old('firstName')}}">
                        @error('firstName')
                            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Last Name *" class="form-control" required="required" name="lastName"
                               type="text" maxlength="191" value="{{old('lastName')}}">
                        @error('lastName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Email *" class="form-control" required="required" name="email" type="email"
                               value="{{old('email')}}" >
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Password *" class="form-control"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" name="password"
                               type="password" value="">
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-12">
                        <input data-match-error="Whoops, these don&#039;t match" placeholder="Confirm Password *"
                               data-match="#password" class="form-control" required="required"
                               name="password_confirmation" type="password" value="">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
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

                            <input {{old('gender') == 'm' || empty(old('gender')) ? 'checked' : ''}} name="gender" type="radio" value="m" id="gender">
                            <label for="Male">Male</label>
                            <input {{old('gender') == 'f' ? 'checked' : ''}} name="gender" type="radio" value="f" id="gender">
                            <label for="Female">Female</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 clrhm">
                        <label><label for="gender">Date of birth*</label></label>
                        <br>
                        <div class="form-group col-sm-2 pl0">
                            <select class="form-control" required="required" name="date">
                                @for($i = 1;$i <= 31; $i++)
                                    <option  {{old('date') == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group col-sm-3">
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
                        <div class="form-group col-sm-2">
                            <select class="form-control" required="required" name="year">
                                @for($i = 2016;$i >= 1930; $i--)
                                    <option {{old('year') == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
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
                                <option {{old('state') == $state->code ? 'selected' : ''}} value="{{$state->code}}">{{$state->title}}</option>
                            @endforeach
                        </select>
                        @error('state')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="City *" class="form-control" required="required" name="city" type="text" value="{{old('city')}}">
                        @error('city')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>


                    <div class="form-group col-sm-12">
                        <input placeholder="Address *" class="form-control" required="required" name="address"
                               type="text" value="{{old('address')}}">
                        @error('address')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>


                    <div class="form-group col-sm-6">
                        <input placeholder="Postal Code / Zipcode *" class="form-control" required="required" name="zip"
                               type="text" value="{{old('zip')}}">
                        @error('zip')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="Phone *" class="form-control" required="required" name="phone" type="text"
                               value="{{old('phone')}}" >
                        @error('phone')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6">

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
