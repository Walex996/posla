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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project Bids</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        My Project Bids
                    </div>
                    <div>

                        <ul class="nav nav-tabs posla-tabs posla-tabs-3">
                            <li class="nav-item">
                                <a href="/account/project-bids/" class="nav-link">
                                    <div class="text-center">
                                        Ongoing
                                        <span class="d-none d-sm-inline d-md-none d-lg-inline">
                                            Biddings
                                        </span>
                                        (8)
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/project-bids/accepted" class="nav-link active">
                                    <div class="text-center">
                                        Accepted
                                        <span class="d-none d-sm-inline d-md-none d-lg-inline">
                                            Biddings
                                        </span>
                                        (3)
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/project-bids/rejected" class="nav-link">
                                    <div class="text-center">
                                        Rejected
                                        <span class="d-none d-sm-inline d-md-none d-lg-inline">
                                            Biddings
                                        </span>
                                        (14)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    
                        
                        <div class="project-list project-list-mini mt-20 row">


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-12 col-lg-6 project-mgmt">
                                @include('front.common.project')

                                <div class="p-10 b-1-ddd bg-blue text-fff">
                                    <a class="btn btn-fff text-333 btn-xs mt-0 mr-5 pull-right" data-toggle="modal" data-target="#proposal-1">
                                        <span class="far fa-circle bg-333"></span>
                                        View Proposal
                                    </a>
                                    My Proposal: $550
                                </div>

                                <div class="modal" id="proposal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Proposal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-20">
                                                    
                                                    <div class="">
                                                        Proposal price:
                                                        <div class="note font-bold font-16 pt-3 pb-3 pr-10 pl-10 d-inline">
                                                            $550
                                                        </div>
                                                    </div>

                                                    <hr class="mt-20 mb-20">

                                                    <div>
                                                        Proposal Message:
                                                    </div>

                                                    <div class="text-fade line-height-20 mt-5">
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
