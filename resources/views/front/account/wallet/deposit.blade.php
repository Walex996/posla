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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-wallet{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            <div className="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item"><Link to="/account/wallet">Wallet</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">New Deposit</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        New Deposit
                    </div>
                    <div>

                        
                        
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
