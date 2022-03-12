@extends('layouts.front.app')


@section('title')
    Search Freelancers
@endsection


@section('og')
    <meta name="description" content="Search Freelancers - Posla">
    <meta name="keywords" content="Search Freelancers, Posla, Posla.com">
    <meta name="tags" content="search freelancers posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            
            <div className="col-md-4 col-lg-3 d-none d-md-block">

                <div className="section sticky-top">
                    @include('front.common.filter-search')
                    @include('front.common.filter-freelancers')
                </div>

            </div>

            <div className="col-md-8 col-lg-6">


                <div className="modal" id="filter">
                    <div className="modal-dialog">
                        <div className="modal-content">
                            <div className="modal-header">
                                <h4 className="modal-title">Filter</h4>
                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div className="modal-body">
                                <div className="p-2.5">
                                    @include('front.common.filter-search')
                                    @include('front.common.filter-freelancers')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div className="mb-5">
                    <div className="text-center">
                        <div className="font-20 font-bold">
                            Search Result (Freelancers)
                        </div>
                        <div className="font-12 text-fade">
                            (10 freelancers)
                        </div>
                    </div>
                </div>

                <div className="section mb-1.5">
                    <div className="section-title floated-content">

                        <button className="btn btn-transparent-black d-block d-md-none pull-left btn-sm" data-toggle="modal" data-target="#filter">
                            <span className="fa fa-filter"></span>
                            Filter
                        </button>
                        
                        <div className="font-bold d-none d-md-inline mt-2.5 pull-left">
                            Showing 1 - 10 of 10
                        </div>

                        <form method="get" action="" className="pull-right">
                            <select className="form-control-md" onchange="this.form.submit()" style="width: 100px; padding: 0px !important;">
                                <option value="new" selected>Newest First</option>
                                <option value="old">Oldest First</option>
                                <option value="az">A-Z</option>
                                <option value="za">Z-A</option>
                                <option value="ratings_high_low">Ratings - High to Low</option>
                                <option value="ratings_low_high">Ratings - Low to High</option>
                            </select>
                        </form>

                    </div>

                    <div className="freelancer-list freelancer-list-wide">
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                    </div>
                </div>

                <div className="section">
                    //pagination here
                </div>

            </div>
            
            <div className="col-lg-3 d-none d-lg-block">
                
                <Link to="" className="posla-ad-space">
                    <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" className="dp-contain" alt="Ad">
                </Link>

                <div className="section pl-2.5 pr-2.5 sticky-top">
                    <div className="section-title">
                        Featured Freelancers
                    </div>
                    <div className="freelancer-list freelancer-list-mini">
                        @include('front.common.freelancer')
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection