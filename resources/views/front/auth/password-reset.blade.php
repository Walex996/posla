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
    
    <div class="container">
        <div class="mw-600 pb-50 mx-auto bg-fff">
            
            <div class="auth-modal-title mt-0 pt-30">
                <div>
                    <div class="mb-5">
                        <span class="fa fa-lock icon-50 icon-orange"></span>
                    </div>
                    Password Reset
                </div>
                <div>
                    Login to manage your projects & deals
                </div>
            </div>
        
            @include('layouts.common.errors-messages')
            <form ction="" class="mw-400 mt-30 mx-auto p-30 b-1-ddd" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email" class="control-label">
                        Email Address:
                    </label>
                    <input type="email" id="email" name="email" class="form-control" value="">
                </div>
                <div class="input-group mb-10">
                    <label for="password" class="control-label">
                        Password:
                    </label>
                    <div class="input-group input-group-password">
                        <input type="password" name="password" id="password" class="form-control">
                        <button type="button" class="input-group-btn password-toggle">
                            <span class="fa fa-eye icon-17"></span>
                        </button>
                    </div>
                </div>
                <div class="input-group">
                    <label for="rpassword" class="control-label">
                        Retype Password:
                    </label>
                    <div class="input-group input-group-password">
                        <input type="password" name="password_confirmation" id="rpassword" class="form-control">
                        <button type="button" class="input-group-btn password-toggle">
                            <span class="fa fa-eye icon-17"></span>
                        </button>
                    </div>
                </div>
                <div class="mt-20">
                    <button type="submit" class="btn btn-blue btn-block">
                        Reset Password
                    </button>
                </div>
                <div class="mt-15 text-center">
                    <a class="btn-register-switch text-fade hover-underline cursor-pointer">
                        Goto Homepage
                    </a>
                </div>
            </form>
            
        </div>

        </div>
    </div>

@endsection
