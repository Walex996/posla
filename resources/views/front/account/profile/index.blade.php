@extends('layouts.front.app')


@section('title')
    Profile - {{$user->name}}
@endsection


@section('og')
    <meta name="description" content="Profile - Posla">
    <meta name="keywords" content="account, profile, user, Posla, Posla.com">
    <meta name="tags" content="account profile user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-profile{
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
                        <li class="breadcrumb-item"><a href="{{route('account.dashboard')}}">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        My Profile
                        <a href="{{route('account.profile.edit')}}" class="btn btn-blue btn-sm pull-right">Edit Profile</a>
                    </div>
                    <div>

                        <div class="row">
                            <div class="col-sm-6 mb-30">

                                <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Basic Information
                                </div>
                                <div class="b-1-ddd bt-none">
                                    <div class="text-left-right text-left-right-40-60">
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-user"></span>
                                                <div class="overflow-hidden">
                                                    Name:
                                                </div>
                                            </div>
                                            <div>
                                                {{$user->name}}
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-user-circle"></span>
                                                <div class="overflow-hidden">
                                                    Username:
                                                </div>
                                            </div>
                                            <div>
                                                {{$user->username}}
                                            </div>
                                        </div>
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-envelope"></span>
                                                <div class="overflow-hidden">
                                                    Email Address:
                                                </div>
                                            </div>
                                            <div>
                                               {{$user->email}}
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-phone-square"></span>
                                                <div class="overflow-hidden">
                                                    Phone:
                                                </div>
                                            </div>
                                            <div>
                                                {{$user->phone ?? '-'}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 mb-30">

                                <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Additional Information
                                </div>
                                <div class="b-1-ddd bt-none">
                                    <div class="text-left-right text-left-right-40-60">
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-flag"></span>
                                                <div class="overflow-hidden">
                                                    Country:
                                                </div>
                                            </div>
                                            <div>
                                                Nigeria
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-circle"></span>
                                                <div class="overflow-hidden">
                                                    Gender:
                                                </div>
                                            </div>
                                            <div>
                                                {{$user->gender ?? '-'}}
                                            </div>
                                        </div>
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-calendar"></span>
                                                <div class="overflow-hidden">
                                                    Date of Birth:
                                                </div>
                                            </div>
                                            <div>
                                                {{$user->dob ? $user->dob->format('Y-m-d') : '-'}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 mb-30">

                                <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Description
                                </div>
                                <div class="b-1-ddd bt-none">
                                    <div class="p-20">
                                        <div class="text-fade">
                                            Short Description:
                                        </div>
                                        <div class="mt-5">
                                            {{$user->short_description ?? '-'}}
                                        </div>
                                        <div class="text-fade mt-25">
                                            Long Description :
                                        </div>
                                        <div class="mt-5 text-justify">
                                            {{$user->long_description ?? '-'}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 mb-30">

                                <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                    Languages
                                </div>
                                <div class="b-1-ddd bt-none">
                                    <div class="text-left-right text-left-right-40-60">
                                        @forelse  ($user->languages as $language => $level)
                                            <div @if($loop->even) class="bg-eee" @endif>
                                                    <div>
                                                        <span class="fa fa-book"></span>
                                                        <div class="overflow-hidden">
                                                            {{$language}}
                                                        </div>
                                                    </div>
                                                    <div>
                                                        {{$level}}
                                                    </div>
                                                </div>
                                        @empty
                                           <div class="bg-eee">
                                                    <div>
                                                        <span class="fa fa-book"></span>
                                                        <div class="overflow-hidden">
                                                            Non
                                                        </div>
                                                    </div>
                                                    <div>
                                                        Not Language set
                                                    </div>
                                                </div>
                                        @endforelse
                                        {{-- <div>
                                            <div>
                                                <span class="fa fa-book"></span>
                                                <div class="overflow-hidden">
                                                    French
                                                </div>
                                            </div>
                                            <div>
                                                Average
                                            </div>
                                        </div> --}}
                                        {{-- <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-book"></span>
                                                <div class="overflow-hidden">
                                                    Spanish
                                                </div>
                                            </div>
                                            <div>
                                                Average
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="p-10 pl-15 pr-15 mt-30 font-bold bg-blue text-fff">
                                    Skillset
                                </div>
                                <div class="b-1-ddd bt-none">
                                    <div class="p-15 pt-20 item-labels item-labels-md item-labels-tags-all">
                                        @forelse ($user->skillset as $skill)
                                            <div class="item-labels-tags">
                                                {{$skill}}
                                            </div>
                                        @empty
                                            no skillset 
                                        @endforelse
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
