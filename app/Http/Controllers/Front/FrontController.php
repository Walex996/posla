<?php

namespace App\Http\Controllers\Front;

use App\Models\Deal;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function projects(){
        $categories = Category::has('projects')->orderBy(\DB::raw('ISNULL(position), position'), 'ASC')->orderBy('name', 'desc')->get();
        $feature_projects = Project::where(['boosted' =>true, 'status'=> true])->inRandomOrder()->limit(2)->get();
        $categories_projects = Project::where(['status'=> true])->get()->groupBy('category_id', true);
        $latest_projects =  Project::where(['status'=> true])->inRandomOrder()->limit(2)->get();
        return view('front.home-projects', compact('categories', 'categories_projects', 'feature_projects', 'latest_projects'));
    }

    public function deals(){
        $categories = Category::has('deals')->orderBy(\DB::raw('ISNULL(position), position'), 'ASC')->orderBy('name', 'desc')->get();
        $feature_deals = Deal::where(['boosted' =>true, 'status'=> true])->inRandomOrder()->limit(4)->get();
        $categories_deals = Deal::where(['status'=> true])->orderBy('boosted', 'desc')
                            ->orderBy('created_at', 'desc')->get()->groupBy('category_id', true)->map(function($deal) {
                            return $deal->take(6);
                        });
        $latest_deals =  Deal::where(['status'=> true])->orderBy('boosted', 'desc')->inRandomOrder()->limit(3)->get();
        return view('front.home-deals', compact('categories', 'feature_deals', 'categories_deals', 'latest_deals'));
    }

    public function projectDetails(string $project){
        $project = Project::with('media')->findOrFail($project);
        return view('front.details-projects', compact('project'));
    }

    public function dealDetails($deal){
        $deal = Deal::with('types', 'media')->findOrFail($deal);
        return view('front.details-deals', compact('deal'));
    }

    public function categoryProjects($category_slug){
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $feature_projects = Project::where(['boosted' =>true, 'status'=> true])->inRandomOrder()->limit(2)->get();
        $category->projects = $category->projects()->paginate(10);
        return view('front.category-projects-list', compact('category', 'feature_projects'));
    }

    public function categoryDeals($category_slug){
        $category = Category::where('slug', $category_slug)->with('deals')->firstOrFail();
        $category->deals = $category->deals()->paginate(10);
        $feature_deals = Deal::where(['boosted' =>true, 'status'=> true])->inRandomOrder()->limit(4)->get();
        return view('front.category-deals-list', compact('category', 'feature_deals'));
    }

    public function freelancer(string $freelancer){
        dd($freelancer);
    }
}
