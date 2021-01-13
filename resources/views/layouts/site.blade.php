<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--iPhone from zooming form issue-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>New Century Labs | About Us</title>
    <meta name="description"
          content="The very center of healthcare starts at the core fundamentals of diagnostic blood testing. When information about your body matters most to you, our goal is to help you access it so you can make informed decisions about your health. Our main goal is to he">
    <meta name="keywords" content="Blood tests, blood test results, disease, prevent disease"/>

    <link rel="icon" type="image/png" href="{{asset('front/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/colorized.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('front/plugin/toast/bootoast.css')}}">--}}
    <script src="{{asset('front/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrapValidator.min.js')}}"></script>
    @yield('css')
</head>
<body class="transition nav-plusminus slide-navbar slide-navbar--left">
    @include('layouts.header')
    <main id="page-content">
        @yield('content')
        @include('layouts.footer')
    </main>
    <div id="loading"></div>
    <script src="{{asset('front/js/css_browser_selector.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/viewportchecker.js')}}"></script>
    <script src="{{asset('front/js/kodeized.js')}}"></script>
{{--    <script src="{{asset('front/plugin/toast/bootoast.js')}}"></script>--}}
    <script src="{{asset('front/js/main.js')}}"></script>
    @yield('script')
</body>
</html>
