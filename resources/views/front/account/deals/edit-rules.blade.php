@extends('layouts.front.app')


@section('title')
    Edit - Deal - Account
@endsection


@section('og')
    <meta name="description" content="Edit Deal - Posla">
    <meta name="keywords" content="edit, deal, user, Posla, Posla.com">
    <meta name="tags" content="edit deal dashboard user posla posla.com">
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
                        <li class="breadcrumb-item"><a href="/account/deals">Deals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Deal</li>
                    </ol>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        Edit Deal
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 1])
                        
                        <div class="tab-content">
                            <div class="tab-pane active">

                                <form action="/account/deals/edit/1234/info">
                                    
                                    <div class="b-1-ddd">

                                        <div class="p-20">
                                            @include('front.common.create-deal-rules')
                                        </div>

                                        <div class="p-15 mt-15 bt-1-ddd">
                                            <div class="row">
                                                <div class="col-sm-8 col-md-12 col-lg-8">
                                                    <label class="checkbox-inline">
                                                        <div class="pull-left">
                                                            <input type="checkbox" required checked>
                                                        </div>
                                                        <div class="overflow-hidden">
                                                            I agree that violating any of the rules above may lead to
                                                            my deal being canceled at any time.
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-4 col-md-12 col-lg-4">
                                                    <div class="d-block d-sm-none d-md-block d-lg-none" style="height: 10px;"></div>
                                                    <button type="submit" class="btn btn-blue btn-sm icon-right pull-right">
                                                        Proceed
                                                        <span class="fa fa-angle-right"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
