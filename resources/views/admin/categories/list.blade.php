@extends('layouts.admin.app')

@section('title')
    Categories
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
              Categories
            </div>
            <div className="box-tools pull-right">
                <Link to="{{route('admin.categories.create')}}" className="btn btn-box-tool">
                    <i className="fa fa-plus"></i>
                    Create Category
                </Link>
            </div>
        </div>
        <div className="box-body">
            
            <div className="table-responsive">
                <table className="table table-striped">
                    <thead>
                        <tr>
                            <td>SN</td>
                            <td>Name</td>
                            <td>Parent</td>
                            <td>Position</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    {{$category->name}}
                                </td>
                                <td>
                                    {{$category->parent->name ?? '-'}}
                                </td>
                                <td>
                                    {{$category->position}}
                                </td>
                                <td>
                                    @include('admin.shared.status', ['status' => $category->status])
                                </td>
                                <td>
                                    <Link to="{{route('admin.categories.edit', $category->id)}}" className="btn btn-dark btn-sm">
                                        <span className="fa fa-edit"></span>
                                        Edit
                                    </Link>

                                    {/*
                                        <div className="dropdown">
                                            <button type="button" className="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                                                Action
                                            </button>
                                            <div className="dropdown-menu dropdown-menu-right">
                                                <Link to="{{route('admin.categories.edit', $category->id)}}" className="dropdown-item">
                                                    Edit
                                                </Link>
                                            </div>
                                        </div>
                                    */}
                                </td>
                            </tr> 
                        @empty
                            <tr>
                                <td colspan="6">

                                    no data  
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
