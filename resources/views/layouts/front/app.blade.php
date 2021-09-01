<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Posla">
    <meta name="msapplication-TileColor" content="#0073B1">
    <meta name="msapplication-TileImage" content="{{ asset('/img/app/icons/favicon.png') }}">
    <meta name="theme-color" content="#0073B1">
    <meta property="og:url" content="{{ request()->url() }}"/>
    @yield('og')

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/img/app/icons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/app/icons/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all-font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout-fx-header-1.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout-fx-header-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout-fx-main-1.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout-fx-main-2.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout-fx-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout-front.css') }}" rel="stylesheet">
    @yield('css')
    
    
</head>
<body>
    
    <noscript id="jsc">
        <div>
            Please enable JavaScript in your browser.
            <span class="d-none d-sm-inline">
                Some functionality will not work if this is disabled.
                <a href="https://www.enable-javascript.com/" target="_blank">Read more</a>
            </span>
        </div>
        <div></div>
    </noscript>
    
    
    <div id="app">


        @include('layouts.front.header')
        
        @include('layouts.front.message-popup')
        
        <div class="main-content">
            @yield('content')
        </div>
        
    </div>


    @include('layouts.front.footer')
    
    
    <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/toastr.js') }}"></script>
    <script src="{{ asset('/js/all-font-awesome.min.js') }}"></script>
    <script src="{{ asset('/js/front.js') }}"></script>
    @yield('js')


</body>
</html>
