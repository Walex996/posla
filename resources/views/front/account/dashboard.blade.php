@extends('layouts.front.app')


@section('title')
    Dashboard - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Account Dashboard - Posla">
    <meta name="keywords" content="account, dashboard, user, Posla, Posla.com">
    <meta name="tags" content="account dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-dashboard{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>

                @include('front.common.account-dashboard')

            </div>
        </div>
    </div>

@endsection
