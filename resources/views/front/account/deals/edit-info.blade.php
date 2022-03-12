@extends('layouts.front.app')


@section('title')
    Edit - Deal - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Edit Deal - Posla">
    <meta name="keywords" content="edit, deal, user, Posla, Posla.com">
    <meta name="tags" content="edit deal dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-deals{
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
                        <li className="breadcrumb-item"><Link to="/account/deals">Deals</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Edit Deal</li>
                    </ol>
                </div>
                
                <div className="section">
                    <div className="section-title">
                        Edit Deal
                    </div>
                        @include('layouts.common.errors-messages')
                    <div>
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 2])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                <form action="/account/deals/edit/1234/pricing" enctype="multipart/form-data">
                                    
                                    <div className="b-1-ddd">

                                        <div className="p-5">
                                            
                                            <div className="row">
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="title" className="control-label">
                                                            Deal Title:
                                                        </label>
                                                        <textarea name="title" id="title" className="form-control resize-none" style="height: 99px;" placeholder="I will..."></textarea>
                                                    </div>
                                                </div>
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="category" className="control-label">
                                                            Category:
                                                        </label>
                                                        <select name="category_id" id="category" required id="category">
                                                            <option value="">Category 1</option>
                                                            <option value="">Category 1</option>
                                                            <option value="">Category 1</option>
                                                            <option value="">Category 1</option>
                                                            <option value="">Category 1</option>
                                                        </select>
                                                    </div>
                                                    <div className="form-group">
                                                        <label for="subcategory_id" className="control-label">
                                                            SubCategory:
                                                        </label>
                                                        <select name="subcategory_id" id="subCategory">
                                                            <option value="">- Select -</option>
                                                            <option value="">Subcategory 1</option>
                                                            <option value="">Subcategory 1</option>
                                                            <option value="">Subcategory 1</option>
                                                            <option value="">Subcategory 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />
                                            
                                            <div className="row">
                                                <div className="col-sm-12 file-upload-box-container">
                                                    
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
                                                                <input type="checkbox" name="delete_image[]" value="" className="d-none">
                                                                {/*Hidden checkbox for delete */}
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
                                                            <input type="file"  name="pictures[]" id="picture_3" accept="image/*" />
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
                                                        <input type="file"  name="pictures[]" id="picture_4" accept="image/*" />
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            <div className="row">
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="description" className="control-label">
                                                            Deal Description:
                                                        </label>
                                                        <textarea name="description" id="description" className="form-control resize-none" style="height: 99px;"></textarea>
                                                    </div>
                                                    <div className="form-group">
                                                        <label for="visibility" className="control-label">
                                                            Visiblility:
                                                        </label>
                                                        <select name="status" id="visibility">
                                                            <option value="">- Select -</option>
                                                            <option value="1">Public</option>
                                                            <option value="0">Private</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div className="col-sm-6">
                                                    <div className="form-group">
                                                        <label for="tags" className="control-label">
                                                            Tags:
                                                        </label>

                                                        {/*let's do comman separated value for now.. onsave, explode input with comma */}
                                                        <input type="search" name="tags" className="form-control" placeholder="Search" value="">
                                                    </div>
                                                    <div>
                                                        <div className="item-labels item-labels-tags-all" style="margin-left: -2px;">
                                                            <div className="item-labels-tags cursor-pointer">
                                                                tag here
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                tag here
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                tag here
                                                            </div>
                                                            <div className="item-labels-tags cursor-pointer">
                                                                tag here
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div className="p-15 mt-15 bt-1-ddd floated-content">
                                            <div className="pull-right">
                                                <Link to="/account/deals/edit/1234/rules" className="btn btn-transparent-black btn-sm icon-left">
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

       <script>
        function fetchSubCategory() {
            let categoryId = $('#category').val();

            if(categoryId){
                $.get(`/category/${categoryId}`, function(data) {
                    
                    let subCategoryList = $('#subCategory');

                    if(data.length > 0){
                        $('#subCategory').html('')
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
