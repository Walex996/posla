<?php

namespace App\Http\Controllers\Users;

use App\Models\Deal;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditDealController extends Controller
{
    public function viewRule(Request $request, $deal){
        $deal = Deal::findOrFail($deal);
        return view('front.account.deals.edit-rules', compact('deal')); 
    }

    public function updateRule(Request $request, $deal){
        $deal = Deal::findOrFail($deal);
        return redirect()->route('deal.edit.info', $deal->id);
    }

    public function viewInfo(Request $request, $deal){
        $deal = Deal::findOrFail($deal);
        $categories = Category::whereHas('children')->where('status', true)->orderBy(\DB::raw('ISNULL(position), position'), 'ASC')->orderBy('name', 'desc')->get();
        return view('front.account.deals.edit-info', compact('deal', 'categories')); 
    }

    public function updateInfo(Request $request, $deal){
        $deal = Deal::findOrFail($deal);
        $deal->update($request->all());
        if($request->has('pictures')){
            $deal->addMultipleMediaFromRequest(['pictures'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection();
                });
        }
        
        $this->flashSuccessMessage('successful');
        return $deal->types()->exists() ?
            redirect()->route('deal.edit.pricing', $deal->id): 
            redirect()->route('deals.create.pricing', $deal->id);

    }

    public function viewPricing(string $deal){
        $deal = Deal::with('types')->findOrFail($deal);
        return view('front.account.deals.edit-pricing', \compact('deal')); 
    }

    public function updatePricing(Request $request, string $deal_id){
        $deal = Deal::findOrFail($deal_id);
        foreach ($request->type as $id => $type) {
            $deal->types()->where('id', $id)->update($type);
        }

        $this->flashSuccessMessage('edit stage two successful');
        return $deal->requirements()->exists() ?
            redirect()->route('deal.edit.requirement', $deal->id):
            redirect()->route('deals.create.requirement', $deal->id);

    }

    public function viewRequirement(string $deal){
        $deal = Deal::with('types')->findOrFail($deal);
        return view('front.account.deals.edit-requirements', \compact('deal')); 
    }

    public function updateRequirement(Request $request, string $deal_id){
        $deal = Deal::findOrFail($deal_id);
        foreach ($request->questions as $id => $requirement) {
            $deal->requirements()->updateOrCreate(['id' => $id],  $requirement);
        }
        $this->flashSuccessMessage('Update requirement successful');

        return $deal->action == 'creating' ? 
            redirect()->route('deals.create.publish', $deal->id) :
            redirect()->route('deal.edit.publish', $deal->id);
    }

     public function viewPublish(string $deal){
        $deal = Deal::findOrFail($deal);
        return view('front.account.deals.edit-publish', \compact('deal')); 
    }

    public function updatePublish(Request $request, string $deal){
        $deal = Deal::findOrFail($deal);
        $deal->action = 'completed';
        $deal->boosted = $request->boosted;
        $deal->save();
        $this->flashSuccessMessage('Deal updated successfully');
        return redirect()->route('deal.edit.success');
    }

    public function success(){
        return view('front.account.deals.edit-success'); 
    }

}
