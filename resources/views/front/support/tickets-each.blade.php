@extends('layouts.front.app')


@section('title')
    #123456789012 - Ticket - Support Center
@endsection


@section('og')
    <meta name="description" content="#123456789012 - Tickets - Support Center - Posla">
    <meta name="keywords" content="All Tickets, Support Center, Help, Posla, Posla.com">
    <meta name="tags" content="all tickets support center help posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        
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
                <li className="breadcrumb-item"><Link to="/">Home</Link></li>
                <li className="breadcrumb-item"><Link to="/support">Support</Link></li>
                <li className="breadcrumb-item"><Link to="/support/tickets">Tickets</Link></li>
                <li className="breadcrumb-item active" aria-current="page">#123456789012</li>
            </ol>
        </div>

        <div className="section">
            <div className="section-title section-title-sm">
                #123456789012 - Ticket
                <form action="" className="pull-right d-block d-lg-none">
                    <button type="submit" className="btn btn-danger btn-sm">
                        <span className="fa fa-times-circle"></span>
                        Close Ticket
                    </button>
                </form>
            </div>
            <div>
                
                <div className="row">
                    <div className="col-md-5 col-lg-4">
                        
                        <div className="d-block d-md-none">
                            <div className="b-1-ddd bg-eee p-2.5">
                                <button className="btn btn-transparent-black btn-xs" data-toggle="collapse" data-target="#ticket-details">
                                    View Ticket Details
                                    <span className="fa fa-angle-right"></span>
                                </button>
                            </div>

                            <div id="ticket-details" className="collapse bg-fff">
                                <div className="b-1-ddd mt-5">
                                    <div className="bg-eee p-2.5">
                                        Issue Raised
                                    </div>
                                    <div className="p-2.5">
                                        <div className="font-bold">
                                            Sample of interview follow-up mails
                                        </div>
                                        <div className="mt-2.5 text-fade">
                                            Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Volupt
                                        </div>
                                    </div>
                                </div>
                                <div className="b-1-ddd mt-5">
                                    <div className="bg-eee p-2.5">
                                        Ticket Information
                                    </div>
                                    <div className="p-2.5">
                                        <div className="text-left-right">
                                            <div>
                                                <div>
                                                    <span className="fa fa-hashtag"></span>
                                                    <div className="overflow-hidden">
                                                        Ticket ID
                                                    </div>
                                                </div>
                                                <div>
                                                    #3456789
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-asterisk"></span>
                                                    <div className="overflow-hidden">
                                                        Status
                                                    </div>
                                                </div>
                                                <div>
                                                    <label className="label label-success label-sm">
                                                        Completed
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-list"></span>
                                                    <div className="overflow-hidden">
                                                        Category
                                                    </div>
                                                </div>
                                                <div>
                                                    Deals Management
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-calendar"></span>
                                                    <div className="overflow-hidden">
                                                        Date Created
                                                    </div>
                                                </div>
                                                <div>
                                                    Jan 12, 2020 at 02:07 am
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-calendar"></span>
                                                    <div className="overflow-hidden">
                                                        Date Last Answered
                                                    </div>
                                                </div>
                                                <div>
                                                    Jan 12, 2020 at 03:07 am
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span className="fa fa-user-circle"></span>
                                                    <div className="overflow-hidden">
                                                        Last Message
                                                    </div>
                                                </div>
                                                <div>
                                                    Olawale Lawal
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="d-none d-md-block">
                            <div className="b-1-ddd">
                                <div className="bg-eee p-2.5">
                                    Issue Raised
                                </div>
                                <div className="p-2.5">
                                    <div className="font-bold">
                                        Sample of interview follow-up mails
                                    </div>
                                    <div className="mt-2.5 text-fade">
                                        Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Volupt
                                    </div>
                                </div>
                            </div>
                            <div className="b-1-ddd mt-30">
                                <div className="bg-eee p-2.5">
                                    Ticket Information
                                </div>
                                <div className="p-2.5">
                                    <div className="text-left-right">
                                        <div>
                                            <div>
                                                <span className="fa fa-hashtag"></span>
                                                <div className="overflow-hidden">
                                                    Ticket ID
                                                </div>
                                            </div>
                                            <div>
                                                #3456789
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-asterisk"></span>
                                                <div className="overflow-hidden">
                                                    Status
                                                </div>
                                            </div>
                                            <div>
                                                <label className="label label-success label-sm">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-list"></span>
                                                <div className="overflow-hidden">
                                                    Category
                                                </div>
                                            </div>
                                            <div>
                                                Deals Management
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-calendar"></span>
                                                <div className="overflow-hidden">
                                                    Date Created
                                                </div>
                                            </div>
                                            <div>
                                                Jan 12, 2020 at 02:07 am
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-calendar"></span>
                                                <div className="overflow-hidden">
                                                    Date Last Answered
                                                </div>
                                            </div>
                                            <div>
                                                Jan 12, 2020 at 03:07 am
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span className="fa fa-user-circle"></span>
                                                <div className="overflow-hidden">
                                                    Last Message
                                                </div>
                                            </div>
                                            <div>
                                                Olawale Lawal
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div className="col-md-7 col-lg-8">

                        <div className="d-block d-md-none mt-5 mb-10 font-15 font-bold text-center">
                            Conversation
                        </div>
                        
                        <div className="b-1-ddd">
                            @include('front.common.ticket')
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
