@extends('layouts.admin.app')

@section('title')
    Dashboard
@endsection


@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div class="dashboard pt-30 pb-30 pr-30 pl-30">
        <div class="dashboard-title">
            <div>
                <img src="{{ asset('/img/app/icons/logo.png') }}" class="dp-contain" alt="Posla" style="margin-top: 5px;">
            </div>
            <div>
                Admin Panel
            </div>
        </div>
        
        <div class="dashboard-search mt-30">
            <form action="" method="get">
                <div class="input-group">
                    <input type="search" placeholder="Search deals, projects, users" required="required" class="form-control" name="s" value="" />
                    <div class="input-group-btn">
                        <button class="btn btn-orange" type="submit" style="border-top-left-radius: 0;">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="dashboard-boxes container mt-10 pb-40">
            <div class="row">

                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                45
                            </div>
                            <div>
                                Registered Users
                            </div>
                        </div>
                        <div class="fa fa-users"></div>
                    </a>
                </div>
                
                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                213
                            </div>
                            <div>
                                All Deals
                            </div>
                        </div>
                        <div class="fa fa-user-tie"></div>
                    </a>
                </div>
                
                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                67
                            </div>
                            <div>
                                All Projects
                            </div>
                        </div>
                        <div class="fa fa-user-alt-slash"></div>
                    </a>
                </div>
                
                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div class="">
                                32
                            </div>
                            <div class="">
                                All Contact Us Messages
                            </div>
                        </div>
                        <div class="fa fa-clock"></div>
                    </a>
                </div>
                
                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                $45,235
                            </div>
                            <div>
                                Total Payments
                            </div>
                        </div>
                        <div class="fa fa-check-circle"></div>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                $31,235
                            </div>
                            <div>
                                Amount Paid
                            </div>
                        </div>
                        <div class="fa fa-exclamation-circle"></div>
                    </a>
                </div>
                
                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                $3,000
                            </div>
                            <div>
                                Dispensable User Revenue
                            </div>
                        </div>
                        <div class="fa fa-envelope"></div>
                    </a>
                </div>
                
                <div class="col-6 col-md-3">
                    <a href="" class="inner_border slow_speed">
                        <div>
                            <div>
                                $11,000
                            </div>
                            <div>
                                Posla Revenue
                            </div>
                        </div>
                        <div class="fa fa-credit-card"></div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

@endsection
