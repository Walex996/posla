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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-lg-3 d-none d-md-block">

                <div class="section sticky-top">
                    @include('front.common.filter-search', [           
                        'users_total' => $users->total(),
                    ])
                    @include('front.common.filter-freelancers')
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
                                    @include('front.common.filter-search', [
                                        'users_total' => $users->total(),

                                    ])
                                    @include('front.common.filter-freelancers')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-20">
                    <div class="text-center">
                        <div class="font-20 font-bold">
                            Search Result (Freelancers)
                        </div>
                        <div class="font-12 text-fade">
                            {{-- ({{$users->count()}} freelancers) --}}
                        </div>
                    </div>
                </div>

                <div class="section mb-5">
                    <div class="section-title floated-content">

                        <button class="btn btn-transparent-black d-block d-md-none pull-left btn-sm" data-toggle="modal" data-target="#filter">
                            <span class="fa fa-filter"></span>
                            Filter
                        </button>
                        
                        <div class="font-bold d-none d-md-inline mt-10 pull-left">
                            Showing 1 - 10 of 10
                        </div>

                        <form method="get" action="" class="pull-right">
                            <select class="form-control-md" onchange="this.form.submit()" style="width: 100px; padding: 0px !important;">
                                @if(isset($qid))
                                    <option value="new" @if($qid =="new") selected @endif>Newest First</option>
                                    <option value="old" @if($qid =="old") selected @endif>Oldest First</option>
                                    <option value="az" @if($qid =="az") selected @endif>A-Z</option>
                                    <option value="za" @if($qid =="za") selected @endif>Z-A</option>
                                    <option value="ratings_high_low" @if($qid =="ratings_high_low") selected @endif>Ratings - High to Low</option>
                                    <option value="ratings_low_high" @if($qid =="ratings_low_high") selected @endif>Ratings - Low to High</option>
                                @else
                                    <option value="new" selected>Newest First</option>
                                    <option value="old">Oldest First</option>
                                    <option value="az">A-Z</option>
                                    <option value="za">Z-A</option>
                                    <option value="ratings_high_low">Ratings - High to Low</option>
                                    <option value="ratings_low_high">Ratings - Low to High</option>
                                @endif
                            </select>
                        </form>

                    </div>

                    <div class="freelancer-list freelancer-list-wide">
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                        @include('front.common.freelancer')
                    </div>
                </div>

                <div class="section">
                    //pagination here
                </div>

            </div>
            
            <div class="col-lg-3 d-none d-lg-block">
                
                <a href="" class="posla-ad-space">
                    <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" class="dp-contain" alt="Ad">
                </a>

                <div class="section pl-10 pr-10 sticky-top">
                    <div class="section-title">
                        Featured Freelancers
                    </div>
                    <div class="freelancer-list freelancer-list-mini">
                        @include('front.common.freelancer')
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
