@extends('layouts.front.app')


@section('title')
    Search
@endsection


@section('og')
    <meta name="description" content="Search - Posla">
    <meta name="keywords" content="Search, Posla, Posla.com">
    <meta name="tags" content="search posla posla.com">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div className="mb-5">
                    <div className="text-center">
                        <div className="font-20 font-bold">
                            Search Result (All)
                        </div>
                        <div className="font-12 text-fade">
                            (30 results found)
                        </div>
                        <div className="mt-2.5">
                            <button className="btn btn-transparent-black d-block d-md-none mx-auto btn-sm" data-toggle="modal" data-target="#filter">
                                <span className="fa fa-filter"></span>
                                Filter search result
                            </button>
                        </div>
                    </div>
                </div>

                <div className="section">
                    <div className="section-title floated-content">
                        Deals (10)
                        <Link to="/search/deals" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div className="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    <Link to="/search/deals" className="d-block text-center pt-2.5 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Deals (10)
                        <span className="fa fa-angle-right"></span>
                    </Link>
                </div>

                <div className="section">
                    <div className="section-title floated-content">
                        Projects (10)
                        <Link to="/search/projects" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div className="project-list project-list-wide">
                        @include('front.common.project')
                        @include('front.common.project')
                        @include('front.common.project')
                        @include('front.common.project')
                    </div>
                    <Link to="/search/projects" className="d-block text-center pt-2.5 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Projects (10)
                        <span className="fa fa-angle-right"></span>
                    </Link>
                </div>

                <div className="section">
                    <div className="section-title floated-content">
                        Freelancers (10)
                        <Link to="/search/freelancers" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div className="freelancers-list freelancers-list-double">
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                    </div>
                    <Link to="/search/freelancers" className="d-block text-center pt-2.5 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Freelancers (10)
                        <span className="fa fa-angle-right"></span>
                    </Link>
                </div>

            </div>
            
            <div className="col-lg-3 d-none d-lg-block">
                
                <div className="sticky-top">
                    <Link to="" className="posla-ad-space">
                        <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" className="dp-contain" alt="Ad">
                    </Link>

                    <Link to="" className="posla-ad-space">
                        <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" className="dp-contain" alt="Ad">
                    </Link>

                    <Link to="" className="posla-ad-space">
                        <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" className="dp-contain" alt="Ad">
                    </Link>
                </div>

            </div>

        </div>
    </div>

@endsection