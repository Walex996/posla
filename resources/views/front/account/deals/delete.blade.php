@extends('layouts.front.app')


@section('title')
    1234 - Delete - Deal - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Delete Deal - Posla">
    <meta name="keywords" content="delete, deal, user, Posla, Posla.com">
    <meta name="tags" content="delete deal dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-deals{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            <div className="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item"><Link to="/account/deals">Deals</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Delete Deals</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title">
                        Delete Deal - #1234
                    </div>
                    <div>

                        <div>
                            Are you sure you want to delete this deal?
                        </div>

                        <div className="row mt-30">
                            <div className="col-sm-6 col-md-12 col-lg-5 col-xl-4">
                                @include('front.common.deal')
                            </div>

                            <div className="col-sm-6 col-md-12 col-lg-7 col-xl-8">
                                <div className="note d-inline-block">
                                    Please note:
                                </div>
                                <ul className="list-style mt-2.5">
                                    <li>
                                        This action cannot be undone.
                                    </li>
                                    <li className="mt-1.5">
                                        Deleted deals cannot be recovered.
                                    </li>
                                    <li className="mt-1.5">
                                        Orders already attached to this deal, will not be deleted.
                                    </li>
                                    <li className="mt-1.5">
                                        Current payments for "featured" ad deal, will be canceled without refund.
                                    </li>
                                    <li className="mt-1.5">
                                        All pending refunds on this deal, will be canceled.
                                    </li>
                                    <li className="mt-1.5">
                                        Earnings acquired from this deal, can still be withdrawn.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div className="mt-5 pt-5 bt-1-ddd">

                            <form action="/account/deals" className="floated-content">
                                <button type="submit" className="btn btn-danger btn-sm pull-right ml-2.5">
                                    Delete Deal
                                </button>
                                <Link to="/account/deals" className="btn btn-transparent-black btn-sm pull-right">
                                    Cancel
                                </Link>
                            </form>

                        </div>
 

                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
