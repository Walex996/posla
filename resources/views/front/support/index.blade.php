@extends('layouts.front.app')


@section('title')
    Support Center
@endsection


@section('og')
    <meta name="description" content="Support Center - Posla">
    <meta name="keywords" content="Support Center, Help, Posla, Posla.com">
    <meta name="tags" content="support center help posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        @media screen and (min-width: 768px) {
            .faq-category{
                max-width: 475px;
                /* background: #eee; */
                float: right;
                text-align: right;
            }
            .faq-list{
                max-width: 475px;
            }
            .box-md{
                width: 150px;
                height: 150px;
            }
        }
        @media screen and (max-width: 767px) {
            .faq-category{
                text-align: center;
            }
            .box-md{
                width: 145px;
                height: 145px;
            }
        }
        @media screen and (min-width: 992px) {
            .box{
                width: 135px;
                height: 135px;
            }
        }
        @media screen and (max-width: 991px) {
            .box{
                width: 130px;
                height: 130px;
            }
        }
        .faq-click-category.active{
            border-width: 2px;
            border-color: #FF940A;
        }
    </style>
@endsection


@section('js')
<script>
    $(document).ready(function(){
            
        $(".faq-search").keyup(function(){
            // alert('a');
            var search_query = $(this).val().toLowerCase();
            // alert(search_query);
            
            $(".faq-list > div").each(function(){
                var this_ = $(this);
                var search_title = $(this).find(".faq-search-q");
                var search_content = $(this).find(".faq-search-a");
                if((search_title.text().trim().toLowerCase().search(search_query)!=-1) || (search_content.text().trim().toLowerCase().search(search_query)!=-1)){
                    this_.slideDown(200);
                }
                else{
                    this_.slideUp(200);
                }
            });
        });
            
        $(".faq-click-category").click(function(){
            $(".faq-search").val('');
        });
        
        $(".faq-click-all").click(function(){
            $(".faq-list > div").slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(".faq-click-all").addClass("active");
        });
       
        $(`.faq-click-general`).click(function(){
            $(`.faq-list > div:not(.faq-q-general`).slideUp(200);
            $(`.faq-list > div.faq-q-general`).slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(`.faq-click-general`).addClass("active");
        });
       
        $(`.faq-click-projects`).click(function(){
            $(`.faq-list > div:not(.faq-q-projects`).slideUp(200);
            $(`.faq-list > div.faq-q-projects`).slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(`.faq-click-projects`).addClass("active");
        });
       
        $(`.faq-click-deals`).click(function(){
            $(`.faq-list > div:not(.faq-q-deals`).slideUp(200);
            $(`.faq-list > div.faq-q-deals`).slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(`.faq-click-deals`).addClass("active");
        });
       
        $(`.faq-click-orders`).click(function(){
            $(`.faq-list > div:not(.faq-q-orders`).slideUp(200);
            $(`.faq-list > div.faq-q-orders`).slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(`.faq-click-orders`).addClass("active");
        });
       
        $(`.faq-click-payments`).click(function(){
            $(`.faq-list > div:not(.faq-q-payments`).slideUp(200);
            $(`.faq-list > div.faq-q-payments`).slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(`.faq-click-payments`).addClass("active");
        });
       
        $(`.faq-click-refunds`).click(function(){
            $(`.faq-list > div:not(.faq-q-refunds`).slideUp(200);
            $(`.faq-list > div.faq-q-refunds`).slideDown(200);
            $(".faq-click-category").removeClass("active");
            $(`.faq-click-refunds`).addClass("active");
        });

    });
</script>
@endsection



@section('content')
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Support</li>
            </ol>
        </div>

        <div class="d-none d-md-block font-20 font-bold text-center mt-20 mb-15">
            Support Center
        </div>

        <div class="d-block d-md-none font-16 font-bold text-center mt-20 mb-10">
            Support Center
        </div>

        <div class="section pb-0 pr-0 floated-content">
            
            <a href="/support/tickets" class="b-1-ddd box-md text-center p-15 pt-20 mr-20 mb-20 pull-left br-5 d-inline-block cursor-pointer hover-bg-ddd">
                <div>
                    <span class="fa fa-clipboard icon-50 icon-50"></span>
                </div>
                <div class="mt-10">
                    My Support Tickets
                </div>
            </a>

            <a href="/support/tickets/new" class="b-1-orange box-md text-center p-15 pt-20 mr-20 mb-20 pull-left br-5 d-inline-block cursor-pointer bg-orange">
                <div>
                    <span class="fa fa-file icon-50 icon-fff"></span>
                </div>
                <div class="mt-10 text-fff">
                    Create New Support Ticket
                </div>
            </a>

            <a href="/account/resolution/orders" class="b-1-ddd box-md text-center p-15 pt-20 mr-20 mb-20 pull-left br-5 d-inline-block cursor-pointer hover-bg-ddd">
                <div>
                    <span class="fa fa-cart-arrow-down icon-50"></span>
                </div>
                <div class="mt-10">
                    Resolve issue with an order
                </div>
            </a>

            <a href="/support#faqs" class="b-1-ddd box-md text-center p-15 pt-20 mr-20 mb-20 pull-left br-5 d-inline-block cursor-pointer hover-bg-ddd">
                <div>
                    <span class="fa fa-question-circle icon-50"></span>
                </div>
                <div class="mt-10">
                    Frequently Asked Questions
                </div>
            </a>

        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="section">
                    <div class="section-title">
                        Call Us
                    </div>
                    <div style="height: 300px;">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section">
                    <div class="section-title">
                        Visit Us
                    </div>
                    <div style="height: 300px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252166.63535308524!2d7.254269746931569!3d9.05430713526541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e745f4cd62fd9%3A0x53bd17b4a20ea12b!2sAbuja!5e0!3m2!1sen!2sng!4v1619193660096!5m2!1sen!2sng" frameborder="0" style="width: 100%; height: 100%; border: 0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="section p-20" id="faqs">
            <div class="font-18 font-bold text-center border-none">
                Frequently Asked Questions
            </div>

            <div class="bg-eee mt-15 p-10">
            <div class="b-1-ddd mx-auto layout-search">
                <div class="input-group">
                    <input type="search" name="s" class="form-control faq-search" placeholder="Search question and answer..." />
                </div>
            </div>
            </div>
            
            <div class="mx-auto mt-20 mw-800">
                <ul class="nav nav-tabs posla-tabs posla-tabs-2 nav-tabs-style-1 nav-tabs-style-1-lg-responsive">
                    <li class="nav-item">
                        <a href="#buyers" class="nav-link active" data-toggle="tab">
                            Buyers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#sellers" class="nav-link" data-toggle="tab">
                            Sellers
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content mt-20">
                <div class="tab-pane active" id="buyers">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="faq-category sticky-top mx-auto">

                                <a class="faq-click-all faq-click-category active b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-blue hover-text-fff">
                                    <div>
                                        <span class="fa fa-list-alt icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        All FAQs
                                    </div>
                                </a>

                                <a class="faq-click-general faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-asterisk icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        General
                                    </div>
                                </a>

                                <a class="faq-click-projects faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-star icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Projects
                                    </div>
                                </a>

                                <a class="faq-click-orders faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-shopping-cart icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Orders
                                    </div>
                                </a>
                                
                                <a class="faq-click-payments faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-credit-card icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Payments
                                    </div>
                                </a>

                                <a class="faq-click-refunds faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-history icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Refunds
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="faq-list mx-auto">


                                <div class="faq-q-orders faq-q-payments b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-1" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            aa Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-1" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, bb consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-orders b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-2" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            cc Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-2" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        dd Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-refunds b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-3" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            ee Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-3" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ff Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-4" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            gg Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-4" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        hh Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-5" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            ii Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-5" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        jj Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-projects faq-q-refunds faq-q-payments b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-6" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            kk Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-6" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ll Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-7" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-7" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general faq-q-projects b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-8" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-8" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>


                            </div>

                            <div class="bt-1-ddd pt-20 mt-20 text-center">
                                Didn't find the answer you were looking for?
                                <div class="mt-5">
                                    <a href="/support/tickets/new" class="btn btn-orange btn-sm">Create New Ticket</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                
                <div class="tab-pane" id="sellers">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="faq-category sticky-top mx-auto">

                                <a class="faq-click-all faq-click-category active b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-blue hover-text-fff">
                                    <div>
                                        <span class="fa fa-list-alt icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        All FAQs
                                    </div>
                                </a>

                                <a class="faq-click-general faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-asterisk icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        General
                                    </div>
                                </a>

                                <a class="faq-click-deals faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-star icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Deals
                                    </div>
                                </a>

                                <a class="faq-click-orders faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-shopping-cart icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Orders
                                    </div>
                                </a>
                                
                                <a class="faq-click-payments faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-credit-card icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Payments
                                    </div>
                                </a>

                                <a class="faq-click-refunds faq-click-category b-1-ddd box text-center p-15 pt-30 ml-10 mr-10 mb-20 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span class="fa fa-history icon-50"></span>
                                    </div>
                                    <div class="mt-10">
                                        Refunds
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="faq-list mx-auto">


                                <div class="faq-q-orders faq-q-payments b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-1" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            aa Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-1" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, bb consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-orders b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-2" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            cc Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-2" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        dd Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-refunds b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-3" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            ee Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-3" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ff Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-4" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            gg Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-4" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        hh Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-5" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            ii Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-5" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        jj Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-deals faq-q-refunds faq-q-payments b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-6" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            kk Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-6" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ll Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-7" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-7" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div class="faq-q-general faq-q-deals b-1-ddd mb-20">
                                    <div data-toggle="collapse" data-target="#faq-buyer-8" class="p-15">
                                        <div class="pull-right ml-10">
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <span class="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-8" class="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>


                            </div>

                            <div class="bt-1-ddd pt-20 mt-20 text-center">
                                Didn't find the answer you were looking for?
                                <div class="mt-5">
                                    <a href="/support/tickets/new" class="btn btn-orange btn-sm">Create New Ticket</a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>

@endsection
