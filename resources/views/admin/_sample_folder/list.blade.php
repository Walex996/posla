@extends('layouts.admin.app')

@section('title')
    List Page
@endsection

@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div className="box">
        <div className="box-header">
            <div className="box-title">
                List Page
            </div>
            <div className="box-tools pull-right">
                <Link to="" className="btn btn-box-tool">
                    <i className="fa fa-plus"></i>
                    Link
                </Link>
            </div>
        </div>
        <div className="box-body">
            
            <div className="table-responsive">
                <table className="table table-striped">
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
                                <div className="table-img-text">
                                    <div>
                                        <img src="{{ asset('/img/app/icons/logo.png') }}" className="dp-contain" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            Text Main 1 Lorem Ipsum Something
                                        </div>
                                        <div className="text-fade">
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
                                <div className="dropdown">
                                    <button type="button" className="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action
                                    </button>
                                    <div className="dropdown-menu dropdown-menu-right">
                                        <Link to="" className="dropdown-item">
                                            Link 1
                                        </Link>
                                        <Link to="" className="dropdown-item">
                                            Link 2
                                        </Link>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div className="table-img-text">
                                    <div>
                                        <img src="{{ asset('/img/app/icons/logo.png') }}" className="dp-contain" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            Text Main 1 Lorem Ipsum Something
                                        </div>
                                        <div className="text-fade">
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
                                <form action="" className="form-horizontal" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <div className="btn-group">
                                        <button type="submit" className="btn btn-danger btn-sm">
                                            <i className="fa fa-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div className="table-img-text">
                                    <div>
                                        <img src="{{ asset('/img/app/icons/logo.png') }}" className="dp-contain" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            Text Main 1 Lorem Ipsum Something
                                        </div>
                                        <div className="text-fade">
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
                                <div className="dropdown">
                                    <button type="button" className="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Action
                                    </button>
                                    <div className="dropdown-menu dropdown-menu-right">
                                        <Link to="" className="dropdown-item">
                                            Link 1
                                        </Link>
                                        <Link to="" className="dropdown-item">
                                            Link 2
                                        </Link>
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
