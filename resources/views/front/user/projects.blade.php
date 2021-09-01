@extends('layouts.front.app')


@section('title')
    Abcde12345's Projects - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Abcde12345's Projects - Account - Posla">
    <meta name="keywords" content="Abcde12345's Projects account, dashboard, user, Posla, Posla.com">
    <meta name="tags" content="Abcde12345's Projects account dashboard user posla posla.com">
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
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </div>
                
                <div class="sticky" data-mdb-sticky-position="bottom">

                    <div class="section">
                        <div class="section-title">
                            Firstname's Projects (6)
                        </div>
                        <div>
                            <div class="project-list project-list-wide">
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
                                @include('front.common.project')
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
