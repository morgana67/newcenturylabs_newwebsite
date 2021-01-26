@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('front/images/map-bnr.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>LOCATIONS</h2>
                <h4></h4>
            </div>
        </div>
    </section>


    <section class="inr-intro-area">

        <section class="location-area pt30 pb30">
            <div class="container">
                <div class="map-area loc__fom col-sm-12 p0">
                    <form method="get" class="search-fom rds mb30" action=""">
                        <div class="form-group col-sm-3">
                            <label for="search">City</label>
                            <input type="text" placeholder="City" class="form-control" name="city" id="city"
                                   autocomplete="off" value="">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="search">State</label>
                            <select class="form-control" name="state">
                                <option value="" selected="selected">Select State</option>
                                <option value="AK">AK</option>
                                <option value="AL">AL</option>
                                <option value="AR">AR</option>
                                <option value="AZ">AZ</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DC">DC</option>
                                <option value="DE">DE</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="IA">IA</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="MA">MA</option>
                                <option value="MD">MD</option>
                                <option value="ME">ME</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MO">MO</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="NE">NE</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NV">NV</option>
                                <option value="NY">NY</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VA">VA</option>
                                <option value="VT">VT</option>
                                <option value="WA">WA</option>
                                <option value="WI">WI</option>
                                <option value="WV">WV</option>
                                <option value="WY">WY</option>
                            </select>

                        </div>
                        <div class="form-group col-sm-3">
                            <label for="search">Zip</label>
                            <input type="text" placeholder="zip" class="form-control" name="zip" id="zip"
                                   autocomplete="off" value="">

                        </div>
                        <div class="form-group  col-sm-3">
                            <input type="hidden" name="search" id="search" value="1">
                            <button class="btn " type="submit"><span>Search</span> <i class="fa fa-search fa-2x"></i>
                            </button>
                        </div>
                    </form>
                    <div id="suggested_locations" style="display:none;" class="form-group has-feedback"></div>
                </div>
                <div class="map-area loc__list col-sm-12 p0">

                </div>

            </div>
        </section>


    </section>
    <section class="box-area text-center pt20 pb50">
        <div class="container">

            <div class="box col-sm-4 anime-left ">
                <div class="box__img">
                    <img src="front/images/pic.jpg" alt=""/>
                </div>
                <div class="box__cont ">
                    <p>We make getting blood draws Easy and convenient for you</p>
                </div>
            </div>


            <div class="box col-sm-4 anime-in">
                <div class="box__img">
                    <img src="front/images/postBanner.png" alt=""/>
                </div>
                <div class="box__cont">
                    <p>No appointments needed Walk-ins are welcome You are in and out!</p>
                </div>
            </div>


            <div class="box col-sm-4 anime-right">
                <div class="box__img">
                    <img src="front/images/latestPost2.png" alt=""/>
                </div>
                <div class="box__cont">
                    <p>Access your results in 72 hours</p>
                </div>
            </div>
        </div>
    </section>
@endsection
