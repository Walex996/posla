@extends('layouts.front.app')


@section('title')
    Create - Project - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Create Project - Posla">
    <meta name="keywords" content="create, project, user, Posla, Posla.com">
    <meta name="tags" content="create project dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-projects{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('js')
    <script>
        $(document).ready(function(){

            $(".file-upload-box input").change(function(){
                var files = $(this)[0].files;
                var files_total = files.length;
                var files_label = $(this).siblings().children().eq(1);
                if(files_total == 1){
                    files_label.text("1 file selected");
                    $(this).parent().find(".file-upload-box-delete").slideDown(0);
                }
                else{
                    files_label.html("Add Picture<br />(jpg, jpeg, png, gif)");
                    $(this).parent().find(".file-upload-box-delete").slideUp(0);
                }
            });

            $(".file-upload-box-delete").click(function(){
                var files_label = $(this).prev();
                $(this).parent().siblings("input").val(null);
                files_label.html("Add Picture<br />(jpg, jpeg, png, gif)");
                $(this).slideUp(0);
            });
                
        });
    </script>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')
                
            </div>
            
            <div class="col-12 col-md-8 col-lg-9">
                
                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item"><a href="/account/projects">Projects</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Project</li>
                    </ol>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        Create Project
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-project-mgmt', ['active' => 2])
                        
                        <div class="tab-content">
                            <div class="tab-pane active">

                                <form action="{{route('project.create.save.info')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="b-1-ddd">

                                        <div class="p-20">
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="title" class="control-label">
                                                            Project Title:
                                                        </label>
                                                        <textarea name="title" id="title" class="form-control resize-none" style="height: 99px;" placeholder="I need...">{{old('title') ?? session()->get('deal_title')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="category" class="control-label">
                                                            Category:
                                                        </label>
                                                        <select name="category_id" id="category" onchange="fetchSubCategory()" required>
                                                            <option value="" selected disabled>- Select -</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->id}}" @if ($category->id == old('category_id')) selected @endif>{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subcategory" class="control-label">
                                                            SubCategory:
                                                        </label>
                                                        <select name="subcategory_id" id="subCategory">
                                                            @if(old('subcategory_id'))
                                                                <option value="" >- Select -</option>
                                                                @foreach ($category->children as $subcategory)
                                                                <option value="{{$subcategory->id}}" >{{$subcategory->name}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="" >- Select -</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="timeframe" class="control-label">
                                                                    Project Timeframe:
                                                                </label>
                                                                <select name="timeframe" id="timeframe">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1 day</option>
                                                                    <option value="2">2 days</option>
                                                                    <option value="3">3 days</option>
                                                                    <option value="5">5 days</option>
                                                                    <option value="7">7 days</option>
                                                                    <option value="10">10 days</option>
                                                                    <option value="20">20 days</option>
                                                                    <option value="30">30 days</option>
                                                                    <option value="45">45 days</option>
                                                                    <option value="60">60 days</option>
                                                                    <option value="90">90 days</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="budget" class="control-label">
                                                                    Budget:
                                                                </label>
                                                                <div class="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn btn-md">
                                                                            <span class="font-18">$</span>
                                                                        </button>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="budget" id="budget">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="expdate" class="control-label">
                                                            Active Until:
                                                        </label>
                                                        <input type="datetime-local" class="form-control" name="active_until" id="expdate">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            
                                            <div class="row">
                                                <div class="col-sm-12 file-upload-box-container">
                                                
                                                    <div class="file-upload-box">
                                                        <label class="" for="picture_1">
                                                            <div>
                                                                <span class="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Main Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button class="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span class="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="pictures[]" id="picture_1" accept="image/*" />
                                                    </div>
                                                    
                                                    <div class="file-upload-box">
                                                        <label class="" for="picture_2">
                                                            <div>
                                                                <span class="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button class="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span class="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="pictures[]" id="picture_2" accept="image/*" />
                                                    </div>
                                                    
                                                    <div class="file-upload-box">
                                                        <label class="" for="picture_3">
                                                            <div>
                                                                <span class="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button class="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span class="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="pictures[]" id="picture_3" accept="image/*" />
                                                    </div>
                                                    
                                                    <div class="file-upload-box">
                                                        <label class="" for="picture_4">
                                                            <div>
                                                                <span class="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button class="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span class="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="pictures[]" id="picture_4" accept="image/*" />
                                                    </div>
                                                    
                                                    <div class="file-upload-box">
                                                        <label class="" for="picture_5">
                                                            <div>
                                                                <span class="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button class="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span class="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="pictures[]" id="picture_5" accept="image/*" />
                                                    </div>
                                                    
                                                    <div class="file-upload-box">
                                                        <label class="" for="picture_6">
                                                            <div>
                                                                <span class="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button class="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span class="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="pictures[]" id="picture_6" accept="image/*" />
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="description" class="control-label">
                                                            Project Description:
                                                        </label>
                                                        <textarea name="description" id="description" class="form-control resize-none" style="height: 99px;"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="visibility" class="control-label">
                                                            Visiblility:
                                                        </label>
                                                        <select name="status" id="visibility">
                                                            <option value="">- Select -</option>
                                                            <option value="1">Public</option>
                                                            <option value="0">Private</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="tags" class="control-label">
                                                            Tags:
                                                        </label>
                                                        {{-- let's do comman separated value for now.. onsave, explode input with comma --}}
                                                        <input type="search" name="tags" class="form-control" placeholder="Search">
                                                    </div>
                                                    <div>
                                                        <div class="item-labels item-labels-tags-all" style="margin-left: -2px;">
                                                            <div class="item-labels-tags cursor-pointer">
                                                                Mobile App
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div class="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="p-15 mt-15 bt-1-ddd floated-content">
                                            <div class="pull-right">
                                                <a href="/account/projects/edit/1234/rules" class="btn btn-transparent-black btn-sm icon-left">
                                                    <span class="fa fa-angle-left"></span>
                                                    Back
                                                </a>
                                                <button type="submit" class="btn btn-blue btn-sm icon-right">
                                                    Proceed
                                                    <span class="fa fa-angle-right"></span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script>
        function fetchSubCategory() {
            let categoryId = $('#category').val();

            if(categoryId){
                $.get(`/category/${categoryId}`, function(data) {
                    
                    let subCategoryList = $('#subCategory');

                    if(data.length > 0){
                        $.each(data, function (i, value) {
                            $('#subCategory').append($('<option>', { 
                                value: value.id,
                                text : value.name 
                            }));
                        });
                    }
                });
            }
        }
    </script>
@endsection
