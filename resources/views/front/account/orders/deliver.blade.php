@extends('layouts.front.app')


@section('title')
    Deliver - Order - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Deliver Order - Posla">
    <meta name="keywords" content="deliver orders, user, Posla, Posla.com">
    <meta name="tags" content="deliver orders account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-orders{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .table-history tbody tr > td:nth-child(1) > div,
        .table-history tbody tr > td:nth-child(3) > div,
        .table-history tbody tr > td:nth-child(4) > div{
            min-width: 80px;
        }
        .table-history tbody tr > td:nth-child(2) > div{
            /* min-width: 300px; */
            /* max-width: 400px; */
        }
    </style>
@endsection


@section('content')
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/account">Account</a></li>
                <li class="breadcrumb-item"><a href="/account/orders">Orders</a></li>
                <li class="breadcrumb-item"><a href="/account/orders/123456789012">123456789012</a></li>
                <li class="breadcrumb-item active" aria-current="page">Deliver</li>
            </ol>
        </div>

        <div class="section">
            <div class="section-title section-title-sm">
                Deliver - Order #123456789012
            </div>

            <div class="row">
                <div class="col-lg-3">
                    
                    <div class="row sticky-top">
                        <div class="col-sm-6 col-lg-12">
                            <div class="floated-content p-10 mb-30 b-1-ddd">
                                <a href="/deal/1234" class="pull-left mr-10 d-block d-lg-none d-xl-block overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                </a>
                                <a href="/deal/1234" class="mr-10 d-none d-lg-block d-xl-none overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                </a>
                                <div class="overflow-hidden">
                                    <a href="/deal/1234" class="font-bold hover-underline">
                                        I will design a beautiful logo for your business
                                    </a>
                                    <div class="text-fade mt-5">
                                        <div>
                                            Category (Subcategory)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div class="col-lg-9">

                    <form method="post" action="/account/order/123456789012" class="form b-1-ddd p-20-10">
                        <div class="mb-20">
                            <h5 class="font-13 font-bold text-center">
                                Deliver this Order
                            </h5>
                        </div>

                        <div class="note text-center">
                            Before you deliver, please ensure the project is completed and inline with the buyer's requests.
                        </div>

                        <div class="row mt-30">
                            
                            <div class="col-md-6 mb-30">
                                <div class="b-1-ddd p-20 bg-fff">
                                    <div class="font-bold">
                                        Upload Files:
                                    </div>
                                    <div class="text-red text-small">
                                        Max: 2gb | picture, video, audio, document
                                    </div>
                                    <div class="mt-5 b-1-ddd p-10" style="height: 100px;">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-30">
                                <div class="b-1-ddd p-20 bg-fff">
                                    <div class="font-bold">
                                        Delivery Message:
                                    </div>
                                    <div class="mt-5">
                                        <div class="form-group">
                                            <textarea name="" style="height: 100px;" class="form-control resize-none" placeholder="Hi, thanks for your order. Here's your delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="bt-1-ddd pt-20">
                            <button type="submit" class="btn btn-blue btn-block">
                                Deliver Project
                            </button>
                            <a href="/account/orders/123456789012" class="btn btn-transparent-black btn-block mt-5">
                                Cancel
                            </a>
                        </div>

                    </form>
                    
                </div>
            </div>

        </div>

    </div>

@endsection
