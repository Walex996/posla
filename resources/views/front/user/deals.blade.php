@extends('layouts.front.app')


@section('title')
    Abcde12345's Deals - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Abcde12345's Deals - Account - Posla">
    <meta name="keywords" content="Abcde12345's Deals account, dashboard, user, Posla, Posla.com">
    <meta name="tags" content="Abcde12345's Deals account dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">

                @include('front.common.user-sidebar')
                
            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/user/abcde12345">Abcde12345</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Deals</li>
                    </ol>
                </div>
                
                <div class="">

                    <div class="section">
                        <div class="section-title">
                            Firstname's Deals (6)
                        </div>
                        <div>
                            <div class="deal-list deal-list-mini row">
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    @include('front.common.deal')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section">
                        {{-- //for pagination --}}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
