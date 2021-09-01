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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Favourites</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Favourites (9)
                    </div>
                    <div>

                        <ul class="nav nav-tabs posla-tabs posla-tabs-2">
                            <li class="nav-item">
                                <a href="/account/favourites/deals" class="nav-link">
                                    <div class="text-center">
                                        Deals 11
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/favourites/projects" class="nav-link active">
                                    <div class="text-center">
                                        Projects (3)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    

                        <div class="project-list project-list-mini mt-20 row">


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                            </div>


                        </div>

                        

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
