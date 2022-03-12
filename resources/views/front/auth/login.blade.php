{/*login box */}
<div className="auth-modal auth-modal-login @if(session()->get('show-login-modal')) auth-show-default @endif" style="background-image: url({{asset('/img/app/bgs/auth-bg-1.png')}});">

    <button className="auth-modal-close">
        <span className="fa fa-times"></span>
    </button>

    <div className="auth-modal-title">
        <div>
            Account Login
        </div>
        <div>
            Login to manage your projects & deals
        </div>
    </div>


    @include('layouts.common.errors-messages')
    

    <form method="POST" className="auth-modal-form" action="{{ route('login') }}">
        @csrf
        <div className="form-group">
            <label for="email" className="control-label">
                Email Address:
            </label>
            <input type="email" name="email" id="email" value="{{old('email')}}" className="form-control">
        </div>
        <div className="input-group">
            <label for="password" className="control-label">
                Password:
            </label>
            <div className="input-group input-group-password">
                <input type="password" name="password" id="password" className="form-control">
                <button type="button" className="input-group-btn password-toggle">
                    <span className="fa fa-eye icon-17"></span>
                </button>
            </div>
        </div>
        <div className="mt-5">
            <Link className="btn-forgot-password-switch text-fade hover-underline cursor-pointer">
                Forgot Password
            </Link>
        </div>
        <div className="mt-5">
            <button type="submit" className="btn btn-blue btn-block">
                Login
            </button>
        </div>
        <div className="mt-5 text-center">
            <Link className="btn-register-switch text-fade hover-underline cursor-pointer">
                Create New Account
            </Link>
        </div>
    </form>
    
</div>


{/*if error occurs, add class "auth-show" to the div below */}
<div className="bg-fade bg-fade-auth-backend @if(session()->get('show-login-modal')) auth-show @endif"></div>
