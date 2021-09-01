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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        @media screen and (min-width: 992px){
            .section-checkout{
                min-height: 434px;
            }
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 col-lg-8">

                <div class="section section-checkout">
                    <div class="section-title">
                        Checkout
                    </div>
                    <div>
                        
                        <div class="b-1-ddd bg-eee p-10">
                            Select Payment Option
                        </div>

                        <div class="b-1-ddd p-20">
                        
                            <div class="row checkout-payment-options">
                                <div class="col-sm-6">
                                    {{-- <form action="{{ url('charge') }}" method="POST"> --}}
                                    <form action="{{ route('cart.process.paypal', $type->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="100"/>

                                        <button type="submit">
                                            <div>
                                                <span class="fa fa-angle-right"></span>
                                            </div>
                                            <div>
                                                <img src="{{asset('img/app/icons/paypal.jpg')}}" alt="PayPal" class="dp-contain" />
                                            </div>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <form action="{{route('cart.paystack', $type->id)}}" method="POST">
                                        @csrf

                                        <button type="submit">
                                            <div>
                                                <span class="fa fa-angle-right"></span>
                                            </div>
                                            <div>
                                                <img src="{{asset('img/app/icons/paystack.jpg')}}" alt="paystack" class="dp-contain" />
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-12 col-lg-4">

                <div class="sticky-top">
                    <div class="section">
                        <div class="section-title">
                            Summary
                        </div>
                        <div>

                            <div class="">
                                <a href="/deal/12345678" class="deal pb-10" style="height: auto;">
                                    <div class="deal-info-top">
                                        <div>
                                            src="{{asset($type->deal->getFirstMediaUrl() ? $type->deal->getFirstMediaUrl() : 'img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                                        </div>
                                        <div class="">
                                            <div>
                                                <img ssrc="{{asset($type->deal->owner->getFirstMediaUrl('profile') ? $type->deal->owner->getFirstMediaUrl('profile') : 'img/app/samples/user.png')}}"  alt="Olawale Lawal" class="dp-contain" />
                                            </div>
                                            <div class="text-fade font-13 ellipsis">
                                                {{$type->deal->owner->name}}
                                            </div>
                                        </div>
                                        <div class="font-bold ellipsis-2-lines mt-5 pr-10 pl-10">
                                            {{$type->deal->title}}
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="text-left-right text-left-right-p-10 text-left-right-60-40 bt-1-ddd">
                                <div>
                                    <div>
                                        Subtotal:
                                    </div>
                                    <div class="text-right">
                                        ${{$type->price}}
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        Service fee & VAT:
                                    </div>
                                    <div class="text-right">
                                         ${{$type->service_fee_and_vat}}
                                    </div>
                                </div>
                                <hr class="mt-10 mb-10 hr-2">
                                <div class="bg-eee">
                                    <div class="font-bold">
                                        Total:
                                    </div>
                                    <div class="font-bold text-right">
                                        ${{$type->total}}
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        Delivery Time:
                                    </div>
                                    <div class="text-right">
                                         {{$type->delivery_timeframe}} day(s)
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="section mb-0">
                        <div class="text-center overflow-hidden" style="height: 40px;">
                            <img src="{{asset('img/app/icons/payment-cards.png')}}" alt="Payment Options" class="dp-contain" />
                        </div>
                        <div class="text-fade mt-15 text-center d-none">
                            Secured Payment System
                        </div>
                    </div>
                </div>
            
            </div>

        </div>


    </div>

@endsection
