@extends('layouts.site')
@section('title')Locations@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('front/plugin/select2/css/select2.min.css')}}">
    <style>
        .select2-container--default .select2-selection--single {
            border-radius: 0 !important;
            border: 1px solid #ccc;
        }

        .select2-container .select2-selection--single {
            height: 40px !important;
        }

        span {
            outline: none !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 36px !important;
        }
    </style>
@endsection
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('/front/images/map-bnr.jpg');">
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
                    <form method="get" class="search-fom rds mb30" action="{{route('locations')}}">
                        <div class="form-group col-sm-3">
                            <label for="search">City</label>
                            <input type="text" placeholder="City" class="form-control" name="city" id="city"
                                   autocomplete="off" value="{{request()->get('city')}}">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="search">State</label>
                            <select id="state" class="form-control" name="state">
                                <option value="" selected="selected">Select State</option>
                                @foreach(\App\Models\State::get() as $state)
                                    <option {{request()->get('state') == $state->code ? 'selected' : ''}} value="{{$state->code}}">{{$state->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="search">Zip</label>
                            <input type="text" placeholder="zip" class="form-control" name="zip" id="zip"
                                   autocomplete="off" value="{{request()->get('zip')}}">
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
                    @if(count($locations) > 0)
                        <table id="example" class="table table-area0 table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th class="clrhm p20"><h3>Locations</h3></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($locations as $location)
                                <?php
                                if (isset($location->distance) && $location->distance >= 50) {
                                    break;
                                }
                                ?>
                                <tr>
                                    <td>
                                        <div id="BDV1" class="clrhm">
                                            <a tabindex="1" href="{{url('location')}}/<?php echo $location->id ?>"><i
                                                    class="fa fa-map-marker fa-2x"></i>
                                                <h3>
                                                    {{$location->name}} {{$location->city}} {{$location->address2}}</h3>
                                                <span>
                                                {{$location->address}}, {{$location->city}}
                                                    {{$location->state}}
                                                    {{$location->zipCode}}
                                                    @if(isset($location->distance))
                                                         Distance : {{round($location->distance, 1)}} mi,
                                                   @endif
											</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tbody>
                        </table>
                    @endif

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
@section('script')
    <script src="{{asset('front/plugin/select2/js/select2.min.js')}}"></script>
    <script>
        $('#state').select2({});
    </script>
@stop
