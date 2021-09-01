@extends('layouts.front.app')


@section('title')
    New Deposit - Wallet - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="New Wallet Deposit - Posla">
    <meta name="keywords" content="new, deposit, wallet, user, Posla, Posla.com">
    <meta name="tags" content="new deposit wallet account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-wallet{
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
                        <li class="breadcrumb-item"><a href="/account/wallet">Wallet</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Deposit</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        New Deposit
                    </div>
                    <div>

                        
                        
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
