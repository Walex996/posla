@extends('layouts.front.app')


@section('title')
    Create - Deal - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Create Deal - Posla">
    <meta name="keywords" content="create, deal, user, Posla, Posla.com">
    <meta name="tags" content="create deal dashboard user posla posla.com">
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
                        <li class="breadcrumb-item active" aria-current="page">Create Deal</li>
                    </ol>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        Create Deal
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 5])
                        
                        <div class="tab-content">
                            <div class="tab-pane active">

                                <form action="{{route('deals.create.save.publish', $deal->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="stage" value="publish">
                                    <div class="b-1-ddd">

                                        <div class="p-20">
                                            
                                            <div class="mx-auto mw-600 p-20 b-1-ddd">
                                                
                                                <div>
                                                    <div class="font-bold">
                                                        Show my deal to more buyers
                                                    </div>
                                                    <div class="text-fade">
                                                        This feature is optional. It allows your deal to shown more often, to a wider range of potential buyers.
                                                    </div>
                                                </div>
                                                <div class="mt-20">
                                                    <div class="pull-left mr-10">
                                                        <span class="fa fa-check-circle icon-green icon-20"></span>
                                                    </div>
                                                    <div class="overflow-hidden">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </div>
                                                </div>
                                                <div class="mt-10">
                                                    <div class="pull-left mr-10">
                                                        <span class="fa fa-check-circle icon-green icon-20"></span>
                                                    </div>
                                                    <div class="overflow-hidden">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </div>
                                                </div>
                                                <div class="mt-10">
                                                    <div class="pull-left mr-10">
                                                        <span class="fa fa-check-circle icon-green icon-20"></span>
                                                    </div>
                                                    <div class="overflow-hidden">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </div>
                                                </div>
                                            
                                            </div>

                                            <div class="mx-auto mw-600 mt-20">

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label class="checkbox-inline cursor-pointer d-block">
                                                            <input type="checkbox" name="boosted" class="mr-10 pull-left" value="1">
                                                            <div class="overflow-hidden">
                                                                Show my deal to more buyers
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 text-right d-none d-sm-block">
                                                        <div class="text-blue font-20 font-bold">
                                                            $3 / month
                                                        </div>
                                                        <div class="text-fade text-small">
                                                            Invoice generated Monthly
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left d-block d-sm-none mt-20">
                                                        <div class="text-blue font-20 font-bold">
                                                            $3 / month
                                                        </div>
                                                        <div class="text-fade text-small">
                                                            Invoice generated Monthly
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-30">
                                                    After expiration, your deal will no longer be “featured” but it will still be visible to potential buyers accross our platform.
                                                </div>

                                            </div>

                                        </div>
                                        
                                        
                                        <div class="p-15 mt-15 bt-1-ddd floated-content">
                                            <div class="pull-right">
                                                <a href="{{route('deal.edit.requirement', $deal->id)}}" class="btn btn-transparent-black btn-sm icon-left">
                                                    <span class="fa fa-angle-left"></span>
                                                    Back
                                                </a>
                                                <button type="submit" class="btn btn-blue btn-sm icon-right">
                                                    Publish
                                                    <span class="fa fa-check-circle"></span>
                                                </button>
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