<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function home(){
        return view('front.home-deals');
    }
}
