@extends('layouts.front.app')


@section('title')
    Status - Checkout
@endsection


@section('og')
    <meta name="description" content="Status Checkout - Posla">
    <meta name="keywords" content="Status, Checkout, Posla, Posla.com">
    <meta name="tags" content="status checkout posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection


@section('content')
    
    <div class="container">

        <div class="page-alert page-alert-success mb-30">
            <span class="fa fa-check-circle"></span>
            <div class="pt-15">
                Payment Successful
            </div>
            <div class="font-14">
                Your payment for this deal was successful.
                <br>
                Please click the button below to start your order.
                Thank you.
                <br>
                <div class="text-333">
                    Order Number : <code class="font-bold font-14">#121212122112</code>
                </div>
            </div>
        </div>

        {{-- 
        <div class="page-alert page-alert-error mb-30">
            <span class="fa fa-times-circle"></span>
            <div class="pt-15">
                Payment Failed
            </div>
            <div class="font-14 text-fade">
                Your payment for this deal was not successful.
                <br>
                Please try again later or <a href="/contact" class="underline text-fade">contact us</a> if you feel this is an error from us.
                <br>
                Thank you.
            </div>
            <div class="text-333">
                Order Number : <code class="font-bold font-14 text-orange">#121212122112</code>
            </div>
        </div>
         --}}

        <div class="section mw-600 mx-auto">
            <div class="bg-eee p-10 text-center">
                Your Order
            </div>
            <div class="">
                <div class="mt-10">
                    <a class="deal pb-10 bg-fff" style="height: auto;">
                        <div class="deal-info-top">
                            <div>
                                <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" class="dp-cover" />
                            </div>
                            <div class="">
                                <div>
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Olawale Lawal" class="dp-contain" />
                                </div>
                                <div class="text-fade font-13 ellipsis">
                                    Olawale Lawal
                                </div>
                            </div>
                            <div class="font-bold ellipsis-2-lines mt-5 pr-10 pl-10">
                                I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pt-20 pb-20 bt-1-ddd text-center">
                <div>
                    To keep track of your order/project, please visit
                </div>
                <div class="font-bold">
                    My Account
                    >
                    My Orders
                    >
                    View Details
                </div>
                <div>
                    <a href="/account/orders/122121212112" class="btn btn-orange btn-block btn-md mt-10">
                        View My Order
                    </a>
                    <a href="/" class="btn btn-transparent-black btn-block btn-md mt-10">
                        Goto Homepage
                    </a>
                </div>
            </div>
        </div>


    </div>

@endsection
