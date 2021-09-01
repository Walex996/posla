<?php

namespace App\Http\Controllers\Users;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Controllers\Controller;

class CreateProjectController extends Controller
{
    public function viewRule(Request $request){
        session()->put('deal_title', $request->title);
        return view('front.account.projects.create-rules'); 
    }

    public function viewInfo(){
        $categories = Category::whereHas('children')->where('status', true)->orderBy(\DB::raw('ISNULL(position), position'), 'ASC')->orderBy('name', 'desc')->get();
        return view('front.account.projects.create-info', \compact('categories')); 
    }

    public function saveInfo(CreateProjectRequest $request){
        $data = $request->except('pictures');        
        $data['action'] = 'creating';
        
        $project = $this->getAuthUser()->projects()->create($data);
        $project->addMultipleMediaFromRequest(['pictures'])
        ->each(function ($fileAdder) {
            $fileAdder->toMediaCollection();
        });
        
        $this->flashSuccessMessage('create stage one successful');
        return redirect()->route('project.create.publish', $project->id);
    }

    public function viewPublish(string $project){
        $project = Project::findOrFail($project);
        return view('front.account.projects.create-publish', \compact('project')); 
    }

    public function savePublish(CreateProjectRequest $request, string $project){
        $project = Project::findOrFail($project);
        $project->action = 'completed';
        $project->save();
        $this->flashSuccessMessage('Project created successfully');
        return redirect()->route('project.create.success');
    }

     public function success(){
        return view('front.account.projects.create-success'); 
    }
    
}
