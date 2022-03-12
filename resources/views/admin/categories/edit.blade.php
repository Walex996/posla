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
    <div className="box">
        <div className="box-header">
            <div className="box-title">
                Update Category - {{$category->name}}
            </div>
        </div>
        <div className="box-body">
            <form action="{{route('admin.categories.update', $category->id)}}" method="post" enctype="multipart/form-data" className="mx-auto mw-600">
                @csrf
                @method('put')
                <input type="hidden" name="edit" value="1">
                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Name:</label>
                            <input type="text" className="form-control" name="name" value="{{$category->name}}" />
                        </div>
                    </div>
                    @if(!$parents->isEmpty())
                        <div className="col-md-6">
                            <div className="form-group">
                                <label>Parent Category:</label>
                                <select name="parent_id" className="form-control" >
                                    <option  selected value="">-- None --</option>
                                    @foreach ($parents as $parent)
                                        <option  value="{{$parent->id}}" @if (isset($category->parent) && $category->parent->id == $parent->id) selected @endif>{{$parent->name}}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                        </div>
                    @endif
                </div>

                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Position:</label>
                            <input type="number" className="form-control" name="position" min="1" max="100" value="{{$category->position}}" />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Status:</label>
                            <select name="status" className="form-control" required>
                                <option value="1"  @if ($category->status == 1) selected @endif>Active</option>
                                <option value="0"  @if ($category->status == 0) selected @endif>Disable</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div className="row">
                    <div className="col-md-12">
                        <div className="form-group">
                            <label>Description:</label>
                            <textarea className="form-control" name="description" style="height: 100px;">{{$category->description}}</textarea>
                        </div>
                    </div>
                </div>


                <div className="form-footer">
                    <input type="submit" name="" value="Update" className="btn btn-primary" />
                    <Link to="{{route('admin.categories.index')}}" className="btn btn-transparent-black">Cancel</Link>
                </div>

            </form>


        </div>
    </div>

@endsection
