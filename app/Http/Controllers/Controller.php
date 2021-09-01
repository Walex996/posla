<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function flashErrorMessage($message){
         Session::flash('danger', $message);
    }
    
    public function flashInfoMessage($message)
    {
        Session::flash('info', $message);
    }

    public function flashSuccessMessage($message)
    {
        Session::flash('success', $message);
    }

    public function getAuthUser($guard = null)
    {
        return auth($guard)->user();
    }
}
