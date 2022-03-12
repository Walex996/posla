@extends('layouts.front.app')


@section('title')
    New Withdrawal - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="New Withdrawal - Posla">
    <meta name="keywords" content="new withdrawals, user, Posla, Posla.com">
    <meta name="tags" content="new withdrawals account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-earnings-withdrawals{
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
                        <li className="breadcrumb-item"><Link to="/account/earnings-withdrawals">Earnings & Withdrawals</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">New</li>
                    </ol>
                </div>

                <div className="section">
                    <div className="section-title section-title-sm">
                        New Withdrawal
                        <Link to="/account/settings/withdrawal-settings" className="btn btn-orange btn-sm pull-right d-none d-sm-inline-block">Change Withdrawal Settings</Link>
                        <Link to="/account/settings/withdrawal-settings" className="btn btn-orange btn-xs pull-right d-block d-sm-none" style="margin-top: -3px;">Change Withdrawal Settings</Link>
                    </div>
                    <div>
                        
                        <div className="note text-center">
                            Available for withdrawal:
                            $8,700
                        </div>
                        
                        <form action="/account/earnings-withdrawals/" className="b-1-ddd p-5 mt-5 d-block">

                            <div className="row">
                                
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="amount" className="control-label">
                                            Amount To Withdraw:
                                        </label>
                                        <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                            <div className="input-group-btn">
                                                <button type="button" className="btn btn-md">
                                                    <span className="font-18">$</span>
                                                </button>
                                            </div>
                                            <input type="number" name="amount" id="amount" className="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="currency" className="control-label">
                                            Withdrawal Option:
                                        </label>
                                        <select name="currency" id="currency" readonly disabled>
                                            <option value="paypal" selected>PayPal</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <hr className="hr-ddd">

                            {/*if paypal is selected default */}
                            <div className="row d-none">
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="paypal_email" className="control-label">
                                            My Paypal Email Address:
                                        </label>
                                        <input type="email" name="paypal_email" id="paypal_email" className="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
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
                            {/*endif */}
                                

                            {/*if bank wire transfer is selected default */}
                            <div className="row">
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="bank_name" className="control-label">
                                            Bank Name:
                                        </label>
                                        <select name="bank_name" id="bank_name" readonly disabled>
                                            <option value="">First Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="account_name" className="control-label">
                                            Bank Account Name:
                                        </label>
                                        <input type="text" name="account_name" id="account_name" className="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="swift_code" className="control-label">
                                            Swift Code:
                                        </label>
                                        <input type="text" name="swift_code" id="swift_code" className="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div className="form-group">
                                        <label for="iban" className="control-label">
                                            IBAN / Bank account number
                                        </label>
                                        <input type="text" name="iban" id="iban" className="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div className="col-12 col-sm-6 col-md-12 col-lg-6">
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
                            {/*endif */}

                            
                            <div className="pt-5 mt-5 bt-1-ddd">
                                <div className="floated-content">
                                    <button type="submit" className="btn btn-blue btn-sm pull-right ml-2.5">
                                        Save Changes
                                    </button>
                                    <Link to="/account/earnings-withdrawals/" className="btn btn-transparent-black btn-sm pull-right">
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
