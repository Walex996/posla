@extends('layouts.admin.app-auth')

@section('title')
    Admin Login
@endsection


@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div className="content m-0 p-0">
        <div className="row margin-none padding-none" style="height: 100%;">
            <div className="col-md-6">

                <div className="content-content">
                    <div className="app">
                        <img src="{{asset('img/app/icons/logo.png')}}" alt="Freeki.com" className="dp-contain" />
                    </div>
                    <div className="title font-bold">
                        Admin Login
                    </div>
                    
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div className="form-group has-feedback">
                            <label for="">Email Address:</label>
                            <input name="email" type="email" className="form-control" value="{{ old('email') }}" />
                            <span className="fa fa-envelope form-control-feedback" style="font-size: 17px;"></span>
                        </div>
                        <div className="form-group has-feedback">
                            <label for="">Password:</label>
                            <input name="password" type="password" className="form-control" />
                            <span className="fa fa-lock form-control-feedback"></span>
                        </div>
                        <div>
                            <Link to="#" className="text-color-fade">Forgot Password</Link>
                        </div>
                        <div className="mt-5">
                            <div>
                                <button type="submit" className="btn btn-blue btn-block">Log in as Admin</button>
                                <Link to="/" className="btn btn-transparent-black btn-block" style="margin-top: 10px;">Goto Homepage</Link>
                            </div>
                        </div>
                    </form>

                </div>

                <div className="footer">
                    <div className="copyright">
                        <p>Copyright © 2021 • Posla • All Rights Reserved</p>
                    </div>
                </div>

            </div>
            <div className="col-md-6 hidden-xs hidden-sm vcenter text-center auth-login-bg" style="background-image: url({{asset('/img/app/bgs/posla-admin.jpg')}}); background-size: cover;">
                <div></div>
            </div>
        </div>
    </div>

@endsection
