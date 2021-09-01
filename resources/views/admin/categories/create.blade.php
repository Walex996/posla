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
                Create Category
            </div>
            <div class="box-tools pull-right">
                <a href="" class="btn btn-box-tool">
                    <i class="fa fa-plus"></i>
                    Link
                </a>
            </div>
        </div>
        <div class="box-body">
            

            <form action="{{route('admin.categories.store')}}" method="post" enctype="multipart/form-data" class="mx-auto mw-600">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" />
                        </div>
                    </div>
                    @if(!$parents->isEmpty())
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Parent Category:</label>
                                <select name="parent_id" class="form-control" >
                                    <option  selected value="">-- None --</option>
                                    @foreach ($parents as $parent)
                                        <option value="{{$parent->id}}">{{$parent->name}}</option>
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
                            <input type="number" class="form-control" name="position" max="100" min="1" value="{{old('position')}}" />
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status:</label>
                            <select name="status" class="form-control" required>
                                <option disabled selected>-- Select --</option>
                                <option value="1">Active</option>
                                <option value="0">Disable</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" style="height: 100px;">{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-footer">
                    <input type="submit" name="" value="Create" class="btn btn-primary" />
                    <a href="{{route('admin.categories.index')}}" class="btn btn-transparent-black">Cancel</a>
                </div>

            </form>


        </div>
    </div>

@endsection
