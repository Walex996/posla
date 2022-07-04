@extends('layouts.front.app')


@section('title')
    #123456789012 - Order - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="#123456789012 - Order Details - Posla">
    <meta name="keywords" content="order, details, user, Posla, Posla.com">
    <meta name="tags" content="order details account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/simplyCountdown.theme.default.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-orders{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .user-msg{
            padding-top: 20px !important;
            padding-bottom: 20px !important;
            /* margin-bottom: 20px; */
        }
        .simply-section{
            /* background: #f00; */
            display: inline-block;
        }
        .simply-section > div{
            /* background: #ff0; */
        }
        .simply-amount:before{
            /* content: "\00a0 \00a0 \00a0 "; */
        }
        .simply-section:after{
            /* content: ":"; */
            /* display: inline-block; */
        }
        .simply-amount:after{
            /* content: "\00a0 :"; */
            /* content: "\00a0 \00a0 \00a0 :"; */
            display: inline-block;
        }
        #simply-countdown-losange > .simply-section:last-child .simply-amount:after{
            /* content: "\00a0 \00a0 \00a0 "; */
        }
        #simply-countdown-losange .simply-section-separator:last-child{
            display: none;
        }
        @media screen and (min-width: 1200px){
            .simply-amount{
                font-size: 45px;
            }
            .simply-word{
                top: -12px;
            }
        }
        @media screen and (min-width: 992px) and (max-width: 1199px){
            .simply-amount{
                font-size: 40px;
                /* color: #f00; */
            }
            .simply-word{
                top: -12px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px){
            .simply-amount{
                font-size: 30px;
                /* color: #f0f; */
            }
            .simply-word{
                top: -10px;
            }
        }

        @media screen and (min-width: 576px) and (max-width: 767px){
            .simply-amount{
                font-size: 30px;
                /* color: #0c0; */
            }
            .simply-word{
                top: -10px;
            }
        }

        @media screen and (max-width: 575px) {
            .simply-amount{
                font-size: 30px;
                /* color: #f0f; */
            }
            .simply-word{
                top: -10px;
            }
        }
        .simply-amount{
            padding-right: 5px;
            padding-left: 5px;
            /* margin-right: 5px; */
            /* margin-left: 5px; */
            /* font-size: 50px; */
            font-weight: bold;
            text-align: center;
            /* background: tan; */
            display: block;
        }
        .simply-word{
            text-align: center;
            position: relative;
            /* top: -15px; */
            /* left: -20px; */
            /* font-size: 15px; */
        }
        .simply-word:after{
            /* content: "\00a0 :"; */
            /* content: "\00a0 \00a0 \00a0"; */
            display: inline-block;
        }
    </style>
@endsection


@section('js')
    <script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('/js/simplyCountdown.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#simply-countdown-losange').simplyCountdown({
                year: 2024,
                month: 10,
                day:  29,
                hours: 10,
                minutes: 05,
                seconds: 00,
                enableUtc: false,
            });
            $(".simply-section").after(`<div class="simply-section simply-section-separator"><div><span class="simply-amount">:</span><span class="simply-word">&nbsp;</span></div></div>`);
        });
    </script>
@endsection
    


@section('content')
    
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item"><a href="/account/orders">Orders</a></li>
                        <li class="breadcrumb-item active" aria-current="page">123456789012</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        My Orders - #123456789012
                    </div>

                    
                    {{-- order-status-not-started --}}
                    {{--                     
                    <div class="order-status order-status-not-started">
                        <div class="pull-right">
                            $45
                        </div>
                        <div class="overflow-hidden">
                            <span class="fa fa-check-circle"></span>
                            Order Not Started
                        </div>
                    </div>
                    --}}

                    {{-- order-status-in-progress --}}
                    <div class="order-status order-status-in-progress">
                        <div class="pull-right">
                            $45
                        </div>
                        <div class="overflow-hidden">
                            <span class="fa fa-check-circle"></span>
                            Order In Progress
                        </div>
                    </div>
                    
                    {{-- order-status-completed --}}
                    {{--                     
                    <div class="order-status order-status-completed">
                        <div class="pull-right">
                            $45
                        </div>
                        <div class="overflow-hidden">
                            <span class="fa fa-check-circle"></span>
                            Order Completed
                        </div>
                    </div>
                    --}}


                    <div class="mt-0">
                        <div class="bg-ddd p-10">
                            Anthony's Order
                        </div>
                        <div>
                            <div class="table-responsive b-1-ddd bt-none">
                                <table class="table table-tr-lines table-cart">
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
                                                            I will design a beautiful logo for your business
                                                        </a>
                                                        <div class="text-fade mt-10">
                                                            <div>
                                                                Category (Subcategory)
                                                            </div>
                                                            <div class="mt-5">
                                                                Package: Basic Designs
                                                            </div>
                                                            <div class="mt-5" data-toggle="collapse" data-target="#package-details">
                                                                Package Details
                                                                <span class="fa fa-angle-down icon-333"></span>
                                                            </div>
                                                            <div id="package-details" class="collapse">
                                                                <div class="p-10 pl-15 pr-15 mt-5 b-1-ddd d-inline-block">
                                                                    <ul class="list-style">
                                                                        <li>
                                                                            1-day delivery
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
                                                <div class="d-block d-sm-none d-md-block d-lg-none bt-1-ddd mt-10 pt-10">
                                                    <div class="mt-10 pull-right">
                                                        Price:
                                                        $100
                                                    </div>
                                                    <form action="">
                                                        <div class="input-group input-group-attach mt-2" style="width: 100px;">
                                                            <div class="input-group-btn b-1-ddd">
                                                                <button type="button" class="bg-eee btn-md">
                                                                    <span>Qty</span>
                                                                    <span>1</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="d-none d-sm-table-cell d-md-none d-lg-table-cell">
                                                <div class="d-none d-sm-block d-md-none mt-10"></div>
                                                <form action="">
                                                    <div class="input-group input-group-attach mt-2" style="width: 100px;">
                                                        <div class="input-group-btn b-1-ddd">
                                                            <button type="button" class="bg-eee btn-md">
                                                                <span>Qty</span>
                                                                <span>1</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="d-block d-md-none d-lg-block d-xl-none mt-10 text-left">
                                                    Price:
                                                    $100
                                                </div>
                                            </td>
                                            <td class="d-none d-xl-table-cell">
                                                <div class="text-center mt-10">
                                                    $100
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-block d-md-none icon-right mt-10">
                        <button class="btn btn-transparent-black btn-xs" data-toggle="collapse" data-target="#project-details">
                            View Project Details
                            <span class="fa fa-angle-right"></span>
                        </button>
                    </div>

                </div>


                <div id="project-details" class="collapse">
                    <div class="d-block d-md-none">
                        <div class="row">

                            <div class="col-sm-6">
                                {{-- for both seller & buyer --}}
                                <div class="section">
                                    <div class="section-title">
                                        Project Status
                                    </div>
                                    <div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Project Started
                                            </div>
                                            <div>
                                                Jan 25, 2020 at 10:05pm
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Current Delivery Date
                                            </div>
                                            <div>
                                                Jan 25, 2020 at 10:05pm
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Revisions Remaining
                                            </div>
                                            <div>
                                                3 Revisions
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Delivery Format
                                            </div>
                                            <div>
                                                Jan 25, 2020 at 10:05pm
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/project/c1d00230-a423-4b84-a121-7105239ff8d8" class="btn btn-transparent-black btn-sm">
                                                View project details
                                            </a>
                                        </div>
                                    </div>

                                    {{-- order tracking --}}
                                    <div class="bt-1-ddd mt-20">
                                        <div class="pt-15 pb-15 font-bold">
                                            Order Tracking
                                        </div>
                                        <div class="floated-content mb-10">
                                            <div class="bg-green pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                                <span class="fa fa-check mt-4 icon-fff"></span>
                                            </div>
                                            <div class="overflow-hidden">
                                                Order Placed
                                            </div>
                                        </div>
                                        <div class="floated-content mb-10">
                                            <div class="bg-green pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                                <span class="fa fa-check mt-4 icon-fff"></span>
                                            </div>
                                            <div class="overflow-hidden">
                                                Requirements Submitted
                                            </div>
                                        </div>
                                        <div class="floated-content mb-10">
                                            <div class="bg-orange pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                                <span class="fa fa-spinner fa-spin mt-4 icon-fff"></span>
                                            </div>
                                            <div class="overflow-hidden">
                                                Order In progress
                                            </div>
                                        </div>
                                        <div class="floated-content mb-10">
                                            <div class="bg-ccc pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                                <span class="fa fa-ellipsis-h mt-4 icon-fff"></span>
                                            </div>
                                            <div class="overflow-hidden">
                                                Order Delivery
                                            </div>
                                        </div>
                                        <div class="floated-content mb-10">
                                            <div class="bg-ccc pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                                <span class="fa fa-ellipsis-h mt-4 icon-fff"></span>
                                            </div>
                                            <div class="overflow-hidden">
                                                Order Completed
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bt-1-ddd mt-20">
                                        <div class="pt-15 pb-15 font-bold">
                                            Order Resolution
                                        </div>
                                        <div>
                                            Have any issues with your order?
                                            <br>
                                            Visit the resoultion center.
                                            <br>
                                            <a href="/account/resolution/orders/123456789012" class="btn btn-transparent-black btn-sm mt-5">
                                                Resoultion Center
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                
                                <div class="section">
                                    <div class="section-title">
                                        Buyer Information
                                    </div>
                                    <div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Name
                                            </div>
                                            <div>
                                                Olawale Lawal
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Country
                                            </div>
                                            <div>
                                                Nigeria
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Gender
                                            </div>
                                            <div>
                                                Female
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/user/abcde12345" class="btn btn-transparent-black btn-sm">
                                                View buyer's profile
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="section">
                                    <div class="section-title">
                                        Seller Information
                                    </div>
                                    <div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Name
                                            </div>
                                            <div>
                                                Olawale Lawal
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Country
                                            </div>
                                            <div>
                                                Nigeria
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <div class="text-small text-color-fade">
                                                Gender
                                            </div>
                                            <div>
                                                Female
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/user/abcde12345" class="btn btn-transparent-black btn-sm">
                                                View seller's profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="text-center mb-0 d-block d-md-none">
                    <hr class="mt-0 mb-0">
                    <div class="d-inline-block bg-eee pr-15 pl-15" style="position: relative; top: -12px; z-index: 5;">
                        Project Timeline
                    </div>
                </div>
                
                <div class="section">
                    <div>
                    


                        {{-- countdown --}}
                        {{-- 
                            if deal,
                                if there are requirement (questions)
                                start countdown only after requirement is submitted
                            if project,
                                start countdown after payment of deposit
                        --}}
                        {{-- visible to both seller & buyer --}}
                        <div class="mb-10 text-center">
                            <div class="text-center font-bold bg-f00 text-fff d-inline-block mx-auto pr-10 pl-10">
                                Project Deadline
                            </div>
                            <div class="text-center">
                                <div id="simply-countdown-losange"></div>
                            </div>
                        </div>
                        

                        {{-- conversation --}}
                        {{-- from me (seller) --}}
                        <div class="user-msg b-1-ddd">
                            <div class="overflow-hidden">
                                <a href="/user/abcde12345" class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </a>
                                <div class="pull-right mt-10 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="font-bold mt-10 d-none d-sm-inline-block text-blue hover-underline">
                                        Firstname Lastname
                                    </a>
                                    <a href="/user/abcde12345" class="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Firstname Lastname
                                    </a>
                                    <div class="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>

                        

                        {{-- conversation --}}
                        {{-- from customer (buyer) --}}
                        <div class="user-msg b-1-ddd">
                            <div class="overflow-hidden">
                                <a href="/user/abcde12345" class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </a>
                                <div class="pull-right mt-10 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="font-bold mt-10 d-none d-sm-inline-block text-blue hover-underline">
                                        Customerfname Customerlname
                                    </a>
                                    <a href="/user/abcde12345" class="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Customerfname Customerlname
                                    </a>
                                    <div class="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>

                        

                        {{-- conversation with attachment --}}
                        {{-- from me (seller) --}}
                        <div class="user-msg b-1-ddd">
                            <div class="overflow-hidden">
                                <a href="/user/abcde12345" class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </a>
                                <div class="pull-right mt-10 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="font-bold mt-10 d-none d-sm-inline-block text-blue hover-underline">
                                        Firstname Lastname
                                    </a>
                                    <a href="/user/abcde12345" class="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Firstname Lastname
                                    </a>
                                    <div class="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                            {{-- (with attachments) --}}
                            <div class="floated-content mt-20">

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's a video, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" class="dp-cover" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's an audio, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" class="dp-cover" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's anything else, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" class="dp-cover" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        

                        {{-- conversation with attachment --}}
                        {{-- from customer (buyer) --}}
                        <div class="user-msg b-1-ddd">
                            <div class="overflow-hidden">
                                <a href="/user/abcde12345" class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </a>
                                <div class="pull-right mt-10 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="font-bold mt-10 d-none d-sm-inline-block text-blue hover-underline">
                                        Customerfname Customerlname
                                    </a>
                                    <a href="/user/abcde12345" class="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Customerfname Customerlname
                                    </a>
                                    <div class="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                            {{-- (with attachments) --}}
                            <div class="floated-content mt-20">

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's a video, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" class="dp-cover" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's an audio, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" class="dp-cover" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media">
                                    <div class="text-center">
                                        {{-- if it's anything else, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" class="dp-cover" />
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        

                        {{-- order requirement request --}}
                        {{-- system generated --}}
                        <div class="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span class="fa fa-clipboard icon-orange"></span>
                            </div>
                            <div class="text-orange">
                                Order Requirement
                            </div>
                            <div>
                                Please fill in these requirements to start your order
                            </div>
                            <div class="mt-5">
                                <a href="/account/orders/requirements/123456789012" class="btn btn-transparent-black btn-xs hover-bg-orange">
                                    Fill requirements
                                </a>
                            </div>
                            <div class="order-mgmt-date text-fade text-small mt-10">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>



                        {{-- order requirement submitted --}}
                        {{-- system generated --}}
                        <div class="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span class="fa fa-clipboard icon-blue"></span>
                            </div>
                            <div class="text-blue">
                                Order Requirement
                            </div>
                            <div>
                                The requirements have been filled and submitted.
                            </div>
                            <div class="mt-5">
                                <a href="/account/orders/requirements/123456789012" class="btn btn-transparent-black btn-xs hover-bg-blue">
                                    View requirements
                                </a>
                            </div>
                            <div class="order-mgmt-date text-fade text-small mt-10">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>



                        {{-- order started --}}
                        {{-- system generated --}}
                        <div class="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span class="fa fa-hourglass-start icon-blue"></span>
                            </div>
                            <div class="text-blue">
                                Order Started
                            </div>
                            <div>
                                The countdown for this order has officially started.
                                <br>
                                Delivery Timeframe: 1 day.
                            </div>
                            <div class="order-mgmt-date text-fade text-small mt-10">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>


                        {{-- order download --}}
                        {{-- system generated --}}
                        {{-- only if "Delivery Format" != "Work & Deliver" --}}
                        <div class="order-mgmt text-left b-1-ddd pt-0 pb-30">
                            <div class="order-mgmt">
                                <div>
                                    <span class="fa fa-file icon-orange"></span>
                                </div>
                                <div class="text-orange">
                                    Your order download is ready
                                </div>
                                <div>
                                    Yours files are now available for download
                                </div>
                                <div class="order-mgmt-date text-fade text-small mt-10">
                                    December 15, 2020 at 9:54PM
                                </div>
                            </div>
                            <div class="p-20-10 b-1-ddd floated-content" style="margin-top: -20px;">

                                {{-- click to download --}}
                                <a href="" class="media media-lg">
                                    <div class="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                        {{-- else, display the right icon --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" class="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" class="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" class="dp-cover" /> --}}
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                                {{-- click to download --}}
                                <a href="" class="media media-lg">
                                    <div class="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                        {{-- else, display the right stuff --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" class="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" class="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" class="dp-cover" /> --}}
                                    </div>
                                    <div>
                                        <div class="pull-right ml-5 pt-4">
                                            <span class="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div class="overflow-hidden ellipsis">
                                            <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span class="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>



                        {{-- conversation --}}
                        <div class="user-msg b-1-ddd">
                            <div class="overflow-hidden">
                                <a href="/user/abcde12345" class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </a>
                                <div class="pull-right mt-10 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="font-bold mt-10 d-none d-sm-inline-block text-blue hover-underline">
                                        Firstname Lastname
                                    </a>
                                    <a href="/user/abcde12345" class="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Firstname Lastname
                                    </a>
                                    <div class="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>



                        {{-- for me (seller) to see --}}
                        {{-- when status is after "requirement filled" but before "order completed"  --}}
                        <div class="text-center bg-eee pt-50 pb-50 b-1-ddd">
                            <a href="/account/orders/deliver/123456789012" class="btn btn-blue icon-left">
                                <span class="fa fa-box-open"></span>
                                Deliver Work
                            </a>
                        </div>



                        {{-- order delivered --}}
                        {{-- system generated --}}
                        {{-- for both to see --}}
                        <div class="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span class="fa fa-truck icon-blue"></span>
                            </div>
                            <div class="text-blue">
                                Order Delivered
                            </div>
                            <div>
                                The project has been successfully delivered to the buyer.
                                <br>
                                If you do not perform any action,
                                Your order will be marked as completed within 3 days.
                            </div>
                            <div class="mt-10">
                                <a data-toggle="modal" data-target="#modal-delivery-accept" class="btn btn-blue btn-sm mb-5 mr-5 ml-5">Accept Delivery</a>
                                <a data-toggle="modal" data-target="#modal-delivery-revision" class="btn btn-orange btn-sm mb-5 mr-5 ml-5">Make Revision (2 remaining) </a>
                                <a href="/account/resolution/orders/123456789012" class="btn btn-transparent-black btn-sm mb-5 mr-5 ml-5">Reject Delivery</a>
                            </div>
                            <div class="order-mgmt-date text-fade text-small mt-10">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>

                        <div class="modal" id="modal-delivery-accept">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Accept Delivery</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="p-10">

                                            <div class="b-1-ddd p-20-10">
                                                <div class="pull-left mr-20">
                                                    <span class="fa fa-certificate icon-blue icon-30"></span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    Satisfied with the order delivered by the seller?
                                                    <br class="d-none d-md-block">
                                                    please click the accept button below.
                                                    <br>
                                                    This action cannot be reversed.
                                                </div>
                                            </div>

                                            <br>

                                            To make adjustments,
                                            <br>
                                            please click <a data-toggle="modal" data-target="#modal-delivery-revision" class="underline hover-orange">I want to make a revision.</a>
                                            <div>
                                                <div class="note mt-2 pt-3 pb-3 pl-10 pr-10 d-inline-block font-normal">
                                                    Revisions Remaining: 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                            <span class="fa fa-times"></span>
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-blue btn-sm icon-left">
                                            <span class="fa fa-check-square"></span>
                                            Accept Delivery
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal" id="modal-delivery-revision">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delivery - Request Revision</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="p-10">

                                            <div class="note text-center">
                                                Please make your revision as clear and concise as possible.
                                                <div class="font-normal">
                                                    To give the seller more time to complete this revision,
                                                    <br>
                                                    please visit our <a href="/account/resolution/orders/123456789012" class="underline font-normal" target="_blank">order resolution center</a>
                                                </div>
                                            </div>

                                            <div class="form-group mt-10">
                                                <label>What to modify in the delivery:</label>
                                                <textarea name="" id="" style="height: 125px;" class="form-control mt-5" placeholder="Enter message"></textarea>
                                            </div>

                                            <div class="font-bold text-red">
                                                <button type="button" class="btn btn-transparent-black btn-sm pull-left" data-toggle="collapse" data-target="#add-attachment">
                                                    <span class="fa fa-paperclip icon-333"></span>
                                                    Add attachment
                                                    <span class="fa fa-angle-down icon-333"></span>
                                                </button>
                                                <div class="overflow-hidden text-right font-bold text-red pt-5">
                                                    Revisions remaining: 1
                                                </div>
                                            </div>
                                            <div id="add-attachment" class="collapse mt-20 b-1-ddd p-10 pt-0">
                                                <div class="row">
                                                    <div class="col-sm-6 mt-10">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 mt-10">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 mt-10">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 mt-10">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                            <span class="fa fa-times"></span>
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-orange btn-sm icon-left">
                                            <span class="fa fa-file"></span>
                                            Submit Revision
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>





                        {{-- order revision --}}
                        {{-- system generated --}}
                        {{-- only if revision was submitted for this delivery --}}
                        <div class="order-mgmt text-left b-1-ddd pt-0 pb-30">
                            <div class="order-mgmt">
                                <div>
                                    <span class="fa fa-edit icon-blue"></span>
                                </div>
                                <div class="text-blue">
                                    Order Delivery Revision
                                </div>
                                <div>
                                    Your requested for the following modifications to your order delivery.
                                </div>
                                <div class="b-1-ddd p-20-10 mt-10 text-left">
                                    <div>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                    {{-- if attachments were added, show the did below; else nothing --}}
                                    <div class="floated-content text-center mt-20">
        
                                        {{-- click to download --}}
                                        <a href="" class="media media-sm">
                                            <div class="text-center">
                                                {{-- if it's an image, display it directly --}}
                                                <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                                {{-- else, display the right stuff --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" class="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" class="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" class="dp-cover" /> --}}
                                            </div>
                                            <div>
                                                <div class="pull-right ml-5 pt-4">
                                                    <span class="text-fade text-small">(33kb)</span>
                                                </div>
                                                <div class="overflow-hidden ellipsis">
                                                    <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                    <span class="">12412412412.jpg</span>
                                                </div>
                                            </div>
                                        </a>
        
                                        {{-- click to download --}}
                                        <a href="" class="media media-sm">
                                            <div class="text-center">
                                                {{-- if it's an image, display it directly --}}
                                                <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                                {{-- else, display the right stuff --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" class="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" class="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" class="dp-cover" /> --}}
                                            </div>
                                            <div>
                                                <div class="pull-right ml-5 pt-4">
                                                    <span class="text-fade text-small">(33kb)</span>
                                                </div>
                                                <div class="overflow-hidden ellipsis">
                                                    <span class="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                    <span class="">12412412412.jpg</span>
                                                </div>
                                            </div>
                                        </a>
        
                                    </div>
                                </div>
                                <div class="order-mgmt-date text-fade text-small mt-10">
                                    December 15, 2020 at 9:54PM
                                </div>
                            </div>

                        </div>






                        {{-- order review request --}}
                        {{-- system generated --}}
                        {{-- for customer (buyer) to see --}}
                        <div class="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span class="fa fa-star icon-orange"></span>
                            </div>
                            <div class="text-orange">
                                Order Review
                            </div>
                            <div>
                                Please rate this seller based on the seller's performance and project delivery.
                            </div>

                            <div class="mt-5">
                                <a href="/account/orders/review/123456789012" class="btn btn-transparent-black btn-xs hover-bg-orange">
                                    Rate Seller
                                </a>
                            </div>
                            <div class="order-mgmt-date text-fade text-small mt-10">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>


                        
                        {{-- order review submitted --}}
                        {{-- system generated --}}
                        {{-- for me (seller) to see --}}
                        <div class="order-mgmt text-left b-1-ddd pt-0 pb-30">
                            <div class="order-mgmt">
                                <div>
                                    <span class="fa fa-star icon-blue"></span>
                                </div>
                                <div class="text-blue">
                                    Buyer's Review
                                </div>
                                <div>
                                    {{-- for me (seller) --}}
                                    {{-- Here's the review Alex submitted in respect to your performance & delivery of this project. --}}

                                    {{-- for customer (buyer) --}}
                                    Here's your review for Anthony, in respect to his/her ((check gender)) performance & delivery of the project.
                                </div>
                            </div>

                            <div class="pb-0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span class="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span class="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span class="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span class="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span class="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="user-msg b-1-ddd">
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                    </a>
                                    <div class="pull-right d-none d-sm-block">
                                        <div class="rating-box mt-5">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                            </div>
                                            <div class="font-bold text-orange">
                                                5.0
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <a href="/user/abcde12345" class="font-bold hover-underline">
                                            Firstname Lastname
                                        </a>
                                        <div class="text-fade">
                                            Published: Jan 12, 2019
                                        </div>
                                        <div class="rating-box d-block d-sm-none">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                            </div>
                                            <div class="font-bold text-orange">
                                                5.0
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 font-normal text-justify">
                                    I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                                </div>
                            </div>
                        </div>

                        

                        {{-- order completed --}}
                        {{-- system generated --}}
                        {{-- for both to see --}}
                        <div class="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span class="fa fa-hourglass-end icon-blue"></span>
                            </div>
                            <div class="text-blue">
                                Order Completed
                            </div>
                            <div>
                                This order is now completed and all renumerations have been processed.
                            </div>
                            <div class="order-mgmt-date text-fade text-small mt-10">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>



                        {{-- new conversation --}}
                        {{-- for both to see --}}
                        {{-- before order is completed --}}
                        <form action="">
                            <div class="order-mgmt-new-text p-15 b-1-ddd bg-eee">
                                <div>
                                    <div class="form-group">
                                        <textarea class="form-control resize-none" style="height: 85px;" placeholder="Type a message..."></textarea>
                                    </div>
                                </div>
                                <div class="floated-content">
                                    <button type="submit" class="btn btn-blue btn-md ml-10 pull-right">
                                        <span class="fa fa-paper-plane"></span>
                                        Send
                                    </button>
                                    <button type="button" class="btn btn-transparent-black btn-md pull-right" data-toggle="collapse" data-target="#add-attachment">
                                        <span class="fa fa-paperclip icon-333"></span>
                                        Add attachment
                                        <span class="fa fa-angle-down icon-333"></span>
                                    </button>
                                </div>
                                <div id="add-attachment" class="collapse mt-10 b-1-ddd p-20-10">
                                    <div>
                                        Upload Attachments
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mt-10">
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mt-10">
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mt-10">
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mt-10">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>

            <div class="d-none d-md-block col-md-4 col-lg-3">

                <div class="section">
                    <div class="section-title">
                        Project Status
                    </div>
                    <div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Project Started
                            </div>
                            <div>
                                Jan 25, 2020 at 10:05pm
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Current Delivery Date
                            </div>
                            <div>
                                Jan 25, 2020 at 10:05pm
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Revisions Remaining
                            </div>
                            <div>
                                3 Revisions
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Delivery Format
                            </div>
                            <div>
                                Jan 25, 2020 at 10:05pm
                            </div>
                        </div>
                        <div>
                            <a href="/project/c1d00230-a423-4b84-a121-7105239ff8d8" class="btn btn-transparent-black btn-sm">
                                View project details
                            </a>
                        </div>
                    </div>


                    {{-- order tracking --}}
                    <div class="bt-1-ddd mt-20">
                        <div class="pt-15 pb-15 font-bold">
                            Order Tracking
                        </div>
                        <div class="floated-content mb-10">
                            <div class="bg-green pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                <span class="fa fa-check mt-4 icon-fff"></span>
                            </div>
                            <div class="overflow-hidden">
                                Order Placed
                            </div>
                        </div>
                        <div class="floated-content mb-10">
                            <div class="bg-green pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                <span class="fa fa-check mt-4 icon-fff"></span>
                            </div>
                            <div class="overflow-hidden">
                                Requirements Submitted
                            </div>
                        </div>
                        <div class="floated-content mb-10">
                            <div class="bg-orange pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                <span class="fa fa-spinner fa-spin mt-4 icon-fff"></span>
                            </div>
                            <div class="overflow-hidden">
                                Order In progress
                            </div>
                        </div>
                        <div class="floated-content mb-10">
                            <div class="bg-ccc pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                <span class="fa fa-ellipsis-h mt-4 icon-fff"></span>
                            </div>
                            <div class="overflow-hidden">
                                Order Delivery
                            </div>
                        </div>
                        <div class="floated-content mb-10">
                            <div class="bg-ccc pull-left text-center mr-10 br-50" style="width: 20px; height: 20px;">
                                <span class="fa fa-ellipsis-h mt-4 icon-fff"></span>
                            </div>
                            <div class="overflow-hidden">
                                Order Completed
                            </div>
                        </div>
                    </div>


                    <div class="bt-1-ddd mt-20">
                        <div class="pt-15 pb-15 font-bold">
                            Order Resolution
                        </div>
                        <div>
                            Have any issues with your order?
                            <br>
                            Visit the resoultion center.
                            <br>
                            <a href="/account/resolution/orders/123456789012" class="btn btn-transparent-black btn-sm mt-5">
                                Resoultion Center
                            </a>
                        </div>
                    </div>


                </div>

                <div class="section">
                    <div class="section-title">
                        Buyer Information
                    </div>
                    <div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Name
                            </div>
                            <div>
                                Olawale Lawal
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Country
                            </div>
                            <div>
                                Nigeria
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Gender
                            </div>
                            <div>
                                Female
                            </div>
                        </div>
                        <div>
                            <a href="/user/abcde12345" class="btn btn-transparent-black btn-sm">
                                View buyer's profile
                            </a>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="section-title">
                        Seller Information
                    </div>
                    <div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Name
                            </div>
                            <div>
                                Olawale Lawal
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Country
                            </div>
                            <div>
                                Nigeria
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="text-small text-color-fade">
                                Gender
                            </div>
                            <div>
                                Female
                            </div>
                        </div>
                        <div>
                            <a href="/user/abcde12345" class="btn btn-transparent-black btn-sm">
                                View seller's profile
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
