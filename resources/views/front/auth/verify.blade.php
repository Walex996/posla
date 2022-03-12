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
            @include('layouts.common.errors-messages')
            
            <form action="{{route('verification.resend')}}" method="POST">
                @csrf
                <div className="page-alert">
                    <div>
                        <img src="{{ asset('/img/app/icons/envelope.jpg') }}" className="dp-contain" />
                    </div>
                    <div className="pt-15">
                        {{session('resent') ? 'Email Verification Link Sent' : 'Email Verification Required'}}
                    </div>
                    <div>
                        Please verify your email to proceed
                    </div>
                    <div className="mt-2.5">
                        <div className="mw-300 mx-auto text-center">
                            <div>

                                <button type="submit" className="btn btn-blue btn-block">
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
