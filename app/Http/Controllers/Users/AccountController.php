<?php

namespace App\Http\Controllers\Users;

use App\Models\Deal;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function dealList(){
        $deals = $this->getAuthUser()->deals;
        return view('front.account.deals.list', compact('deals'));
    }

    public function projectList(){
        $projects = $this->getAuthUser()->projects;
        return view('front.account.projects.list', compact('projects'));
    }

    public function account(){
        $user = $this->getAuthUser();
        return view('front.account.index', compact('user'));
    }

    public function dashboard(){
        $user = $this->getAuthUser();
        return view('front.account.dashboard', compact('user'));
    }

    public function viewProfile(){
        $user = $this->getAuthUser();
        return view('front.account.profile.index', compact('user'));
    }

    public function editProfile(){
        $user = $this->getAuthUser();
        return view('front.account.profile.edit', compact('user'));
    }

    public function updateProfile(Request $request){
        $user = $this->getAuthUser();
        $user->fill($request->all());
        $user->save();
        if($request->has('profile')){
            $user->addMediaFromRequest('profile')->toMediaCollection('profile');
        }
        $this->flashSuccessMessage('Profile Updated Successfully');
        return redirect()->route('account.profile');
       
    }

    public function projectFavourites(){
        $user = $this->getAuthUser();
        return view('front.account.favourites.projects', compact('user'));
    }

    public function dealFavourites(){
        $user = $this->getAuthUser();
        return view('front.account.favourites.deals', compact('user'));
    }
    

    

}
