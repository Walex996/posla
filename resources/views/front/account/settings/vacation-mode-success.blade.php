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

                        <div class="page-alert page-alert-success">
                            <span class="fa fa-check-circle"></span>
                            <div class="pt-15">
                                Vacation Mode Activated
                            </div>
                            <div>
                                Your account is now on vacation mode. You can turn this off whenever you deem fit.
                                Thank you.
                            </div>
                            <div class="mt-10">
                                <div class="mw-300 mx-auto text-center">
                                    <div>
                                        <a href="/account" class="btn btn-blue">
                                            My Account
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
