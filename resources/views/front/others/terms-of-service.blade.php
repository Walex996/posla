@extends('layouts.front.app')


@section('title')
    Terms
@endsection


@section('og')
    <meta name="description" content="Terms - Posla">
    <meta name="keywords" content="Terms, Help, Posla, Posla.com">
    <meta name="tags" content="Terms help posla posla.com">
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
                <li className="breadcrumb-item active" aria-current="page">Terms</li>
            </ol>
        </div>

        <div className="section">

            <div style="height: 800px;"></div>

        </div>

    </div>

@endsection
