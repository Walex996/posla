@extends('layouts.front.app')


@section('title')
    Username - Profile
@endsection


@section('og')
    <meta name="description" content="Profile - Posla">
    <meta name="keywords" content="account, profile, user, Posla, Posla.com">
    <meta name="tags" content="account profile user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-profile{
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
                        <li className="breadcrumb-item"><Link to="/">Account</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        My Profile
                        <Link to="/account/profile/edit" className="btn btn-blue btn-sm pull-right">Edit Profile</Link>
                    </div>
                    <div>

                        <div className="row">
                            <div className="col-sm-6 mb-30">

                                <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Basic Information
                                </div>
                                <div className="b-1-ddd bt-none">
                                    <div className="text-left-right text-left-right-40-60">
                                        <div className="bg-eee">
                                            <div>
                                                <span className="fa fa-user"></span>
                                                <div className="overflow-hidden">
                                                    Name:
                                                </div>
                                            </div>
                                            <div>
                                                Olawale Lawal
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-user-circle"></span>
                                                <div className="overflow-hidden">
                                                    Username:
                                                </div>
                                            </div>
                                            <div>
                                                username
                                            </div>
                                        </div>
                                        <div className="bg-eee">
                                            <div>
                                                <span className="fa fa-envelope"></span>
                                                <div className="overflow-hidden">
                                                    Email Address:
                                                </div>
                                            </div>
                                            <div>
                                               emailaddress@emaiw.ewfwe
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-phone-square"></span>
                                                <div className="overflow-hidden">
                                                    Phone:
                                                </div>
                                            </div>
                                            <div>
                                                080987676565
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div className="col-sm-6 mb-30">

                                <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Additional Information
                                </div>
                                <div className="b-1-ddd bt-none">
                                    <div className="text-left-right text-left-right-40-60">
                                        <div className="bg-eee">
                                            <div>
                                                <span className="fa fa-flag"></span>
                                                <div className="overflow-hidden">
                                                    Country:
                                                </div>
                                            </div>
                                            <div>
                                                Nigeria
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-circle"></span>
                                                <div className="overflow-hidden">
                                                    Gender:
                                                </div>
                                            </div>
                                            <div>
                                                Male
                                            </div>
                                        </div>
                                        <div className="bg-eee">
                                            <div>
                                                <span className="fa fa-calendar"></span>
                                                <div className="overflow-hidden">
                                                    Date of Birth:
                                                </div>
                                            </div>
                                            <div>
                                                Dec 25, 2021
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div className="col-sm-6 mb-30">

                                <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Description
                                </div>
                                <div className="b-1-ddd bt-none">
                                    <div className="p-5">
                                        <div className="text-fade">
                                            Short Description:
                                        </div>
                                        <div className="mt-1.5">
                                            Frontend Developer with expecience in UIUX & Graphcis Design
                                        </div>
                                        <div className="text-fade mt-25">
                                            Long Description :
                                        </div>
                                        <div className="mt-1.5 text-justify">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div className="col-sm-6 mb-30">

                                <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Languages
                                </div>
                                <div className="b-1-ddd bt-none">
                                    <div className="text-left-right text-left-right-40-60">
                                        <div className="bg-eee">
                                            <div>
                                                <span className="fa fa-book"></span>
                                                <div className="overflow-hidden">
                                                    English
                                                </div>
                                            </div>
                                            <div>
                                                Fluent
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-book"></span>
                                                <div className="overflow-hidden">
                                                    French
                                                </div>
                                            </div>
                                            <div>
                                                Average
                                            </div>
                                        </div>
                                        <div className="bg-eee">
                                            <div>
                                                <span className="fa fa-book"></span>
                                                <div className="overflow-hidden">
                                                    Spanish
                                                </div>
                                            </div>
                                            <div>
                                                Average
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="p-2.5 pl-15 pr-15 mt-30 font-bold bg-blue text-fff">
                                    Skillset
                                </div>
                                <div className="b-1-ddd bt-none">
                                    <div className="p-15 pt-5 item-labels item-labels-md item-labels-tags-all">
                                        
                                        <div className="item-labels-tags">
                                            Skills 1
                                        </div>
                                        
                                        <div className="item-labels-tags">
                                            Skills 1
                                        </div>

                                        <div className="item-labels-tags">
                                            Skills 1
                                        </div>

                                        <div className="item-labels-tags">
                                            Skills 1
                                        </div>

                                        <div className="item-labels-tags">
                                            Skills 1
                                        </div>

                                        <div className="item-labels-tags">
                                            Skills 1
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
