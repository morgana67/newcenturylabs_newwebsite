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
    <title>{{setting('site.title')}} | @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="icon" type="image/png" href="{{asset('front/images/favicon.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700">
{{--    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('front/style.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('front/css/colorized.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">--}}
{{--    <script src="{{asset('front/js/jquery-2.2.4.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/js/bootstrapValidator.min.js')}}"></script>--}}

    <link rel="stylesheet" href="{{asset('front/css/app.css')}}">

    @yield('css')
    <style>
        .menu_mobile{
            display: block !important;
            position: fixed;
            width: 250px !important;
            top: 0;
            right: 0 !important;
            background-color: #333 !important;
            overflow-x: hidden;
            border: 1px solid #ececec;
            height: 100%;
            z-index: 99;
            box-shadow: 0 0 5px black;
        }
    </style>
</head>
<body class="transition nav-plusminus slide-navbar slide-navbar--left">
    @include('layouts.header')
    <main id="page-content">
        @yield('content')
        @include('layouts.footer')
    </main>
    <div id="loading"></div>
{{--    <script src="{{asset('front/js/css_browser_selector.js')}}"></script>--}}
{{--    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/js/viewportchecker.js')}}"></script>--}}
{{--    <script src="{{asset('front/js/kodeized.js')}}"></script>--}}
{{--    <script src="{{asset('front/js/main.js')}}"></script>--}}
    <script src="{{asset('front/js/app.js')}}"></script>
    @yield('script')

    <script>
        $('.navbar-toggle').on('click',function(){
            if($(this).hasClass('show_menu')){
                $(this).removeClass('show_menu');
                $(this).addClass('collapsed');
                $('#slidemenu').removeClass('menu_mobile');
                $('.navbar-header').css('transform','none');
                $('main#page-content').css('transform','none');

            }else{
                $(this).removeClass('collapsed');
                $(this).addClass('show_menu');
                $('#slidemenu').addClass('menu_mobile');
                $('.navbar-header').css('transform','translateX(-245px)');
                $('main#page-content').css('transform','translateX(-245px)');
            }
        })
    </script>
</body>
</html>
