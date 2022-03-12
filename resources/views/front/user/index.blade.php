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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            <div className="col-md-4 col-lg-3">

                @include('front.common.user-sidebar')
                
            </div>

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/user/abcde12345">Abcde12345</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>

                
                
                <div className="section">
                    <div className="section-title">
                        Active Deals (6)
                        <Link to="/user/abcde12345/deals" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div>
                        {{-- maximum of 3 deals where status == active --}}

                        <div className="deal-list deal-list-mini row">
                            <div className="col-sm-6 col-lg-4">
                                @include('front.common.deal')
                            </div>
                            <div className="col-sm-6 col-lg-4">
                                @include('front.common.deal')
                            </div>
                            <div className="col-sm-6 col-lg-4 d-none d-lg-block">
                                @include('front.common.deal')
                            </div>
                        </div>
                        <div>
                            <Link to="/user/abcde12345/deals" className="d-block text-center pt-2.5 pb-10 b-1-ddd bg-eee hover-bg-orange">
                                View All Deals
                                <span className="fa fa-angle-right"></span>
                            </Link>
                        </div>
                    </div>
                </div>


                <div className="section">
                    <div className="section-title">
                        Active Projects (6)
                        <Link to="/user/abcde12345/projects" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div>
                        <div className="project-list project-list-wide">
                            {{-- maximum of 3 projects where status == active --}}
                            @include('front.common.project')
                            @include('front.common.project')
                            @include('front.common.project')
                        </div>
                    </div>
                    <div>
                        <Link to="/user/abcde12345/projects" className="d-block text-center pt-2.5 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Projects
                            <span className="fa fa-angle-right"></span>
                        </Link>
                    </div>
                </div>


                <div className="section">
                    <div className="section-title">
                        Firstname's Reviews
                    </div>
                    <div className="floated-content">
                        <div className="rating-box rating-box-lg mt-1.5 mr-2.5 pull-left">
                            <div>
                                <div></div>
                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                            </div>
                            <div className="font-bold text-orange">
                                5.0
                            </div>
                        </div>
                        <div className="overflow-hidden">
                            <div className="mt-15">
                                (Based on 253 ratings)
                            </div>
                        </div>
                    </div>
                    <div className="p-5 pb-0 mb-5 b-1-ddd">
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
                    <div className="section-title">
                        1809 Reviews
                        <Link to="/user/abcde12345/reviews" className="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</Link>
                    </div>
                    <div>
                        
                        <div className="user-msg b-1-eee">
                            <div className="overflow-hidden">
                                <div className="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
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
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
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
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
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
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
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
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="pull-right d-none d-sm-block">
                                    <div className="rating-box mt-1.5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
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
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
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

                        <Link to="/user/abcde12345/reviews" className="d-block text-center pt-2.5 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Reviews
                            <span className="fa fa-angle-right"></span>
                        </Link>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
