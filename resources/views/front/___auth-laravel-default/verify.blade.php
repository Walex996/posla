@extends('layouts.app')

@section('content')
<div className="container">
    <div className="row justify-content-center">
        <div className="col-md-8">
            <div className="card">
                <div className="card-header">{{ __('Verify Your Email Address') }}</div>

                <div className="card-body">
                    @if (session('resent'))
                        <div className="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form className="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" className="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
