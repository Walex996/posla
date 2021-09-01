{{-- @extends('layouts.front.app') --}}


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

{{-- @section('content') --}}
    
    <div class="container">
        <div class="mw-600 pt-20 pb-50 mx-auto bg-fff">
            
            <div class="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/envelope.jpg') }}" class="dp-contain" />
                </div>
                <div class="pt-15">
                    Password Reset
                </div>
                <div>
                   You are receiving this email because we received a password reset request for your account.
                </div>
                <div class="mt-10">
                    <div class="mw-300 mx-auto text-center">
                        <div>
                            {{-- {{dd(url( "/password/reset/?token=" . $token ))}} --}}
                            <a href="{{url( "/password/reset/?token=" . $token )}}" class="btn btn-blue btn-block">
                                Reset Password
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    This password reset link will expire in 60 minutes. <br>

                    If you did not request a password reset, no further action is required. <br>

                    Regards, <br>
                    Posla Team
                </div>
            </div>

        </div>
    </div>

{{-- @endsection --}}
