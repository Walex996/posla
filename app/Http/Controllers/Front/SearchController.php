<?php

namespace App\Http\Controllers\Front;

use App\Models\Deal;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function all(){
        try {
            $query = request()->q;
            $deals = Deal::search($query)->where('status', 1)->get();
            $projects = Project::search($query)->where('status', 1)->get();
            $users = User::search($query)->get();
            return view('front.search.search-all', compact('deals', 'projects','users'));
        } catch (\Throwable $th) {
            return redirect()->route('front.project')->with('error', 'Algolia connection failed, probably failed internet');
        }
    }

    public function deals(){
        try {
            $query = request()->q;
            $deals = Deal::search($query)->where('status', 1)->paginate(10); 
            return view('front.search.search-deals', compact('deals')); 
        } catch (\Throwable $th) {
            return redirect()->route('front.project')->with('error', 'Algolia connection failed, probably failed internet');
        }
    }

    public function projects(){
        try {
            $query = request()->q;
            $projects = Project::search($query)->where('status', 1)->paginate(5); 
            return view('front.search.search-projects', compact('projects')); 
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('error', 'Algolia connection failed, probably failed internet');        }
    }

    public function users(){
        try {
            $query = request()->q;
            $users = User::search($query)->paginate(10); 
            return view('front.search.search-freelancers', compact('users')); 
            
        } catch (\Throwable $th) {        
            return redirect()->route('front.project')->with('error', 'Algolia connection failed, probably failed internet');        }
    }
}
