@php
$message = "This is my blade error message component";
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <meta name="description" content="This is the AMP Boilerplate.">
        <vs-amp-scripts />
        <vs-page-css />
        <vs-page-fonts />
        <vs-amp-boilerplate />
        <link rel="canonical" href="{{ Request::url() }}">
        <title>Laravel - @yield('title')</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <vs-page-slither-banners />

            <div class="content">
              @yield('content')
            </div>
        </div>

        <vs-page-footer />
    </body>
</html>
