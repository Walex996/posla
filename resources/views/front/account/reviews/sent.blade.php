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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-reviews{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        Reviews
                    </div>
                    <div>
                        
                        <ul class="nav nav-tabs posla-tabs posla-tabs-2">
                            <li class="nav-item">
                                <a href="/account/reviews/received" class="nav-link">
                                    <div class="text-center">
                                        Received (6)
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/account/reviews/sent" class="nav-link active">
                                    <div class="text-center">
                                        Sent (13)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    
                        <div class="b-1-ddd p-20-10-responsive">
                            

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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
                            

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I need a mobile application for an ecommerce startup.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Project</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Project
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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
                                

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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
                                

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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
                                

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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
                                

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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
                                

                            <div class="mb-20">
                                <a href="" class="p-20-10-responsive d-block b-1-ddd bb-none pt-10 pb-10 hover-bg-ddd">
                                    <div class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="font-bold ellipsis">
                                            I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                                        </div>
                                        <div class="pt-3">
                                            <label class="label-md d-inline bg-blue pr-10 pl-10 pt-2 pb-2 mr-5 text-fff br-5 pull-left">Posla Deal</label>
                                            <button type="button" class="btn btn-transparent-black btn-xs icon-right pull-left">
                                                View Deal
                                                <span class="fa fa-angle-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </a>

                                <div class="user-msg b-1-ddd">
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

                </div>


            </div>
        </div>
    </div>

@endsection
