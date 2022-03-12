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
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 5])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                <form action="/account/deals/create/1234/success">
                                    
                                    <input type="hidden" name="stage" value="publish">
                                    <div className="b-1-ddd">

                                        <div className="p-5">
                                            
                                            <div className="mx-auto mw-600 p-5 b-1-ddd">
                                                
                                                <div>
                                                    <div className="font-bold">
                                                        Show my deal to more buyers
                                                    </div>
                                                    <div className="text-fade">
                                                        This feature is optional. It allows your deal to shown more often, to a wider range of potential buyers.
                                                    </div>
                                                </div>
                                                <div className="mt-5">
                                                    <div className="pull-left mr-2.5">
                                                        <span className="fa fa-check-circle icon-green icon-20"></span>
                                                    </div>
                                                    <div className="overflow-hidden">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </div>
                                                </div>
                                                <div className="mt-2.5">
                                                    <div className="pull-left mr-2.5">
                                                        <span className="fa fa-check-circle icon-green icon-20"></span>
                                                    </div>
                                                    <div className="overflow-hidden">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </div>
                                                </div>
                                                <div className="mt-2.5">
                                                    <div className="pull-left mr-2.5">
                                                        <span className="fa fa-check-circle icon-green icon-20"></span>
                                                    </div>
                                                    <div className="overflow-hidden">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </div>
                                                </div>
                                            
                                            </div>

                                            <div className="mx-auto mw-600 mt-5">

                                                <div className="row">
                                                    <div className="col-sm-6">
                                                        <label className="checkbox-inline cursor-pointer d-block">
                                                            <input type="checkbox" name="boosted" className="mr-2.5 pull-left" value="1">
                                                            <div className="overflow-hidden">
                                                                Show my deal to more buyers
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div className="col-sm-6 text-right d-none d-sm-block">
                                                        <div className="text-blue font-20 font-bold">
                                                            $3 / month
                                                        </div>
                                                        <div className="text-fade text-small">
                                                            Invoice generated Monthly
                                                        </div>
                                                    </div>
                                                    <div className="col-sm-6 text-left d-block d-sm-none mt-5">
                                                        <div className="text-blue font-20 font-bold">
                                                            $3 / month
                                                        </div>
                                                        <div className="text-fade text-small">
                                                            Invoice generated Monthly
                                                        </div>
                                                    </div>
                                                </div>

                                                <div className="mt-30">
                                                    After expiration, your deal will no longer be “featured” but it will still be visible to potential buyers accross our platform.
                                                </div>

                                            </div>

                                        </div>
                                        
                                        
                                        <div className="p-15 mt-15 bt-1-ddd floated-content">
                                            <div className="pull-right">
                                                <Link to="/account/deals/create/1234/requirements" className="btn btn-transparent-black btn-sm icon-left">
                                                    <span className="fa fa-angle-left"></span>
                                                    Back
                                                </Link>
                                                <button type="submit" className="btn btn-blue btn-sm icon-right">
                                                    Publish
                                                    <span className="fa fa-check-circle"></span>
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
