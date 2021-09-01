@extends('layouts.admin.app')

@section('title')
    Form Page
@endsection

@section('css')
    <style>
        
    </style>
@endsection


@section('content')

    <div class="box">
        <div class="box-header">
            <div class="box-title">
                Form Page
            </div>
            <div class="box-tools pull-right">
                <a href="" class="btn btn-box-tool">
                    <i class="fa fa-plus"></i>
                    Link
                </a>
            </div>
        </div>
        <div class="box-body">
            

            <form action="" method="post" enctype="multipart/form-data" class="mx-auto mw-600">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Label:</label>
                            <input type="text" class="form-control" name="" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Label:</label>
                            <input type="text" class="form-control" name="" value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Label:</label>
                            <select name="" class="form-control" required>
                                <option value="0">-- Select --</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Label:</label>
                            <select name="" class="form-control" required>
                                <option value="0">-- Select --</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Label:</label>
                            <textarea class="form-control" name="" style="height: 100px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="">
                                Checkbox Label
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="">
                                Radio Label
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Label:</label>
                            <input type="text" class="form-control" name="" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Label:</label>
                            <input type="text" class="form-control" name="" value="" />
                        </div>
                    </div>
                </div>


                <div class="form-footer">
                    <input type="submit" name="" value="Submit 1" class="btn btn-primary" />
                    <input type="submit" name="" value="Submit 2" class="btn btn-orange" />
                    <a href="" class="btn btn-transparent-black">Cancel</a>
                </div>

            </form>


        </div>
    </div>

@endsection
