@extends('layouts.front.app')


@section('title')
    Paused Projects - Account - Firstname Lastname
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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
                        <li className="breadcrumb-item active" aria-current="page">Paused</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Paused Projects (3)
                        <Link to="/account/projects/create" className="btn btn-orange btn-sm pull-right hover-bg-orange">Create New Project</Link>
                    </div>
                    <div>

                        <ul className="nav nav-tabs posla-tabs posla-tabs-2">
                            <li className="nav-item">
                                <Link to="/account/projects/" className="nav-link">
                                    <div className="text-center">
                                        Active Projects (6)
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/account/projects/paused" className="nav-link active">
                                    <div className="text-center">
                                        Paused Projects (3)
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    
                        
                        <div className="project-list project-list-mini mt-5 row">


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        Paused
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/project/c1d00230-a423-4b84-a121-7105239ff8d8678">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item cursor-pointer" onclick="event.preventDefault(); document.getElementById('resume-form').submit();">
                                            Resume
                                        </Link>
                                        <form id="resume-form" action="" method="POST" className="d-none">
                                            @csrf
                                            {{-- hidden input with project id --}}
                                        </form>
                                        <Link className="dropdown-item" to="/account/projects/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/projects/delete/1234">
                                            Delete
                                        </Link>
                                    </div>
                                </div>
                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        Paused
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/project/c1d00230-a423-4b84-a121-7105239ff8d8678">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item cursor-pointer" onclick="event.preventDefault(); document.getElementById('resume-form').submit();">
                                            Resume
                                        </Link>
                                        <form id="resume-form" action="" method="POST" className="d-none">
                                            @csrf
                                            {{-- hidden input with project id --}}
                                        </form>
                                        <Link className="dropdown-item" to="/account/projects/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/projects/delete/1234">
                                            Delete
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
