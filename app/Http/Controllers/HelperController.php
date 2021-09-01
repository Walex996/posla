<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelperController extends Controller
{
    public function getSubCategories($category){
        $category =  Category::where('id',$category)->first();
        return response()->json($category->children);
    }
}
