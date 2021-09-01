@extends('layouts.front.app')


@section('title')
    Abcde12345's Reviews - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Abcde12345's Reviews - Account - Posla">
    <meta name="keywords" content="Abcde12345's Reviews account, dashboard, user, Posla, Posla.com">
    <meta name="tags" content="Abcde12345's Reviews account dashboard user posla posla.com">
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
                        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                    </ol>
                </div>
                
                <div class="">

                    <div class="section">
                        <div class="section-title">
                            Firstname's Reviews (6)
                        </div>
                        
                        <div>

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

                    <div class="section">
                        {{-- //for pagination --}}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
