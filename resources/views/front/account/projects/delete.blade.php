@extends('layouts.front.app')


@section('title')
    1234 - Delete - Project - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Delete Project - Posla">
    <meta name="keywords" content="delete, project, user, Posla, Posla.com">
    <meta name="tags" content="delete project dashboard user posla posla.com">
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
                        <li className="breadcrumb-item active" aria-current="page">Delete Projects</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title">
                        Delete Project - #1234
                    </div>
                    <div>

                        <div>
                            Are you sure you want to delete this project?
                        </div>

                        <div className="row mt-30">
                            <div className="col-sm-12">
                                <div className="project-list project-list-wide">
                                    @include('front.common.project')
                                </div>
                            </div>

                            <div className="col-sm-12">
                                <div className="note d-inline-block mt-5">
                                    Please note:
                                </div>
                                <ul className="list-style mt-2.5">
                                    <li>
                                        This action cannot be undone.
                                    </li>
                                    <li className="mt-1.5">
                                        Deleted projects cannot be recovered.
                                    </li>
                                    <li className="mt-1.5">
                                        Orders already attached to this project, will not be deleted.
                                    </li>
                                    <li className="mt-1.5">
                                        Current payments for "featured" ad project, will be canceled without refund.
                                    </li>
                                    <li className="mt-1.5">
                                        All pending refunds on this project, will be canceled.
                                    </li>
                                    <li className="mt-1.5">
                                        Earnings acquired from this project, can still be withdrawn.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div className="mt-5 pt-5 bt-1-ddd">

                            <form action="/account/projects" className="floated-content">
                                <button type="submit" className="btn btn-danger btn-sm pull-right ml-2.5">
                                    Delete Project
                                </button>
                                <Link to="/account/projects" className="btn btn-transparent-black btn-sm pull-right">
                                    Cancel
                                </Link>
                            </form>

                        </div>


                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
