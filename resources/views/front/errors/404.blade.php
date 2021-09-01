@extends('layouts.front.app')


@section('title')
    Page not found - Error 404
@endsection


@section('og')
    <meta name="description" content="Error 404 - Posla">
    <meta name="keywords" content="Error 404, Help, Posla, Posla.com">
    <meta name="tags" content="Error 404 help posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection



@section('content')
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Error 404</li>
            </ol>
        </div>

        
        <div class="page-alert mt-100">
            <span class="fa fa-unlink"></span>
            <div class="pt-15">
                404 - Page Not Found
            </div>
            <div class="text-333">
                Sorry, the page you are trying to access could not be found.
                If you feel this is an error from us, please <a href="/support/tickets/new" class="underline">report it to us</a>.
            </div>
            <div class="mt-10">
                <div class="mw-300 mx-auto text-center">
                    <div>
                        <a href="/" class="btn btn-orange">
                            Goto Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

@endsection
