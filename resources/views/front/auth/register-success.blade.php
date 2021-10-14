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
    
    <div class="container">
        <div class="mw-600 pt-20 pb-50 mx-auto bg-fff">
        <form action="" method="POST">
            @csrf
            <div class="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/envelope.jpg') }}" class="dp-contain" />
                </div>
                <div class="pt-15">
                    Welcome, Please Verify Your Email
                    
                </div>
                <div>
                    Your account has been registered successfully and a mail sent to you.
                    To gain full access to your account, please validate your email address.
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
