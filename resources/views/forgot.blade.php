@extends('layouts.site')
@section('content')
    <section class="inr-intro-area pt100">
        <div class="container">
            <div class="row">
                <div class="forget-fom col-md-6 col-md-offset-3">
                    <div class="contact-form">
                        <h2 class="title text-center">Reset Password</h2>


                        <form class="text-center" role="form" method="POST" action="">
                            <input type="hidden" name="_token" value="eXCobM3GVbblofigprE2vU9ciECwU3OdyOd2obbV">

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                       value="">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Reset My Password
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
