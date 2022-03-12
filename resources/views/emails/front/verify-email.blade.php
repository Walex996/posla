{/*@extends('layouts.front.app') */}


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

{/*@section('content') */}
    
    <div className="container">
        <div className="mw-600 pt-5 pb-1.50 mx-auto bg-fff">
            
            <div className="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/envelope.jpg') }}" className="dp-contain" />
                </div>
                <div className="pt-15">
                    Hi {{$notifiable->username}}, 
                </div>
                <div>
                    Welcome to POSLA.COM, <br />
                   Please click the button below to verify your email address.
                </div>
                <div className="mt-2.5">
                    <div className="mw-300 mx-auto text-center">
                        <div>
                            <Link to="{{$verification_url}}" className="btn btn-blue btn-block">
                                Verify Email Address
                            </Link>
                        </div>
                    </div>
                </div>
                <div>
                    If you did not create an account, no further action is required. <br />

                    Regards, <br />
                    POSLA Team
                </div>
            </div>

        </div>
    </div>

{/*@endsection */}
