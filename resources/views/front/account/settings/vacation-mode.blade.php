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
                        <li className="breadcrumb-item"><Link to="/account/settings">Settings</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Vacation Mode</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Vacation Mode
                    </div>
                    <div>

                        <form action="/account/settings/vacation-mode-success">
                            <div className="b-1-ddd p-5">

                                <div>
                                    Are you sure you want to put your account on vacation mode?
                                </div>

                                <div className="mt-15">
                                    <div className="note d-inline-block">
                                        Please note:
                                    </div>
                                    <ul className="list-style mt-2.5">
                                        <li>
                                            This will temporarily hide your account generally from our platform.
                                        </li>
                                        <li className="mt-1.5">
                                            You are allowed to go on vacation mode for as long as you want.
                                        </li>
                                        <li className="mt-1.5">
                                            You may switch off the vacation mode and put your account back online at anytime.
                                        </li>
                                        <li className="mt-1.5">
                                            Your deals and project will be hidden generally on the platform.
                                        </li>
                                        <li className="mt-1.5">
                                            Your current orders will not be affected.
                                        </li>
                                        <li className="mt-1.5">
                                            Your earnings will not be affected.
                                        </li>
                                        <li className="mt-1.5">
                                            Your refunds will not be affected.
                                        </li>
                                        <li className="mt-1.5">
                                            You may request for your payment withdrawal during this period.
                                        </li>
                                        <li className="mt-1.5">
                                            You will not be allowed to bid for projects during this period.
                                        </li>
                                        <li className="mt-1.5">
                                            You deals will not be purchasable during this period.
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>

                            <div className="pt-5 mt-5 bt-1-ddd">

                                <div className="floated-content">
                                    <button type="submit" className="btn btn-danger btn-sm pull-right ml-2.5">
                                        Turn on Vacation Mode
                                    </button>
                                    <Link to="/account/settings" className="btn btn-transparent-black btn-sm pull-right">
                                        Cancel
                                    </Link>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
