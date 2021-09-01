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
                    @include('front.common.filter-projects')
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
                                    @include('front.common.filter-projects')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-20">
                    <div class="text-center">
                        <div class="font-20 font-bold">
                            {{$category->name}}
                        </div>
                        <div class="font-12 text-fade">
                            ({{$category->projects->count()}} active projects)
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
                            Showing {{$category->projects->firstItem()}} - {{$category->projects->lastItem()}} of {{$category->projects->total()}}
                        </div>

                        <form method="get" action="" class="pull-right">
                            <select class="form-control-md" onchange="this.form.submit()" style="width: 100px; padding: 0px !important;">
                                @if(isset($qid)) 
                                    <option value="new" @if($qid =="new") selected @endif>Newest First</option>
                                    <option value="old" @if($qid =="old") selected @endif>Oldest First</option>
                                    <option value="budget_high_low" @if($qid =="budget_high_low") selected @endif>Budget - High to Low</option>
                                    <option value="budget_low_high" @if($qid =="budget_low_high") selected @endif>Budget - Low to High</option>
                                    <option value="proposals_high_low" @if($qid =="proposals_high_low") selected @endif>Proposals - High to Low</option>
                                    <option value="proposals_low_high" @if($qid =="proposals_low_high") selected @endif>Proposals - Low to High</option>
                                @else
                                    <option value="new" selected>Newest First</option>
                                    <option value="old">Oldest First</option>
                                    <option value="budget_high_low">Budget - High to Low</option>
                                    <option value="budget_low_high">Budget - Low to High</option>
                                    <option value="proposals_high_low">Proposals - High to Low</option>
                                    <option value="proposals_low_high">Proposals - Low to High</option>
                                @endif
                            </select>
                        </form>

                    </div>

                    <div class="project-list project-list-wide">
                        @foreach ($category->projects as $project)
                            @include('front.common.project')
                        @endforeach                   
                    </div>
                </div>

                <div class="section">
                    {{$category->projects->appends(request()->input())->onEachSide(2)->links()}}
                </div>

            </div>
            
            <div class="col-lg-3 d-none d-lg-block">
                
                <a href="" class="posla-ad-space">
                    <img src="{{ asset('/img/app/samples/ad-400-200-1.jpg') }}" class="dp-contain" alt="Ad">
                </a>

                <div class="section pl-10 pr-10 sticky-top">
                    <div class="section-title">
                        Featured Projects
                    </div>
                    <div class="project-list project-list-mini">
                        @include('front.common.project')
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
