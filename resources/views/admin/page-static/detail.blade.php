@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        ul li {
            list-style: none;
            margin: 0;
        }
    </style>
@stop

@section('page_title', 'Page Static')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-pages"></i>
        Page Static
    </h1>
@stop
@php
    $body = json_decode($page->body);
@endphp
@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.alert')
                <div class="panel panel-bordered">
                    <form role="form" class="form-edit-add" action="{{route('admin.page-static.detail',['code' => $page->code_page])}}"
                          method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="panel-body">
                            @if($page->code_page == 'home')
                                @include('admin.page-static.elements.home')
                            @else

                            @endif
                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop

@section('javascript')

@stop
