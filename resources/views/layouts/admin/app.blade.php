<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-TileColor" content="#0073B1">
        <meta name="msapplication-TileImage" content="{{ asset('/img/app/icons/favicon.png')}}">
        <meta name="theme-color" content="#0073B1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('og')
        
        <title>@yield('title') - Posla</title>

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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

        <link href="{{ asset('/components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/all-font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
        <link href="{{ asset('/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/toastr.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/select2.min.css')}}"/>
        <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/layout-admin.css') }}">
        @yield('css')

    </head>
    
    <body class="hold-transition skin-yellow sidebar-mini fixed">

        <noscript>
            <p class="alert alert-danger">
                You need to turn on your javascript. Some functionality will not work if this is disabled.
                <a href="https://www.enable-javascript.com/" target="_blank">Read more</a>
            </p>
        </noscript>
        
        <div class="wrapper">
    
            @include('layouts.admin.header')
            @include('layouts.admin.sidebar')


            <div class="content-wrapper">
                <div class="body-wrapper">
                    @yield('content')
                </div>
            </div>

            @include('layouts.admin.footer')

        </div>

        <script src="{{ asset('/components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('/components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('/js/demo.js') }}"></script>        
        <script src="{{asset('/js/select2.min.js')}}"></script>
        <script src="{{ asset('/js/toastr.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="popover"]').popover();
                toastr.options = {
                    timeOut: 5000,
                    "closeButton": true
                };
            });
        </script>

        @yield('js')

    </body>
</html>