@extends('layouts.site')

@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url({{asset('front/images/bnr-signup.jpg')}});margin-bottom: 50px">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Reset Password</h2>
            </div>
        </div>
    </section>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{route('resetPassword')}}" class="form pt-3" name="register" style="margin-bottom: 50px">
        @csrf
        <section class="billing-area ">
            <div class="container">
                <div class="fom col-sm-6 fom-shad pt20 p0 pul-cntr">
                    <div class="form-group col-sm-12">
                        <input placeholder="Email *" class="form-control" required="required" name="email" type="email"
                               value="{{old('email')}}" >
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12">
                            <button ype="submit" class="form-control w100 btn-primary">LOGIN</button>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
