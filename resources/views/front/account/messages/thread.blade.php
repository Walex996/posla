@extends('layouts.front.app')


@section('title')
    User000000 - Messages - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Messages - Posla">
    <meta name="keywords" content="messages, user, Posla, Posla.com">
    <meta name="tags" content="messages account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        @media screen and (min-width: 576px){
            .list-left{
                padding-right: 0;
            }
            .list-right{
                padding-left: 0;
            }
            .users-list > div > a.active{
                background: #eee;
                border-right-color: #FF940A;
            }
        }
        .users-list > div > a{
            border-right: 10px solid transparent;
        }
    </style>
@endsection


@section('js')
    <script>
        $(document).ready(function(){
            var div = $(".auto-scroll-bottom");
            div.scrollTop(div.prop("scrollHeight"));
        });
    </script>
@endsection


@section('content')
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                <li className="breadcrumb-item"><Link to="/messages">Messages</Link></li>
                <li className="breadcrumb-item active" aria-current="page">User000000</li>
            </ol>
        </div>

        <div className="section p-0 b-1-ddd">
            
            <div className="row">
                <div className="col-12 col-sm-5 col-lg-4 col-xl-3 list-left d-none d-sm-block">

                    <div className="">
                        <div className="p-2.5 pt-15 font-15 font-bold d-none d-sm-block" style="height: 49px;">
                            Select a chat
                        </div>
                        <div className="p-2.5 pt-2.5 font-bold text-center d-block d-sm-none">
                            Select a chat
                        </div>

                        <div className="bg-eee bt-1-ddd p-2.5 layout-search" style="max-width: none;">
                            <form action="" method="get" className="input-group">
                                <input type="search" name="s" className="form-control" placeholder="Search user & message..." />
                                <div className="input-group-btn">
                                    <button type="submit" className="btn btn-default btn-md">
                                        <span className="fa fa-search"></span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        @include('front.common.messages-users-list', ['user_selected' => 'user-username'])
                        
                    </div>
                    
                </div>
    
                <div className="col-12 col-sm-7 col-lg-8 col-xl-9 bl-1-ddd list-right">

                    <div className="bg-eee bb-1-ddd p-2.5 floated-content" style="height: 50px;">
                        <div className="pull-right dropdown">
                            <Link id="navbarDropdown" className="dropdown-toggle pr-1.5 pl-1.5 hover-bg-ddd d-inline-block overflow-hidden" style="height: 30px;" to="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span className="fa fa-bars icon-20 mt-1.5"></span>
                            </Link>
                            <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <Link className="dropdown-item" to="/account/dashboard">
                                    Mark as unread
                                </Link>
                                <Link className="dropdown-item" to="/account/dashboard">
                                    Report
                                </Link>
                            </div>
                        </div>
                        <div className="pull-left mr-2.5">
                            <Link to="/messages" className="pr-1.5 pl-1.5 hover-bg-ddd d-inline-block overflow-hidden" style="height: 30px;">
                                <span className="fa fa-angle-left icon-20 mt-1.5"></span>
                            </Link>
                        </div>
                        <div className="overflow-hidden">
                            <Link to="/user/abcde12345" className="d-inline-block overflow-hidden">
                                <div className="pull-left mr-2.5 br-50 overflow-hidden" style="width: 30px; height: 30px;">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-cover" />
                                </div>
                                <div className="overflow-hidden">
                                    <div className="font-bold mt-1.5 ellipsis hover-underline">
                                        Olawale Lawal
                                    </div>
                                </div>
                            </Link>

                        </div>
                    </div>

                    <div>
                        @include('front.common.messages', ['scroll_type' => 'screen-scroll'])
                    </div>
                    
                </div>
            </div>

        </div>

    </div>

@endsection
