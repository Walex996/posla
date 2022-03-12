@extends('layouts.front.app')


@section('title')
    Change Password - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Change Password - Posla">
    <meta name="keywords" content="change password, user, Posla, Posla.com">
    <meta name="tags" content="change password account user posla posla.com">
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
                        <li className="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Change Password
                    </div>
                    <div>

                        <form action="">
                            <div className="b-1-ddd p-5 mw-400">

                                <div className="form-group">
                                    <label className="control-label">
                                        Old Password:
                                    </label>
                                    <input type="password" name="" className="form-control">
                                </div>

                                <div className="form-group">
                                    <label className="control-label">
                                        New Password:
                                    </label>
                                    <input type="password" name="" className="form-control">
                                </div>

                                <div className="form-group">
                                    <label className="control-label">
                                        Retype Password:
                                    </label>
                                    <input type="password" name="" className="form-control">
                                </div>
                            </div>

                            <div className="pt-5 mt-5 bt-1-ddd mw-400">

                                <div className="floated-content">
                                    <button type="submit" className="btn btn-blue btn-sm pull-right ml-2.5">
                                        Change Password
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
