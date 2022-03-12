@extends('layouts.front.app')


@section('title')
    Checkout
@endsection


@section('og')
    <meta name="description" content="Checkout - Posla">
    <meta name="keywords" content="Checkout, Posla, Posla.com">
    <meta name="tags" content="checkout posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        @media screen and (min-width: 992px){
            .section-checkout{
                min-height: 434px;
            }
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            
            <div className="col-md-12 col-lg-8">

                <div className="section section-checkout">
                    <div className="section-title">
                        Checkout
                    </div>
                    <div>
                        
                        <div className="b-1-ddd bg-eee p-2.5">
                            Select Payment Option
                        </div>

                        <div className="b-1-ddd p-5">
                        
                            <div className="row checkout-payment-options">
                                <div className="col-sm-6">
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="100"/>

                                        <button type="submit">
                                            <div>
                                                <span className="fa fa-angle-right"></span>
                                            </div>
                                            <div>
                                                <img src="{{asset('img/app/icons/paypal.jpg')}}" alt="PayPal" className="dp-contain" />
                                            </div>
                                        </button>
                                    </form>
                                </div>
                                <div className="col-sm-6">
                                    <form action="" method="POST">
                                        @csrf

                                        <button type="submit">
                                            <div>
                                                <span className="fa fa-angle-right"></span>
                                            </div>
                                            <div>
                                                <img src="{{asset('img/app/icons/paystack.jpg')}}" alt="paystack" className="dp-contain" />
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>

            <div className="col-md-12 col-lg-4">

                <div className="sticky-top">
                    <div className="section">
                        <div className="section-title">
                            Summary
                        </div>
                        <div>

                            <div className="">
                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="deal pb-10" style="height: auto;">
                                    <div className="deal-info-top">
                                        <div>
                                            <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                                        </div>
                                        <div className="">
                                            <div>
                                                <img src="{{asset('img/app/samples/user.png')}}"  alt="Olawale Lawal" className="dp-contain" />
                                            </div>
                                            <div className="text-fade font-13 ellipsis">
                                                Olawale lawal
                                            </div>
                                        </div>
                                        <div className="font-bold ellipsis-2-lines mt-1.5 pr-2.5 pl-2.5">
                                            I will create awesome & on-point podcast script for your episodes
                                        </div>
                                    </div>
                                </Link>
                            </div>

                            <div className="text-left-right text-left-right-p-2.5 text-left-right-60-40 bt-1-ddd">
                                <div>
                                    <div>
                                        Subtotal:
                                    </div>
                                    <div className="text-right">
                                        $100
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        Service fee & VAT:
                                    </div>
                                    <div className="text-right">
                                        $50
                                    </div>
                                </div>
                                <hr className="mt-2.5 mb-10 hr-2">
                                <div className="bg-eee">
                                    <div className="font-bold">
                                        Total:
                                    </div>
                                    <div className="font-bold text-right">
                                        $150
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        Delivery Time:
                                    </div>
                                    <div className="text-right">
                                        1 day
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div className="section mb-0">
                        <div className="text-center overflow-hidden" style="height: 40px;">
                            <img src="{{asset('img/app/icons/payment-cards.png')}}" alt="Payment Options" className="dp-contain" />
                        </div>
                        <div className="text-fade mt-15 text-center d-none">
                            Secured Payment System
                        </div>
                    </div>
                </div>
            
            </div>

        </div>


    </div>

@endsection
