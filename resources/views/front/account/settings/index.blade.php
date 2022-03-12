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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-settings{
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
                        <li className="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Account Settings
                    </div>
                    <div>

                        <div className="row">
                            <div className="col-sm-6 col-md-12 col-lg-6">

                                
                                <div className="b-1-ddd mt-2.5">
                                    <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                        Edit Profile
                                    </div>
                                    <div className="p-5">
                                        Update your account information such as profile picture, name, description, and others.
                                        <div className="mt-2.5">
                                            <Link to="/account/profile/edit" className="btn btn-blue btn-sm icon-right">
                                                Continue
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </div>
                                </div>


                                <div className="b-1-ddd mt-30">
                                    <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                        Change Password
                                    </div>
                                    <div className="p-5">
                                        Change your account login password
                                        with a few clicks
                                        <div className="mt-2.5">
                                            <Link to="/account/settings/change-password" className="btn btn-blue btn-sm icon-right">
                                                Continue
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div className="col-sm-6 col-md-12 col-lg-6">
                                
                                <div className="mt-30 d-block d-sm-none d-md-block d-lg-none"></div>

                                <div className="b-1-ddd mt-2.5">
                                    <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                        Withdrawal Information
                                    </div>
                                    <div className="p-5">
                                        View & Manage your withdrawal information.
                                        This withdrawal information will be used as the payment method & recipient information for all your withdrawals.
                                        <div className="mt-2.5">
                                            <Link to="/account/settings/withdrawal-settings" className="btn btn-blue btn-sm icon-right">
                                                Continue
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr />

                        <div className="row">
                            <div className="col-sm-6 col-md-12 col-lg-6">

                                <div className="b-1-ddd">
                                    <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                        Vacation Mode
                                    </div>
                                    <div className="p-5">
                                        Want to put your account on hold? It’s easy. This will temporarily hide your deals, projects, and freelancer account from the entire public; until you reactivate your account, with just a click.
                                        <div className="mt-2.5">
                                            <Link to="/account/settings/vacation-mode" className="btn btn-danger btn-sm icon-right">
                                                Continue
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
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
