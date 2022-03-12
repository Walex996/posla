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
    
    <div className="container">
        <div className="mw-600 pt-5 pb-1.50 mx-auto bg-fff">
            
            <div className="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/envelope.jpg') }}" className="dp-contain" />
                </div>
                <div className="pt-15">
                    Password Reset
                </div>
                <div>
                   You are receiving this email because we received a password reset request for your account.
                </div>
                <div className="mt-2.5">
                    <div className="mw-300 mx-auto text-center">
                        <div>
                            {{-- {{dd(url( "/password/reset/?token=" . $token ))}} --}}
                            <Link to="{{url( "/password/reset/?token=" . $token )}}" className="btn btn-blue btn-block">
                                Reset Password
                            </Link>
                        </div>
                    </div>
                </div>
                <div>
                    This password reset link will expire in 60 minutes. <br />

                    If you did not request a password reset, no further action is required. <br />

                    Regards, <br />
                    Posla Team
                </div>
            </div>

        </div>
    </div>

{{-- @endsection --}}
