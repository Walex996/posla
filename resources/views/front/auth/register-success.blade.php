@extends('layouts.front.app')


@section('title')
    Email Confirmation
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
        <form action="" method="POST">
            @csrf
            <div className="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/envelope.jpg') }}" className="dp-contain" />
                </div>
                <div className="pt-15">
                    Welcome, Please Verify Your Email
                    
                </div>
                <div>
                    Your account has been registered successfully and a mail sent to you.
                    To gain full access to your account, please validate your email address.
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
