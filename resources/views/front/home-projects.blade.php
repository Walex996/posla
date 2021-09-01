@extends('layouts.front.app')


@section('title')
    Welcome
@endsection


@section('og')
    <meta name="description" content="Posla">
    <meta name="keywords" content="Posla, Posla.com">
    <meta name="tags" content="posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
@endsection


@section('content')



    <div class="modal" id="modalCategories">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Project Categories</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="p-10">
                        
                        <div class="font-bold">
                            Select a category:
                        </div>

                        <div class="home-category-list mt-5">
                            @foreach ($categories as $category)
                                <a href="{{route('front.category.projects' , $category->slug)}}">
                                    <span class="fa fa-angle-right icon-000 icon-18 pull-right d-inline"></span>
                                    {{$category->name}}
                                </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        

    <div class="container">
        @include('layouts.common.errors-messages')
        <div class="row">
            <div class="col-md-4 col-lg-3 d-none d-md-block">
                
                <div class="sticky-top">
                    <div class="home-category-list">
                        @foreach ($categories as $category)
                        <a href="{{route('front.category.projects' , $category->slug)}}">
                            {{$category->name}}
                            <span class="fa fa-angle-right"></span>
                        </a>     
                        @endforeach
                        {{-- <a href="/category/projects/category1">
                            Graphics Design
                            <span class="fa fa-angle-right"></span>
                        </a>
                        --}}
                    </div>
                    
                    <div class="mt-10">
                        <a href="/support" class="text-fade d-inline hover-underline">
                            Suggest a category
                            <span class="fa fa-angle-right icon-grey ml-2"></span>
                        </a>
                    </div>
                </div>
                
            </div>
            
            <div class="col-md-8 col-lg-6">
                
                <div class="row">
                    <div class="col-sm-6 col-lg-12">
                        
                        <div class="section">
                            <form action="{{route('project.create.view')}}" class="post-project">
                                <div class="section-title">
                                    <span class="fa fa-edit"></span>
                                    Create New Project
                                </div>
                                <div class="form-group">
                                    <textarea name="title" id="" class="form-control" placeholder="I need..." style="height: 50px;"></textarea>
                                </div>
                                <div class="floated-content">
                                    <div class="form-group pull-left d-none">
                                        <select name="privacy" id="privacy" class="form-control">
                                            <option value="">-- Select Privacy --</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-blue btn-sm pull-right">
                                        Continue
                                        <span class="fa fa-angle-right"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="section d-none d-sm-block d-md-none">
                            <a data-toggle="modal" data-target="#modalCategories" class="d-block">
                                <span class="fa fa-angle-right pull-right icon-18"></span>
                                <span class="fa fa-list-alt pull-left icon-18 mr-10 icon-blue"></span>
                                View all project categories
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="home-section-user bg-fff shadow-sm mb-30 br-4 d-block d-lg-none">
                            <div></div>
                            <div class="home-section-user-info">
                                <a href="/account">
                                    <span class="fa fa-user"></span>
                                </a>
                                <div>
                                    <a href="/account" class="font-bold d-block hover-underline">
                                        Olawale Lawal
                                    </a>
                                    <div class="text-fade">
                                        Frontend Developer, UIUX Designer, Graphics Designer
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('front.deal')}}" class="btn btn-orange btn-block">
                                    Switch to Buying
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="section d-block d-sm-none">
                    <a data-toggle="modal" data-target="#modalCategories" class="d-block">
                        <span class="fa fa-angle-right pull-right icon-18"></span>
                        <span class="fa fa-list-alt pull-left icon-18 mr-10 icon-blue"></span>
                        View all project categories
                    </a>
                </div>
                
                @if($feature_projects->isNotEmpty())
                    <div class="section">
                        <div class="section-title">
                            Featured Projects
                        </div>
                        <div class="project-list project-list-wide">
                                @foreach ($feature_projects as $project)
                                    @include('front.common.project')
                                @endforeach
                            </div>
                    </div>
                @endif


                @foreach ($categories_projects as $projects) 
                    <div class="section">
                        <div class="section-title">
                            {{$projects->first()->category->name}}
                            <a href="{{route('front.category.projects', $projects->first()->category->slug)}}" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                        </div>
                        @foreach ($projects as $project)
                            <div class="project-list project-list-wide">
                                @include('front.common.project', ['project' => $project])
                            </div>
                        @endforeach
                       
                        <a href="{{route('front.category.projects', $projects->first()->category->slug)}}" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All {{$projects->first()->category->name}} Projects
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                @endforeach



                {{-- <div class="section">
                    <div class="section-title">
                        Category 2
                        <a href="/category/projects/category1" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div class="project-list project-list-wide">
                        @include('front.common.project')
                    </div>
                    <a href="/category/projects/category1" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                        View All Category 2 Projects
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div> --}}
            </div>
            
            <div class="col-lg-3 d-none d-lg-block">
                
                <div class="home-section-user bg-fff shadow-sm mb-30 br-4">
                    <div></div>
                    <div class="home-section-user-info">
                        <a href="/account">
                            <span class="fa fa-user"></span>
                        </a>
                        <div>
                            <a href="/account" class="font-bold d-block hover-underline">
                                Olawale Lawal
                            </a>
                            <div class="text-fade">
                                Frontend Developer, UIUX Designer, Graphics Designer
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{route('front.deal')}}" class="btn btn-orange btn-block">
                            Switch to Buying
                        </a>
                    </div>
                </div>

                <div class="section pl-10 pr-10 sticky-top">
                    <div class="section-title">
                        Latest Projects
                    </div>
                    @foreach ($latest_projects as $project)
                        <div class="project-list project-list-mini">
                            @include('front.common.project')
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

@endsection
