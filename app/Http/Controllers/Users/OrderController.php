<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        return view('front.account.orders.index');
    }
    
    public function orderDetails(){
        return view('front.account.orders.details');
    }

    public function requirements(){
        return view('front.account.orders.requirements');
    }

    public function deliver(){
        return view('front.account.orders.deliver');
    }
}
