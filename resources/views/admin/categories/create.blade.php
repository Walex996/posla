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
                Create Category
            </div>
            <div className="box-tools pull-right">
                <Link to="" className="btn btn-box-tool">
                    <i className="fa fa-plus"></i>
                    Link
                </Link>
            </div>
        </div>
        <div className="box-body">
            

            <form action="{{route('admin.categories.store')}}" method="post" enctype="multipart/form-data" className="mx-auto mw-600">
                @csrf
                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Name:</label>
                            <input type="text" className="form-control" name="name" value="{{old('name')}}" />
                        </div>
                    </div>
                    @if(!$parents->isEmpty())
                        <div className="col-md-6">
                            <div className="form-group">
                                <label>Parent Category:</label>
                                <select name="parent_id" className="form-control" >
                                    <option  selected value="">-- None --</option>
                                    @foreach ($parents as $parent)
                                        <option value="{{$parent->id}}">{{$parent->name}}</option>
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
                            <input type="number" className="form-control" name="position" max="100" min="1" value="{{old('position')}}" />
                        </div>
                    </div>
                    
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Status:</label>
                            <select name="status" className="form-control" required>
                                <option disabled selected>-- Select --</option>
                                <option value="1">Active</option>
                                <option value="0">Disable</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div className="row">
                    <div className="col-md-12">
                        <div className="form-group">
                            <label>Description:</label>
                            <textarea className="form-control" name="description" style="height: 100px;">{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>

                <div className="form-footer">
                    <input type="submit" name="" value="Create" className="btn btn-primary" />
                    <Link to="{{route('admin.categories.index')}}" className="btn btn-transparent-black">Cancel</Link>
                </div>

            </form>


        </div>
    </div>

@endsection
