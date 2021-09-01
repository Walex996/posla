{{-- login box --}}
<div class="auth-modal auth-modal-login @if(session()->get('show-login-modal')) auth-show-default @endif" style="background-image: url({{asset('/img/app/bgs/auth-bg-1.png')}});">

    <button class="auth-modal-close">
        <span class="fa fa-times"></span>
    </button>

    <div class="auth-modal-title">
        <div>
            Account Login
        </div>
        <div>
            Login to manage your projects & deals
        </div>
    </div>


    @include('layouts.common.errors-messages')
    

    <form method="POST" class="auth-modal-form" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="control-label">
                Email Address:
            </label>
            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control">
        </div>
        <div class="input-group">
            <label for="password" class="control-label">
                Password:
            </label>
            <div class="input-group input-group-password">
                <input type="password" name="password" id="password" class="form-control">
                <button type="button" class="input-group-btn password-toggle">
                    <span class="fa fa-eye icon-17"></span>
                </button>
            </div>
        </div>
        <div class="mt-20">
            <a class="btn-forgot-password-switch text-fade hover-underline cursor-pointer">
                Forgot Password
            </a>
        </div>
        <div class="mt-20">
            <button type="submit" class="btn btn-blue btn-block">
                Login
            </button>
        </div>
        <div class="mt-20 text-center">
            <a class="btn-register-switch text-fade hover-underline cursor-pointer">
                Create New Account
            </a>
        </div>
    </form>
    
</div>


{{-- if error occurs, add class "auth-show" to the div below --}}
<div class="bg-fade bg-fade-auth-backend @if(session()->get('show-login-modal')) auth-show @endif"></div>
