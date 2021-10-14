@extends('layouts.front.app')


@section('title')
    Forgot Password
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
            <form action="{{route('verification.resend')}}" method="POST">
                @csrf
                <div class="page-alert">
                    <div>
                        <img src="{{ asset('/img/app/icons/envelope.jpg') }}" class="dp-contain" />
                    </div>
                    <div class="pt-15">
                        Password Reset Link Sent
                    </div>
                    <div>
                        A password reset link has been sent to your submitted email address.
                        Please click the link in the email to reset your password.
                        <br>
                        Didn't receive the email? Please click the resend button below.
                    </div>
                    <div class="mt-10">
                        <div class="mw-300 mx-auto text-center">
                            <div>
                                <a href="/" class="btn btn-blue btn-block m-0">
                                    Goto Homepage
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="mw-300 mx-auto text-center">
                            <div>
                                <button type="submit" class="btn btn-orange btn-block m-0">
                                    Resend Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
