{/*reset password box */}
<div className="auth-modal auth-modal-forgot-password  @if (session()->get('show-forgot-password-modal') ) auth-show-default " @endif  style="background-image: url({{asset('/img/app/bgs/auth-bg-1.png')}});">

    <button className="auth-modal-close">
        <span className="fa fa-times"></span>
    </button>

    <div className="auth-modal-title">
        <div>
            Forgot Password
        </div>
        <div>
            Reset your account password with ease
        </div>
    </div>

    @include('layouts.common.errors-messages')

    <form action="{{ route('password.email') }}" method="POST" className="auth-modal-form">
        @csrf
        <div className="page-alert p-0 m-0">
          <span className="fa fa-user-lock icon-50"></span>
          <div></div>
          <div>
            Please enter the email address used in registering your account.
            {/*A password reset link will be sent to your registered email address. */}
          </div>
        </div>

        <div className="form-group mt-5">
            <label for="email" className="control-label">
                Email Address:
            </label>
            <input type="email" name="email" value="{{ old('email') }}" id="email" className="form-control">
        </div>
        <div className="mt-5">
            <button type="submit" className="btn btn-blue btn-block">
                Reset Paasword
            </button>
        </div>
        <div className="mt-5 text-center">
            <Link className="btn-login-switch text-fade hover-underline cursor-pointer">
                Remember your password? Login
            </Link>
        </div>
    </form>

</div>


{/*if error occurs, add class "auth-show" to the div below */}
<div className="bg-fade bg-fade-auth-backend @if (session()->get('show-forgot-password-modal') ) auth-show-default @endif "></div>