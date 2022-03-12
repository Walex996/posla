@extends('layouts.front.app')


@section('title')
    Edit - Project - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Edit Project - Posla">
    <meta name="keywords" content="edit, project, user, Posla, Posla.com">
    <meta name="tags" content="edit project dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div className="container">
        <div className="row">
            <div className="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')
                
            </div>
            
            <div className="col-12 col-md-8 col-lg-9">
                
                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item"><Link to="/account/projects">Projects</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Edit Project</li>
                    </ol>
                </div>
                
                <div className="section">
                    <div className="section-title">
                        Edit Project
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-project-mgmt', ['active' => 2])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                <form action="/account/projects/edit/1234/publish">
                                    <div className="b-1-ddd">

                                        <div className="p-5">
                                            
                                            <div className="row">
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="title" className="control-label">
                                                            Project Title:
                                                        </label>
                                                        <textarea name="title" id="title" className="form-control resize-none" style="height: 99px;" placeholder="I need..."></textarea>
                                                    </div>
                                                </div>
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="category" className="control-label">
                                                            Category:
                                                        </label>
                                                        <select name="category" id="category">
                                                            <option value="">- Select -</option>
                                                        </select>
                                                    </div>
                                                    <div className="form-group">
                                                        <label for="subcategory" className="control-label">
                                                            SubCategory:
                                                        </label>
                                                        <select name="subcategory" id="subcategory">
                                                            <option value="">- Select -</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div className="col-sm-6">
                                                    <div className="row">
                                                        <div className="col-sm-6">
                                                            <div className="form-group">
                                                                <label for="timeframe" className="control-label">
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
                                                        <div className="col-sm-6">
                                                            <div className="form-group">
                                                                <label for="budget" className="control-label">
                                                                    Budget:
                                                                </label>
                                                                <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                                    <div className="input-group-btn">
                                                                        <button type="button" className="btn btn-md">
                                                                            <span className="font-18">$</span>
                                                                        </button>
                                                                    </div>
                                                                    <input type="number" className="form-control" name="budget" id="budget">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="form-group">
                                                        <label for="expdate" className="control-label">
                                                            Active Until:
                                                        </label>
                                                        <input type="datetime-local" className="form-control" name="expdate" id="expdate">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />
                                            
                                            <div className="row">
                                                <div className="col-sm-12 file-upload-box-container">
                                                
                                                    <div className="file-upload-box">
                                                        <label className="" for="picture_1">
                                                            <div>
                                                                <span className="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Main Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button className="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span className="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="picture_1" id="picture_1" accept="image/*" />
                                                    </div>
                                                    
                                                    <div className="file-upload-box">
                                                        <label className="" for="picture_2">
                                                            <div>
                                                                <span className="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button className="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span className="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="picture_2" id="picture_2" accept="image/*" />
                                                    </div>
                                                    
                                                    <div className="file-upload-box">
                                                        <label className="" for="picture_3">
                                                            <div>
                                                                <span className="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button className="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span className="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="picture_3" id="picture_3" accept="image/*" />
                                                    </div>
                                                    
                                                    <div className="file-upload-box">
                                                        <label className="" for="picture_4">
                                                            <div>
                                                                <span className="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button className="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span className="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="picture_4" id="picture_4" accept="image/*" />
                                                    </div>
                                                    
                                                    <div className="file-upload-box">
                                                        <label className="" for="picture_5">
                                                            <div>
                                                                <span className="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button className="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span className="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="picture_5" id="picture_5" accept="image/*" />
                                                    </div>
                                                    
                                                    <div className="file-upload-box">
                                                        <label className="" for="picture_6">
                                                            <div>
                                                                <span className="fa fa-plus icon-50"></span>
                                                            </div>
                                                            <div>
                                                                Add Picture
                                                                <br />
                                                                (jpg, jpeg, png, gif)
                                                            </div>
                                                            <button className="btn btn-danger btn-xs file-upload-box-delete" type="button">
                                                                <span className="fa fa-times"></span>
                                                                Delete
                                                            </button>
                                                        </label>
                                                        <input type="file" name="picture_6" id="picture_6" accept="image/*" />
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <hr />

                                            <div className="row">
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="description" className="control-label">
                                                            Project Description:
                                                        </label>
                                                        <textarea name="description" id="description" className="form-control resize-none" style="height: 99px;"></textarea>
                                                    </div>
                                                    <div className="form-group">
                                                        <label for="visibility" className="control-label">
                                                            Visiblility:
                                                        </label>
                                                        <select name="visibility" id="visibility">
                                                            <option value="">- Select -</option>
                                                            <option value="public">Public</option>
                                                            <option value="private">Private</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="tags" className="control-label">
                                                            Tags:
                                                        </label>
                                                        {{-- let's do comman separated value for now.. onsave, explode input with comma --}}
                                                        <input type="search" name="tags" className="form-control" placeholder="Search">
                                                    </div>
                                                    <div>
                                                        <div className="item-labels item-labels-tags-all" style="margin-left: -2px;">
                                                            <div className="item-labels-tags cursor-pointer">
                                                                Mobile App
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                iOS App
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                App Store
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div className="p-15 mt-15 bt-1-ddd floated-content">
                                            <div className="pull-right">
                                                <Link to="/account/projects/edit/1234/rules" className="btn btn-transparent-black btn-sm icon-left">
                                                    <span className="fa fa-angle-left"></span>
                                                    Back
                                                </Link>
                                                <button type="submit" className="btn btn-blue btn-sm icon-right">
                                                    Proceed
                                                    <span className="fa fa-angle-right"></span>
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

@endsection
