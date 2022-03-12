@extends('layouts.front.app')


@section('title')
    Category name
@endsection


@section('og')
    <meta name="description" content="Category name - Posla">
    <meta name="keywords" content="Category name, Posla, Posla.com">
    <meta name="tags" content="category_name posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <link to="{{ asset('/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" to="{{ asset('/components/Price-Range-Slider-jQuery-UI/price_range_style.css') }}">
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
    
    <div className="container">
        <div className="row">
            
            <div className="col-md-4 col-lg-3 d-none d-md-block">

                <div className="section sticky-top">
                    @include('front.common.filter-deals')
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
                                    @include('front.common.filter-deals')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div className="mb-5">
                    <div className="text-center">
                        <div className="font-20 font-bold">
                            Category name
                        </div>
                        <div className="font-12 text-fade">
                            (30 active deals)
                        </div>
                    </div>
                </div>

                <div className="section mb-1.5 pb-1.5">
                    <div className="section-title floated-content">

                        <button className="btn btn-transparent-black d-block d-md-none pull-left btn-sm" data-toggle="modal" data-target="#filter">
                            <span className="fa fa-filter"></span>
                            Filter
                        </button>
                        
                        <div className="font-bold d-none d-md-inline mt-2.5 pull-left">
                            Showing 1 - 15 of 31
                        </div>

                        <form method="get" action="" className="pull-right">
                            <select className="form-control-md" onchange="this.form.submit()" style="width: 100px; padding: 0px !important;">
                                @if(isset($qid))
                                    <option value="new" @if($qid =="new") selected @endif>Newest First</option>
                                    <option value="old" @if($qid =="old") selected @endif>Oldest First</option>
                                    <option value="budget_high_low" @if($qid =="budget_high_low") selected @endif>Budget - High to Low</option>
                                    <option value="budget_low_high" @if($qid =="budget_low_high") selected @endif>Budget - Low to High</option>
                                    <option value="ratings_high_low" @if($qid =="ratings_high_low") selected @endif>Ratings - High to Low</option>
                                    <option value="ratings_low_high" @if($qid =="ratings_low_high") selected @endif>Ratings - Low to High</option>
                                @else
                                    <option value="new" selected>Newest First</option>
                                    <option value="old">Oldest First</option>
                                    <option value="budget_high_low">Budget - High to Low</option>
                                    <option value="budget_low_high">Budget - Low to High</option>
                                    <option value="ratings_high_low">Ratings - High to Low</option>
                                    <option value="ratings_low_high">Ratings - Low to High</option>
                                @endif
                            </select>
                        </form>

                    </div>

                    <div className="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
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
                        Featured Deals
                    </div>
                    <div className="deal-list deal-list-single">
                        @include('front.common.deal')
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection