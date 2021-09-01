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
            @include('layouts.common.errors-messages')
            
            <form action="{{route('verification.resend')}}" method="POST">
                @csrf
                <div class="page-alert">
                    <div>
                        <img src="{{ asset('/img/app/icons/envelope.jpg') }}" class="dp-contain" />
                    </div>
                    <div class="pt-15">
                        {{session('resent') ? 'Email Verification Link Sent' : 'Email Verification Required'}}
                    </div>
                    <div>
                        Please verify your email to proceed
                    </div>
                    <div class="mt-10">
                        <div class="mw-300 mx-auto text-center">
                            <div>

                                <button type="submit" class="btn btn-blue btn-block">
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
