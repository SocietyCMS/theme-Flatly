@extends('layouts.master')

@section('title')
    {{ $content->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $content->meta_title}}" />
    <meta name="description" content="{{ $content->meta_description }}" />
@stop

@section('content')
    <div class="row">
        <div class="text-center article-title">
            <h1>{{ $content->title }}</h1>
        </div>
        {!! $content->body !!}
    </div>
@stop
