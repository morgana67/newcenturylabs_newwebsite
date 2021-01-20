@php
    use Carbon\Carbon;
@endphp
@section('title'){{!isset($category) ? 'Blog' : $category->name}}@endsection
@section('description'){{!isset($category) ? 'Blog' : $category->name}}@endsection
@section('keywords'){{!isset($category) ? 'Blog' : $category->name}}@endsection

@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('/front/images/bnr-blog.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Blog</h2>
            </div>
        </div>
    </section>
    <section class="blogs-cont-area pt30">
        <div class="container">
            <div class="blogs__featured col-sm-8">
                @foreach($posts as $key => $post)
                    @php $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$post->created_at)@endphp
                    @if( ($key+1) % 3 != 0)
                        <div class="blogs__articles col-sm-12">
                            <div class="blogs__img col-sm-4">
                                <div class="blogs__imginner">
                                    <img style="width: 100%;" src="{{image($post->image,'-cropped')}}"
                                         alt="{{$post->title}}">
                                </div>
                            </div>
                            <div class="blogs__cont col-sm-8">
                                <h3>{{$post->title}}</h3>
                                <div class="dtl__postDay">
                                    <ul>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$date->format('g:i A')}}
                                        </li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$date->format('F d, Y')}}
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$post->excerpt}}</p>
                                <div class="dtl__postDayHover">
                                    <ul class="dtl__hoverList">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$date->format('g:i A')}}
                                        </li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$date->format('F d, Y')}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="blogs__readMore">
                                    <a href="{{route('post_detail',['slug' => $post->slug])}}">Read More >></a>
                                </div>
                                {{--                                <div class="blogs__commLike">--}}
                                {{--                                    <div class="blogs__like">--}}
                                {{--                                        <i class="fa fa-heart-o" aria-hidden="true"></i>0--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="blogs__comment">--}}
                                {{--                                        <i class="fa fa-comments-o" aria-hidden="true"></i>0--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    @else
                        <div class="blogs__articles col-sm-12 post__featured">
                            <div class="blogs__img col-sm-4">
                                <div class="blogs__imginner">
                                    <img src="{{image($post->image)}}" width="100%" alt="{{$post->title}}">
                                </div>
                            </div>
                            <div class="blogs__cont col-sm-8">
                                <h3>{{$post->title}}</h3>
                                <div class="dtl__postDay">
                                    <ul>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$date->format('g:i A')}}
                                        </li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$date->format('F d, Y')}}
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$post->excerpt}}</p>
                                <div class="blogs__readMore">
                                    <a href="{{route('post_detail',['slug' => $post->slug])}}">Read More >></a>
                                </div>
                                <!--
                                <div class="blogs__commLike">
                                    <div class="blogs__like">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>105
                                    </div>
                                    <div class="blogs__comment">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>35
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-4 blogs__sidebar">
                <div class="sidebar__srch">
                    <form action="">
                        <input type="text" name="q" value="{{request()->get('q')}}" class="form-control" placeholder="Search for...">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </form>
                </div>
                <div class="siderbar__category">
                    <h3>Categories</h3>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="{{route('blog',['slug' => $category->slug])}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="sidebar__posts">
                    <h3>Latest Posts</h3>
                    @foreach($latestPosts as $latestPost)
                        <div class="sidebar__postLinks">
                            <div class="sidebar__imgs">
                                <img src="{{image($latestPost->image,'-small')}}"
                                     alt="{{$latestPost->title}}">
                            </div>
                            <div class="sidebar__latest">
                                <h5>{{$latestPost->title}}</h5>
                                <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$latestPost->created_at)->format('g:i A')}}</p>
                                <a href="{{route('post_detail',['slug' => $latestPost->slug])}}">Read More >> </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
