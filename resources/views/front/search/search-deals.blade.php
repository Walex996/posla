@extends('layouts.front.app')


@section('title')
    Search Deals
@endsection


@section('og')
    <meta name="description" content="Search Deals - Posla">
    <meta name="keywords" content="Search Deals, Posla, Posla.com">
    <meta name="tags" content="search deals posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/components/Price-Range-Slider-jQuery-UI/price_range_style.css') }}">
@endsection


@section('js')
    <script src="{{ asset('/js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/components/Price-Range-Slider-jQuery-UI/price_range_script.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            
            $(".posla-slider-range").slider({
                range:true,
                orientation:"horizontal",
                min: 0,
                max: 10000,
                values: [0, 10000],
                step: 100,
                slide:function (event, ui) {
                    if (ui.values[0] == ui.values[1]) {
                        return false;
                    }
                    $(".posla-slider-min-input").val(ui.values[0]);
                    $(".posla-slider-max-input").val(ui.values[1]);
                }
            });

        });
    </script>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-lg-3 d-none d-md-block">

                <div class="section sticky-top">
                    @include('front.common.filter-search')
                    @include('front.common.filter-deals')
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
                                    @include('front.common.filter-deals')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-20">
                    <div class="text-center">
                        <div class="font-20 font-bold">
                            Search Result (Deals)
                        </div>
                        <div class="font-12 text-fade">
                            (10 active deals)
                        </div>
                    </div>
                </div>

                <div class="section mb-5 pb-5">
                    <div class="section-title floated-content">

                        <button class="btn btn-transparent-black d-block d-md-none pull-left btn-sm" data-toggle="modal" data-target="#filter">
                            <span class="fa fa-filter"></span>
                            Filter
                        </button>
                        
                        <div class="font-bold d-none d-md-inline mt-10 pull-left">
                            Showing 1 - 20 of 65
                        </div>

                        <form method="get" action="" class="pull-right">
                            <select class="form-control-md" onchange="this.form.submit()" style="width: 100px; padding: 0px !important;">
                                <option value="new" selected>Newest First</option>
                                <option value="old">Oldest First</option>
                                <option value="budget_high_low">Budget - High to Low</option>
                                <option value="budget_low_high">Budget - Low to High</option>
                                <option value="ratings_high_low">Ratings - High to Low</option>
                                <option value="ratings_low_high">Ratings - Low to High</option>
                            </select>
                        </form>

                    </div>

                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
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
                        Featured Deals
                    </div>
                    <div class="deal-list deal-list-single">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
