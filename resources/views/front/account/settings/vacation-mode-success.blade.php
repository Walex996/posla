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

                        <div className="page-alert page-alert-success">
                            <span className="fa fa-check-circle"></span>
                            <div className="pt-15">
                                Vacation Mode Activated
                            </div>
                            <div>
                                Your account is now on vacation mode. You can turn this off whenever you deem fit.
                                Thank you.
                            </div>
                            <div className="mt-2.5">
                                <div className="mw-300 mx-auto text-center">
                                    <div>
                                        <Link to="/account" className="btn btn-blue">
                                            My Account
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

@endsection
