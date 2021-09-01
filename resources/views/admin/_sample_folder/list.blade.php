@extends('layouts.admin.app')

@section('title')
    List Page
@endsection

@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div class="box">
        <div class="box-header">
            <div class="box-title">
                List Page
            </div>
            <div class="box-tools pull-right">
                <a href="" class="btn btn-box-tool">
                    <i class="fa fa-plus"></i>
                    Link
                </a>
            </div>
        </div>
        <div class="box-body">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>SN</td>
                            <td>Column 1</td>
                            <td>Column 2</td>
                            <td>Column 3</td>
                            <td>Column 4</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="table-img-text">
                                    <div>
                                        <img src="{{ asset('/img/app/icons/logo.png') }}" class="dp-contain" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            Text Main 1 Lorem Ipsum Something
                                        </div>
                                        <div class="text-fade">
                                            Text Sub 1
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </td>
                            <td>
                                At vero eos et accusam et justo duo dolores et ea rebum.
                            </td>
                            <td>
                                Aug 04, 2020
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item">
                                            Link 1
                                        </a>
                                        <a href="" class="dropdown-item">
                                            Link 2
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="table-img-text">
                                    <div>
                                        <img src="{{ asset('/img/app/icons/logo.png') }}" class="dp-contain" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            Text Main 1 Lorem Ipsum Something
                                        </div>
                                        <div class="text-fade">
                                            Text Sub 1
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </td>
                            <td>
                                At vero eos et accusam et justo duo dolores et ea rebum.
                            </td>
                            <td>
                                Aug 04, 2020
                            </td>
                            <td>
                                <form action="" class="form-horizontal" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="table-img-text">
                                    <div>
                                        <img src="{{ asset('/img/app/icons/logo.png') }}" class="dp-contain" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            Text Main 1 Lorem Ipsum Something
                                        </div>
                                        <div class="text-fade">
                                            Text Sub 1
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </td>
                            <td>
                                At vero eos et accusam et justo duo dolores et ea rebum.
                            </td>
                            <td>
                                Aug 04, 2020
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item">
                                            Link 1
                                        </a>
                                        <a href="" class="dropdown-item">
                                            Link 2
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
