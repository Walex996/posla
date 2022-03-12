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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection


@section('content')


    @include('front.common.share-modal')
    
    <div className="container">
        
        <div className="section d-none d-sm-block p-1.5">
            <div className="row">
                <div className="col-lg-6">
                    <ul className="ul-inline details-page-top">
                        <li>
                            <Link to="#overview">
                                Overview
                            </Link>
                        </li>
                        <li>
                            <Link to="#description">
                                Description
                            </Link>
                        </li>
                        <li>
                            <Link to="#about">
                                About This Seller
                            </Link>
                        </li>
                        <li>
                            <Link to="#reviews">
                                Reviews
                            </Link>
                        </li>
                    </ul>
                </div>
                <div className="col-lg-6 d-none d-lg-block">
                    <form action="">
                        <ul className="ul-inline pull-right mt-1">
                            <li>
                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Favourite" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-heart" style="position: relative; top: 1px;"></span>
                                </button>
                            </li>
                            <li>
                                <Link className="p-0" title="Share Deal" data-widget="collapse" data-toggle="tooltip">
                                    <button type="button" className="btn btn-transparent-black btn-xs hover-bg-orange" data-toggle="modal" data-target="#shareModal">
                                        <span className="fas fa-share-alt"></span>
                                    </button>
                                </Link>
                            </li>
                            <li>
                                <Link data-toggle="modal" data-target="#flag" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Report Deal" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-flag"></span>
                                </Link>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>

        <div className="row">
            
            <div className="col-md-8">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/category/deals/category1">Category name</Link></li>
                        <li className="breadcrumb-item"><Link to="/category/deals/category1">Subcategory name</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">0923903290230902</li>
                    </ol>
                </div>

                <div id="overview">
                    <div>
                        <h4 className="font-bold">
                            I will create awesome & on-point podcast script for your episodes
                        </h4>
                    </div>
                    <div className="details-title-sub floated-content mt-2.5">
                        <div className="pull-left">
                            <Link to="/user/abcde12345" className="user-img-text">
                                <div>
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="hover-underline">
                                    Olawale Lawal
                                </div>
                            </Link>
                        </div>
                        <div className="pull-left d-none d-sm-inline-block d-md-none d-lg-inline-block">|</div>
                        <div className="pull-left d-none d-sm-inline-block d-md-none d-lg-inline-block">
                            <div className="rating-box rating-box-eee mt-2">
                                <div>
                                    <div></div>
                                    <div style="width: 75%;"></div>
                                </div>
                                <div>
                                    3.75 (233)
                                </div>
                            </div>
                        </div>
                        <div className="pull-left">|</div>
                        <div className="pull-left">
                            2 weeks ago
                        </div>
                    </div>
                </div>

                <div className="section slider-section mt-2.5">
                    
                    <div id="demo" className="carousel slide deals-slider" data-ride="carousel">
                        <!-- Indicators -->
                        <ul className="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" className="active"></li>
                            <li data-target="#demo" data-slide-to="1" className=""></li>
                            <li data-target="#demo" data-slide-to="2" className=""></li>
                        </ul>
                      
                        <!-- The slideshow -->
                        <div className="carousel-inner">
                            <div className="carousel-item active">
                                <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="name" className="dp-contain" />
                            </div> 
                            <div className="carousel-item">
                                <img src={user} alt="name" className="dp-contain" />
                            </div> 
                            <div className="carousel-item">
                                <img src={deal1} alt="name" className="dp-contain" />
                            </div> 
                        </div>
                      
                        <!-- Left and right controls -->
                        <Link className="carousel-control-prev" to="#demo" data-slide="prev">
                          <span className="carousel-control-prev-icon"></span>
                        </Link>
                        <Link className="carousel-control-next" to="#demo" data-slide="next">
                          <span className="carousel-control-next-icon"></span>
                        </Link>
                    </div>
                      
                </div>

                <div className="section" id="description">
                    <div className="section-title">
                        Description
                    </div>
                    <div className="line-height-25">

                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                    </div>
                    <div className="mt-2.5">
                        <div className="pt-2.5 bt-1-ddd item-labels item-labels-tags-all d-block">
                            <div className="item-labels-prefix">
                                Tags & Skills:
                            </div>
                            <div className="item-labels-tags">
                                tag name
                            </div>
                            <div className="item-labels-tags">
                                tag name
                            </div>
                            <div className="item-labels-tags">
                                tag name
                            </div>
                            <div className="item-labels-tags">
                                tag name
                            </div>
                        </div>
                    </div>
                </div>

                <div className="section d-block d-md-none">
                    {/*Mobile screen */}
                    <div>
                        <ul className="nav nav-tabs posla-tabs posla-tabs-3">
                            <li className="nav-item">
                                <Link className="nav-link active" data-toggle="tab" to="#price_1_basic">
                                    Basic
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" data-toggle="tab" to="#price_1_standard">
                                    Standard
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" data-toggle="tab" to="#price_1_premium">
                                    Premium
                                </Link>
                            </li>
                        </ul>
                          
                        <form action="/cart">
                            <div className="tab-content">
                                
                                <div className="tab-pane container active" id="price_1_basic">
                                    <div className="pt-5 pb-5">
                                        <div>
                                            <div className="pull-right font-20 font-bold text-blue">
                                                $150
                                            </div>
                                            <div className="overflow-hidden pt-2.5">
                                                Basic Designs
                                            </div>
                                        </div>
                                        <div className="text-fade mt-15">
                                            2 basic logo designs with JPEG or JPG format and PNG format.
                                        </div>
                                    </div>
                                    <div>
                                        <div className="text-left-right">
                                            <div className="bg-eee">
                                                <div>
                                                    <span className="fa fa-history"></span>
                                                    <div className="overflow-hidden">
                                                        Delivery Date
                                                    </div>
                                                </div>
                                                <div>
                                                    1 day delivery
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-refresh"></span>
                                                    <div className="overflow-hidden">
                                                        Revisions
                                                    </div>
                                                </div>
                                                <div>
                                                    4 revisions
                                                </div>
                                            </div>
                                            <div className="bg-eee">
                                                <div>
                                                    <span className="fa fa-star"></span>
                                                    <div className="overflow-hidden">
                                                        Delivery Format
                                                    </div>
                                                </div>
                                                <div>
                                                    Work & Deliver
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="pt-5 pb-5">
                                        <button className="btn btn-blue btn-block">
                                            Continue ($150)
                                        </button>
                                        <div className="mt-2.5">
                                            <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                Contact Seller
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                                <div className="tab-pane container" id="price_1_standard">
                                    <div className="pt-5 pb-5">
                                        <div>
                                            <div className="pull-right font-20 font-bold text-blue">
                                                $250
                                            </div>
                                            <div className="overflow-hidden pt-2.5">
                                                Recommended (Super-fast delivery)
                                            </div>
                                        </div>
                                        <div className="text-fade mt-15">
                                            2 unique logo designs with facebook and twitter covers. All vector files; and unlimited revision.
                                        </div>
                                    </div>
                                    <div>
                                        <div className="text-left-right">
                                            <div className="bg-eee">
                                                <div>
                                                    <span className="fa fa-history"></span>
                                                    <div className="overflow-hidden">
                                                        Delivery Date
                                                    </div>
                                                </div>
                                                <div>
                                                    1 day delivery
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-refresh"></span>
                                                    <div className="overflow-hidden">
                                                        Revisions
                                                    </div>
                                                </div>
                                                <div>
                                                    4 revisions
                                                </div>
                                            </div>
                                            <div className="bg-eee">
                                                <div>
                                                    <span className="fa fa-star"></span>
                                                    <div className="overflow-hidden">
                                                        Delivery Format
                                                    </div>
                                                </div>
                                                <div>
                                                    Work & Deliver
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="pt-5 pb-5">
                                        <button className="btn btn-blue btn-block">
                                            Continue ($250)
                                        </button>
                                        <div className="mt-2.5">
                                            <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                Contact Seller
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                                <div className="tab-pane container" id="price_1_premium">
                                    <div className="pt-5 pb-5">
                                        <div>
                                            <div className="pull-right font-20 font-bold text-blue">
                                                $400
                                            </div>
                                            <div className="overflow-hidden pt-2.5">
                                                Bespoke Designs (All branding packs)
                                            </div>
                                        </div>
                                        <div className="text-fade mt-15">
                                            5 supreme logo designs with social media covers, stationery designs, priority support, and all source files used in the making of all 5 logo designs.
                                        </div>
                                    </div>
                                    <div>
                                        <div className="text-left-right">
                                            <div className="bg-eee">
                                                <div>
                                                    <span className="fa fa-history"></span>
                                                    <div className="overflow-hidden">
                                                        Delivery Date
                                                    </div>
                                                </div>
                                                <div>
                                                    1 day delivery
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-refresh"></span>
                                                    <div className="overflow-hidden">
                                                        Revisions
                                                    </div>
                                                </div>
                                                <div>
                                                    4 revisions
                                                </div>
                                            </div>
                                            <div className="bg-eee">
                                                <div>
                                                    <span className="fa fa-star"></span>
                                                    <div className="overflow-hidden">
                                                        Delivery Format
                                                    </div>
                                                </div>
                                                <div>
                                                    Work & Deliver
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="pt-5 pb-5">
                                        <button className="btn btn-blue btn-block">
                                            Continue ($400)
                                        </button>
                                        <div className="mt-2.5">
                                            <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                Contact Seller
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


                <div className="section d-block d-md-none">
                    <div className="section-title">
                        Share Link
                    </div>
                    <div>
                        <div className="">
                            This is a private deal. Copy the link below to share.
                        </div>
                        <div>
                            <div className="copy-link mt-1.5">
                                <div className="input-group">
                                    <input type="search" name="q" className="form-control" onfocus="highlightShareLink('direct-share-link-3')" id="direct-share-link-3" value="http://localhost:8001/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" readonly />
                                    <div className="input-group-btn">
                                        <button type="submit" className="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-3')" style="border-radius: 0 !important; height: 35px;">
                                            <span className="fa fa-copy"></span>
                                            <span>Copy</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div className="text-center mt-2.5">
                                <button type="button" className="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                    <span className="fa fa-share-alt"></span>
                                    Share this Deal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="section" id="about">
                    <div className="section-title">
                        About this Seller
                    </div>
                    <div>
                        <Link to="/user/abcde12345" className="user-img-text user-img-text-md">
                            <div>
                                <img src={user} alt="Firstname lastname" className="dp-contain" />
                            </div>
                            <div className="pt-1.5 underline-none">
                                Olawale Lawal
                                <div className="pt-1">
                                    <button className="btn btn-transparent-black btn-xs hover-bg-black">
                                        View seller's profile
                                    </button>
                                </div>
                            </div>
                        </Link>
                    </div>
                    <div className="bt-1-ddd pt-2.5 mt-2.5">
                        <div className="row">
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Country
                                </div>
                                <div>
                                    Ireland
                                </div>
                            </div>
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Gender
                                </div>
                                <div>
                                    Female
                                </div>
                            </div>
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Member Since
                                </div>
                                <div>
                                    Jan 16, 2016
                                </div>
                            </div>
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Project Delivery Rate
                                </div>
                                <div className="text-orange">
                                    90%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="line-height-20 bt-1-ddd pt-2.5">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </div>
                </div>

                <div className="section-title" id="reviews">
                    Reviews
                </div>

                <div className="section pb-0">
                    <div className="row">
                        <div className="col-sm-6">
                            <div className="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span className="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-6">
                            <div className="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span className="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-6">
                            <div className="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span className="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-6">
                            <div className="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span className="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-6">
                            <div className="reviews-summary">
                                <div>
                                    Seller communication level
                                    <span className="font-bold">(4.5)</span>
                                </div>
                                <div>
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="section mb-0">
                    <div className="section-title">
                        114 Reviews
                        <Link to="" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div>
                        

                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div className="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div className="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>
                        

                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div className="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div className="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div className="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div className="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div className="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div className="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div className="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div className="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src={user} alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div className="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div className="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
                                        </div>
                                        <div className="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div className="col-md-4 d-none d-md-block">
                
                <div className="sticky-top d-none d-lg-block">
                    <div className="section">
                        <div>

                            {/*web */}
                            <ul className="nav nav-tabs posla-tabs posla-tabs-3">
                                <li className="nav-item">
                                    <Link className="nav-link active" data-toggle="tab" to="#price_2_basic">
                                        Basic
                                    </Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" data-toggle="tab" to="#price_2_standard">
                                        Standard
                                    </Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" data-toggle="tab" to="#price_2_premium">
                                        Premium
                                    </Link>
                                </li>
                            </ul>
                              
                            <form action="/cart">
                                <div className="tab-content">
                                    
                                    <div className="tab-pane container active" id="price_2_basic">
                                        <div className="pt-5 pb-5">
                                            <div>
                                                <div className="pull-right font-20 font-bold text-blue">
                                                    $150
                                                </div>
                                                <div className="overflow-hidden pt-2.5">
                                                    Basic Designs
                                                </div>
                                            </div>
                                            <div className="text-fade mt-15">
                                                2 basic logo designs with JPEG or JPG format and PNG format.
                                            </div>
                                        </div>
                                        <div>
                                            <div className="text-left-right">
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-history"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span className="fa fa-refresh"></span>
                                                        <div className="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-star"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="pt-5 pb-5">
                                            <button className="btn btn-blue btn-block">
                                                Continue ($150)
                                            </button>
                                            <div className="mt-2.5">
                                                <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </Link>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="tab-pane container" id="price_2_standard">
                                        <div className="pt-5 pb-5">
                                            <div>
                                                <div className="pull-right font-20 font-bold text-blue">
                                                    $250
                                                </div>
                                                <div className="overflow-hidden pt-2.5">
                                                    Recommended (Super-fast delivery)
                                                </div>
                                            </div>
                                            <div className="text-fade mt-15">
                                                2 unique logo designs with facebook and twitter covers. All vector files; and unlimited revision.
                                            </div>
                                        </div>
                                        <div>
                                            <div className="text-left-right">
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-history"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span className="fa fa-refresh"></span>
                                                        <div className="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-star"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="pt-5 pb-5">
                                            <button className="btn btn-blue btn-block">
                                                Continue ($250)
                                            </button>
                                            <div className="mt-2.5">
                                                <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </Link>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="tab-pane container" id="price_2_premium">
                                        <div className="pt-5 pb-5">
                                            <div>
                                                <div className="pull-right font-20 font-bold text-blue">
                                                    $400
                                                </div>
                                                <div className="overflow-hidden pt-2.5">
                                                    Bespoke Designs (All branding packs)
                                                </div>
                                            </div>
                                            <div className="text-fade mt-15">
                                                5 supreme logo designs with social media covers, stationery designs, priority support, and all source files used in the making of all 5 logo designs.
                                            </div>
                                        </div>
                                        <div>
                                            <div className="text-left-right">
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-history"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span className="fa fa-refresh"></span>
                                                        <div className="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-star"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="pt-5 pb-5">
                                            <button className="btn btn-blue btn-block">
                                                Continue ($400)
                                            </button>
                                            <div className="mt-2.5">
                                                <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </Link>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                    <div className="section">
                        <div className="section-title">
                            Share Link
                        </div>
                        <div>
                            <div className="">
                                This is a private deal. Copy the link below to share.
                            </div>
                            <div>
                                <div className="copy-link mt-1.5">
                                    <div className="input-group">
                                        <input type="search" name="q" className="form-control" onfocus="highlightShareLink('direct-share-link-2')" id="direct-share-link-2" value="http://localhost:8001/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" readonly />
                                        <div className="input-group-btn">
                                            <button type="submit" className="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-2')" style="border-radius: 0 !important; height: 35px;">
                                                <span className="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div className="text-center mt-2.5">
                                    <button type="button" className="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span className="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div className="section d-none d-md-block d-lg-none">
                    <form action="">
                        <ul className="ul-inline">
                            <li>
                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Favourite" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-heart" style="position: relative; top: 1px;"></span>
                                </button>
                            </li>
                            <li>
                                <Link className="p-0" title="Share Deal" data-widget="collapse" data-toggle="tooltip">
                                    <button type="button" className="btn btn-transparent-black btn-xs hover-bg-orange" data-toggle="modal" data-target="#share">
                                        <span className="fas fa-share-alt"></span>
                                    </button>
                                </Link>
                            </li>
                            <li>
                                <Link data-toggle="modal" data-target="#flag" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Report Deal" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-flag"></span>
                                </Link>
                            </li>
                        </ul>
                    </form>
                </div>

                <div className="sticky-top d-none d-md-block d-lg-none mb-0">
                    <div className="section">
                        {/*tab */}
                        <div>
                            <ul className="nav nav-tabs posla-tabs posla-tabs-3">
                                <li className="nav-item">
                                    <Link className="nav-link active" data-toggle="tab" to="#price_3_basic">
                                        Basic
                                    </Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" data-toggle="tab" to="#price_3_standard">
                                        Standard
                                    </Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" data-toggle="tab" to="#price_3_premium">
                                        Premium
                                    </Link>
                                </li>
                            </ul>
                            
                            <form action="/cart">
                                <div className="tab-content">
                                    
                                    <div className="tab-pane container active p-0" id="price_3_basic">
                                        <div className="pt-5 pb-5">
                                            <div>
                                                <div className="pull-right ml-2.5 font-20 font-bold text-blue">
                                                    $150
                                                </div>
                                                <div className="overflow-hidden pt-1.5">
                                                    Basic Designs
                                                </div>
                                            </div>
                                            <div className="text-fade mt-15">
                                                2 basic logo designs with JPEG or JPG format and PNG format.
                                            </div>
                                        </div>
                                        <div>
                                            <div className="text-left-right">
                                                <div className="bg-eee">
                                                    <div className="w-100 pull-none">
                                                        <span className="fa fa-history"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div className="pl-2.5 pr-2.5">
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div className="w-100 pull-none">
                                                        <span className="fa fa-refresh"></span>
                                                        <div className="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div className="pl-2.5 pr-2.5">
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div className="bg-eee">
                                                    <div className="w-100 pull-none">
                                                        <span className="fa fa-star"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div className="pl-2.5 pr-2.5">
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="pt-5 pb-5">
                                            <button className="btn btn-blue btn-block">
                                                Continue ($150)
                                            </button>
                                            <div className="mt-2.5">
                                                <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </Link>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div className="tab-pane container p-0" id="price_3_standard">
                                        <div className="pt-5 pb-5">
                                            <div>
                                                <div className="pull-right ml-2.5 font-20 font-bold text-blue">
                                                    $250
                                                </div>
                                                <div className="overflow-hidden pt-1.5">
                                                    Recommended (Super-fast delivery)
                                                </div>
                                            </div>
                                            <div className="text-fade mt-15">
                                                2 unique logo designs with facebook and twitter covers. All vector files; and unlimited revision.
                                            </div>
                                        </div>
                                        <div>
                                            <div className="text-left-right">
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-history"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span className="fa fa-refresh"></span>
                                                        <div className="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-star"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="pt-5 pb-5">
                                            <button className="btn btn-blue btn-block">
                                                Continue ($250)
                                            </button>
                                            <div className="mt-2.5">
                                                <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </Link>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div className="tab-pane container p-0" id="price_3_premium">
                                        <div className="pt-5 pb-5">
                                            <div>
                                                <div className="pull-right ml-2.5 font-20 font-bold text-blue">
                                                    $400
                                                </div>
                                                <div className="overflow-hidden pt-1.5">
                                                    Bespoke Designs (All branding packs)
                                                </div>
                                            </div>
                                            <div className="text-fade mt-15">
                                                5 supreme logo designs with social media covers, stationery designs, priority support, and all source files used in the making of all 5 logo designs.
                                            </div>
                                        </div>
                                        <div>
                                            <div className="text-left-right">
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-history"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Date
                                                        </div>
                                                    </div>
                                                    <div>
                                                        1 day delivery
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <span className="fa fa-refresh"></span>
                                                        <div className="overflow-hidden">
                                                            Revisions
                                                        </div>
                                                    </div>
                                                    <div>
                                                        4 revisions
                                                    </div>
                                                </div>
                                                <div className="bg-eee">
                                                    <div>
                                                        <span className="fa fa-star"></span>
                                                        <div className="overflow-hidden">
                                                            Delivery Format
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Work & Deliver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="pt-5 pb-5">
                                            <button className="btn btn-blue btn-block">
                                                Continue ($400)
                                            </button>
                                            <div className="mt-2.5">
                                                <Link to="/messages/user000000" className="btn btn-transparent-black btn-block">
                                                    Contact Seller
                                                </Link>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div className="section">
                        <div className="section-title">
                            Share Link
                        </div>
                        <div>
                            <div className="">
                                This is a private deal.
                                <br />
                                Copy the link below to share.
                            </div>
                            <div>
                                <div className="copy-link mt-1.5">
                                    <div className="input-group">
                                        <input type="search" name="q" className="form-control" onfocus="highlightShareLink('direct-share-link-3')" id="direct-share-link-3" value="http://localhost:8001/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" readonly />
                                        <div className="input-group-btn">
                                            <button type="submit" className="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-3')" style="border-radius: 0 !important; height: 35px;">
                                                <span className="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div className="text-center mt-2.5">
                                    <button type="button" className="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span className="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        
        <hr />


        <div className="font-18 font-bold pb-10 text-center b-none">
            Other Deals from this seller
        </div>
        <div className="section">
            {/*-double, -lg-6  ||  -mini, -lg-3 */}
            <div className="deal-list deal-list-mini row">
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
            </div>
        </div>
            
        <hr />

        <div className="font-18 font-bold pb-10 text-center b-none">
            Similar Category_Name Deals
        </div>
        <div className="section">
            <div className="deal-list deal-list-mini row">
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div>
            </div>
        </div>
            

    </div>

@endsection