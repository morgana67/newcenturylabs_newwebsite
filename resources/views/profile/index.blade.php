@php
    use Carbon\Carbon as Carbon;
@endphp
@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('front/images/bnr-signup.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Profile</h2>
                <h4></h4>
            </div>
        </div>
    </section>

    <form method="POST" action="{{route('profile')}}" class="form" name="register">
        @csrf
        <section class="billing-area ">
            <div class="container">

                <div class="fom fom-shad pt20 col-sm-9 p0 pul-cntr">
                    <div class="col-md-12">
                        @include('layouts.alert')
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="First Name *" class="form-control" required="required" name="firstName"
                               type="text" value="{{old('firstName',$user->firstName)}}">
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Last Name *" class="form-control" required="required" name="lastName"
                               type="text" maxlength="191" value="{{old('lastName',$user->lastName)}}">
                    </div>

                    <div class="form-group col-sm-6 clrhm">
                        <h5><label for="gender">Gender *</label></h5>
                        <div class="inline-form">
                            <input {{old('gender',$user->gender) == 'm' || empty(old('gender')) ? 'checked' : ''}} name="gender" type="radio" value="m" id="gender">
                            <label for="Male">Male</label>
                            <input {{old('gender',$user->gender) == 'f' ? 'checked' : ''}} name="gender" type="radio" value="f" id="gender">
                            <label for="Female">Female</label>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input placeholder="Facebook" class="form-control" name="facebook"
                               type="text" maxlength="191" value="{{old('facebook',$user->facebook)}}">
                    </div>
                    <div class="form-group col-sm-12">
                        <input placeholder="Twitter" class="form-control" name="twitter"
                               type="text" maxlength="191" value="{{old('twitter',$user->twitter)}}">
                    </div>
                    <div class="form-group col-sm-12">
                        <input placeholder="Instagram" class="form-control" name="instagram"
                               type="text" maxlength="191" value="{{old('instagram',$user->instagram)}}">
                    </div>
                    <div class="form-group col-sm-12 clrhm">
                        <label><label for="gender">Date of birth*</label></label>
                        <br>
                        <div class="form-group col-sm-2 pl0">
                            <select class="form-control" required="required" name="date">
                                @for($i = 1;$i <= 31; $i++)
                                    <option  {{old('date',Carbon::create($user->dob)->day) ==  $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <select class="form-control" required="required" name="month">
                                <option {{old('month',Carbon::create($user->dob)->month) == 1 ? 'selected' : ''}} value="1">January</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 2 ? 'selected' : ''}} value="2">February</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 3 ? 'selected' : ''}} value="3">March</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 4 ? 'selected' : ''}} value="4">April</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 5 ? 'selected' : ''}} value="5">May</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 6 ? 'selected' : ''}} value="6">June</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 7 ? 'selected' : ''}} value="7">July</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 8 ? 'selected' : ''}} value="8">August</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 9 ? 'selected' : ''}} value="9">September</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 10 ? 'selected' : ''}} value="10">October</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 11 ? 'selected' : ''}} value="11">November</option>
                                <option {{old('month',Carbon::create($user->dob)->month) == 12 ? 'selected' : ''}} value="12">December</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <select class="form-control" required="required" name="year">
                                @for($i = Carbon::now()->year - 5; $i >= 1930; $i--)
                                    <option {{old('year',Carbon::create($user->dob)->year) == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
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
                                <option {{old('state',$user->address[0]->state) == $state->code ? 'selected' : ''}} value="{{$state->code}}">{{$state->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="City *" class="form-control" required="required" name="city" type="text" value="{{old('city',$user->address[0]->city)}}">
                    </div>


                    <div class="form-group col-sm-12">
                        <input placeholder="Address *" class="form-control" required="required" name="address"
                               type="text" value="{{old('address',$user->address[0]->address)}}">
                    </div>


                    <div class="form-group col-sm-6">
                        <input placeholder="Postal Code / Zipcode *" class="form-control" required="required" name="zip"
                               type="text" value="{{old('zip',$user->address[0]->zip)}}">
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="Phone *" class="form-control" required="required" name="phone" type="text"
                               value="{{old('phone',$user->address[0]->phone)}}" >
                    </div>
                    <div class="form-group col-sm-6">

                    </div>
                    <div class="form-group col-sm-6 text-right">
                        <button type="submit" class="btn btn-flat btn-primary ">UPDATE PROFILE</button>
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
