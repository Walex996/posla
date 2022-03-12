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
    
    <div className="container">
        <div className="mw-600 pt-5 pb-1.50 mx-auto bg-fff">
            
            <div className="page-alert">
                <div>
                    <img src="{{ asset('/img/app/icons/unlock.png') }}" className="dp-contain" />
                </div>
                <div className="pt-15">
                    Password Updated Successfully
                </div>
                <div>
                    Your account password has been updated successfully.
                    You can now login to your account with your registered username or email address or phone number, and your new password.
                </div>
                <div className="mt-2.5">
                    <div className="mw-300 mx-auto text-center">
                        <div>
                            <Link to="/" className="btn btn-blue btn-block">
                                Goto Homepage
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
