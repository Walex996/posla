@extends('layouts.front.app')


@section('title')
    All Tickets - Support Center
@endsection


@section('og')
    <meta name="description" content="All Tickets - Support Center - Posla">
    <meta name="keywords" content="All Tickets, Support Center, Help, Posla, Posla.com">
    <meta name="tags" content="all tickets support center help posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .table-tickets thead tr > th:nth-child(1),
        .table-tickets tbody tr > td:nth-child(1){
            min-width: 50px;
        }
        .table-tickets thead tr > th:nth-child(3),
        .table-tickets tbody tr > td:nth-child(3){
            min-width: 300px;
            max-width: 500px;
        }
    </style>
@endsection


@section('content')
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/support">Support</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tickets</li>
            </ol>
        </div>

        <div class="section">
            <div class="section-title section-title-sm">
                All Tickets
                <a href="/support/tickets/new" class="btn btn-blue btn-sm pull-right">Create New Ticket</a>
            </div>
            <div>

                <div class="table-responsive b-1-ddd">
                    <table class="table table-tickets table-bordered table-tr-padding table-tr-lines table-col-padding">
                        <thead>
                            <tr class="bg-eee">
                                <th class="d-none d-sm-table-cell"></th>
                                <th class="d-none d-lg-table-cell">
                                    Reference No.
                                </th>
                                <th>
                                    Ticket
                                </th>
                                <th class="d-none d-lg-table-cell">
                                    Status
                                </th>
                                <th class="d-none d-lg-table-cell">
                                    Last Updated
                                </th>
                                <th class="d-none d-lg-table-cell">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-warning label-md mr-5">
                                                    In Progress
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-warning">
                                        In Progress
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-danger label-md mr-5">
                                                    Answered
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-danger">
                                        Answered
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="hover-underline">
                                        #123456789012
                                    </a>
                                </td>
                                <td>
                                    <div class="d-block d-lg-none font-bold">
                                        <a href="/support/tickets/123456789012" class="hover-underline">
                                            #123456789012
                                        </a>
                                    </div>
                                    <div class="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div class="mt-5">
                                        <label class="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div class="mt-5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div class="d-block d-lg-none bg-eee p-10 mt-5">
                                        <div>
                                            <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                            <div class="overflow-hidden">
                                                <label class="label label-success label-md mr-5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <label class="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/support/tickets/123456789012" class="btn btn-blue btn-sm icon-right">
                                        View
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </td>
                            </tr>
                            

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="section section-pagination">
            {{-- pagination here --}}
        </div>

    </div>

@endsection
