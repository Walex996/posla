@extends('layouts.front.app')


@section('title')
    Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Account - Posla">
    <meta name="keywords" content="account, user, Posla, Posla.com">
    <meta name="tags" content="account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        @media screen and (min-width: 768px){
            .account-sidebar-dashboard{
                color: #FF940A !important;
                border-color: #FF940A !important;
            }
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">

                @include('front.common.account-sidebar')
                
            </div>
            
            <div class="d-none d-md-block col-12 col-md-8 col-lg-9">
                
                @include('front.common.account-dashboard')

            </div>
            
        </div>
    </div>

@endsection
