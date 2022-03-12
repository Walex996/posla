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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/">Home</Link></li>
                <li className="breadcrumb-item active" aria-current="page">Support</li>
            </ol>
        </div>

        <div className="d-none d-md-block font-20 font-bold text-center mt-5 mb-15">
            Support Center
        </div>

        <div className="d-block d-md-none font-16 font-bold text-center mt-5 mb-10">
            Support Center
        </div>

        <div className="section pb-0 pr-0 floated-content">
            
            <Link to="/support/tickets" className="b-1-ddd box-md text-center p-15 pt-5 mr-5 mb-5 pull-left br-5 d-inline-block cursor-pointer hover-bg-ddd">
                <div>
                    <span className="fa fa-clipboard icon-50 icon-50"></span>
                </div>
                <div className="mt-2.5">
                    My Support Tickets
                </div>
            </Link>

            <Link to="/support/tickets/new" className="b-1-orange box-md text-center p-15 pt-5 mr-5 mb-5 pull-left br-5 d-inline-block cursor-pointer bg-orange">
                <div>
                    <span className="fa fa-file icon-50 icon-fff"></span>
                </div>
                <div className="mt-2.5 text-fff">
                    Create New Support Ticket
                </div>
            </Link>

            <Link to="/account/resolution/orders" className="b-1-ddd box-md text-center p-15 pt-5 mr-5 mb-5 pull-left br-5 d-inline-block cursor-pointer hover-bg-ddd">
                <div>
                    <span className="fa fa-cart-arrow-down icon-50"></span>
                </div>
                <div className="mt-2.5">
                    Resolve issue with an order
                </div>
            </Link>

            <Link to="/support#faqs" className="b-1-ddd box-md text-center p-15 pt-5 mr-5 mb-5 pull-left br-5 d-inline-block cursor-pointer hover-bg-ddd">
                <div>
                    <span className="fa fa-question-circle icon-50"></span>
                </div>
                <div className="mt-2.5">
                    Frequently Asked Questions
                </div>
            </Link>

        </div>


        <div className="row">
            <div className="col-md-6">
                <div className="section">
                    <div className="section-title">
                        Call Us
                    </div>
                    <div style="height: 300px;">

                    </div>
                </div>
            </div>
            <div className="col-md-6">
                <div className="section">
                    <div className="section-title">
                        Visit Us
                    </div>
                    <div style="height: 300px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252166.63535308524!2d7.254269746931569!3d9.05430713526541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e745f4cd62fd9%3A0x53bd17b4a20ea12b!2sAbuja!5e0!3m2!1sen!2sng!4v1619193660096!5m2!1sen!2sng" frameborder="0" style="width: 100%; height: 100%; border: 0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div className="section p-5" id="faqs">
            <div className="font-18 font-bold text-center border-none">
                Frequently Asked Questions
            </div>

            <div className="bg-eee mt-15 p-2.5">
            <div className="b-1-ddd mx-auto layout-search">
                <div className="input-group">
                    <input type="search" name="s" className="form-control faq-search" placeholder="Search question and answer..." />
                </div>
            </div>
            </div>
            
            <div className="mx-auto mt-5 mw-800">
                <ul className="nav nav-tabs posla-tabs posla-tabs-2 nav-tabs-style-1 nav-tabs-style-1-lg-responsive">
                    <li className="nav-item">
                        <Link to="#buyers" className="nav-link active" data-toggle="tab">
                            Buyers
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link to="#sellers" className="nav-link" data-toggle="tab">
                            Sellers
                        </Link>
                    </li>
                </ul>
            </div>

            <div className="tab-content mt-5">
                <div className="tab-pane active" id="buyers">
                    
                    <div className="row">
                        <div className="col-md-6">
                            <div className="faq-category sticky-top mx-auto">

                                <Link className="faq-click-all faq-click-category active b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-blue hover-text-fff">
                                    <div>
                                        <span className="fa fa-list-alt icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        All FAQs
                                    </div>
                                </Link>

                                <Link className="faq-click-general faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-asterisk icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        General
                                    </div>
                                </Link>

                                <Link className="faq-click-projects faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-star icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Projects
                                    </div>
                                </Link>

                                <Link className="faq-click-orders faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-shopping-cart icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Orders
                                    </div>
                                </Link>
                                
                                <Link className="faq-click-payments faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-credit-card icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Payments
                                    </div>
                                </Link>

                                <Link className="faq-click-refunds faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-history icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Refunds
                                    </div>
                                </Link>

                            </div>
                        </div>
                        <div className="col-md-6">

                            <div className="faq-list mx-auto">


                                <div className="faq-q-orders faq-q-payments b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-1" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            aa Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-1" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, bb consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-orders b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-2" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            cc Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-2" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        dd Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-refunds b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-3" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            ee Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-3" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ff Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-4" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            gg Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-4" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        hh Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-5" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            ii Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-5" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        jj Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-projects faq-q-refunds faq-q-payments b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-6" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            kk Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-6" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ll Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-7" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-7" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general faq-q-projects b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-8" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-8" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>


                            </div>

                            <div className="bt-1-ddd pt-5 mt-5 text-center">
                                Didn't find the answer you were looking for?
                                <div className="mt-1.5">
                                    <Link to="/support/tickets/new" className="btn btn-orange btn-sm">Create New Ticket</Link>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                
                <div className="tab-pane" id="sellers">
                    
                    <div className="row">
                        <div className="col-md-6">
                            <div className="faq-category sticky-top mx-auto">

                                <Link className="faq-click-all faq-click-category active b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-blue hover-text-fff">
                                    <div>
                                        <span className="fa fa-list-alt icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        All FAQs
                                    </div>
                                </Link>

                                <Link className="faq-click-general faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-asterisk icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        General
                                    </div>
                                </Link>

                                <Link className="faq-click-deals faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-star icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Deals
                                    </div>
                                </Link>

                                <Link className="faq-click-orders faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-shopping-cart icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Orders
                                    </div>
                                </Link>
                                
                                <Link className="faq-click-payments faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-credit-card icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Payments
                                    </div>
                                </Link>

                                <Link className="faq-click-refunds faq-click-category b-1-ddd box text-center p-15 pt-30 ml-2.5 mr-2.5 mb-5 br-5 d-inline-block cursor-pointer hover-bg-ddd">
                                    <div>
                                        <span className="fa fa-history icon-50"></span>
                                    </div>
                                    <div className="mt-2.5">
                                        Refunds
                                    </div>
                                </Link>

                            </div>
                        </div>
                        <div className="col-md-6">

                            <div className="faq-list mx-auto">


                                <div className="faq-q-orders faq-q-payments b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-1" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            aa Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-1" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, bb consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-orders b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-2" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            cc Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-2" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        dd Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-refunds b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-3" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            ee Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-3" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ff Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-4" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            gg Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-4" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        hh Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-5" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            ii Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-5" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        jj Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-deals faq-q-refunds faq-q-payments b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-6" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            kk Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-6" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        ll Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-7" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-7" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>

                                <div className="faq-q-general faq-q-deals b-1-ddd mb-5">
                                    <div data-toggle="collapse" data-target="#faq-buyer-8" className="p-15">
                                        <div className="pull-right ml-2.5">
                                            <span className="fa fa-angle-down"></span>
                                        </div>
                                        <span className="font-bold faq-search-q">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                        </span>
                                    </div>
                                    <div id="faq-buyer-8" className="faq-search-a collapse p-15 bg-eee" style="line-height: 25px;">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                </div>


                            </div>

                            <div className="bt-1-ddd pt-5 mt-5 text-center">
                                Didn't find the answer you were looking for?
                                <div className="mt-1.5">
                                    <Link to="/support/tickets/new" className="btn btn-orange btn-sm">Create New Ticket</Link>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>

@endsection
