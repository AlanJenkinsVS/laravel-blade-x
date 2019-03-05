@extends('layouts.app')

@section('title', 'Welcome')

@php
$message = "This is my blade error message component";
@endphp

@section('content')
<product-list url="/api/">
    
    <produc-tcard>
        <head></head>

        <img src="" alt="">

        <price-rrp>
        </price-rrp>
    </produc-tcard>
    
</vs-dasbhoard>

    <vs-alert type="danger">
    </my-alert>

    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection
