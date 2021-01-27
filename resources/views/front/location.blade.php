@extends('layouts.site')

@section('content')
    <section class="inr-bnr-blank">
        <div class="container">
            <div class="hed">
                <h2>{{$location->name}} {{$location->city}} {{$location->address2}}</h2>
                <span>{{$location->address}}, {{$location->city}}, {{$location->zip}}</span>
            </div>
        </div>
    </section>

    <section class="location-area pt30 pb30">
        <div class="container">

            <div class="map-area col-sm-8">
                <div id="map" style="height: 450px;"></div>
            </div>
            <div class="lab-location-area col-sm-4">

                <div class="loc__contact-info list-icon clrlist listview">
                    <ul>
                        <li> <i class="fa fa-clock-o"></i> <strong>Operation Hours :</strong><br> {!! $location->operationHours !!}</li>
                        <li> <i class="fa fa-phone"></i> <strong>Phone :</strong> {!! $location->phone !!}</li>
                        <li> <i class="fa fa-fax"></i>  <strong>Fax :</strong> {!! $location->fax !!}</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="box-area text-center pt20 pb50">
        <div class="container">

            <div class="box col-sm-4 anime-left ">
                <div class="box__img">
                    <img src="{{ asset('front/images/pic.jpg') }}" alt="" />
                </div>
                <div class="box__cont ">
                    <p>We make getting blood draws Easy and convenient for you</p>
                </div>
            </div>


            <div class="box col-sm-4 anime-in">
                <div class="box__img">
                    <img src="{{ asset('front/images/postBanner.png') }}" alt="" />
                </div>
                <div class="box__cont">
                    <p>No appointments needed Walk-ins are welcome You are in and out!</p>
                </div>
            </div>


            <div class="box col-sm-4 anime-right">
                <div class="box__img">
                    <img src="{{ asset('front/images/latestPost2.png') }}" alt="" />
                </div>
                <div class="box__cont">
                    <p>Access your results in 72 hour</p>
                </div>
            </div>


        </div>
    </section>
    <script>
        function initMap() {
            var uluru = {lat: {{ $location->latitude }}, lng: {{ $location->longitude }}};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: '{{ $location->address }}'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1qKtXM-NvTrUxGfYpdkR3tCkGJMkIaq4&callback=initMap">
    </script>
@endsection
