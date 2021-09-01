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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/support">Support</a></li>
                <li class="breadcrumb-item"><a href="/support/tickets">Tickets</a></li>
                <li class="breadcrumb-item active" aria-current="page">#123456789012</li>
            </ol>
        </div>

        <div class="section">
            <div class="section-title section-title-sm">
                #123456789012 - Ticket
                <form action="" class="pull-right d-block d-lg-none">
                    <button type="submit" class="btn btn-danger btn-sm">
                        <span class="fa fa-times-circle"></span>
                        Close Ticket
                    </button>
                </form>
            </div>
            <div>
                
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        
                        <div class="d-block d-md-none">
                            <div class="b-1-ddd bg-eee p-10">
                                <button class="btn btn-transparent-black btn-xs" data-toggle="collapse" data-target="#ticket-details">
                                    View Ticket Details
                                    <span class="fa fa-angle-right"></span>
                                </button>
                            </div>

                            <div id="ticket-details" class="collapse bg-fff">
                                <div class="b-1-ddd mt-20">
                                    <div class="bg-eee p-10">
                                        Issue Raised
                                    </div>
                                    <div class="p-10">
                                        <div class="font-bold">
                                            Sample of interview follow-up mails
                                        </div>
                                        <div class="mt-10 text-fade">
                                            Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Volupt
                                        </div>
                                    </div>
                                </div>
                                <div class="b-1-ddd mt-20">
                                    <div class="bg-eee p-10">
                                        Ticket Information
                                    </div>
                                    <div class="p-10">
                                        <div class="text-left-right">
                                            <div>
                                                <div>
                                                    <span class="fa fa-hashtag"></span>
                                                    <div class="overflow-hidden">
                                                        Ticket ID
                                                    </div>
                                                </div>
                                                <div>
                                                    #3456789
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-asterisk"></span>
                                                    <div class="overflow-hidden">
                                                        Status
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="label label-success label-sm">
                                                        Completed
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-list"></span>
                                                    <div class="overflow-hidden">
                                                        Category
                                                    </div>
                                                </div>
                                                <div>
                                                    Deals Management
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-calendar"></span>
                                                    <div class="overflow-hidden">
                                                        Date Created
                                                    </div>
                                                </div>
                                                <div>
                                                    Jan 12, 2020 at 02:07 am
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-calendar"></span>
                                                    <div class="overflow-hidden">
                                                        Date Last Answered
                                                    </div>
                                                </div>
                                                <div>
                                                    Jan 12, 2020 at 03:07 am
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="fa fa-user-circle"></span>
                                                    <div class="overflow-hidden">
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

                        <div class="d-none d-md-block">
                            <div class="b-1-ddd">
                                <div class="bg-eee p-10">
                                    Issue Raised
                                </div>
                                <div class="p-10">
                                    <div class="font-bold">
                                        Sample of interview follow-up mails
                                    </div>
                                    <div class="mt-10 text-fade">
                                        Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Voluptate eaque veniam voluptatem omnis et velit eu Et repellendus At pariatur Volupt
                                    </div>
                                </div>
                            </div>
                            <div class="b-1-ddd mt-30">
                                <div class="bg-eee p-10">
                                    Ticket Information
                                </div>
                                <div class="p-10">
                                    <div class="text-left-right">
                                        <div>
                                            <div>
                                                <span class="fa fa-hashtag"></span>
                                                <div class="overflow-hidden">
                                                    Ticket ID
                                                </div>
                                            </div>
                                            <div>
                                                #3456789
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-asterisk"></span>
                                                <div class="overflow-hidden">
                                                    Status
                                                </div>
                                            </div>
                                            <div>
                                                <label class="label label-success label-sm">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-list"></span>
                                                <div class="overflow-hidden">
                                                    Category
                                                </div>
                                            </div>
                                            <div>
                                                Deals Management
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-calendar"></span>
                                                <div class="overflow-hidden">
                                                    Date Created
                                                </div>
                                            </div>
                                            <div>
                                                Jan 12, 2020 at 02:07 am
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-calendar"></span>
                                                <div class="overflow-hidden">
                                                    Date Last Answered
                                                </div>
                                            </div>
                                            <div>
                                                Jan 12, 2020 at 03:07 am
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-user-circle"></span>
                                                <div class="overflow-hidden">
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
                    <div class="col-md-7 col-lg-8">

                        <div class="d-block d-md-none mt-20 mb-10 font-15 font-bold text-center">
                            Conversation
                        </div>
                        
                        <div class="b-1-ddd">
                            @include('front.common.ticket')
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
