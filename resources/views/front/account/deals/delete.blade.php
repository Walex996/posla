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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-deals{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item"><a href="/account/deals">Deals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Delete Deals</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title">
                        Delete Deal - #1234
                    </div>
                    <div>

                        <div>
                            Are you sure you want to delete this deal?
                        </div>

                        <div class="row mt-30">
                            <div class="col-sm-6 col-md-12 col-lg-5 col-xl-4">
                                @include('front.common.deal')
                            </div>

                            <div class="col-sm-6 col-md-12 col-lg-7 col-xl-8">
                                <div class="note d-inline-block">
                                    Please note:
                                </div>
                                <ul class="list-style mt-10">
                                    <li>
                                        This action cannot be undone.
                                    </li>
                                    <li class="mt-5">
                                        Deleted deals cannot be recovered.
                                    </li>
                                    <li class="mt-5">
                                        Orders already attached to this deal, will not be deleted.
                                    </li>
                                    <li class="mt-5">
                                        Current payments for "featured" ad deal, will be canceled without refund.
                                    </li>
                                    <li class="mt-5">
                                        All pending refunds on this deal, will be canceled.
                                    </li>
                                    <li class="mt-5">
                                        Earnings acquired from this deal, can still be withdrawn.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-20 pt-20 bt-1-ddd">

                            <form action="/account/deals" class="floated-content">
                                <button type="submit" class="btn btn-danger btn-sm pull-right ml-10">
                                    Delete Deal
                                </button>
                                <a href="/account/deals" class="btn btn-transparent-black btn-sm pull-right">
                                    Cancel
                                </a>
                            </form>

                        </div>


                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
