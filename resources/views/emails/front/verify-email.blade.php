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
                    Hi {{$notifiable->username}}, 
                </div>
                <div>
                    Welcome to POSLA.COM, <br>
                   Please click the button below to verify your email address.
                </div>
                <div class="mt-10">
                    <div class="mw-300 mx-auto text-center">
                        <div>
                            <a href="{{$verification_url}}" class="btn btn-blue btn-block">
                                Verify Email Address
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    If you did not create an account, no further action is required. <br>

                    Regards, <br>
                    POSLA Team
                </div>
            </div>

        </div>
    </div>

{{-- @endsection --}}
