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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Deals</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Active Deals (6)
                        <a href="/account/deals/create" class="btn btn-blue btn-sm pull-right">Create New Deal</a>
                    </div>
                    <div>

                        <ul class="nav nav-tabs posla-tabs posla-tabs-2">
                            <li class="nav-item">
                                <a href="/account/deals/" class="nav-link active">
                                    <div class="text-center">
                                        Active Deals (6)
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/deals/paused" class="nav-link">
                                    <div class="text-center">
                                        Paused Deals (3)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    

                        <div class="deal-list deal-list-mini mt-20 row">
                            @forelse ($deals as $deal)
                            <div class="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal', ['deal' => $deal])
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        Pending Approval
                                        {{-- Active --}}
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="{{route('front.deal.detail', $deal->id)}}">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="{{route('deal.edit.rule', $deal->id)}}">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/delete/1234">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse


                            <div class="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/edit/1234">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/delete/1234">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/edit/1234">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/delete/1234">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        Pending Approval
                                        {{-- Active --}}
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/edit/1234">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/delete/1234">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/edit/1234">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/delete/1234">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-4 deal-mgmt">
                                @include('front.common.deal')
                                <div class="dropdown">
                                    <label class="label label-fff label-sm mr-5 pull-right" style="margin-top: 7px;">
                                        {{-- Pending Approval --}}
                                        Active
                                    </label>
                                    <div id="navbarDropdown" class="nav-link bg-blue dropdown-toggle b-1-blue text-fff" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: -20px;">
                                        <a class="dropdown-item" href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f">
                                            Preview
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/pause/1234">
                                            Pause
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/edit/1234">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="/account/deals/delete/1234">
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