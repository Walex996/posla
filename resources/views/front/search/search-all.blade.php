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
                    @include('front.common.filter-search', [
                        'deals_total' => $deals->count(),
                        'projects_total' => $projects->count(),
                        'users_total' => $users->count(),
                    ])
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
                                    @include('front.common.filter-search',[
                                        'deals_total' => $deals->count(),
                                        'projects_total' => $projects->count(),
                                        'users_total' => $users->count(),
                                    ])
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
                            ({{$projects->count() + $deals->count()+ $users->count()}} results found)
                        </div>
                        <div class="mt-10">
                            <button class="btn btn-transparent-black d-block d-md-none mx-auto btn-sm" data-toggle="modal" data-target="#filter">
                                <span class="fa fa-filter"></span>
                                Filter search result
                            </button>
                        </div>
                    </div>
                </div>
                @if($deals->isNotEmpty())
                    <div class="section">
                        <div class="section-title floated-content">
                            Deals ({{$deals->count()}})
                            <a href="{{ route('search.deals')}}?q={{request('q')}}" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                        </div>
                        <div class="deal-list deal-list-double">
                            @foreach ($deals as $deal)
                                @include('front.common.deal')
                            @endforeach
                        </div>
                        <a href="{{ route('search.deals')}}?q={{request('q')}}" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Deals ({{$deals->count()}})
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                @endif
                
                @if($projects->isNotEmpty())

                    <div class="section">
                        <div class="section-title floated-content">
                            Projects ({{$projects->count()}})
                            <a href="{{ route('search.projects')}}?q={{request('q')}}"class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                        </div>
                        <div class="project-list project-list-wide">
                            @foreach ($projects as $project)
                                @include('front.common.project')
                            @endforeach
                        </div>
                        <a href="{{ route('search.projects')}}?q={{request('q')}}" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Projects ({{$projects->count()}})
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                @endif

                @if($users->isNotEmpty())
                    <div class="section">
                        <div class="section-title floated-content">
                            Freelancers ({{$users->count()}})
                            <a href="/search/freelancers" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                        </div>
                        <div class="freelancers-list freelancers-list-double">
                            @foreach ($users as $user)
                                @include('front.common.freelancer')
                            @endforeach
                        </div>
                        <a href="/search/freelancers?q=sear" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Freelancers ({{$users->count()}})
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                @endif

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
