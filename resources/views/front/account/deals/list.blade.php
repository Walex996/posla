@extends('layouts.front.app')


@section('title')
    Deals - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Deals - Posla">
    <meta name="keywords" content="deals, user, Posla, Posla.com">
    <meta name="tags" content="deals account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-deals{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .deal-mgmt{
            margin-bottom: 30px;
        }
        .deal-mgmt .deal{
            margin-bottom: 0px;
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
                        <li className="breadcrumb-item active" aria-current="page">Deals</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Active Deals (6)
                        <Link to="/account/deals/create" className="btn btn-blue btn-sm pull-right">Create New Deal</Link>
                    </div>
                    <div>

                        <ul className="nav nav-tabs posla-tabs posla-tabs-2">
                            <li className="nav-item">
                                <Link to="/account/deals/" className="nav-link active">
                                    <div className="text-center">
                                        Active Deals (6)
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/account/deals/paused" className="nav-link">
                                    <div className="text-center">
                                        Paused Deals (3)
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    

                        <div className="deal-list deal-list-mini mt-5 row">
                            
                            <div className="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        Pending Approval
                                        {{-- Active --}}
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/pause/1234">
                                            Pause
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/delete/1234">
                                            Delete
                                        </Link>
                                    </div>
                                </div>
                            </div>
                            

                            <div className="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/pause/1234">
                                            Pause
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/delete/1234">
                                            Delete
                                        </Link>
                                    </div>
                                </div>
                            </div>


                            <div className="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/pause/1234">
                                            Pause
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/delete/1234">
                                            Delete
                                        </Link>
                                    </div>
                                </div>
                            </div>


                            <div className="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        Pending Approval
                                        {{-- Active --}}
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/pause/1234">
                                            Pause
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/delete/1234">
                                            Delete
                                        </Link>
                                    </div>
                                </div>
                            </div>


                            <div className="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/pause/1234">
                                            Pause
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/delete/1234">
                                            Delete
                                        </Link>
                                    </div>
                                </div>
                            </div>


                            <div className="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div className="dropdown">
                                    <label className="label label-fff label-sm mr-1.5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" className="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <Link className="dropdown-item" to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/pause/1234">
                                            Pause
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/edit/1234">
                                            Edit
                                        </Link>
                                        <Link className="dropdown-item" to="/account/deals/delete/1234">
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