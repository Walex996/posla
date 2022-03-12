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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                <li className="breadcrumb-item"><Link to="/account/orders">Orders</Link></li>
                <li className="breadcrumb-item"><Link to="/account/orders/123456789012">123456789012</Link></li>
                <li className="breadcrumb-item active" aria-current="page">Deliver</li>
            </ol>
        </div>

        <div className="section">
            <div className="section-title section-title-sm">
                Deliver - Order #123456789012
            </div>

            <div className="row">
                <div className="col-lg-3">
                    
                    <div className="row sticky-top">
                        <div className="col-sm-6 col-lg-12">
                            <div className="floated-content p-2.5 mb-30 b-1-ddd">
                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="pull-left mr-2.5 d-block d-lg-none d-xl-block overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                </Link>
                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="mr-2.5 d-none d-lg-block d-xl-none overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                </Link>
                                <div className="overflow-hidden">
                                    <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="font-bold hover-underline">
                                        I will design a beautiful logo for your business
                                    </Link>
                                    <div className="text-fade mt-1.5">
                                        <div>
                                            Category (Subcategory)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div className="col-lg-9">

                    <form method="post" action="/account/order/123456789012" className="form b-1-ddd p-5-10">
                        <div className="mb-5">
                            <h5 className="font-13 font-bold text-center">
                                Deliver this Order
                            </h5>
                        </div>

                        <div className="note text-center">
                            Before you deliver, please ensure the project is completed and inline with the buyer's requests.
                        </div>

                        <div className="row mt-30">
                            
                            <div className="col-md-6 mb-30">
                                <div className="b-1-ddd p-5 bg-fff">
                                    <div className="font-bold">
                                        Upload Files:
                                    </div>
                                    <div className="text-red text-small">
                                        Max: 2gb | picture, video, audio, document
                                    </div>
                                    <div className="mt-1.5 b-1-ddd p-2.5" style="height: 100px;">
                                        
                                    </div>
                                </div>
                            </div>

                            <div className="col-md-6 mb-30">
                                <div className="b-1-ddd p-5 bg-fff">
                                    <div className="font-bold">
                                        Delivery Message:
                                    </div>
                                    <div className="mt-1.5">
                                        <div className="form-group">
                                            <textarea name="" style="height: 100px;" className="form-control resize-none" placeholder="Hi, thanks for your order. Here's your delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div className="bt-1-ddd pt-5">
                            <button type="submit" className="btn btn-blue btn-block">
                                Deliver Project
                            </button>
                            <Link to="/account/orders/123456789012" className="btn btn-transparent-black btn-block mt-1.5">
                                Cancel
                            </Link>
                        </div>

                    </form>
                    
                </div>
            </div>

        </div>

    </div>

@endsection
