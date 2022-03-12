@extends('layouts.front.app')


@section('title')
    Edit - Deal - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Edit Deal - Posla">
    <meta name="keywords" content="edit, deal, user, Posla, Posla.com">
    <meta name="tags" content="edit deal dashboard user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-deals{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .pricing_basic_action{
            /* background: #0ff; */
        }
        .pricing_standard_action{
            /* background: #f00; */
        }
        .pricing_premium_action{
            /* background: #ff0; */
        }
        input.disabled{
            /* opacity: 1 !important; */
            /* filter: opacity(100%) !important; */
            /* background-color: #eee !important; */
            /* border-color: #ccc !important; */
        }
        textarea.disabled{
            opacity: 0.7 !important;
            filter: opacity(70%) !important;
        }
        input.disabled,
        select.disabled,
        textarea.disabled{
            background-color: #ccc !important;
        }
    </style>
@endsection


@section('js')
    <script>
        $(document).ready(function(){

            function pricing_toggle(this_){
                var deal_pricing_toggle = $(this_).attr("id").toLowerCase();
                // alert(deal_pricing_toggle);
                if ($(this_).is(":checked")){
                    if (deal_pricing_toggle == "basic"){
                        // alert('on basic');
                        $(".table").find(".pricing_basic_action").removeAttr("disabled").removeClass("disabled");
                    }
                    if (deal_pricing_toggle == "standard"){
                        $(".table").find(".pricing_standard_action").removeAttr("disabled").removeClass("disabled");
                    }
                    if (deal_pricing_toggle == "premium"){
                        $(".table").find(".pricing_premium_action").removeAttr("disabled").removeClass("disabled");
                    }
                }
                else{
                    if (deal_pricing_toggle == "basic"){
                        // alert('off basic');
                        $(".table").find(".pricing_basic_action").attr("disabled","disabled").addClass("disabled");
                    }
                    if (deal_pricing_toggle == "standard"){
                        // alert('off standard');
                        $(".table").find(".pricing_standard_action").attr("disabled","disabled").addClass("disabled");
                    }
                    if (deal_pricing_toggle == "premium"){
                        // alert('off premium');
                        $(".table").find(".pricing_premium_action").attr("disabled","disabled").addClass("disabled");
                    }
                }
            }
            
            $(".deal-pricing-toggle").change(function(){
                pricing_toggle(this);
            });

            $(".deal-pricing-toggle").each(function(){
                pricing_toggle(this);
            });

            /*
            $("input.disabled, select.disabled, textarea.disabled").focus(function(){
                toastr.error("Please activate the respective pricing package");
            });
            */

        });
    </script>
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
                        <li className="breadcrumb-item"><Link to="/account/deals">Deals</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Edit Deal</li>
                    </ol>
                </div>
                
                <div className="section">
                    <div className="section-title">
                        Edit Deal
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 3])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                <form action="/account/deals/edit/1234/requirements">
                                    
                                    <div className="b-1-ddd">

                                        <div className="p-5">
                                            
                                            <div className="table-responsive b-1-ddd">
                                                <table className="table table-bordered table-col-padding" style="min-width: 600px;">
                                                    <thead>
                                                        <tr className="bg-eee">
                                                            <th style="width: 120px;"></th>
                                                            <th>
                                                                <label className="checkbox-inline">
                                                                    <input type="checkbox" name="pricing_standard" className="deal-pricing-toggle" value="pricing_standard">
                                                                    Basic
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label className="checkbox-inline">
                                                                    <input type="checkbox" name="pricing_standard" className="deal-pricing-toggle" value="pricing_standard">
                                                                    Standard
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label className="checkbox-inline">
                                                                    <input type="checkbox" name="pricing_standard" className="deal-pricing-toggle" value="pricing_standard">
                                                                    Premium
                                                                </label>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="2" style="width: 120px;"></td>
                                                            <td>
                                                                <textarea name="" id="" className="form-control resize-none mt-15 pricing_standard_action" style="height: 45px;" placeholder="Name"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea name="" id="" className="form-control resize-none mt-15 pricing_standard_action" style="height: 45px;" placeholder="Name"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea name="" id="" className="form-control resize-none mt-15 pricing_standard_action" style="height: 45px;" placeholder="Name"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <textarea name="" id="" className="form-control resize-none pricing_standard_action" style="height: 85px;" placeholder="Short Description"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea name="" id="" className="form-control resize-none pricing_standard_action" style="height: 85px;" placeholder="Short Description"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea name="" id="" className="form-control resize-none pricing_standard_action" style="height: 85px;" placeholder="Short Description"></textarea>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                                <hr className="mt-5 mb-5">

                                                <table className="table table-bordered table-col-padding" style="min-width: 600px;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 120px;">
                                                                <span>
                                                                    Delivery Timeframe
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <select name="" id="" className="pricing_standard_action">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1 day</option>
                                                                    <option value="2">2 days</option>
                                                                    <option value="3">3 days</option>
                                                                    <option value="5">5 days</option>
                                                                    <option value="7">7 days</option>
                                                                    <option value="10">10 days</option>
                                                                    <option value="20">20 days</option>
                                                                    <option value="30">30 days</option>
                                                                    <option value="45">45 days</option>
                                                                    <option value="60">60 days</option>
                                                                    <option value="90">90 days</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="" id="" className="pricing_standard_action">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1 day</option>
                                                                    <option value="2">2 days</option>
                                                                    <option value="3">3 days</option>
                                                                    <option value="5">5 days</option>
                                                                    <option value="7">7 days</option>
                                                                    <option value="10">10 days</option>
                                                                    <option value="20">20 days</option>
                                                                    <option value="30">30 days</option>
                                                                    <option value="45">45 days</option>
                                                                    <option value="60">60 days</option>
                                                                    <option value="90">90 days</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="" id="" className="pricing_standard_action">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1 day</option>
                                                                    <option value="2">2 days</option>
                                                                    <option value="3">3 days</option>
                                                                    <option value="5">5 days</option>
                                                                    <option value="7">7 days</option>
                                                                    <option value="10">10 days</option>
                                                                    <option value="20">20 days</option>
                                                                    <option value="30">30 days</option>
                                                                    <option value="45">45 days</option>
                                                                    <option value="60">60 days</option>
                                                                    <option value="90">90 days</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 120px;">
                                                                <span>
                                                                    Revision
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <select name="" id="" className="pricing_standard_action">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="5">5</option>
                                                                    <option value="7">7</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="" id="" className="pricing_standard_action">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="5">5</option>
                                                                    <option value="7">7</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="" id="" className="pricing_standard_action">
                                                                    <option value="">- Select -</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="5">5</option>
                                                                    <option value="7">7</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 120px;">
                                                                <span>
                                                                    Price
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                                    <div className="input-group-btn">
                                                                        <button type="button" className="btn btn-md">
                                                                            <span className="font-18">$</span>
                                                                        </button>
                                                                    </div>
                                                                    <input type="number" className="form-control pricing_standard_action">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                                    <div className="input-group-btn">
                                                                        <button type="button" className="btn btn-md">
                                                                            <span className="font-18">$</span>
                                                                        </button>
                                                                    </div>
                                                                    <input type="number" className="form-control pricing_standard_action">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                                    <div className="input-group-btn">
                                                                        <button type="button" className="btn btn-md">
                                                                            <span className="font-18">$</span>
                                                                        </button>
                                                                    </div>
                                                                    <input type="number" className="form-control pricing_standard_action">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>

                                        <div className="p-15 mt-15 bt-1-ddd floated-content">
                                            <div className="pull-right">
                                                <Link to="/account/deals/edit/1234/info" className="btn btn-transparent-black btn-sm icon-left">
                                                    <span className="fa fa-angle-left"></span>
                                                    Back
                                                </Link>
                                                <button type="submit" className="btn btn-blue btn-sm icon-right">
                                                    Proceed
                                                    <span className="fa fa-angle-right"></span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
