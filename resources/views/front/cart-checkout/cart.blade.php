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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div className="container">
        <div className="row">
            
            <div className="col-md-12 col-lg-8">

                <div className="section section-cart mb-0">
                    <div className="section-title">
                        Cart
                    </div>
                    <div>
                        
                        <div className="table-responsive b-1-ddd">
                            <table className="table table-tr-lines table-cart">
                                <thead>
                                    <tr className="bg-eee">
                                        <th></th>
                                        <th className="d-none d-sm-table-cell"></th>
                                        <th className="d-none d-md-table-cell d-lg-none d-xl-table-cell"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div className="overflow-hidden">
                                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="pull-left m-2.5 mr-15 d-none d-sm-block overflow-hidden" style="max-width: 200px; max-height: 200px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="pull-left mt-2.5 mr-15 d-block d-sm-none overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                                <div className="overflow-hidden">
                                                    <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="font-bold mt-2.5 d-inline-block hover-underline">
                                                        deal title here
                                                    </Link>
                                                    <div className="text-fade mt-2.5">
                                                        <div>
                                                            Category name (subcategory name)
                                                        </div>
                                                        <div className="mt-1.5">
                                                            Package: basic designs
                                                        </div>
                                                        <div className="mt-1.5" data-toggle="collapse" data-target="#package-details">
                                                            Package Details
                                                            <span className="fa fa-angle-down icon-333"></span>
                                                        </div>
                                                        <div id="package-details" className="collapse">
                                                            <div className="p-2.5 pl-15 pr-15 mt-1.5 b-1-ddd d-inline-block">
                                                                <ul className="list-style">
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
                                            <div className="d-block d-sm-none bt-1-ddd mt-2.5 pt-2.5">
                                                <div className="mt-2.5 pull-right">
                                                    Price:
                                                    $500
                                                </div>
                                                <form action="">
                                                    <div className="input-group input-group-attach mt-2" style="width: 100px;">
                                                        <div className="input-group-btn b-1-ddd br-none">
                                                            <button type="button" className="bg-eee btn-md">
                                                                <span>Qty</span>
                                                            </button>
                                                        </div>
                                                        <input type="number" name="amount" id="amount" className="form-control" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td className="d-none d-sm-table-cell">
                                            <div className="d-none d-sm-block d-md-none mt-2.5"></div>
                                            <form action="">
                                                <div className="input-group input-group-attach mt-2" style="width: 100px;">
                                                    <div className="input-group-btn b-1-ddd br-none">
                                                        <button type="button" className="bg-eee btn-md">
                                                            <span>Qty</span>
                                                        </button>
                                                    </div>
                                                    <input type="number" name="amount" id="amount" className="form-control" value="1">
                                                </div>
                                            </form>
                                            <div className="d-block d-md-none d-lg-block d-xl-none mt-2.5 text-left">
                                                Price:
                                                $500
                                            </div>
                                        </td>
                                        <td className="d-none d-md-table-cell d-lg-none d-xl-table-cell">
                                            <div className="text-center mt-2.5">
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

            <div className="col-md-12 col-lg-4">

                <div className="sticky-top">
                    <div className="section">
                        <div className="section-title">
                            Summary
                        </div>
                        <div>

                            <div className="text-left-right text-left-right-p-2.5 text-left-right-60-40">
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
                                        1 day(s)
                                    </div>
                                </div>
                            </div>

                            <div className="mt-2.5 pb-10">
                                <div>
                                    <Link to="/checkout" className="btn btn-primary btn-block">
                                        Continue to Checkout
                                    </Link>
                                </div>
                                <div className="text-fade mt-15 text-center">
                                    You won't be charged yet
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


        <hr />


        <div className="font-18 font-bold pb-10 text-center b-none">
            Other deals you may be interested in
        </div>
        <div className="section">
            <div className="deal-list deal-list-mini row">
                
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
                <div className="col-sm-6 col-lg-3">
                    @include('front.common.deal')
                </div> 
            
            </div>
        </div>
            

    </div>
@endsection
