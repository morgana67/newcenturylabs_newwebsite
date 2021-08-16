@extends('layouts.site')
@section('title'){{!empty($post->seo_title) ? $post->seo_title : $post->title}}@endsection
@section('description'){{$post->meta_description}}@endsection
@section('keywords'){{$post->meta_keywords}}@endsection
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{str_replace('\\', '/', image($post->image))}}'); background-position: 0 30%; background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2 style="padding: 0 10%">{{$post->title}}</h2>
            </div>
        </div>
    </section>

    <section class="blog-dtl-area pt30">
        <div class="container">
            <div class="dtl__main col-sm-12">
                <div class="dtl__postDay">
                    <ul>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{ date("h:m a", strtotime($post->created_at)) }}, </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("F j, Y", strtotime($post->created_at)) }} </li>
                    </ul>
                </div>
                <div class="dtl__content">
                    <object class="dtl__content">
                        {!! $post->body !!}
                    </object>
                </div>
                <div class="text-center" style="background-color: #f7f7f7; padding: 18px">
                    <h3 style="font-weight: bold">Talk to Our Medical Doctors for just $26.00<br>Order your Blood Tests from New Century Labs&nbsp;</h3>
                    <p style="font-size: 14px; font-weight: 500">Don't Just Think You're Healthy, Know You're Healthy.<br>Information about "YOU" on Demand</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-posted-area pb50 container">
        <hr style="margin: 20px 0">
        <div class="row">
                @foreach ($similarPosts as $similarPost)
                <div class="posted-box col-sm-4 mt20">
                    <div class="posted__img">
                        <img src="{{ image($similarPost->image,'-medium') }}" alt="{{$similarPost->title}}" />
                        <div class="posted__hover">
                            <a href="{{route('post_detail',['slug' => $similarPost->slug])}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="posted__cont">
                        <div class="dtl__postDay">
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{ date("h:m a", strtotime($similarPost->created_at)) }} </li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ date("F d, Y", strtotime($similarPost->created_at)) }} </li>
                            </ul>
                            <h3><a href="{{route('post_detail',['slug' => $similarPost->slug])}}">{{$similarPost->title}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
@endsection
