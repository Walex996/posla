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
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/">Home</Link></li>
                <li className="breadcrumb-item"><Link to="/support">Support</Link></li>
                <li className="breadcrumb-item active" aria-current="page">Tickets</li>
            </ol>
        </div>

        <div className="section">
            <div className="section-title section-title-sm">
                All Tickets
                <Link to="/support/tickets/new" className="btn btn-blue btn-sm pull-right">Create New Ticket</Link>
            </div>
            <div>

                <div className="table-responsive b-1-ddd">
                    <table className="table table-tickets table-bordered table-tr-padding table-tr-lines table-col-padding">
                        <thead>
                            <tr className="bg-eee">
                                <th className="d-none d-sm-table-cell"></th>
                                <th className="d-none d-lg-table-cell">
                                    Reference No.
                                </th>
                                <th>
                                    Ticket
                                </th>
                                <th className="d-none d-lg-table-cell">
                                    Status
                                </th>
                                <th className="d-none d-lg-table-cell">
                                    Last Updated
                                </th>
                                <th className="d-none d-lg-table-cell">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-warning label-md mr-1.5">
                                                    In Progress
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-warning">
                                        In Progress
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-danger label-md mr-1.5">
                                                    Answered
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-danger">
                                        Answered
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            
                            <tr>
                                <td className="d-none d-sm-table-cell">
                                    1
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="hover-underline">
                                        #123456789012
                                    </Link>
                                </td>
                                <td>
                                    <div className="d-block d-lg-none font-bold">
                                        <Link to="/support/tickets/123456789012" className="hover-underline">
                                            #123456789012
                                        </Link>
                                    </div>
                                    <div className="ellipsis-2-lines">
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                        The deal I created is not showing to the public
                                    </div>
                                    <div className="mt-1.5">
                                        <label className="label label-transparent-black label-sm">
                                            Deals Management
                                        </label>
                                    </div>
                                    <div className="mt-1.5 d-block d-lg-none text-fade">
                                        Updated: August 06, 2021 at 6:16am
                                    </div>
                                    <div className="d-block d-lg-none bg-eee p-2.5 mt-1.5">
                                        <div>
                                            <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm pull-right icon-right">
                                                View
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                            <div className="overflow-hidden">
                                                <label className="label label-success label-md mr-1.5">
                                                    Completed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <label className="label label-success">
                                        Completed
                                    </label>
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    August 06, 2021 at 6:16am
                                </td>
                                <td className="d-none d-lg-table-cell">
                                    <Link to="/support/tickets/123456789012" className="btn btn-blue btn-sm icon-right">
                                        View
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                </td>
                            </tr>
                            

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div className="section section-pagination">
            {{-- pagination here --}}
        </div>

    </div>

@endsection
