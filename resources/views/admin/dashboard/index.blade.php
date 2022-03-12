@extends('layouts.admin.app')

@section('title')
    Dashboard
@endsection


@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div className="dashboard pt-30 pb-30 pr-30 pl-30">
        <div className="dashboard-title">
            <div>
                <img src="{{ asset('/img/app/icons/logo.png') }}" className="dp-contain" alt="Posla" style="margin-top: 5px;">
            </div>
            <div>
                Admin Panel
            </div>
        </div>
        
        <div className="dashboard-search mt-30">
            <form action="" method="get">
                <div className="input-group">
                    <input type="search" placeholder="Search deals, projects, users" required="required" className="form-control" name="s" value="" />
                    <div className="input-group-btn">
                        <button className="btn btn-orange" type="submit" style="border-top-left-radius: 0;">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <div className="dashboard-boxes container mt-2.5 pb-40">
            <div className="row">

                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                45
                            </div>
                            <div>
                                Registered Users
                            </div>
                        </div>
                        <div className="fa fa-users"></div>
                    </Link>
                </div>
                
                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                213
                            </div>
                            <div>
                                All Deals
                            </div>
                        </div>
                        <div className="fa fa-user-tie"></div>
                    </Link>
                </div>
                
                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                67
                            </div>
                            <div>
                                All Projects
                            </div>
                        </div>
                        <div className="fa fa-user-alt-slash"></div>
                    </Link>
                </div>
                
                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div className="">
                                32
                            </div>
                            <div className="">
                                All Contact Us Messages
                            </div>
                        </div>
                        <div className="fa fa-clock"></div>
                    </Link>
                </div>
                
                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                $45,235
                            </div>
                            <div>
                                Total Payments
                            </div>
                        </div>
                        <div className="fa fa-check-circle"></div>
                    </Link>
                </div>

                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                $31,235
                            </div>
                            <div>
                                Amount Paid
                            </div>
                        </div>
                        <div className="fa fa-exclamation-circle"></div>
                    </Link>
                </div>
                
                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                $3,000
                            </div>
                            <div>
                                Dispensable User Revenue
                            </div>
                        </div>
                        <div className="fa fa-envelope"></div>
                    </Link>
                </div>
                
                <div className="col-6 col-md-3">
                    <Link to="" className="inner_border slow_speed">
                        <div>
                            <div>
                                $11,000
                            </div>
                            <div>
                                Posla Revenue
                            </div>
                        </div>
                        <div className="fa fa-credit-card"></div>
                    </Link>
                </div>
                
            </div>
        </div>
    </div>

@endsection
