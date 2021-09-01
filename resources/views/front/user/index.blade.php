@extends('layouts.front.app')


@section('title')
    Abcde12345 - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Abcde12345 - Account - Posla">
    <meta name="keywords" content="Abcde12345 account, dashboard, user, Posla, Posla.com">
    <meta name="tags" content="Abcde12345 account dashboard user posla posla.com">
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
            <div class="col-md-4 col-lg-3">

                @include('front.common.user-sidebar')
                
            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/user/abcde12345">Abcde12345</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>

                
                
                <div class="section">
                    <div class="section-title">
                        Active Deals (6)
                        <a href="/user/abcde12345/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div>
                        {{-- maximum of 3 deals where status == active --}}

                        <div class="deal-list deal-list-mini row">
                            <div class="col-sm-6 col-lg-4">
                                @include('front.common.deal')
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                @include('front.common.deal')
                            </div>
                            <div class="col-sm-6 col-lg-4 d-none d-lg-block">
                                @include('front.common.deal')
                            </div>
                        </div>
                        <div>
                            <a href="/user/abcde12345/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                                View All Deals
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="section">
                    <div class="section-title">
                        Active Projects (6)
                        <a href="/user/abcde12345/projects" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div>
                        <div class="project-list project-list-wide">
                            {{-- maximum of 3 projects where status == active --}}
                            @include('front.common.project')
                            @include('front.common.project')
                            @include('front.common.project')
                        </div>
                    </div>
                    <div>
                        <a href="/user/abcde12345/projects" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Projects
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>


                <div class="section">
                    <div class="section-title">
                        Firstname's Reviews
                    </div>
                    <div class="floated-content">
                        <div class="rating-box rating-box-lg mt-5 mr-10 pull-left">
                            <div>
                                <div></div>
                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                            </div>
                            <div class="font-bold text-orange">
                                5.0
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="mt-15">
                                (Based on 253 ratings)
                            </div>
                        </div>
                    </div>
                    <div class="p-20 pb-0 mb-20 b-1-ddd">
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
                    <div class="section-title">
                        1809 Reviews
                        <a href="/user/abcde12345/reviews" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
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

                        <a href="/user/abcde12345/reviews" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Reviews
                            <span class="fa fa-angle-right"></span>
                        </a>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
