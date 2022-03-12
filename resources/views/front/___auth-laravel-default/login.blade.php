@extends('layouts.app')

@section('content')
<div className="container">
    <div className="row justify-content-center">
        <div className="col-md-8">
            <div className="card">
                <div className="card-header">{{ __('Login') }}</div>

                <div className="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div className="form-group row">
                            <label for="email" className="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div className="col-md-6">
                                <input id="email" type="email" className="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" className="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span className="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div className="form-group row">
                            <div className="col-md-6 offset-md-4">
                                <div className="form-check">
                                    <input className="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label className="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div className="form-group row mb-0">
                            <div className="col-md-8 offset-md-4">
                                <button type="submit" className="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <Link className="btn btn-link" to="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </Link>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
