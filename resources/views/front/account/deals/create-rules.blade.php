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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-deals{
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
                        <li className="breadcrumb-item"><Link to="/account/deals">Deals</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Create Deal</li>
                    </ol>
                </div>
                
                <div className="section">
                    <div className="section-title">
                        Create Deal
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 1])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                    <div className="b-1-ddd">

                                        <div className="p-5">
                                            @include('front.common.create-deal-rules')
                                        </div>

                                        <div className="p-15 mt-15 bt-1-ddd">
                                            <div className="row">
                                                <div className="col-sm-8 col-md-12 col-lg-8">
                                                    <label className="checkbox-inline">
                                                        <div className="pull-left">
                                                            <input type="checkbox" required checked>
                                                        </div>
                                                        <div className="overflow-hidden">
                                                            I agree that violating any of the rules above may lead to
                                                            my deal being canceled at any time.
                                                        </div>
                                                    </label>
                                                </div>
                                                <div className="col-sm-4 col-md-12 col-lg-4">
                                                    <div className="d-block d-sm-none d-md-block d-lg-none" style="height: 10px;"></div>
                                                    <Link to="/account/deals/create/1234/info" className="btn btn-blue btn-sm icon-right pull-right">
                                                        Proceed
                                                        <span className="fa fa-angle-right"></span>
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
