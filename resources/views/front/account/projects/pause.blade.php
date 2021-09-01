@extends('layouts.front.app')


@section('title')
    1234 - Pause - Project - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Pause Project - Posla">
    <meta name="keywords" content="pause, project, user, Posla, Posla.com">
    <meta name="tags" content="pause project dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-projects{
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
                        <li class="breadcrumb-item"><a href="/account/projects">Projects</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pause Project</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title">
                        Pause Project - #1234
                    </div>
                    <div>

                        <div>
                            Are you sure you want to pause this project?
                        </div>

                        <div class="row mt-30">
                            <div class="col-sm-12">
                                <div class="project-list project-list-wide">
                                    @include('front.common.project')
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="note d-inline-block mt-20">
                                    Please note:
                                </div>
                                <ul class="list-style mt-10">
                                    <li>
                                        This action cannot be undone.
                                    </li>
                                    <li class="mt-5">
                                        Paused projects will no longer be active and visible to users on this platform.
                                    </li>
                                    <li class="mt-5">
                                        To keep the project active but private, please <a href="/account/projects/edit/1234/info" class="underline">edit the visibility</a> status of this project.
                                    </li>
                                    <li class="mt-5">
                                        Orders already attached to this project will not be affected.
                                    </li>
                                    <li class="mt-5">
                                        Current payments for "featured" ad project, will be paused.
                                    </li>
                                    <li class="mt-5">
                                        All pending refunds on this project will not be affected.
                                    </li>
                                    <li class="mt-5">
                                        Earnings acquired from this project will not be affected.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-20 pt-20 bt-1-ddd">

                            <form action="/account/projects" class="floated-content">
                                <button type="submit" class="btn btn-blue btn-sm pull-right ml-10">
                                    Pause Project
                                </button>
                                <a href="/account/projects" class="btn btn-transparent-black btn-sm pull-right">
                                    Cancel
                                </a>
                            </form>

                        </div>


                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
