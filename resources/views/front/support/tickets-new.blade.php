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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/support">Support</a></li>
                <li class="breadcrumb-item"><a href="/support/tickets">Tickets</a></li>
                <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
        </div>

        <div class="section">
            <div class="d-none d-sm-block mt-30"></div>

            <div class="font-18 font-bold text-center">
                Create New Ticket
            </div>

            <div class="ticket-form">
                
                <div class="section mw-600 p-20-10 b-1-ddd mt-10 mx-auto">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Fullname:</label>
                                <input type="text" name="" class="form-control" value="" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="email" name="" class="form-control" value="" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="tel" name="" class="form-control" value="" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mw-600 p-20-10 b-1-ddd mt-30 mx-auto">
                    <div class="form-group">
                        <label>Category:</label>
                        <select name="" class="form-control" required>
                            <option value="">-- Select --</option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subject:</label>
                        <input type="text" name="" class="form-control" value="" required />
                    </div>

                    <div class="form-group">
                        <label>
                            Order Number:
                            <span class="text-red">(Optional)</span>
                        </label>
                        <input type="number" name="" class="form-control" value="" />
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="" style="height: 145px;" required></textarea>
                    </div>

                    <div class="bg-eee p-10">
                        <div class="">
                            Add Attachment <span class="text-f00">(optional)</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-5">
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-5">
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-5">
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-5">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="mt-20">
                        <ul class="list-style">
                            <li>
                                Please <a href="/support/#faqs" class="underline hover-blue">read our FAQs</a> to find answers to your questions before you submit a new request.
                            </li>
                            <li>
                                Please do not submit multiple request about the same issue. Instead, you can add additonal information to your existing thread.
                            </li>
                        </ul>
                    </div>

                    <div class="form-footer pt-20 mt-20 bt-1-ddd">
                        <button class="btn btn-primary btn-block btn-md mb-0">
                            Submit Ticket
                        </button>
                        <a href="/support/tickets" class="btn btn-transparent-black btn-block btn-md">
                            Cancel
                        </a>
                    </div>

                </div>

            </div>

            <div class="d-none d-sm-block mt-30"></div>
        </div>

    </div>

@endsection
