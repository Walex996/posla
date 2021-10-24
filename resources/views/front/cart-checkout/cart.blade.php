@extends('layouts.front.app')


@section('title')
    Cart
@endsection


@section('og')
    <meta name="description" content="Cart - Posla">
    <meta name="keywords" content="Cart, Posla, Posla.com">
    <meta name="tags" content="cart posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .table-cart tbody tr > td:nth-child(2) > div,
        .table-cart tbody tr > td:nth-child(3) > div{
            min-width: 80px;
        }
        @media screen and (min-width: 992px){
            .section-cart{
                min-height: 434px;
            }
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 col-lg-8">

                <div class="section section-cart mb-0">
                    <div class="section-title">
                        Cart
                    </div>
                    <div>
                        
                        <div class="table-responsive b-1-ddd">
                            <table class="table table-tr-lines table-cart">
                                <thead>
                                    <tr class="bg-eee">
                                        <th></th>
                                        <th class="d-none d-sm-table-cell"></th>
                                        <th class="d-none d-md-table-cell d-lg-none d-xl-table-cell"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="overflow-hidden">
                                                <a href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" class="pull-left m-10 mr-15 d-none d-sm-block overflow-hidden" style="max-width: 200px; max-height: 200px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" class="dp-contain" />
                                                </a>
                                                <a href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" class="pull-left mt-10 mr-15 d-block d-sm-none overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" class="dp-contain" />
                                                </a>
                                                <div class="overflow-hidden">
                                                    <a href="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" class="font-bold mt-10 d-inline-block hover-underline">
                                                        deal title here
                                                    </a>
                                                    <div class="text-fade mt-10">
                                                        <div>
                                                            Category name (subcategory name)
                                                        </div>
                                                        <div class="mt-5">
                                                            Package: basic designs
                                                        </div>
                                                        <div class="mt-5" data-toggle="collapse" data-target="#package-details">
                                                            Package Details
                                                            <span class="fa fa-angle-down icon-333"></span>
                                                        </div>
                                                        <div id="package-details" class="collapse">
                                                            <div class="p-10 pl-15 pr-15 mt-5 b-1-ddd d-inline-block">
                                                                <ul class="list-style">
                                                                    <li>
                                                                        2-days delivery
                                                                    </li>
                                                                    <li>
                                                                        4 revisions
                                                                    </li>
                                                                    <li>
                                                                        Work & Deliver
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block d-sm-none bt-1-ddd mt-10 pt-10">
                                                <div class="mt-10 pull-right">
                                                    Price:
                                                    $500
                                                </div>
                                                <form action="">
                                                    <div class="input-group input-group-attach mt-2" style="width: 100px;">
                                                        <div class="input-group-btn b-1-ddd br-none">
                                                            <button type="button" class="bg-eee btn-md">
                                                                <span>Qty</span>
                                                            </button>
                                                        </div>
                                                        <input type="number" name="amount" id="amount" class="form-control" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <div class="d-none d-sm-block d-md-none mt-10"></div>
                                            <form action="">
                                                <div class="input-group input-group-attach mt-2" style="width: 100px;">
                                                    <div class="input-group-btn b-1-ddd br-none">
                                                        <button type="button" class="bg-eee btn-md">
                                                            <span>Qty</span>
                                                        </button>
                                                    </div>
                                                    <input type="number" name="amount" id="amount" class="form-control" value="1">
                                                </div>
                                            </form>
                                            <div class="d-block d-md-none d-lg-block d-xl-none mt-10 text-left">
                                                Price:
                                                $500
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell d-lg-none d-xl-table-cell">
                                            <div class="text-center mt-10">
                                                 $500
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

                            <div class="text-left-right text-left-right-p-10 text-left-right-60-40">
                                <div>
                                    <div>
                                        Subtotal:
                                    </div>
                                    <div class="text-right">
                                      $100
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        Service fee & VAT:
                                    </div>
                                    <div class="text-right">
                                        $50
                                    </div>
                                </div>
                                <hr class="mt-10 mb-10 hr-2">
                                <div class="bg-eee">
                                    <div class="font-bold">
                                        Total:
                                    </div>
                                    <div class="font-bold text-right">
                                        $150
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        Delivery Time:
                                    </div>
                                    <div class="text-right">
                                        1 day(s)
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 pb-10">
                                <div>
                                    <a href="/checkout" class="btn btn-primary btn-block">
                                        Continue to Checkout
                                    </a>
                                </div>
                                <div class="text-fade mt-15 text-center">
                                    You won't be charged yet
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


        <hr>


        <div class="font-18 font-bold pb-10 text-center b-none">
            Other deals you may be interested in
        </div>
        <div class="section">
            <div class="deal-list deal-list-mini row">
                
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
                <div class="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
            
            </div>
        </div>
            

    </div>
@endsection
