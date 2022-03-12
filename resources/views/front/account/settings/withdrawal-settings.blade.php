@extends('layouts.front.app')


@section('title')
    Withdrawal Settings - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Withdrawal Settings - Posla">
    <meta name="keywords" content="withdrawal settings, account, user, Posla, Posla.com">
    <meta name="tags" content="withdrawal settings account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-settings{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div className="container">
        <div className="row">
            <div className="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div className="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                        <li className="breadcrumb-item"><Link to="/account/settings">Settings</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Withdrawal Settings</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        Withdrawal Settings
                    </div>
                    <div>

                        <form action="">
                            <div className="row">

                                <div className="col-sm-6 col-md-12 col-lg-6">
                                    <div className="b-1-ddd">
                                        <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                            Preferred Payment Method
                                        </div>
                                        <div className="p-5">
                                            <div>
                                                <label className="checkbox-inline cursor-pointer">
                                                    <input type="radio" name="">
                                                    Use PayPal
                                                </label>
                                            </div>
                                            <div className="mt-2.5">
                                                <label className="checkbox-inline cursor-pointer">
                                                    <input type="radio" name="">
                                                    Use Bank Wire Transfer
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr className="mt-30 mb-0">

                            <div className="row">

                                <div className="col-sm-6 col-md-12 col-lg-6">
                                    <div className="b-1-ddd mt-30">
                                        <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                            PayPal
                                        </div>
                                        <div className="p-5">
                                            <div className="form-group">
                                                <label for="paypal_email" className="control-label">
                                                    My Paypal Email Address:
                                                </label>
                                                <input type="email" name="paypal_email" id="paypal_email" className="form-control">
                                            </div>

                                            <div className="form-group">
                                                <label for="currency" className="control-label">
                                                    Preferred Currency:
                                                </label>
                                                <select name="currency" id="currency" readonly disabled>
                                                    <option value="usd" selected>US Dollar (USD)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div className="col-sm-6 col-md-12 col-lg-6">
                                    <div className="b-1-ddd mt-30">
                                        <div className="bb-1-ddd font-bold pr-5 pl-5 pt-1.5 pb-1.5 bg-eee">
                                            Bank Wire Transfer
                                        </div>
                                        <div className="p-5">
                                            <div className="form-group">
                                                <label for="bank_name" className="control-label">
                                                    Bank Name:
                                                </label>
                                                <select name="bank_name" id="bank_name">
                                                    <option value="">- Select -</option>
                                                </select>
                                            </div>

                                            <div className="form-group">
                                                <label for="account_name" className="control-label">
                                                    Bank Account Name:
                                                </label>
                                                <input type="text" name="account_name" id="account_name" className="form-control">
                                            </div>

                                            <div className="form-group">
                                                <label for="swift_code" className="control-label">
                                                    Swift Code:
                                                </label>
                                                <input type="text" name="swift_code" id="swift_code" className="form-control">
                                            </div>

                                            <div className="form-group">
                                                <label for="iban" className="control-label">
                                                    IBAN / Bank account number
                                                </label>
                                                <input type="text" name="iban" id="iban" className="form-control">
                                            </div>

                                            <div className="form-group">
                                                <label for="currency" className="control-label">
                                                    Preferred Currency:
                                                </label>
                                                <select name="currency" id="currency" readonly disabled>
                                                    <option value="">- Select -</option>
                                                    <option value="usd" selected>US Dollar (USD)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div className="pt-5 mt-5 bt-1-ddd">

                                <div className="floated-content">
                                    <button type="submit" className="btn btn-blue btn-sm pull-right ml-2.5">
                                        Save Changes
                                    </button>
                                    <Link to="/account/settings" className="btn btn-transparent-black btn-sm pull-right">
                                        Cancel
                                    </Link>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
