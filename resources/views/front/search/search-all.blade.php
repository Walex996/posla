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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-lg-3 d-none d-md-block">

                <div class="section sticky-top">
                    @include('front.common.filter-search')
                </div>

            </div>

            <div class="col-md-8 col-lg-6">


                <div class="modal" id="filter">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Filter</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="p-10">
                                    @include('front.common.filter-search')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-20">
                    <div class="text-center">
                        <div class="font-20 font-bold">
                            Search Result (All)
                        </div>
                        <div class="font-12 text-fade">
                            (30 results found)
                        </div>
                        <div class="mt-10">
                            <button class="btn btn-transparent-black d-block d-md-none mx-auto btn-sm" data-toggle="modal" data-target="#filter">
                                <span class="fa fa-filter"></span>
                                Filter search result
                            </button>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="section-title floated-content">
                        Deals (10)
                        <a href="/search/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    <a href="/search/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Deals (10)
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>

                <div class="section">
                    <div class="section-title floated-content">
                        Projects (10)
                        <a href="/search/projects" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="project-list project-list-wide">
                        @include('front.common.project')
                        @include('front.common.project')
                        @include('front.common.project')
                        @include('front.common.project')
                    </div>
                    <a href="/search/projects" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Projects (10)
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>

                <div class="section">
                    <div class="section-title floated-content">
                        Freelancers (10)
                        <a href="/search/freelancers" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="freelancers-list freelancers-list-double">
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                    </div>
                    <a href="/search/freelancers" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Freelancers (10)
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>

            </div>
            
            <div class="col-lg-3 d-none d-lg-block">
                
                <div class="sticky-top">
                    <a href="" class="posla-ad-space">
                        <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" class="dp-contain" alt="Ad">
                    </a>

                    <a href="" class="posla-ad-space">
                        <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" class="dp-contain" alt="Ad">
                    </a>

                    <a href="" class="posla-ad-space">
                        <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" class="dp-contain" alt="Ad">
                    </a>
                </div>

            </div>

        </div>
    </div>

@endsection