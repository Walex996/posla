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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <link to="{{ asset('/css/simplyCountdown.theme.default.css') }}" rel="stylesheet">
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
                year: 2021,
                month: 10,
                day:  29,
                hours: 10,
                minutes: 05,
                seconds: 00,
                enableUtc: false,
            });
            $(".simply-section").after(`<div className="simply-section simply-section-separator"><div><span className="simply-amount">:</span><span className="simply-word">&nbsp;</span></div></div>`);
        });
    </script>
@endsection
    


@section('content')
    
    <div className="container">
        <div className="row">

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item"><Link to="/account/orders">Orders</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">123456789012</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        My Orders - #123456789012
                    </div>

                    
                    {{-- order-status-not-started --}}
                    {{--                     
                    <div className="order-status order-status-not-started">
                        <div className="pull-right">
                            $45
                        </div>
                        <div className="overflow-hidden">
                            <span className="fa fa-check-circle"></span>
                            Order Not Started
                        </div>
                    </div>
                    --}}

                    {{-- order-status-in-progress --}}
                    <div className="order-status order-status-in-progress">
                        <div className="pull-right">
                            $45
                        </div>
                        <div className="overflow-hidden">
                            <span className="fa fa-check-circle"></span>
                            Order In Progress
                        </div>
                    </div>
                    
                    {{-- order-status-completed --}}
                    {{--                     
                    <div className="order-status order-status-completed">
                        <div className="pull-right">
                            $45
                        </div>
                        <div className="overflow-hidden">
                            <span className="fa fa-check-circle"></span>
                            Order Completed
                        </div>
                    </div>
                    --}}


                    <div className="mt-0">
                        <div className="bg-ddd p-2.5">
                            Anthony's Order
                        </div>
                        <div>
                            <div className="table-responsive b-1-ddd bt-none">
                                <table className="table table-tr-lines table-cart">
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
                                                            I will design a beautiful logo for your business
                                                        </Link>
                                                        <div className="text-fade mt-2.5">
                                                            <div>
                                                                Category (Subcategory)
                                                            </div>
                                                            <div className="mt-1.5">
                                                                Package: Basic Designs
                                                            </div>
                                                            <div className="mt-1.5" data-toggle="collapse" data-target="#package-details">
                                                                Package Details
                                                                <span className="fa fa-angle-down icon-333"></span>
                                                            </div>
                                                            <div id="package-details" className="collapse">
                                                                <div className="p-2.5 pl-15 pr-15 mt-1.5 b-1-ddd d-inline-block">
                                                                    <ul className="list-style">
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
                                                <div className="d-block d-sm-none d-md-block d-lg-none bt-1-ddd mt-2.5 pt-2.5">
                                                    <div className="mt-2.5 pull-right">
                                                        Price:
                                                        $100
                                                    </div>
                                                    <form action="">
                                                        <div className="input-group input-group-attach mt-2" style="width: 100px;">
                                                            <div className="input-group-btn b-1-ddd">
                                                                <button type="button" className="bg-eee btn-md">
                                                                    <span>Qty</span>
                                                                    <span>1</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td className="d-none d-sm-table-cell d-md-none d-lg-table-cell">
                                                <div className="d-none d-sm-block d-md-none mt-2.5"></div>
                                                <form action="">
                                                    <div className="input-group input-group-attach mt-2" style="width: 100px;">
                                                        <div className="input-group-btn b-1-ddd">
                                                            <button type="button" className="bg-eee btn-md">
                                                                <span>Qty</span>
                                                                <span>1</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div className="d-block d-md-none d-lg-block d-xl-none mt-2.5 text-left">
                                                    Price:
                                                    $100
                                                </div>
                                            </td>
                                            <td className="d-none d-xl-table-cell">
                                                <div className="text-center mt-2.5">
                                                    $100
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div className="d-block d-md-none icon-right mt-2.5">
                        <button className="btn btn-transparent-black btn-xs" data-toggle="collapse" data-target="#project-details">
                            View Project Details
                            <span className="fa fa-angle-right"></span>
                        </button>
                    </div>

                </div>


                <div id="project-details" className="collapse">
                    <div className="d-block d-md-none">
                        <div className="row">

                            <div className="col-sm-6">
                                {{-- for both seller & buyer --}}
                                <div className="section">
                                    <div className="section-title">
                                        Project Status
                                    </div>
                                    <div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Project Started
                                            </div>
                                            <div>
                                                Jan 25, 2020 at 10:05pm
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Current Delivery Date
                                            </div>
                                            <div>
                                                Jan 25, 2020 at 10:05pm
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Revisions Remaining
                                            </div>
                                            <div>
                                                3 Revisions
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Delivery Format
                                            </div>
                                            <div>
                                                Jan 25, 2020 at 10:05pm
                                            </div>
                                        </div>
                                        <div>
                                            <Link to="/project/c1d00230-a423-4b84-a121-7105239ff8d8" className="btn btn-transparent-black btn-sm">
                                                View project details
                                            </Link>
                                        </div>
                                    </div>

                                    {{-- order tracking --}}
                                    <div className="bt-1-ddd mt-5">
                                        <div className="pt-15 pb-15 font-bold">
                                            Order Tracking
                                        </div>
                                        <div className="floated-content mb-10">
                                            <div className="bg-green pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                                <span className="fa fa-check mt-4 icon-fff"></span>
                                            </div>
                                            <div className="overflow-hidden">
                                                Order Placed
                                            </div>
                                        </div>
                                        <div className="floated-content mb-10">
                                            <div className="bg-green pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                                <span className="fa fa-check mt-4 icon-fff"></span>
                                            </div>
                                            <div className="overflow-hidden">
                                                Requirements Submitted
                                            </div>
                                        </div>
                                        <div className="floated-content mb-10">
                                            <div className="bg-orange pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                                <span className="fa fa-spinner fa-spin mt-4 icon-fff"></span>
                                            </div>
                                            <div className="overflow-hidden">
                                                Order In progress
                                            </div>
                                        </div>
                                        <div className="floated-content mb-10">
                                            <div className="bg-ccc pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                                <span className="fa fa-ellipsis-h mt-4 icon-fff"></span>
                                            </div>
                                            <div className="overflow-hidden">
                                                Order Delivery
                                            </div>
                                        </div>
                                        <div className="floated-content mb-10">
                                            <div className="bg-ccc pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                                <span className="fa fa-ellipsis-h mt-4 icon-fff"></span>
                                            </div>
                                            <div className="overflow-hidden">
                                                Order Completed
                                            </div>
                                        </div>
                                    </div>

                                    <div className="bt-1-ddd mt-5">
                                        <div className="pt-15 pb-15 font-bold">
                                            Order Resolution
                                        </div>
                                        <div>
                                            Have any issues with your order?
                                            <br />
                                            Visit the resoultion center.
                                            <br />
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-transparent-black btn-sm mt-1.5">
                                                Resoultion Center
                                            </Link>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div className="col-sm-6">
                                
                                <div className="section">
                                    <div className="section-title">
                                        Buyer Information
                                    </div>
                                    <div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Name
                                            </div>
                                            <div>
                                                Olawale Lawal
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Country
                                            </div>
                                            <div>
                                                Nigeria
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Gender
                                            </div>
                                            <div>
                                                Female
                                            </div>
                                        </div>
                                        <div>
                                            <Link to="/user/abcde12345" className="btn btn-transparent-black btn-sm">
                                                View buyer's profile
                                            </Link>
                                        </div>
                                    </div>
                                </div>

                                <div className="section">
                                    <div className="section-title">
                                        Seller Information
                                    </div>
                                    <div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Name
                                            </div>
                                            <div>
                                                Olawale Lawal
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Country
                                            </div>
                                            <div>
                                                Nigeria
                                            </div>
                                        </div>
                                        <div className="mb-15">
                                            <div className="text-small text-color-fade">
                                                Gender
                                            </div>
                                            <div>
                                                Female
                                            </div>
                                        </div>
                                        <div>
                                            <Link to="/user/abcde12345" className="btn btn-transparent-black btn-sm">
                                                View seller's profile
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div className="text-center mb-0 d-block d-md-none">
                    <hr className="mt-0 mb-0">
                    <div className="d-inline-block bg-eee pr-15 pl-15" style="position: relative; top: -12px; z-index: 5;">
                        Project Timeline
                    </div>
                </div>
                
                <div className="section">
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
                        <div className="mb-10 text-center">
                            <div className="text-center font-bold bg-f00 text-fff d-inline-block mx-auto pr-2.5 pl-2.5">
                                Project Deadline
                            </div>
                            <div className="text-center">
                                <div id="simply-countdown-losange"></div>
                            </div>
                        </div>
                        

                        {{-- conversation --}}
                        {{-- from me (seller) --}}
                        <div className="user-msg b-1-ddd">
                            <div className="overflow-hidden">
                                <Link to="/user/abcde12345" className="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </Link>
                                <div className="pull-right mt-2.5 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold mt-2.5 d-none d-sm-inline-block text-blue hover-underline">
                                        Firstname Lastname
                                    </Link>
                                    <Link to="/user/abcde12345" className="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Firstname Lastname
                                    </Link>
                                    <div className="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>

                        

                        {{-- conversation --}}
                        {{-- from customer (buyer) --}}
                        <div className="user-msg b-1-ddd">
                            <div className="overflow-hidden">
                                <Link to="/user/abcde12345" className="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </Link>
                                <div className="pull-right mt-2.5 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold mt-2.5 d-none d-sm-inline-block text-blue hover-underline">
                                        Customerfname Customerlname
                                    </Link>
                                    <Link to="/user/abcde12345" className="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Customerfname Customerlname
                                    </Link>
                                    <div className="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>

                        

                        {{-- conversation with attachment --}}
                        {{-- from me (seller) --}}
                        <div className="user-msg b-1-ddd">
                            <div className="overflow-hidden">
                                <Link to="/user/abcde12345" className="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </Link>
                                <div className="pull-right mt-2.5 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold mt-2.5 d-none d-sm-inline-block text-blue hover-underline">
                                        Firstname Lastname
                                    </Link>
                                    <Link to="/user/abcde12345" className="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Firstname Lastname
                                    </Link>
                                    <div className="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                            {{-- (with attachments) --}}
                            <div className="floated-content mt-5">

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's a video, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" className="dp-cover" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's an audio, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" className="dp-cover" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's anything else, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" className="dp-cover" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>

                        

                        {{-- conversation with attachment --}}
                        {{-- from customer (buyer) --}}
                        <div className="user-msg b-1-ddd">
                            <div className="overflow-hidden">
                                <Link to="/user/abcde12345" className="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </Link>
                                <div className="pull-right mt-2.5 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold mt-2.5 d-none d-sm-inline-block text-blue hover-underline">
                                        Customerfname Customerlname
                                    </Link>
                                    <Link to="/user/abcde12345" className="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Customerfname Customerlname
                                    </Link>
                                    <div className="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                            {{-- (with attachments) --}}
                            <div className="floated-content mt-5">

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's a video, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" className="dp-cover" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's an audio, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" className="dp-cover" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media">
                                    <div className="text-center">
                                        {{-- if it's anything else, display this image --}}
                                        <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" className="dp-cover" />
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>

                        

                        {{-- order requirement request --}}
                        {{-- system generated --}}
                        <div className="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span className="fa fa-clipboard icon-orange"></span>
                            </div>
                            <div className="text-orange">
                                Order Requirement
                            </div>
                            <div>
                                Please fill in these requirements to start your order
                            </div>
                            <div className="mt-1.5">
                                <Link to="/account/orders/requirements/123456789012" className="btn btn-transparent-black btn-xs hover-bg-orange">
                                    Fill requirements
                                </Link>
                            </div>
                            <div className="order-mgmt-date text-fade text-small mt-2.5">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>



                        {{-- order requirement submitted --}}
                        {{-- system generated --}}
                        <div className="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span className="fa fa-clipboard icon-blue"></span>
                            </div>
                            <div className="text-blue">
                                Order Requirement
                            </div>
                            <div>
                                The requirements have been filled and submitted.
                            </div>
                            <div className="mt-1.5">
                                <Link to="/account/orders/requirements/123456789012" className="btn btn-transparent-black btn-xs hover-bg-blue">
                                    View requirements
                                </Link>
                            </div>
                            <div className="order-mgmt-date text-fade text-small mt-2.5">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>



                        {{-- order started --}}
                        {{-- system generated --}}
                        <div className="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span className="fa fa-hourglass-start icon-blue"></span>
                            </div>
                            <div className="text-blue">
                                Order Started
                            </div>
                            <div>
                                The countdown for this order has officially started.
                                <br />
                                Delivery Timeframe: 1 day.
                            </div>
                            <div className="order-mgmt-date text-fade text-small mt-2.5">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>


                        {{-- order download --}}
                        {{-- system generated --}}
                        {{-- only if "Delivery Format" != "Work & Deliver" --}}
                        <div className="order-mgmt text-left b-1-ddd pt-0 pb-30">
                            <div className="order-mgmt">
                                <div>
                                    <span className="fa fa-file icon-orange"></span>
                                </div>
                                <div className="text-orange">
                                    Your order download is ready
                                </div>
                                <div>
                                    Yours files are now available for download
                                </div>
                                <div className="order-mgmt-date text-fade text-small mt-2.5">
                                    December 15, 2020 at 9:54PM
                                </div>
                            </div>
                            <div className="p-5-10 b-1-ddd floated-content" style="margin-top: -20px;">

                                {{-- click to download --}}
                                <Link to="" className="media media-lg">
                                    <div className="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                        {{-- else, display the right icon --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" className="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" className="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" className="dp-cover" /> --}}
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                                {{-- click to download --}}
                                <Link to="" className="media media-lg">
                                    <div className="text-center">
                                        {{-- if it's an image, display it directly --}}
                                        <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                        {{-- else, display the right stuff --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" className="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" className="dp-cover" /> --}}
                                        {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" className="dp-cover" /> --}}
                                    </div>
                                    <div>
                                        <div className="pull-right ml-1.5 pt-4">
                                            <span className="text-fade text-small">(33kb)</span>
                                        </div>
                                        <div className="overflow-hidden ellipsis">
                                            <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                            <span className="">12412412412.jpg</span>
                                        </div>
                                    </div>
                                </Link>

                            </div>
                        </div>



                        {{-- conversation --}}
                        <div className="user-msg b-1-ddd">
                            <div className="overflow-hidden">
                                <Link to="/user/abcde12345" className="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </Link>
                                <div className="pull-right mt-2.5 text-fade d-none d-sm-block">
                                    Jan 12, 2019 at 9:05pm
                                </div>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold mt-2.5 d-none d-sm-inline-block text-blue hover-underline">
                                        Firstname Lastname
                                    </Link>
                                    <Link to="/user/abcde12345" className="font-bold d-inline-block d-sm-none text-blue hover-underline">
                                        Firstname Lastname
                                    </Link>
                                    <div className="text-fade text-small d-block d-sm-none">
                                        Jan 12, 2019 at 9:05pm
                                    </div>
                                </div>
                            </div>
                            <div className="mt-2.5 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>



                        {{-- for me (seller) to see --}}
                        {{-- when status is after "requirement filled" but before "order completed"  --}}
                        <div className="text-center bg-eee pt-1.50 pb-1.50 b-1-ddd">
                            <Link to="/account/orders/deliver/123456789012" className="btn btn-blue icon-left">
                                <span className="fa fa-box-open"></span>
                                Deliver Work
                            </Link>
                        </div>



                        {{-- order delivered --}}
                        {{-- system generated --}}
                        {{-- for both to see --}}
                        <div className="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span className="fa fa-truck icon-blue"></span>
                            </div>
                            <div className="text-blue">
                                Order Delivered
                            </div>
                            <div>
                                The project has been successfully delivered to the buyer.
                                <br />
                                If you do not perform any action,
                                Your order will be marked as completed within 3 days.
                            </div>
                            <div className="mt-2.5">
                                <Link data-toggle="modal" data-target="#modal-delivery-accept" className="btn btn-blue btn-sm mb-1.5 mr-1.5 ml-1.5">Accept Delivery</Link>
                                <Link data-toggle="modal" data-target="#modal-delivery-revision" className="btn btn-orange btn-sm mb-1.5 mr-1.5 ml-1.5">Make Revision (2 remaining) </Link>
                                <Link to="/account/resolution/orders/123456789012" className="btn btn-transparent-black btn-sm mb-1.5 mr-1.5 ml-1.5">Reject Delivery</Link>
                            </div>
                            <div className="order-mgmt-date text-fade text-small mt-2.5">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>

                        <div className="modal" id="modal-delivery-accept">
                            <div className="modal-dialog">
                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h4 className="modal-title">Accept Delivery</h4>
                                        <button type="button" className="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div className="modal-body">
                                        <div className="p-2.5">

                                            <div className="b-1-ddd p-5-10">
                                                <div className="pull-left mr-5">
                                                    <span className="fa fa-certificate icon-blue icon-30"></span>
                                                </div>
                                                <div className="overflow-hidden">
                                                    Satisfied with the order delivered by the seller?
                                                    <br className="d-none d-md-block">
                                                    please click the accept button below.
                                                    <br />
                                                    This action cannot be reversed.
                                                </div>
                                            </div>

                                            <br />

                                            To make adjustments,
                                            <br />
                                            please click <Link data-toggle="modal" data-target="#modal-delivery-revision" className="underline hover-orange">I want to make a revision.</Link>
                                            <div>
                                                <div className="note mt-2 pt-3 pb-3 pl-2.5 pr-2.5 d-inline-block font-normal">
                                                    Revisions Remaining: 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="modal-footer">
                                        <button type="button" className="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                            <span className="fa fa-times"></span>
                                            Cancel
                                        </button>
                                        <button type="button" className="btn btn-blue btn-sm icon-left">
                                            <span className="fa fa-check-square"></span>
                                            Accept Delivery
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="modal" id="modal-delivery-revision">
                            <div className="modal-dialog">
                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h4 className="modal-title">Delivery - Request Revision</h4>
                                        <button type="button" className="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div className="modal-body">
                                        <div className="p-2.5">

                                            <div className="note text-center">
                                                Please make your revision as clear and concise as possible.
                                                <div className="font-normal">
                                                    To give the seller more time to complete this revision,
                                                    <br />
                                                    please visit our <Link to="/account/resolution/orders/123456789012" className="underline font-normal" target="_blank">order resolution center</Link>
                                                </div>
                                            </div>

                                            <div className="form-group mt-2.5">
                                                <label>What to modify in the delivery:</label>
                                                <textarea name="" id="" style="height: 125px;" className="form-control mt-1.5" placeholder="Enter message"></textarea>
                                            </div>

                                            <div className="font-bold text-red">
                                                <button type="button" className="btn btn-transparent-black btn-sm pull-left" data-toggle="collapse" data-target="#add-attachment">
                                                    <span className="fa fa-paperclip icon-333"></span>
                                                    Add attachment
                                                    <span className="fa fa-angle-down icon-333"></span>
                                                </button>
                                                <div className="overflow-hidden text-right font-bold text-red pt-1.5">
                                                    Revisions remaining: 1
                                                </div>
                                            </div>
                                            <div id="add-attachment" className="collapse mt-5 b-1-ddd p-2.5 pt-0">
                                                <div className="row">
                                                    <div className="col-sm-6 mt-2.5">
                                                        <input type="file" className="form-control">
                                                    </div>
                                                    <div className="col-sm-6 mt-2.5">
                                                        <input type="file" className="form-control">
                                                    </div>
                                                    <div className="col-sm-6 mt-2.5">
                                                        <input type="file" className="form-control">
                                                    </div>
                                                    <div className="col-sm-6 mt-2.5">
                                                        <input type="file" className="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div className="modal-footer">
                                        <button type="button" className="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                            <span className="fa fa-times"></span>
                                            Cancel
                                        </button>
                                        <button type="button" className="btn btn-orange btn-sm icon-left">
                                            <span className="fa fa-file"></span>
                                            Submit Revision
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>





                        {{-- order revision --}}
                        {{-- system generated --}}
                        {{-- only if revision was submitted for this delivery --}}
                        <div className="order-mgmt text-left b-1-ddd pt-0 pb-30">
                            <div className="order-mgmt">
                                <div>
                                    <span className="fa fa-edit icon-blue"></span>
                                </div>
                                <div className="text-blue">
                                    Order Delivery Revision
                                </div>
                                <div>
                                    Your requested for the following modifications to your order delivery.
                                </div>
                                <div className="b-1-ddd p-5-10 mt-2.5 text-left">
                                    <div>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    </div>
                                    {{-- if attachments were added, show the did below; else nothing --}}
                                    <div className="floated-content text-center mt-5">
        
                                        {{-- click to download --}}
                                        <Link to="" className="media media-sm">
                                            <div className="text-center">
                                                {{-- if it's an image, display it directly --}}
                                                <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                                {{-- else, display the right stuff --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" className="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" className="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" className="dp-cover" /> --}}
                                            </div>
                                            <div>
                                                <div className="pull-right ml-1.5 pt-4">
                                                    <span className="text-fade text-small">(33kb)</span>
                                                </div>
                                                <div className="overflow-hidden ellipsis">
                                                    <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                    <span className="">12412412412.jpg</span>
                                                </div>
                                            </div>
                                        </Link>
        
                                        {{-- click to download --}}
                                        <Link to="" className="media media-sm">
                                            <div className="text-center">
                                                {{-- if it's an image, display it directly --}}
                                                <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                                {{-- else, display the right stuff --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-audio.png')}}" alt="" className="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-video.png')}}" alt="" className="dp-cover" /> --}}
                                                {{-- <img src="{{asset('img/app/bgs/media-others.png')}}" alt="" className="dp-cover" /> --}}
                                            </div>
                                            <div>
                                                <div className="pull-right ml-1.5 pt-4">
                                                    <span className="text-fade text-small">(33kb)</span>
                                                </div>
                                                <div className="overflow-hidden ellipsis">
                                                    <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                    <span className="">12412412412.jpg</span>
                                                </div>
                                            </div>
                                        </Link>
        
                                    </div>
                                </div>
                                <div className="order-mgmt-date text-fade text-small mt-2.5">
                                    December 15, 2020 at 9:54PM
                                </div>
                            </div>

                        </div>






                        {{-- order review request --}}
                        {{-- system generated --}}
                        {{-- for customer (buyer) to see --}}
                        <div className="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span className="fa fa-star icon-orange"></span>
                            </div>
                            <div className="text-orange">
                                Order Review
                            </div>
                            <div>
                                Please rate this seller based on the seller's performance and project delivery.
                            </div>

                            <div className="mt-1.5">
                                <Link to="/account/orders/review/123456789012" className="btn btn-transparent-black btn-xs hover-bg-orange">
                                    Rate Seller
                                </Link>
                            </div>
                            <div className="order-mgmt-date text-fade text-small mt-2.5">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>


                        
                        {{-- order review submitted --}}
                        {{-- system generated --}}
                        {{-- for me (seller) to see --}}
                        <div className="order-mgmt text-left b-1-ddd pt-0 pb-30">
                            <div className="order-mgmt">
                                <div>
                                    <span className="fa fa-star icon-blue"></span>
                                </div>
                                <div className="text-blue">
                                    Buyer's Review
                                </div>
                                <div>
                                    {{-- for me (seller) --}}
                                    {{-- Here's the review Alex submitted in respect to your performance & delivery of this project. --}}

                                    {{-- for customer (buyer) --}}
                                    Here's your review for Anthony, in respect to his/her ((check gender)) performance & delivery of the project.
                                </div>
                            </div>

                            <div className="pb-0">
                                <div className="row">
                                    <div className="col-sm-6">
                                        <div className="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span className="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span className="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span className="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span className="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="reviews-summary">
                                            <div>
                                                Seller communication level
                                                <span className="font-bold">(4.5)</span>
                                            </div>
                                            <div>
                                                <div style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="user-msg b-1-ddd">
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="user-msg-img pull-left">
                                        <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                    </Link>
                                    <div className="pull-right d-none d-sm-block">
                                        <div className="rating-box mt-1.5">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                            </div>
                                            <div className="font-bold text-orange">
                                                5.0
                                            </div>
                                        </div>
                                    </div>
                                    <div className="overflow-hidden">
                                        <Link to="/user/abcde12345" className="font-bold hover-underline">
                                            Firstname Lastname
                                        </Link>
                                        <div className="text-fade">
                                            Published: Jan 12, 2019
                                        </div>
                                        <div className="rating-box d-block d-sm-none">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                            </div>
                                            <div className="font-bold text-orange">
                                                5.0
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="mt-2.5 font-normal text-justify">
                                    I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                                </div>
                            </div>
                        </div>

                        

                        {{-- order completed --}}
                        {{-- system generated --}}
                        {{-- for both to see --}}
                        <div className="order-mgmt pb-15 b-1-ddd">
                            <div>
                                <span className="fa fa-hourglass-end icon-blue"></span>
                            </div>
                            <div className="text-blue">
                                Order Completed
                            </div>
                            <div>
                                This order is now completed and all renumerations have been processed.
                            </div>
                            <div className="order-mgmt-date text-fade text-small mt-2.5">
                                December 15, 2020 at 9:54PM
                            </div>
                        </div>



                        {{-- new conversation --}}
                        {{-- for both to see --}}
                        {{-- before order is completed --}}
                        <form action="">
                            <div className="order-mgmt-new-text p-15 b-1-ddd bg-eee">
                                <div>
                                    <div className="form-group">
                                        <textarea className="form-control resize-none" style="height: 85px;" placeholder="Type a message..."></textarea>
                                    </div>
                                </div>
                                <div className="floated-content">
                                    <button type="submit" className="btn btn-blue btn-md ml-2.5 pull-right">
                                        <span className="fa fa-paper-plane"></span>
                                        Send
                                    </button>
                                    <button type="button" className="btn btn-transparent-black btn-md pull-right" data-toggle="collapse" data-target="#add-attachment">
                                        <span className="fa fa-paperclip icon-333"></span>
                                        Add attachment
                                        <span className="fa fa-angle-down icon-333"></span>
                                    </button>
                                </div>
                                <div id="add-attachment" className="collapse mt-2.5 b-1-ddd p-5-10">
                                    <div>
                                        Upload Attachments
                                    </div>
                                    <div className="row">
                                        <div className="col-sm-6 mt-2.5">
                                            <input type="file" className="form-control">
                                        </div>
                                        <div className="col-sm-6 mt-2.5">
                                            <input type="file" className="form-control">
                                        </div>
                                        <div className="col-sm-6 mt-2.5">
                                            <input type="file" className="form-control">
                                        </div>
                                        <div className="col-sm-6 mt-2.5">
                                            <input type="file" className="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>

            <div className="d-none d-md-block col-md-4 col-lg-3">

                <div className="section">
                    <div className="section-title">
                        Project Status
                    </div>
                    <div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Project Started
                            </div>
                            <div>
                                Jan 25, 2020 at 10:05pm
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Current Delivery Date
                            </div>
                            <div>
                                Jan 25, 2020 at 10:05pm
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Revisions Remaining
                            </div>
                            <div>
                                3 Revisions
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Delivery Format
                            </div>
                            <div>
                                Jan 25, 2020 at 10:05pm
                            </div>
                        </div>
                        <div>
                            <Link to="/project/c1d00230-a423-4b84-a121-7105239ff8d8" className="btn btn-transparent-black btn-sm">
                                View project details
                            </Link>
                        </div>
                    </div>


                    {{-- order tracking --}}
                    <div className="bt-1-ddd mt-5">
                        <div className="pt-15 pb-15 font-bold">
                            Order Tracking
                        </div>
                        <div className="floated-content mb-10">
                            <div className="bg-green pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                <span className="fa fa-check mt-4 icon-fff"></span>
                            </div>
                            <div className="overflow-hidden">
                                Order Placed
                            </div>
                        </div>
                        <div className="floated-content mb-10">
                            <div className="bg-green pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                <span className="fa fa-check mt-4 icon-fff"></span>
                            </div>
                            <div className="overflow-hidden">
                                Requirements Submitted
                            </div>
                        </div>
                        <div className="floated-content mb-10">
                            <div className="bg-orange pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                <span className="fa fa-spinner fa-spin mt-4 icon-fff"></span>
                            </div>
                            <div className="overflow-hidden">
                                Order In progress
                            </div>
                        </div>
                        <div className="floated-content mb-10">
                            <div className="bg-ccc pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                <span className="fa fa-ellipsis-h mt-4 icon-fff"></span>
                            </div>
                            <div className="overflow-hidden">
                                Order Delivery
                            </div>
                        </div>
                        <div className="floated-content mb-10">
                            <div className="bg-ccc pull-left text-center mr-2.5 br-50" style="width: 20px; height: 20px;">
                                <span className="fa fa-ellipsis-h mt-4 icon-fff"></span>
                            </div>
                            <div className="overflow-hidden">
                                Order Completed
                            </div>
                        </div>
                    </div>


                    <div className="bt-1-ddd mt-5">
                        <div className="pt-15 pb-15 font-bold">
                            Order Resolution
                        </div>
                        <div>
                            Have any issues with your order?
                            <br />
                            Visit the resoultion center.
                            <br />
                            <Link to="/account/resolution/orders/123456789012" className="btn btn-transparent-black btn-sm mt-1.5">
                                Resoultion Center
                            </Link>
                        </div>
                    </div>


                </div>

                <div className="section">
                    <div className="section-title">
                        Buyer Information
                    </div>
                    <div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Name
                            </div>
                            <div>
                                Olawale Lawal
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Country
                            </div>
                            <div>
                                Nigeria
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Gender
                            </div>
                            <div>
                                Female
                            </div>
                        </div>
                        <div>
                            <Link to="/user/abcde12345" className="btn btn-transparent-black btn-sm">
                                View buyer's profile
                            </Link>
                        </div>
                    </div>
                </div>

                <div className="section">
                    <div className="section-title">
                        Seller Information
                    </div>
                    <div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Name
                            </div>
                            <div>
                                Olawale Lawal
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Country
                            </div>
                            <div>
                                Nigeria
                            </div>
                        </div>
                        <div className="mb-15">
                            <div className="text-small text-color-fade">
                                Gender
                            </div>
                            <div>
                                Female
                            </div>
                        </div>
                        <div>
                            <Link to="/user/abcde12345" className="btn btn-transparent-black btn-sm">
                                View seller's profile
                            </Link>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
