<?php

namespace App\Http\Controllers\Users;

use App\Models\Deal;
use App\Models\Category;
use App\Models\DealType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDealRequest;

class CreateDealController extends Controller
{
    public function viewRule(Request $request){
        session()->put('title', $request->title);
        return view('front.account.deals.create-rules'); 
    }

    public function viewInfo(){
        $categories = Category::whereHas('children')->where('status', true)->orderBy(\DB::raw('ISNULL(position), position'), 'ASC')->orderBy('name', 'desc')->get();
        return view('front.account.deals.create-info', \compact('categories')); 
    }

    public function saveInfo(CreateDealRequest $request){

        $data = $request->all();
        $data['action'] = 'creating';

        $deal = $this->getAuthUser()->deals()->create($data);
        $deal->addMultipleMediaFromRequest(['deal_pictures'])
            ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection();
            });
        $this->flashSuccessMessage('create stage one successful');
        return redirect()->route('deals.create.pricing', $deal->id);
    }
    public function viewPricing(string $deal){
        $deal = Deal::findOrFail($deal);
        return view('front.account.deals.create-pricing', \compact('deal')); 
    }

    public function savePricing(CreateDealRequest $request, string $deal_id){
        $deal = Deal::findOrFail($deal_id);
        $deal->types()->createMany($request->type);
        $this->flashSuccessMessage('create stage two successful');
        return redirect()->route('deals.create.requirement', $deal->id);

    }

    public function viewRequirement(string $deal){
        $deal = Deal::findOrFail($deal);
        return view('front.account.deals.create-requirements', \compact('deal')); 
    }

    public function saveRequirement(CreateDealRequest $request, string $deal){

        $deal = Deal::findOrFail($deal);
        $deal->requirements()->createMany($request->questions);

        $this->flashSuccessMessage('create stage three successful');
        return redirect()->route('deals.create.publish', $deal->id);
    }

    public function viewPublish(string $deal){
        $deal = Deal::findOrFail($deal);
        return view('front.account.deals.create-publish', \compact('deal')); 
    }

    public function savePublish(CreateDealRequest $request, string $deal){

        $deal = Deal::findOrFail($deal);
        $deal->action = 'completed';
        $deal->boosted = $request->boosted;
        $deal->save();
        $this->flashSuccessMessage('Deal created successfully');
        return redirect()->route('deals.create.success');
    }

    public function success(){
        return view('front.account.deals.create-success'); 
    }
    
}


