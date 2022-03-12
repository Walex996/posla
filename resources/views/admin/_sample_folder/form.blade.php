@extends('layouts.admin.app')

@section('title')
    Form Page
@endsection

@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div className="box">
        <div className="box-header">
            <div className="box-title">
                Form Page
            </div>
            <div className="box-tools pull-right">
                <Link to="" className="btn btn-box-tool">
                    <i className="fa fa-plus"></i>
                    Link
                </Link>
            </div>
        </div>
        <div className="box-body">
            

            <form action="" method="post" enctype="multipart/form-data" className="mx-auto mw-600">

                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Label:</label>
                            <input type="text" className="form-control" name="" value="" />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Label:</label>
                            <input type="text" className="form-control" name="" value="" />
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Label:</label>
                            <select name="" className="form-control" required>
                                <option value="0">-- Select --</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Label:</label>
                            <select name="" className="form-control" required>
                                <option value="0">-- Select --</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div className="row">
                    <div className="col-md-12">
                        <div className="form-group">
                            <label>Label:</label>
                            <textarea className="form-control" name="" style="height: 100px;"></textarea>
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label className="checkbox-inline">
                                <input type="checkbox" name="">
                                Checkbox Label
                            </label>
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="form-group">
                            <label className="radio-inline">
                                <input type="radio" name="">
                                Radio Label
                            </label>
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Label:</label>
                            <input type="text" className="form-control" name="" value="" />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="form-group">
                            <label>Label:</label>
                            <input type="text" className="form-control" name="" value="" />
                        </div>
                    </div>
                </div>


                <div className="form-footer">
                    <input type="submit" name="" value="Submit 1" className="btn btn-primary" />
                    <input type="submit" name="" value="Submit 2" className="btn btn-orange" />
                    <Link to="" className="btn btn-transparent-black">Cancel</Link>
                </div>

            </form>


        </div>
    </div>

@endsection
