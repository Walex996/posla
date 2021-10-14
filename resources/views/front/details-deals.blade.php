@extends('layouts.front.app')


@section('title')
    {{$deal->title}}
@endsection


@section('og')
    <meta name="description" content="Deal title - Posla">
    <meta name="keywords" content="Deal title, Posla, Posla.com">
    <meta name="tags" content="deal_title deal_tags_exploded posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection


@section('content')


    @include('front.common.share-modal')
    
    <div class="container">
        
        <div class="section d-none d-sm-block p-5">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="ul-inline details-page-top">
                        <li>
                            <a href="#overview">
                                Overview
                            </a>
                        </li>
                        <li>
                            <a href="#description">
                                Description
                            </a>
                        </li>
                        <li>
                            <a href="#about">
                                About This Seller
                            </a>
                        </li>
                        <li>
                            <a href="#reviews">
                                Reviews
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <form action="">
                        <ul class="ul-inline pull-right mt-1">
                            <li>
                                <button type="submit" class="btn btn-transparent-black btn-xs hover-bg-orange" title="Favourite" data-widget="collapse" data-toggle="tooltip">
                                    <span class="fas fa-heart" style="position: relative; top: 1px;"></span>
                                </button>
                            </li>
                            <li>
                                <a class="p-0" title="Share Deal" data-widget="collapse" data-toggle="tooltip">
                                    <button type="button" class="btn btn-transparent-black btn-xs hover-bg-orange" data-toggle="modal" data-target="#shareModal">
                                        <span class="fas fa-share-alt"></span>
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#flag" class="btn btn-transparent-black btn-xs hover-bg-orange" title="Report Deal" data-widget="collapse" data-toggle="tooltip">
                                    <span class="fas fa-flag"></span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-8">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/category/deals/category1">Category name</a></li>
                        <li class="breadcrumb-item"><a href="/category/deals/category1">Subcategory name</a></li>
                        <li class="breadcrumb-item active" aria-current="page">0923903290230902</li>
                    </ol>
                </div>

                <div id="overview">
                    <div>
                        <h4 class="font-bold">
                            I will create awesome & on-point podcast script for your episodes
                        </h4>
                    </div>
                    <div class="details-title-sub floated-content mt-10">
                        <div class="pull-left">
                            <a href="/user/abcde12345" class="user-img-text">
                                <div>
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="hover-underline">
                                    Olawale Lawal
                                </div>
                            </a>
                        </div>
                        <div class="pull-left d-none d-sm-inline-block d-md-none d-lg-inline-block">|</div>
                        <div class="pull-left d-none d-sm-inline-block d-md-none d-lg-inline-block">
                            <div class="rating-box rating-box-eee mt-2">
                                <div>
                                    <div></div>
                                    <div style="width: 75%;"></div>
                                </div>
                                <div>
                                    3.75 (233)
                                </div>
                            </div>
                        </div>
                        <div class="pull-left">|</div>
                        <div class="pull-left">
                            2 weeks ago
                        </div>
                    </div>
                </div>

                <div class="section slider-section mt-10">
                    
                    <div id="demo" class="carousel slide deals-slider" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1" class=""></li>
                            <li data-target="#demo" data-slide-to="2" class=""></li>
                        </ul>
                      
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="name" class="dp-contain" />
                            </div> 
                            <div class="carousel-item">
                                <img src="{{asset('img/app/samples/user.png')}}" alt="name" class="dp-contain" />
                            </div> 
                            <div class="carousel-item">
                                <img src="{{asset('img/app/samples/deal-1.png')}}" alt="name" class="dp-contain" />
                            </div> 
                        </div>
                      
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                      
                </div>

                <div class="section" id="description">
                    <div class="section-title">
                        Description
                    </div>
                    <div class="line-height-25">

                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                    </div>
                    <div class="mt-10">
                        <div class="pt-10 bt-1-ddd item-labels item-labels-tags-all d-block">
                            <div class="item-labels-prefix">
                                Tags & Skills:
                            </div>
                            <div class="item-labels-tags">
                                tag name
                            </div>
                            <div class="item-labels-tags">
                                tag name
                            </div>
                            <div class="item-labels-tags">
                                tag name
                            </div>
                            <div class="item-labels-tags">
                                tag name
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section d-block d-md-none">
                    {{-- Mobile screen --}}
                    <div>
                        <ul class="nav nav-tabs posla-tabs posla-tabs-3">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#price_1_basic">
                                    Basic
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#price_1_standard">
                                    Standard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#price_1_premium">
                                    Premium
                                </a>
                            </li>
                        </ul>
                          
                        <form action="/cart">
                            <div class="tab-content">
                                
                                <div class="tab-pane container active" id="price_1_basic">
                                    <div class="pt-20 pb-20">
                                        <div>
                                            <div class="pull-right font-20 font-bold text-blue">
                                                $150
                                            </div>
                                            <div class="overflow-hidden pt-10">
                                                Basic Designs
                                            </div>
                                        </div>
                                        <div class="text-fade mt-15">
                                            2 basic logo designs with JPEG or JPG format and PNG format.
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-left-right">
                                            <div class="bg-eee">
                                                <div>
                                                    <span class="fa fa-history"></span>
                                                    <div class="overflow-hidden">
                                                        Delivery Date
                                                    </div>
                                                </div>
                                                <div>
                                                    1 day delivery
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-refresh"></span>
                                                    <div class="overflow-hidden">
                                                        Revisions
                                                    </div>
                                                </div>
                                                <div>
                                                    4 revisions
                                                </div>
                                            </div>
                                            <div class="bg-eee">
                                                <div>
                                                    <span class="fa fa-star"></span>
                                                    <div class="overflow-hidden">
                                                        Delivery Format
                                                    </div>
                                                </div>
                                                <div>
                                                    Work & Deliver
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-20 pb-20">
                                        <button class="btn btn-blue btn-block">
                                            Continue ($150)
                                        </button>
                                        <div class="mt-10">
                                            <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                Contact Seller
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane container" id="price_1_standard">
                                    <div class="pt-20 pb-20">
                                        <div>
                                            <div class="pull-right font-20 font-bold text-blue">
                                                $250
                                            </div>
                                            <div class="overflow-hidden pt-10">
                                                Recommended (Super-fast delivery)
                                            </div>
                                        </div>
                                        <div class="text-fade mt-15">
                                            2 unique logo designs with facebook and twitter covers. All vector files; and unlimited revision.
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-left-right">
                                            <div class="bg-eee">
                                                <div>
                                                    <span class="fa fa-history"></span>
                                                    <div class="overflow-hidden">
                                                        Delivery Date
                                                    </div>
                                                </div>
                                                <div>
                                                    1 day delivery
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-refresh"></span>
                                                    <div class="overflow-hidden">
                                                        Revisions
                                                    </div>
                                                </div>
                                                <div>
                                                    4 revisions
                                                </div>
                                            </div>
                                            <div class="bg-eee">
                                                <div>
                                                    <span class="fa fa-star"></span>
                                                    <div class="overflow-hidden">
                                                        Delivery Format
                                                    </div>
                                                </div>
                                                <div>
                                                    Work & Deliver
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-20 pb-20">
                                        <button class="btn btn-blue btn-block">
                                            Continue ($250)
                                        </button>
                                        <div class="mt-10">
                                            <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                Contact Seller
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane container" id="price_1_premium">
                                    <div class="pt-20 pb-20">
                                        <div>
                                            <div class="pull-right font-20 font-bold text-blue">
                                                $400
                                            </div>
                                            <div class="overflow-hidden pt-10">
                                                Bespoke Designs (All branding packs)
                                            </div>
                                        </div>
                                        <div class="text-fade mt-15">
                                            5 supreme logo designs with social media covers, stationery designs, priority support, and all source files used in the making of all 5 logo designs.
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-left-right">
                                            <div class="bg-eee">
                                                <div>
                                                    <span class="fa fa-history"></span>
                                                    <div class="overflow-hidden">
                                                        Delivery Date
                                                    </div>
                                                </div>
                                                <div>
                                                    1 day delivery
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-refresh"></span>
                                                    <div class="overflow-hidden">
                                                        Revisions
                                                    </div>
                                                </div>
                                                <div>
                                                    4 revisions
                                                </div>
                                            </div>
                                            <div class="bg-eee">
                                                <div>
                                                    <span class="fa fa-star"></span>
                                                    <div class="overflow-hidden">
                                                        Delivery Format
                                                    </div>
                                                </div>
                                                <div>
                                                    Work & Deliver
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-20 pb-20">
                                        <button class="btn btn-blue btn-block">
                                            Continue ($400)
                                        </button>
                                        <div class="mt-10">
                                            <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                Contact Seller
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


                <div class="section d-block d-md-none">
                    <div class="section-title">
                        Share Link
                    </div>
                    <div>
                        <div class="">
                            This is a private deal. Copy the link below to share.
                        </div>
                        <div>
                            <div class="copy-link mt-5">
                                <div class="input-group">
                                    <input type="search" name="q" class="form-control" onfocus="highlightShareLink('direct-share-link-3')" id="direct-share-link-3" value="http://localhost:8001/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" readonly />
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-3')" style="border-radius: 0 !important; height: 35px;">
                                            <span class="fa fa-copy"></span>
                                            <span>Copy</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-10">
                                <button type="button" class="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                    <span class="fa fa-share-alt"></span>
                                    Share this Deal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section" id="about">
                    <div class="section-title">
                        About this Seller
                    </div>
                    <div>
                        <a href="/user/abcde12345" class="user-img-text user-img-text-md">
                            <div>
                                <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                            </div>
                            <div class="pt-5 underline-none">
                                Olawale Lawal
                                <div class="pt-1">
                                    <button class="btn btn-transparent-black btn-xs hover-bg-black">
                                        View seller's profile
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bt-1-ddd pt-10 mt-10">
                        <div class="row">
                            <div class="col-sm-6 mb-20">
                                <div class="text-fade">
                                    Country
                                </div>
                                <div>
                                    Ireland
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="text-fade">
                                    Gender
                                </div>
                                <div>
                                    Female
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="text-fade">
                                    Member Since
                                </div>
                                <div>
                                    Jan 16, 2016
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="text-fade">
                                    Project Delivery Rate
                                </div>
                                <div class="text-orange">
                                    90%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-height-20 bt-1-ddd pt-10">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </div>
                </div>

                <div class="section-title" id="reviews">
                    Reviews
                </div>

                <div class="section pb-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span class="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span class="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span class="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span class="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span class="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mb-0">
                    <div class="section-title">
                        114 Reviews
                        <a href="" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div>
                        

                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>
                        

                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="col-md-4 d-none d-md-block">
                
                <div class="sticky-top d-none d-lg-block">
                    <div class="section">
                        <div>

                            {{-- web --}}
                            <ul class="nav nav-tabs posla-tabs posla-tabs-3">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#price_2_basic">
                                        Basic
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#price_2_standard">
                                        Standard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#price_2_premium">
                                        Premium
                                    </a>
                                </li>
                            </ul>
                              
                            <form action="/cart">
                                <div class="tab-content">
                                    
                                    <div class="tab-pane container active" id="price_2_basic">
                                        <div class="pt-20 pb-20">
                                            <div>
                                                <div class="pull-right font-20 font-bold text-blue">
                                                    $150
                                                </div>
                                                <div class="overflow-hidden pt-10">
                                                    Basic Designs
                                                </div>
                                            </div>
                                            <div class="text-fade mt-15">
                                                2 basic logo designs with JPEG or JPG format and PNG format.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-left-right">
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-history"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span class="fa fa-refresh"></span>
                                                        <div class="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-star"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-20 pb-20">
                                            <button class="btn btn-blue btn-block">
                                                Continue ($150)
                                            </button>
                                            <div class="mt-10">
                                                <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane container" id="price_2_standard">
                                        <div class="pt-20 pb-20">
                                            <div>
                                                <div class="pull-right font-20 font-bold text-blue">
                                                    $250
                                                </div>
                                                <div class="overflow-hidden pt-10">
                                                    Recommended (Super-fast delivery)
                                                </div>
                                            </div>
                                            <div class="text-fade mt-15">
                                                2 unique logo designs with facebook and twitter covers. All vector files; and unlimited revision.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-left-right">
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-history"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span class="fa fa-refresh"></span>
                                                        <div class="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-star"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-20 pb-20">
                                            <button class="btn btn-blue btn-block">
                                                Continue ($250)
                                            </button>
                                            <div class="mt-10">
                                                <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane container" id="price_2_premium">
                                        <div class="pt-20 pb-20">
                                            <div>
                                                <div class="pull-right font-20 font-bold text-blue">
                                                    $400
                                                </div>
                                                <div class="overflow-hidden pt-10">
                                                    Bespoke Designs (All branding packs)
                                                </div>
                                            </div>
                                            <div class="text-fade mt-15">
                                                5 supreme logo designs with social media covers, stationery designs, priority support, and all source files used in the making of all 5 logo designs.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-left-right">
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-history"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span class="fa fa-refresh"></span>
                                                        <div class="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-star"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-20 pb-20">
                                            <button class="btn btn-blue btn-block">
                                                Continue ($400)
                                            </button>
                                            <div class="mt-10">
                                                <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="section">
                        <div class="section-title">
                            Share Link
                        </div>
                        <div>
                            <div class="">
                                This is a private deal. Copy the link below to share.
                            </div>
                            <div>
                                <div class="copy-link mt-5">
                                    <div class="input-group">
                                        <input type="search" name="q" class="form-control" onfocus="highlightShareLink('direct-share-link-2')" id="direct-share-link-2" value="http://localhost:8001/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" readonly />
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-2')" style="border-radius: 0 !important; height: 35px;">
                                                <span class="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-10">
                                    <button type="button" class="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span class="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section d-none d-md-block d-lg-none">
                    <form action="">
                        <ul class="ul-inline">
                            <li>
                                <button type="submit" class="btn btn-transparent-black btn-xs hover-bg-orange" title="Favourite" data-widget="collapse" data-toggle="tooltip">
                                    <span class="fas fa-heart" style="position: relative; top: 1px;"></span>
                                </button>
                            </li>
                            <li>
                                <a class="p-0" title="Share Deal" data-widget="collapse" data-toggle="tooltip">
                                    <button type="button" class="btn btn-transparent-black btn-xs hover-bg-orange" data-toggle="modal" data-target="#share">
                                        <span class="fas fa-share-alt"></span>
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#flag" class="btn btn-transparent-black btn-xs hover-bg-orange" title="Report Deal" data-widget="collapse" data-toggle="tooltip">
                                    <span class="fas fa-flag"></span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>

                <div class="sticky-top d-none d-md-block d-lg-none mb-0">
                    <div class="section">
                        {{-- tab --}}
                        <div>
                            <ul class="nav nav-tabs posla-tabs posla-tabs-3">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#price_3_basic">
                                        Basic
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#price_3_standard">
                                        Standard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#price_3_premium">
                                        Premium
                                    </a>
                                </li>
                            </ul>
                            
                            <form action="/cart">
                                <div class="tab-content">
                                    
                                    <div class="tab-pane container active p-0" id="price_3_basic">
                                        <div class="pt-20 pb-20">
                                            <div>
                                                <div class="pull-right ml-10 font-20 font-bold text-blue">
                                                    $150
                                                </div>
                                                <div class="overflow-hidden pt-5">
                                                    Basic Designs
                                                </div>
                                            </div>
                                            <div class="text-fade mt-15">
                                                2 basic logo designs with JPEG or JPG format and PNG format.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-left-right">
                                                <div class="bg-eee">
                                                    <div class="w-100 pull-none">
                                                        <span class="fa fa-history"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div class="pl-10 pr-10">
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="w-100 pull-none">
                                                        <span class="fa fa-refresh"></span>
                                                        <div class="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div class="pl-10 pr-10">
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div class="bg-eee">
                                                    <div class="w-100 pull-none">
                                                        <span class="fa fa-star"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div class="pl-10 pr-10">
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-20 pb-20">
                                            <button class="btn btn-blue btn-block">
                                                Continue ($150)
                                            </button>
                                            <div class="mt-10">
                                                <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="tab-pane container p-0" id="price_3_standard">
                                        <div class="pt-20 pb-20">
                                            <div>
                                                <div class="pull-right ml-10 font-20 font-bold text-blue">
                                                    $250
                                                </div>
                                                <div class="overflow-hidden pt-5">
                                                    Recommended (Super-fast delivery)
                                                </div>
                                            </div>
                                            <div class="text-fade mt-15">
                                                2 unique logo designs with facebook and twitter covers. All vector files; and unlimited revision.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-left-right">
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-history"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span class="fa fa-refresh"></span>
                                                        <div class="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-star"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-20 pb-20">
                                            <button class="btn btn-blue btn-block">
                                                Continue ($250)
                                            </button>
                                            <div class="mt-10">
                                                <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="tab-pane container p-0" id="price_3_premium">
                                        <div class="pt-20 pb-20">
                                            <div>
                                                <div class="pull-right ml-10 font-20 font-bold text-blue">
                                                    $400
                                                </div>
                                                <div class="overflow-hidden pt-5">
                                                    Bespoke Designs (All branding packs)
                                                </div>
                                            </div>
                                            <div class="text-fade mt-15">
                                                5 supreme logo designs with social media covers, stationery designs, priority support, and all source files used in the making of all 5 logo designs.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-left-right">
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-history"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span class="fa fa-refresh"></span>
                                                        <div class="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-star"></span>
                                                        <div class="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-20 pb-20">
                                            <button class="btn btn-blue btn-block">
                                                Continue ($400)
                                            </button>
                                            <div class="mt-10">
                                                <a href="/messages/user000000" class="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="section">
                        <div class="section-title">
                            Share Link
                        </div>
                        <div>
                            <div class="">
                                This is a private deal.
                                <br>
                                Copy the link below to share.
                            </div>
                            <div>
                                <div class="copy-link mt-5">
                                    <div class="input-group">
                                        <input type="search" name="q" class="form-control" onfocus="highlightShareLink('direct-share-link-3')" id="direct-share-link-3" value="http://localhost:8001/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" readonly />
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-3')" style="border-radius: 0 !important; height: 35px;">
                                                <span class="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-10">
                                    <button type="button" class="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span class="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        
        <hr>


        <div class="font-18 font-bold pb-10 text-center b-none">
            Other Deals from this seller
        </div>
        <div class="section">
            {{-- -double, -lg-6  ||  -mini, -lg-3 --}}
            <div class="deal-list deal-list-mini row">
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
            </div>
        </div>
            
        <hr>

        <div class="font-18 font-bold pb-10 text-center b-none">
            Similar Category_Name Deals
        </div>
        <div class="section">
            <div class="deal-list deal-list-mini row">
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
            </div>
        </div>
            

    </div>

@endsection