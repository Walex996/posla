@extends('layouts.front.app')


@section('title')
    Create New Ticket - Support Center
@endsection


@section('og')
    <meta name="description" content="Create New Ticket - Support Center - Posla">
    <meta name="keywords" content="Create New Ticket, Support Center, Help, Posla, Posla.com">
    <meta name="tags" content="create new ticket support center help posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .ticket-form .form-group{
            margin-bottom: 15px;
        }
        .ticket-form .form-control{
            margin-top: 2px;
            height: 36px;
            border-color: #ddd;
        }
    </style>
@endsection


@section('content')
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/">Home</Link></li>
                <li className="breadcrumb-item"><Link to="/support">Support</Link></li>
                <li className="breadcrumb-item"><Link to="/support/tickets">Tickets</Link></li>
                <li className="breadcrumb-item active" aria-current="page">New</li>
            </ol>
        </div>

        <div className="section">
            <div className="d-none d-sm-block mt-30"></div>

            <div className="font-18 font-bold text-center">
                Create New Ticket
            </div>

            <div className="ticket-form">
                
                <div className="section mw-600 p-5-10 b-1-ddd mt-2.5 mx-auto">
                    <div className="row">
                        <div className="col-sm-12">
                            <div className="form-group">
                                <label>Fullname:</label>
                                <input type="text" name="" className="form-control" value="" required />
                            </div>
                        </div>
                        <div className="col-sm-6">
                            <div className="form-group">
                                <label>Email Address:</label>
                                <input type="email" name="" className="form-control" value="" required />
                            </div>
                        </div>
                        <div className="col-sm-6">
                            <div className="form-group">
                                <label>Phone Number:</label>
                                <input type="tel" name="" className="form-control" value="" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div className="section mw-600 p-5-10 b-1-ddd mt-30 mx-auto">
                    <div className="form-group">
                        <label>Category:</label>
                        <select name="" className="form-control" required>
                            <option value="">-- Select --</option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div className="form-group">
                        <label>Subject:</label>
                        <input type="text" name="" className="form-control" value="" required />
                    </div>

                    <div className="form-group">
                        <label>
                            Order Number:
                            <span className="text-red">(Optional)</span>
                        </label>
                        <input type="number" name="" className="form-control" value="" />
                    </div>

                    <div className="form-group">
                        <label>Description:</label>
                        <textarea className="form-control" name="" style="height: 145px;" required></textarea>
                    </div>

                    <div className="bg-eee p-2.5">
                        <div className="">
                            Add Attachment <span className="text-f00">(optional)</span>
                        </div>
                        <div className="row">
                            <div className="col-sm-6 mt-1.5">
                                <input type="file" className="form-control">
                            </div>
                            <div className="col-sm-6 mt-1.5">
                                <input type="file" className="form-control">
                            </div>
                            <div className="col-sm-6 mt-1.5">
                                <input type="file" className="form-control">
                            </div>
                            <div className="col-sm-6 mt-1.5">
                                <input type="file" className="form-control">
                            </div>
                        </div>
                    </div>

                    <div className="mt-5">
                        <ul className="list-style">
                            <li>
                                Please <Link to="/support/#faqs" className="underline hover-blue">read our FAQs</Link> to find answers to your questions before you submit a new request.
                            </li>
                            <li>
                                Please do not submit multiple request about the same issue. Instead, you can add additonal information to your existing thread.
                            </li>
                        </ul>
                    </div>

                    <div className="form-footer pt-5 mt-5 bt-1-ddd">
                        <button className="btn btn-primary btn-block btn-md mb-0">
                            Submit Ticket
                        </button>
                        <Link to="/support/tickets" className="btn btn-transparent-black btn-block btn-md">
                            Cancel
                        </Link>
                    </div>

                </div>

            </div>

            <div className="d-none d-sm-block mt-30"></div>
        </div>

    </div>

@endsection
