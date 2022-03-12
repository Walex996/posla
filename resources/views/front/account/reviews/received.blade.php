@extends('layouts.front.app')


@section('title')
    Reviews - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Reviews Received - Posla">
    <meta name="keywords" content="reviews, received, user, Posla, Posla.com">
    <meta name="tags" content="reviews received account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-reviews{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            <div className="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Reviews</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Reviews
                    </div>
                    <div>
                        
                        <ul className="nav nav-tabs posla-tabs posla-tabs-2">
                            <li className="nav-item">
                                <Link to="/account/reviews/received" className="nav-link active">
                                    <div className="text-center">
                                        Received (6)
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/account/reviews/sent" className="nav-link">
                                    <div className="text-center">
                                        Sent (13)
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    
                        <div className="b-1-ddd p-5-10-responsive">
                            

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                            

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I need a mobile application for an ecommerce startup.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Project</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Project
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                                

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                                

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                                

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                                

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                                

                            <div className="mb-5">
                                <Link to="" className="p-5-10-responsive d-block b-1-ddd bb-none pt-2.5 pb-10 hover-bg-ddd">
                                    <div className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                    </div>
                                    <div className="overflow-hidden">
                                        <div className="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div className="pt-3">
                                            <label className="label-md d-inline bg-blue pr-2.5 pl-2.5 pt-2 pb-2 mr-1.5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" className="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span className="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </Link>

                                <div className="user-msg b-1-ddd">
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
                            </div>
                                

                        </div>
                        
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
