@extends('layouts.front.app')


@section('title')
    Password Reset
@endsection


@section('css')
    <style>
        body{
            /* background-image: url('{{ asset('/img/app/bgs/pattern/1.png') }}'); */
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="mw-600 pb-1.50 mx-auto bg-fff">
            
            <div className="auth-modal-title mt-0 pt-30">
                <div>
                    <div className="mb-1.5">
                        <span className="fa fa-lock icon-50 icon-orange"></span>
                    </div>
                    Password Reset
                </div>
                <div>
                    Login to manage your projects & deals
                </div>
            </div>
        
            @include('layouts.common.errors-messages')
            <form ction="" className="mw-400 mt-30 mx-auto p-30 b-1-ddd" method="POST">
                @csrf
                <div className="form-group">
                    <label for="email" className="control-label">
                        Email Address:
                    </label>
                    <input type="email" id="email" name="email" className="form-control" value="">
                </div>
                <div className="input-group mb-10">
                    <label for="password" className="control-label">
                        Password:
                    </label>
                    <div className="input-group input-group-password">
                        <input type="password" name="password" id="password" className="form-control">
                        <button type="button" className="input-group-btn password-toggle">
                            <span className="fa fa-eye icon-17"></span>
                        </button>
                    </div>
                </div>
                <div className="input-group">
                    <label for="rpassword" className="control-label">
                        Retype Password:
                    </label>
                    <div className="input-group input-group-password">
                        <input type="password" name="password_confirmation" id="rpassword" className="form-control">
                        <button type="button" className="input-group-btn password-toggle">
                            <span className="fa fa-eye icon-17"></span>
                        </button>
                    </div>
                </div>
                <div className="mt-5">
                    <button type="submit" className="btn btn-blue btn-block">
                        Reset Password
                    </button>
                </div>
                <div className="mt-15 text-center">
                    <Link className="btn-register-switch text-fade hover-underline cursor-pointer">
                        Goto Homepage
                    </Link>
                </div>
            </form>
            
        </div>

        </div>
    </div>

@endsection
