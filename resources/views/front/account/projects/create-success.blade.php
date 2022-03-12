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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-projects{
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
                        <li className="breadcrumb-item"><Link to="/account/projects">Projects</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Create Project</li>
                    </ol>
                </div>
                
                <div className="section">
                    <div className="section-title">
                        Create Project
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-project-mgmt', ['active' => 0])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                <div className="page-alert page-alert-success">
                                    <span className="fa fa-check-circle"></span>
                                    <div className="pt-15">
                                        Project Created Successfully
                                    </div>
                                    <div>
                                        Your project has been successfully submitted to the admin for approval.
                                        A notification will be sent to you once approved or rejected.
                                        <br />
                                        Thank you.
                                    </div>
                                    <div className="mt-2.5">
                                        <div className="mw-300 mx-auto text-center">
                                            <div>
                                                <Link to="/account/projects" className="btn btn-blue">
                                                    My Projects
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
        </div>
    </div>

@endsection