@extends('layouts.front.app')


@section('title')
    Projects - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Projects - Posla">
    <meta name="keywords" content="projects, user, Posla, Posla.com">
    <meta name="tags" content="projects account user posla posla.com">
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
        .project-mgmt{
            margin-bottom: 30px;
        }
        .project-mgmt .project{
            /* margin-bottom: 0px; */
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
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Active Projects (6)
                        <a href="/account/projects/create" class="btn btn-blue btn-sm pull-right">Create New Project</a>
                    </div>
                    <div>

                        <ul class="nav nav-tabs posla-tabs posla-tabs-2">
                            <li class="nav-item">
                                <a href="/account/projects/" class="nav-link active">
                                    <div class="text-center">
                                        Active Projects (6)
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/projects/paused" class="nav-link">
                                    <div class="text-center">
                                        Paused Projects (3)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    
                        
                        <div class="project-list project-list-mini mt-20 row">

                            @foreach ($projects as $project)
                                <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                    @include('front.common.project')
                                    <div class="dropdown">
                                        <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                            {{-- Pending Approval --}}
                                            Status (Active)
                                        </label>
                                        <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                            <a class="dropdown-item" href="/project/12345678">
                                                Preview
                                            </a>
                                            <a class="dropdown-item" href="/account/projects/pause/1234">
                                                Pause
                                            </a>
                                            <a class="dropdown-item" href="/account/projects/edit/1234">
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="/account/projects/delete/1234">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="/project/12345678">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/projects/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="/account/projects/edit/1234">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/projects/delete/1234">
                                            Delete
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

@endsection
