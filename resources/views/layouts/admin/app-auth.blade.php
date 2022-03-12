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
        
        <title>@yield('title') - Posla</title>

        <link rel="apple-touch-icon" sizes="57x57" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" to="{{ asset('/img/app/icons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" to="{{ asset('/img/app/icons/favicon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" to="https://fonts.gstatic.com">
        <link to="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

        <link to="{{ asset('/components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link to="{{ asset('/css/all-font-awesome.min.css') }}" rel="stylesheet">
        <link to="{{ asset('/components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link to="{{ asset('/css/default.css') }}" rel="stylesheet">
        <link to="{{ asset('/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        {/*!! sticky-top */}
        <link rel="stylesheet" to="{{ asset('/css/AdminLTE.min.css') }}" type="text/css" />
        <link rel="stylesheet" to="{{ asset('/css/all-skins.min.css') }}" type="text/css" />
        <link rel="stylesheet" to="{{ asset('/css/toastr.css') }}" type="text/css" />
        <link rel="stylesheet" to="{{asset('/css/select2.min.css')}}" type="text/css" />
        <link rel="stylesheet" to="{{ asset('/css/layout.css') }}" type="text/css" />
        <link rel="stylesheet" to="{{ asset('/css/layout-admin.css') }}" type="text/css" />

        @yield('css')

    </head>
    
    <body className="">
        <noscript>
            <p className="alert alert-danger">
                You need to turn on your javascript. Some functionality will not work if this is disabled.
                <Link to="https://www.enable-javascript.com/" target="_blank">Read more</Link>
            </p>
        </noscript>
        
        @yield('content')

        <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script src="{{ asset('js/demo.js') }}"></script>        
        <script src="{{asset('js/select2.min.js')}}"></script>
        <script src="{{ asset('js/toastr.js') }}"></script>

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