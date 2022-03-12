@extends('layouts.front.app')


@section('title')
    Favourites Projects - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Favourites - Posla">
    <meta name="keywords" content="favourites, user, Posla, Posla.com">
    <meta name="tags" content="favourites account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-favourites{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .project-mgmt{
            margin-bottom: 30px;
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
                        <li className="breadcrumb-item active" aria-current="page">Favourites</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Favourites (9)
                    </div>
                    <div>

                        <ul className="nav nav-tabs posla-tabs posla-tabs-2">
                            <li className="nav-item">
                                <Link to="/account/favourites/deals" className="nav-link">
                                    <div className="text-center">
                                        Deals 11
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/account/favourites/projects" className="nav-link active">
                                    <div className="text-center">
                                        Projects (3)
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    

                        <div className="project-list project-list-mini mt-5 row">


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                        </div>

                        

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
