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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-earnings-withdrawals{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item"><a href="/account/earnings-withdrawals">Earnings & Withdrawals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New</li>
                    </ol>
                </div>

                <div class="section">
                    <div class="section-title section-title-sm">
                        New Withdrawal
                        <a href="/account/settings/withdrawal-settings" class="btn btn-orange btn-sm pull-right d-none d-sm-inline-block">Change Withdrawal Settings</a>
                        <a href="/account/settings/withdrawal-settings" class="btn btn-orange btn-xs pull-right d-block d-sm-none" style="margin-top: -3px;">Change Withdrawal Settings</a>
                    </div>
                    <div>
                        
                        <div class="note text-center">
                            Available for withdrawal:
                            $8,700
                        </div>
                        
                        <form action="/account/earnings-withdrawals/" class="b-1-ddd p-20 mt-20 d-block">

                            <div class="row">
                                
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="amount" class="control-label">
                                            Amount To Withdraw:
                                        </label>
                                        <div class="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-md">
                                                    <span class="font-18">$</span>
                                                </button>
                                            </div>
                                            <input type="number" name="amount" id="amount" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="currency" class="control-label">
                                            Withdrawal Option:
                                        </label>
                                        <select name="currency" id="currency" readonly disabled>
                                            <option value="paypal" selected>PayPal</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <hr class="hr-ddd">

                            {{-- if paypal is selected default --}}
                            <div class="row d-none">
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="paypal_email" class="control-label">
                                            My Paypal Email Address:
                                        </label>
                                        <input type="email" name="paypal_email" id="paypal_email" class="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="currency" class="control-label">
                                            Preferred Currency:
                                        </label>
                                        <select name="currency" id="currency" readonly disabled>
                                            <option value="usd" selected>US Dollar (USD)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- endif --}}
                                

                            {{-- if bank wire transfer is selected default --}}
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="bank_name" class="control-label">
                                            Bank Name:
                                        </label>
                                        <select name="bank_name" id="bank_name" readonly disabled>
                                            <option value="">First Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="account_name" class="control-label">
                                            Bank Account Name:
                                        </label>
                                        <input type="text" name="account_name" id="account_name" class="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="swift_code" class="control-label">
                                            Swift Code:
                                        </label>
                                        <input type="text" name="swift_code" id="swift_code" class="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="iban" class="control-label">
                                            IBAN / Bank account number
                                        </label>
                                        <input type="text" name="iban" id="iban" class="form-control" readonly disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="currency" class="control-label">
                                            Preferred Currency:
                                        </label>
                                        <select name="currency" id="currency" readonly disabled>
                                            <option value="usd" selected>US Dollar (USD)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- endif --}}

                            
                            <div class="pt-20 mt-20 bt-1-ddd">
                                <div class="floated-content">
                                    <button type="submit" class="btn btn-blue btn-sm pull-right ml-10">
                                        Save Changes
                                    </button>
                                    <a href="/account/earnings-withdrawals/" class="btn btn-transparent-black btn-sm pull-right">
                                        Cancel
                                    </a>
                                </div>
                            </div>

                            
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
