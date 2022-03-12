@extends('layouts.front.app')


@section('title')
    Earnings & Withdrawals - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Earnings & Withdrawals - Posla">
    <meta name="keywords" content="earnings, withdrawals, user, Posla, Posla.com">
    <meta name="tags" content="earnings withdrawals account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-earnings-withdrawals{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .table-history tbody tr > td:nth-child(1) > div,
        .table-history tbody tr > td:nth-child(3) > div,
        .table-history tbody tr > td:nth-child(4) > div,
        .table-history tbody tr > td:nth-child(5) > div{
            min-width: 100px;
        }
        .table-history tbody tr > td:nth-child(2) > div{
            min-width: 300px;
            /* max-width: 400px; */
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            <div className="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Earnings & Withdrawals</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Earnings & Withdrawals
                        <Link to="/account/earnings-withdrawals/new" className="btn btn-blue btn-sm pull-right">New Withdrawal</Link>
                    </div>
                    <div>

                        <div className="b-1-ddd p-5 pt-0">
                            <div className="row">
                                <div className="col-12 col-sm-6 col-lg-3">
                                    <div className="b-1-ddd p-2.5 mt-5">
                                        <div className="text-center font-bold font-20">
                                            $15,200
                                        </div>
                                        <div className="text-center text-fade">
                                            Total
                                            <br className="d-none d-lg-block">
                                            Earnings
                                        </div>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-lg-3">
                                    <div className="b-1-ddd p-2.5 mt-5">
                                        <div className="text-center font-bold font-20">
                                            $6,500
                                        </div>
                                        <div className="text-center text-fade">
                                            Total
                                            <br className="d-none d-lg-block">
                                            Withdrawn
                                        </div>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-lg-3">
                                    <div className="b-1-ddd p-2.5 mt-5">
                                        <div className="text-center font-bold font-20">
                                            $8,700
                                        </div>
                                        <div className="text-center text-fade">
                                            Available for
                                            <br className="d-none d-lg-block">
                                            Withdrawal
                                        </div>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-lg-3">
                                    <div className="b-1-ddd p-2.5 mt-5">
                                        <div className="text-center font-bold font-20">
                                            $2,500
                                        </div>
                                        <div className="text-center text-fade">
                                            Pending
                                            <br className="d-none d-lg-block">
                                            Clearance
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div className="section-title section-title-sm mt-30">
                        History
                    </div>

                    
                    <div className="table-responsive b-1-ddd">
                        <table className="table table-tr-lines table-history">
                            <thead>
                                <tr className="bg-eee">
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 03, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Cr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Earning</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-success">Completed</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 02, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Dr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Withdrawal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-success">Completed</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 03, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Cr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Earning</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-warning">Pending</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 03, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Cr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Earning</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-danger">Failed</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 03, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Cr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Earning</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-success">Completed</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 02, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Dr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Withdrawal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-success">Completed</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 03, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Cr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Earning</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-warning">Pending</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            Feb 03, 2021
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Cr: Deal: I need a mobile application for an ecommerce startup in Eastern Africa
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $1,200
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-transparent-black">Earning</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label className="label label-danger">Failed</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection
