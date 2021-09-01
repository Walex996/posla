<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

        protected $redirectTo = '/dashboard';


    // form to enter new password
    public function showLinkRequestForm(){
        return view('front.auth.password-reset');
    }

    // redirect on successfully updating password
    protected function sendResetLinkResponse(Request $request, $response){
        return redirect()->route('auth.forget.password.sent')->with('success', trans($response));
    }
    
    public function forgotPasswordLinkSent(){
        return view('front.auth.forgot-password-success');
    }

    public function resendForgotPasswordLink(){
        session()->flash('show-forgot-password-modal' , true);
    }

}
