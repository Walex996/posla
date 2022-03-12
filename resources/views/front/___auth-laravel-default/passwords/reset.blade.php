@extends('layouts.app')

@section('content')
<div className="container">
    <div className="row justify-content-center">
        <div className="col-md-8">
            <div className="card">
                <div className="card-header">{{ __('Reset Password') }}</div>

                <div className="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div className="form-group row">
                            <label for="email" className="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div className="col-md-6">
                                <input id="email" type="email" className="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span className="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div className="form-group row">
                            <label for="password" className="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div className="col-md-6">
                                <input id="password" type="password" className="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span className="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div className="form-group row">
                            <label for="password-confirm" className="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div className="col-md-6">
                                <input id="password-confirm" type="password" className="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div className="form-group row mb-0">
                            <div className="col-md-6 offset-md-4">
                                <button type="submit" className="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
