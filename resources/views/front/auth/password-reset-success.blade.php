@extends('layouts.front.app')


@section('title')
    Password Reset Successful
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
        <div class="mw-600 pt-20 pb-50 mx-auto bg-fff">
            
            <div class="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/unlock.png') }}" class="dp-contain" />
                </div>
                <div class="pt-15">
                    Email Verification Successful
                </div>
                <div>
                    Your email address has been verified successfully.
                    You can now login to your account with your registered  email address new password.
                </div>
                <div class="mt-10">
                    <div class="mw-300 mx-auto text-center">
                        <div>
                            <a href="/" class="btn btn-blue btn-block">
                                Goto Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
