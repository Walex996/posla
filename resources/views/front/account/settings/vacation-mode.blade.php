@extends('layouts.front.app')


@section('title')
    Vacation Mode - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Vacation Mode - Posla">
    <meta name="keywords" content="vacation mode, user, Posla, Posla.com">
    <meta name="tags" content="vacation mode account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-settings{
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
                        <li class="breadcrumb-item"><a href="/account/settings">Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vacation Mode</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Vacation Mode
                    </div>
                    <div>

                        <form action="/account/settings/vacation-mode-success">
                            <div class="b-1-ddd p-20">

                                <div>
                                    Are you sure you want to put your account on vacation mode?
                                </div>

                                <div class="mt-15">
                                    <div class="note d-inline-block">
                                        Please note:
                                    </div>
                                    <ul class="list-style mt-10">
                                        <li>
                                            This will temporarily hide your account generally from our platform.
                                        </li>
                                        <li class="mt-5">
                                            You are allowed to go on vacation mode for as long as you want.
                                        </li>
                                        <li class="mt-5">
                                            You may switch off the vacation mode and put your account back online at anytime.
                                        </li>
                                        <li class="mt-5">
                                            Your deals and project will be hidden generally on the platform.
                                        </li>
                                        <li class="mt-5">
                                            Your current orders will not be affected.
                                        </li>
                                        <li class="mt-5">
                                            Your earnings will not be affected.
                                        </li>
                                        <li class="mt-5">
                                            Your refunds will not be affected.
                                        </li>
                                        <li class="mt-5">
                                            You may request for your payment withdrawal during this period.
                                        </li>
                                        <li class="mt-5">
                                            You will not be allowed to bid for projects during this period.
                                        </li>
                                        <li class="mt-5">
                                            You deals will not be purchasable during this period.
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>

                            <div class="pt-20 mt-20 bt-1-ddd">

                                <div class="floated-content">
                                    <button type="submit" class="btn btn-danger btn-sm pull-right ml-10">
                                        Turn on Vacation Mode
                                    </button>
                                    <a href="/account/settings" class="btn btn-transparent-black btn-sm pull-right">
                                        Cancel
                                    </a>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
