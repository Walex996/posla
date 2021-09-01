@extends('layouts.front.app')


@section('title')
    Create - Project - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Create Project - Posla">
    <meta name="keywords" content="create, project, user, Posla, Posla.com">
    <meta name="tags" content="create project dashboard user posla posla.com">
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
                        <li class="breadcrumb-item active" aria-current="page">Create Project</li>
                    </ol>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        Create Project
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-project-mgmt', ['active' => 0])
                        
                        <div class="tab-content">
                            <div class="tab-pane active">

                                <div class="page-alert page-alert-success">
                                    <span class="fa fa-check-circle"></span>
                                    <div class="pt-15">
                                        Project Created Successfully
                                    </div>
                                    <div>
                                        Your project has been successfully submitted to the admin for approval.
                                        A notification will be sent to you once approved or rejected.
                                        <br>
                                        Thank you.
                                    </div>
                                    <div class="mt-10">
                                        <div class="mw-300 mx-auto text-center">
                                            <div>
                                                <a href="{{route('account.projects')}}" class="btn btn-blue">
                                                    My Projects
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
        </div>
    </div>

@endsection
