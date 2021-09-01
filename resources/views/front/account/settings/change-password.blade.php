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
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Change Password
                    </div>
                    <div>

                        <form action="">
                            <div class="b-1-ddd p-20 mw-400">

                                <div class="form-group">
                                    <label class="control-label">
                                        Old Password:
                                    </label>
                                    <input type="password" name="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                        New Password:
                                    </label>
                                    <input type="password" name="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                        Retype Password:
                                    </label>
                                    <input type="password" name="" class="form-control">
                                </div>
                            </div>

                            <div class="pt-20 mt-20 bt-1-ddd mw-400">

                                <div class="floated-content">
                                    <button type="submit" class="btn btn-blue btn-sm pull-right ml-10">
                                        Change Password
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
