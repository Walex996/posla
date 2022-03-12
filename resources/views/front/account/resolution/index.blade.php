@extends('layouts.front.app')


@section('title')
    Order Resolution - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Order Resolution - Posla">
    <meta name="keywords" content="order resolution, user, Posla, Posla.com">
    <meta name="tags" content="order resolution account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        /*
        .account-sidebar-orders{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        */
        .table-history tbody tr > td:nth-child(1) > div,
        .table-history tbody tr > td:nth-child(3) > div,
        .table-history tbody tr > td:nth-child(4) > div{
            min-width: 80px;
        }
        .table-history tbody tr > td:nth-child(2) > div{
            /* min-width: 300px; */
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
                        <li className="breadcrumb-item"><Link to="/account/orders">Orders</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Resolution</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Order Resolution
                    </div>

                    <div className="table-responsive b-1-ddd">
                        <table className="table table-tr-lines table-tr-padding">
                            <thead>
                                <tr className="bg-eee">
                                    <th>
                                        Description
                                    </th>
                                    <th className="d-none d-lg-table-cell">
                                        Status
                                    </th>
                                    <th className="d-none d-lg-table-cell">
                                        Date Ordered
                                    </th>
                                    <th className="d-none d-lg-table-cell">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Project
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Project
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div>
                                            <div className="pull-left overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="mr-15 d-block overflow-hidden" style="max-width: 100px; max-height: 100px;">
                                                    <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="" className="dp-contain" />
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <Link to="/account/resolution/orders/123456789012" className="font-bold d-inline-block hover-underline">
                                                    I will design a beautiful logo for your business
                                                </Link>
                                                <div className="">
                                                    <div className="text-orange mt-1.5">
                                                        <label className="label label-transparent-black label-sm mr-1.5">
                                                            Deal
                                                        </label>
                                                        By: Olawale Lawal
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Category (Subcategory)
                                                    </div>
                                                    <div className="text-fade mt-1.5">
                                                        Package: Basic Designs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="d-block d-lg-none bt-1-ddd mt-2.5 p-2.5 bg-eee">
                                            <div className="pull-right">
                                                <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                    Resolve
                                                    <span className="fa fa-angle-right"></span>
                                                </Link>
                                            </div>
                                            <div className="overflow-hidden">
                                                <div className="pull-left mr-2.5">
                                                    <label className="label label-orange label-md">
                                                        In progress
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="mt-1.5">
                                                        Feb 04, 2021
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <label className="label label-orange label-md">
                                                In progress
                                            </label>
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            Feb 04, 2021
                                        </div>
                                    </td>
                                    <td className="d-none d-lg-table-cell">
                                        <div>
                                            <Link to="/account/resolution/orders/123456789012" className="btn btn-blue btn-sm icon-right">
                                                Resolve
                                                <span className="fa fa-angle-right"></span>
                                            </Link>
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
