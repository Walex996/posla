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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
    </style>
@endsection


@section('content')
    
    <div className="container">

        <div className="page-alert page-alert-success mb-30">
            <span className="fa fa-check-circle"></span>
            <div className="pt-15">
                Payment Successful
            </div>
            <div className="font-14">
                Your payment for this deal was successful.
                <br />
                Please click the button below to start your order.
                Thank you.
                <br />
                <div className="text-333">
                    Order Number : <code className="font-bold font-14">#121212122112</code>
                </div>
            </div>
        </div>

        {{-- 
        <div className="page-alert page-alert-error mb-30">
            <span className="fa fa-times-circle"></span>
            <div className="pt-15">
                Payment Failed
            </div>
            <div className="font-14 text-fade">
                Your payment for this deal was not successful.
                <br />
                Please try again later or <Link to="/contact" className="underline text-fade">contact us</Link> if you feel this is an error from us.
                <br />
                Thank you.
            </div>
            <div className="text-333">
                Order Number : <code className="font-bold font-14 text-orange">#121212122112</code>
            </div>
        </div>
         --}}

        <div className="section mw-600 mx-auto">
            <div className="bg-eee p-2.5 text-center">
                Your Order
            </div>
            <div className="">
                <div className="mt-2.5">
                    <Link className="deal pb-10 bg-fff" style="height: auto;">
                        <div className="deal-info-top">
                            <div>
                                <img src="{{asset('img/app/samples/deal-1.png')}}" alt="Olawale Lawal" className="dp-cover" />
                            </div>
                            <div className="">
                                <div>
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Olawale Lawal" className="dp-contain" />
                                </div>
                                <div className="text-fade font-13 ellipsis">
                                    Olawale Lawal
                                </div>
                            </div>
                            <div className="font-bold ellipsis-2-lines mt-1.5 pr-2.5 pl-2.5">
                                I can build a beautiful bespoke logo for your company using the style and color combination you prefer.
                            </div>
                        </div>
                    </Link>
                </div>
            </div>
            <div className="pt-5 pb-5 bt-1-ddd text-center">
                <div>
                    To keep track of your order/project, please visit
                </div>
                <div className="font-bold">
                    My Account
                    >
                    My Orders
                    >
                    View Details
                </div>
                <div>
                    <Link to="/account/orders/122121212112" className="btn btn-orange btn-block btn-md mt-2.5">
                        View My Order
                    </Link>
                    <Link to="/" className="btn btn-transparent-black btn-block btn-md mt-2.5">
                        Goto Homepage
                    </Link>
                </div>
            </div>
        </div>


    </div>

@endsection
