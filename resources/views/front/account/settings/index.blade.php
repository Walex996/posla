@extends('layouts.front.app')


@section('title')
    Settings - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Settings - Posla">
    <meta name="keywords" content="settings, user, Posla, Posla.com">
    <meta name="tags" content="settings account user posla posla.com">
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
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Account Settings
                    </div>
                    <div>

                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">

                                
                                <div class="b-1-ddd mt-10">
                                    <div class="bb-1-ddd font-bold pr-20 pl-20 pt-5 pb-5 bg-eee">
                                        Edit Profile
                                    </div>
                                    <div class="p-20">
                                        Update your account information such as profile picture, name, description, and others.
                                        <div class="mt-10">
                                            <a href="/account/profile/edit" class="btn btn-blue btn-sm icon-right">
                                                Continue
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="b-1-ddd mt-30">
                                    <div class="bb-1-ddd font-bold pr-20 pl-20 pt-5 pb-5 bg-eee">
                                        Change Password
                                    </div>
                                    <div class="p-20">
                                        Change your account login password
                                        with a few clicks
                                        <div class="mt-10">
                                            <a href="/account/settings/change-password" class="btn btn-blue btn-sm icon-right">
                                                Continue
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-6">
                                
                                <div class="mt-30 d-block d-sm-none d-md-block d-lg-none"></div>

                                <div class="b-1-ddd mt-10">
                                    <div class="bb-1-ddd font-bold pr-20 pl-20 pt-5 pb-5 bg-eee">
                                        Withdrawal Information
                                    </div>
                                    <div class="p-20">
                                        View & Manage your withdrawal information.
                                        This withdrawal information will be used as the payment method & recipient information for all your withdrawals.
                                        <div class="mt-10">
                                            <a href="/account/settings/withdrawal-settings" class="btn btn-blue btn-sm icon-right">
                                                Continue
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">

                                <div class="b-1-ddd">
                                    <div class="bb-1-ddd font-bold pr-20 pl-20 pt-5 pb-5 bg-eee">
                                        Vacation Mode
                                    </div>
                                    <div class="p-20">
                                        Want to put your account on hold? It’s easy. This will temporarily hide your deals, projects, and freelancer account from the entire public; until you reactivate your account, with just a click.
                                        <div class="mt-10">
                                            <a href="/account/settings/vacation-mode" class="btn btn-danger btn-sm icon-right">
                                                Continue
                                                <span class="fa fa-angle-right"></span>
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
    </div>

@endsection
