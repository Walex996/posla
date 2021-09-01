{{-- register box --}}
<div class="auth-modal auth-modal-register @if(session()->get('show-register-modal')) auth-show-default @endif"  style="background-image: url({{asset('/img/app/bgs/auth-bg-2.png')}});">

    <button class="auth-modal-close">
        <span class="fa fa-times"></span>
    </button>

    <div class="auth-modal-title">
        <div>
            Create New Account
        </div>
        <div>
            Sign up to manage your projects & deals
        </div>
    </div>

    @include('layouts.common.errors-messages')

    <form action="{{ route('register') }}" method="POST" class="auth-modal-form">
        @csrf
      <div class="form-group">
            <label for="name" class="control-label">
                Fullname:
            </label>
            <input type="name" name="name" id="name" class="form-control" value="{{old('name')}}">
        </div>
        
        <div class="form-group">
            <label for="username" class="control-label">
                Username:
            </label>
            <input type="username" name="username" id="username" class="form-control"  value="{{old('username')}}">
        </div>

        <div class="form-group">
            <label for="email" class="control-label">
                Email Address:
            </label>
            <input type="email" name="email" id="email" class="form-control"  value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label for="tel" class="control-label">
                Phone Number:
            </label>
            <input type="tel" name="phone" id="tel" class="form-control"  value="{{old('phone')}}">
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
        <div class="input-group mt-10">
            <label for="password" class="control-label">
                Confirm Password:
            </label>
            <div class="input-group input-group-password">
                <input type="password" name="password_confirmation" id="password" class="form-control">
                <button type="button" class="input-group-btn password-toggle">
                    <span class="fa fa-eye icon-17"></span>
                </button>
            </div>
        </div>

        <div class="mt-20">
            <button type="submit" class="btn btn-blue btn-block">
              Create New Account
            </button>
          </div>
          
          <div class="mt-20 text-center">
            <a class="btn-login-switch text-fade hover-underline cursor-pointer">
              Already have an account? Login
            </a>
        </div>

    </form>

</div>


{{-- if error occurs, add class "auth-show" to the div below --}}
<div class="bg-fade bg-fade-auth-backend  @if(session()->get('show-register-modal')) auth-show @endif"></div>