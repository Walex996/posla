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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection



@section('content')
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/">Home</Link></li>
                <li className="breadcrumb-item active" aria-current="page">Error 404</li>
            </ol>
        </div>

        
        <div className="page-alert mt-2.50">
            <span className="fa fa-unlink"></span>
            <div className="pt-15">
                404 - Page Not Found
            </div>
            <div className="text-333">
                Sorry, the page you are trying to access could not be found.
                If you feel this is an error from us, please <Link to="/support/tickets/new" className="underline">report it to us</Link>.
            </div>
            <div className="mt-2.5">
                <div className="mw-300 mx-auto text-center">
                    <div>
                        <Link to="/" className="btn btn-orange">
                            Goto Homepage
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

@endsection
