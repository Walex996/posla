@extends('layouts.admin.app')

@section('title')
    Create Category
@endsection

@section('css')
    <style>
        
    </style>
@endsection


@section('content')
@include('layouts.common.errors-messages')
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                Update Category - {{$category->name}}
            </div>
        </div>
        <div class="box-body">
            <form action="{{route('admin.categories.update', $category->id)}}" method="post" enctype="multipart/form-data" class="mx-auto mw-600">
                @csrf
                @method('put')
                <input type="hidden" name="edit" value="1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" value="{{$category->name}}" />
                        </div>
                    </div>
                    @if(!$parents->isEmpty())
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Parent Category:</label>
                                <select name="parent_id" class="form-control" >
                                    <option  selected value="">-- None --</option>
                                    @foreach ($parents as $parent)
                                        <option  value="{{$parent->id}}" @if (isset($category->parent) && $category->parent->id == $parent->id) selected @endif>{{$parent->name}}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position:</label>
                            <input type="number" class="form-control" name="position" min="1" max="100" value="{{$category->position}}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status:</label>
                            <select name="status" class="form-control" required>
                                <option value="1"  @if ($category->status == 1) selected @endif>Active</option>
                                <option value="0"  @if ($category->status == 0) selected @endif>Disable</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" style="height: 100px;">{{$category->description}}</textarea>
                        </div>
                    </div>
                </div>


                <div class="form-footer">
                    <input type="submit" name="" value="Update" class="btn btn-primary" />
                    <a href="{{route('admin.categories.index')}}" class="btn btn-transparent-black">Cancel</a>
                </div>

            </form>


        </div>
    </div>

@endsection
