@extends('layouts.front.app')


@section('title')
    Project Bids - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Project Bids - Posla">
    <meta name="keywords" content="project bids, account, user, Posla, Posla.com">
    <meta name="tags" content="project bids account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-project-bids{
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
                        <li className="breadcrumb-item active" aria-current="page">Project Bids</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        My Project Bids
                    </div>
                    <div>

                        <ul className="nav nav-tabs posla-tabs posla-tabs-3">
                            <li className="nav-item">
                                <Link to="/account/project-bids/" className="nav-link active">
                                    <div className="text-center">
                                        Ongoing
                                        <span className="d-none d-sm-inline d-md-none d-lg-inline">
                                            Biddings
                                        </span>
                                        (8)
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/account/project-bids/accepted" className="nav-link">
                                    <div className="text-center">
                                        Accepted
                                        <span className="d-none d-sm-inline d-md-none d-lg-inline">
                                            Biddings
                                        </span>
                                        (3)
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/account/project-bids/rejected" className="nav-link">
                                    <div className="text-center">
                                        Rejected
                                        <span className="d-none d-sm-inline d-md-none d-lg-inline">
                                            Biddings
                                        </span>
                                        (14)
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    
                        
                        <div className="project-list project-list-mini mt-5 row">


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div className="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div className="p-2.5 b-1-ddd bg-blue text-fff">
                                    <Link className="btn btn-fff text-333 btn-xs mt-0 mr-1.5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span className="far fa-circle bg-333"></span>
                                        View Proposal
                                    </Link>
                                    My Proposal: $550
                                </div>

                                <div className="modal" id="proposal-1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <h4 className="modal-title">Proposal</h4>
                                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div className="modal-body">
                                                <div className="p-5">
                                                    
                                                    <div className="">
                                                        Proposal price:
                                                        <div className="note font-bold font-16 pt-3 pb-3 pr-2.5 pl-2.5 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr className="mt-5 mb-5">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div className="text-fade line-height-20 mt-1.5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
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
        </div>
    </div>

@endsection
