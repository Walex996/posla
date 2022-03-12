{{-- register box --}}
<div className="auth-modal auth-modal-register @if(session()->get('show-register-modal')) auth-show-default @endif"  style="background-image: url({{asset('/img/app/bgs/auth-bg-2.png')}});">

    <button className="auth-modal-close">
        <span className="fa fa-times"></span>
    </button>

    <div className="auth-modal-title">
        <div>
            Create New Account
        </div>
        <div>
            Sign up to manage your projects & deals
        </div>
    </div>

    @include('layouts.common.errors-messages')

    <form action="{{ route('register') }}" method="POST" className="auth-modal-form">
        @csrf
      <div className="form-group">
            <label for="name" className="control-label">
                Fullname:
            </label>
            <input type="name" name="name" id="name" className="form-control" value="{{old('name')}}">
        </div>
        
        <div className="form-group">
            <label for="username" className="control-label">
                Username:
            </label>
            <input type="username" name="username" id="username" className="form-control"  value="{{old('username')}}">
        </div>

        <div className="form-group">
            <label for="email" className="control-label">
                Email Address:
            </label>
            <input type="email" name="email" id="email" className="form-control"  value="{{old('email')}}">
        </div>

        <div className="form-group">
            <label for="tel" className="control-label">
                Phone Number:
            </label>
            <input type="tel" name="phone" id="tel" className="form-control"  value="{{old('phone')}}">
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
        <div className="input-group mt-2.5">
            <label for="password" className="control-label">
                Confirm Password:
            </label>
            <div className="input-group input-group-password">
                <input type="password" name="password_confirmation" id="password" className="form-control">
                <button type="button" className="input-group-btn password-toggle">
                    <span className="fa fa-eye icon-17"></span>
                </button>
            </div>
        </div>

        <div className="mt-5">
            <button type="submit" className="btn btn-blue btn-block">
              Create New Account
            </button>
          </div>
          
          <div className="mt-5 text-center">
            <Link className="btn-login-switch text-fade hover-underline cursor-pointer">
              Already have an account? Login
            </Link>
        </div>

    </form>

</div>


{{-- if error occurs, add class "auth-show" to the div below --}}
<div className="bg-fade bg-fade-auth-backend  @if(session()->get('show-register-modal')) auth-show @endif"></div>