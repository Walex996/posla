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
    
    <div className="container">
        <div className="mw-600 pt-5 pb-1.50 mx-auto bg-fff">
            <form action="{{route('verification.resend')}}" method="POST">
                @csrf
                <div className="page-alert">
                    <div>
                        <img src="{{ asset('/img/app/icons/envelope.jpg') }}" className="dp-contain" />
                    </div>
                    <div className="pt-15">
                        Password Reset Link Sent
                    </div>
                    <div>
                        A password reset link has been sent to your submitted email address.
                        Please click the link in the email to reset your password.
                        <br />
                        Didn't receive the email? Please click the resend button below.
                    </div>
                    <div className="mt-2.5">
                        <div className="mw-300 mx-auto text-center">
                            <div>
                                <Link to="/" className="btn btn-blue btn-block m-0">
                                    Goto Homepage
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div className="mt-1.5">
                        <div className="mw-300 mx-auto text-center">
                            <div>
                                <button type="submit" className="btn btn-orange btn-block m-0">
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
