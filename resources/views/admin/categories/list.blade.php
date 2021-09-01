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
    <div class="box">
        <div class="box-header">
            <div class="box-title">
              Categories
            </div>
            <div class="box-tools pull-right">
                <a href="{{route('admin.categories.create')}}" class="btn btn-box-tool">
                    <i class="fa fa-plus"></i>
                    Create Category
                </a>
            </div>
        </div>
        <div class="box-body">
            
            <div class="table-responsive">
                <table class="table table-striped">
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
                                    <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-dark btn-sm">
                                        <span class="fa fa-edit"></span>
                                        Edit
                                    </a>

                                    {{-- 
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                                                Action
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{route('admin.categories.edit', $category->id)}}" class="dropdown-item">
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    --}}
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
