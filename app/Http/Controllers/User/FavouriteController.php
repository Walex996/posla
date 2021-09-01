<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\DealFavourite;
use App\Http\Controllers\Controller;

class FavouriteController extends Controller
{
    public function addDeal(string $deal_id){

        $favourite = DealFavourite::where('deal_id', $deal_id)->where('user_id', $this->getAuthUser()->id)->exists();

        if($favourite){
            DealFavourite::where('deal_id', $deal_id)->where('user_id', $this->getAuthUser()->id)->delete();
        }else{
            $this->getAuthUser()->dealFavourite()->create(['deal_id' => $deal_id]);

        }
        $this->flashSuccessMessage('successful');
        return back();
    }

    public function addProject(){

    }
}
