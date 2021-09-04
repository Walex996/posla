@extends('layouts.front.app')


@section('title')
    Welcome
@endsection


@section('og')
    <meta name="description" content="Posla">
    <meta name="keywords" content="Posla, Posla.com">
    <meta name="tags" content="posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')
    

    <div class="modal" id="modalCategories">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deal Categories</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="p-10">
                        
                        <div class="font-bold">
                            Select a category:
                        </div>

                        <div class="home-category-list mt-5">
                            
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>
                            <a href="/category/music-audio/deals">
                                <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                Category Name
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        

    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-lg-3 d-none d-md-block">

                <div class="sticky-top">
                    <div class="home-category-list">

                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        <a href="/category/music-audio/deals">
                            Category Name
                            <span class="fa fa-angle-right"></span>
                        </a>
                        
                    </div>

                    <div class="mt-10">
                        <a href="/support" class="text-fade d-inline hover-underline">
                            Suggest a category
                            <span class="fa fa-angle-right icon-grey ml-2"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-md-8 col-lg-6">

                <div class="row">
                    <div class="col-sm-6 col-lg-12">

                        <div class="section">
                            <form action="/account/deals/create" class="post-project">
                                <div class="section-title">
                                    <span class="fa fa-edit"></span>
                                    Create New Deal
                                </div>
                                <div class="form-group">
                                    <textarea name="title" id="" class="form-control" placeholder="I will..." style="height: 50px;"></textarea>
                                </div>
                                <div class="floated-content">
                                    <div class="form-group pull-left d-none">
                                        <select name="privacy" id="privacy" class="form-control">
                                            <option value="">-- Select Privacy --</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-blue btn-sm pull-right">
                                        Continue
                                        <span class="fa fa-angle-right"></span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="section d-none d-sm-block d-md-none">
                            <a data-toggle="modal" data-target="#modalCategories" class="d-block">
                                <span class="fa fa-angle-right pull-right icon-18"></span>
                                <span class="fa fa-list-alt pull-left icon-18 mr-10 icon-blue"></span>
                                View all deal categories
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="home-section-user bg-fff shadow-sm mb-30 br-4 d-block d-lg-none">
                            <div></div>
                            <div class="home-section-user-info">
                                <a href="/account">
                                    <span class="fa fa-user"></span>
                                </a>
                                <div>
                                    <a href="/account" class="font-bold d-block hover-underline">
                                        Olawale Lawal
                                    </a>
                                    <div class="text-fade">
                                        Frontend Developer, UIUX Designer, Graphics Designer
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="/" class="btn btn-orange btn-block">
                                    Switch to Selling
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="section d-block d-sm-none">
                    <a data-toggle="modal" data-target="#modalCategories" class="d-block">
                        <span class="fa fa-angle-right pull-right icon-18"></span>
                        <span class="fa fa-list-alt pull-left icon-18 mr-10 icon-blue"></span>
                        View all deal categories
                    </a>
                </div>
                

                <div class="section">
                    <div class="section-title">
                        Featured Deals
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
                    </div>
                </div>


                <div class="section">
                    <div class="section-title">
                        Category Name
                        <a href="/category/music-audio/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    
                    <a href="/category/music-audio/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All CategoryName Deals
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>



                <div class="section">
                    <div class="section-title">
                        Category Name
                        <a href="/category/music-audio/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    
                    <a href="/category/music-audio/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All CategoryName Deals
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>



                <div class="section">
                    <div class="section-title">
                        Category Name
                        <a href="/category/music-audio/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    
                    <a href="/category/music-audio/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All CategoryName Deals
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>



                <div class="section">
                    <div class="section-title">
                        Category Name
                        <a href="/category/music-audio/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    
                    <a href="/category/music-audio/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All CategoryName Deals
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>



                <div class="section">
                    <div class="section-title">
                        Category Name
                        <a href="/category/music-audio/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="deal-list deal-list-double">
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                        @include('front.common.deal')
                    </div>
                    
                    <a href="/category/music-audio/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All CategoryName Deals
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>



            </div>
            
            <div class="col-lg-3 d-none d-lg-block">
                
                <div class="home-section-user bg-fff shadow-sm mb-30 br-4">
                    <div></div>
                    <div class="home-section-user-info">
                        <a href="/account">
                            <span class="fa fa-user"></span>
                        </a>
                        <div>
                            <a href="/account" class="font-bold d-block hover-underline">
                                Olawale Lawal
                            </a>
                            <div class="text-fade">
                                Frontend Developer, UIUX Designer, Graphics Designer
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="/" class="btn btn-orange btn-block">
                            Switch to Selling
                        </a>
                    </div>
                </div>

                <div class="section pl-10 pr-10 sticky-top">
                    <div class="section-title">
                        Latest Deals
                    </div>
                    <div class="deal-list deal-list-single">
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

            </div>

        </div>
    </div>

@endsection
