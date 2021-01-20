@extends('layouts.site')
@section('title'){{!empty($post->seo_title) ? $post->seo_title : $post->title}}@endsection
@section('description'){{$post->meta_description}}@endsection
@section('keywords'){{$post->meta_keywords}}@endsection
@section('content')
    <section class="blog-post-area">
        <div class="container">
            <div class="bpost__heading text-center col-sm-12 pt50">
                <h2>{{$post->title}}</h2>
            </div>
        </div>
    </section>
    <section class="blog-dtl-area">
        <div class="container">
            <div class="dtl__main col-sm-12">
                <div class="dtl__img">
                    <img src="{{image($post->image)}}" alt="{{$post->title}}">
                </div>
                <div class="dtl__postDay">
                    <ul>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{ date("h:m a", strtotime($post->created_at)) }}, </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("F d, Y", strtotime($post->created_at)) }} </li>
                    </ul>
                </div>
                <div class="dtl__content">
                    <div class="dtl__content">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-posted-area pt50 pb50" >
        <div class="container">
            <div class="row">
                @foreach ($similarPosts as $similarPost)
                <div class="posted-box col-sm-4">
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
        </div>
    </section>
@endsection
