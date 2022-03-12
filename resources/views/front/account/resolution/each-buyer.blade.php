@extends('layouts.front.app')


@section('title')
    Order Resolution - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Order Resolution - Posla">
    <meta name="keywords" content="order resolution, user, Posla, Posla.com">
    <meta name="tags" content="order resolution account user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-orders{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
        .table-history tbody tr > td:nth-child(1) > div,
        .table-history tbody tr > td:nth-child(3) > div,
        .table-history tbody tr > td:nth-child(4) > div{
            min-width: 80px;
        }
        .table-history tbody tr > td:nth-child(2) > div{
            /* min-width: 300px; */
            /* max-width: 400px; */
        }
    </style>
@endsection


@section('js')
    <script>
        $(document).ready(function(){

            var allow_submit_form = false;


            function toggle_action_selections(){
                var resolve_order = $("input[name='resolve_order']:checked").val();
                // alert('a');
                if(resolve_order == "modify"){
                    $(".resolve-cancel").addClass("d-none");
                    $(".resolve-modify").removeClass("d-none");
                }
                else if(resolve_order == "cancel"){
                    $(".resolve-modify").addClass("d-none");
                    $(".resolve-cancel").removeClass("d-none");
                }
                else{
                    $(".resolve-modify").removeClass("d-none");
                    $(".resolve-cancel").removeClass("d-none");
                }

                $("input[name='resolve_order_why']").prop('checked', false);
                check_others_selections();
            }

            function check_others_selections(){
                $("input[type='radio']:checked").each(function(){
                    if ($(this).val().trim() == "others"){
                        $(".other-reason").removeClass("d-none");
                        $(".other-reason textarea").attr("required","required");
                    }
                    else{
                        // alert('a');
                        $(".other-reason").addClass("d-none");
                        $(".other-reason textarea").removeAttr("required","required");
                    }
                });
            }

            function check_selections(){
                check_others_selections();

                if($("input[name='resolve_order']").is(':checked')) {
                    if($("input[name='resolve_order_why']").is(':checked')) {
                        // alert("checked");
                        return true;
                    }
                    else{
                        toastr.error("Please select why you would like to take this action");
                        return false;
                    }
                }
                else{
                    toastr.error("Please select what you would like to do");
                    return false;
                }

                allow_submit_form = false;
            }

            $("input[type='radio']").change(function(){
                check_others_selections();
            });
            
            $("input[name='resolve_order']").change(function(){
                toggle_action_selections();
            });
            
            $(".btn-submit-force").click(function(){
                allow_submit_form = true;
                $(".form").submit();
            });

            $(".form").submit(function(e){
                if (allow_submit_form == false){
                    if (!check_selections()){
                        e.preventDefault();
                    }
                    else{
                        e.preventDefault();
                        // var resolve_order = $("input[name='resolve_order']:checked").val();
                        var resolve_order_why = $("input[name='resolve_order_why']:checked").val();

                        // alert(resolve_order_why);

                        if(resolve_order_why == "more_time"){
                            $(".modal-confirm-more-time").modal("show");
                        }
                        else if(resolve_order_why == "more_work"){
                            $(".modal-confirm-more-work").modal("show");
                        }
                        else{
                            $(".modal-confirm-ordinary").modal("show");
                        }
                    }
                }
                else{
                    // just submit
                }
            });
            
        });
    </script>
@endsection


@section('content')
    
    <div className="container">

        <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><Link to="/account">Account</Link></li>
                <li className="breadcrumb-item"><Link to="/account/orders">Orders</Link></li>
                <li className="breadcrumb-item"><Link to="/account/orders/123456789012">123456789012</Link></li>
                <li className="breadcrumb-item active" aria-current="page">Resolution</li>
            </ol>
        </div>

        
        <div className="section">
            <div className="section-title section-title-sm">
                Order Resolution - #123456789012
            </div>

            <div className="row">
                <div className="col-lg-3">

                    <div className="row sticky-top">
                        <div className="col-sm-6 col-lg-12">
                            <div className="floated-content p-2.5 mb-30 b-1-ddd">
                                <Link to="/user/abcde12345" className="pull-left mr-2.5 br-50" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-cover" />
                                </Link>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold d-block hover-underline mt-1.5">
                                        Anthony Clifford
                                    </Link>
                                    <div>
                                        <div className="rating-box rating-box-fff mt-2">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                            </div>
                                            <div className="ml-0">
                                                3.75 (233 reviews)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-6 col-lg-12">
                            <div className="floated-content p-2.5 mb-30 b-1-ddd">
                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="pull-left mr-2.5 d-block d-lg-none d-xl-block overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                </Link>
                                <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="mr-2.5 d-none d-lg-block d-xl-none overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                </Link>
                                <div className="overflow-hidden">
                                    <Link to="/deal/0d8aa710-c3b7-4d4d-b7f0-61da7b23af9f" className="font-bold hover-underline">
                                        I will design a beautiful logo for your business
                                    </Link>
                                    <div className="text-fade mt-1.5">
                                        <div>
                                            Category (Subcategory)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div className="col-lg-9">

                    <hr className="hr-orange d-block d-lg-none mt-0 hr-2">

                    <form method="post" action="" className="form b-1-ddd p-5-10">
                        <div className="mb-5">
                            <h5 className="font-13 font-bold text-center">
                                Welcome, here you can resolve any issues regarding your order.
                            </h5>
                        </div>
    
                        <div className="bt-1-ddd">
                            
                            <div className="note text-center">
                                PS: you can always message your seller first, to resolve issues, before reporting it to us.
                            </div>

                            <div className="font-bold mt-5">
                                What would you like to do?
                            </div>

                            <div className="resolve-main">
                                <label className="checkbox-inline cursor-pointer d-inline-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order" className="ml-2.5 pull-left" value="modify">
                                    <div className="overflow-hidden">
                                        I want to modify the order
                                    </div>
                                </label>
                                
                                <label className="checkbox-inline cursor-pointer d-inline-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order" className="ml-2.5 pull-left" value="cancel">
                                    <div className="overflow-hidden text-red">
                                        I want to cancel the order
                                    </div>
                                </label>
                            </div>



                            <div className="resolve-modify d-none">

                                <div className="font-bold mt-30">
                                    Can you tell us why?
                                </div>
                                
                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="more_time">
                                    <div className="overflow-hidden">
                                        I want to give the seller more time to complete the order
                                    </div>
                                </label>
                                
                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="more_work">
                                    <div className="overflow-hidden">
                                        I want to give additional work to this seller, which wasn’t in the scope of original order, so I need to give the seller more time and/or payment to complete the order.
                                    </div>
                                </label>
                                
                            </div>


                            <div className="resolve-cancel d-none">

                                <div className="font-bold mt-30">
                                    Can you tell us why?
                                </div>
                                
                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="not_responding">
                                    <div className="overflow-hidden">
                                        The seller is not responding
                                    </div>
                                </label>
                                
                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="agree_on_price">
                                    <div className="overflow-hidden">
                                        We couldn't agree on price
                                    </div>
                                </label>

                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="not_enough_info">
                                    <div className="overflow-hidden">
                                        I didn’t receive enough interaction from the seller
                                    </div>
                                </label>

                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="personal_reasons">
                                    <div className="overflow-hidden">
                                        I am no longer interested in this project due to personal / technical reasons
                                    </div>
                                </label>

                            </div>
                            
                            <div className="resolve-modify resolve-cancel d-none">
                                <label className="checkbox-inline cursor-pointer d-block b-1-ddd p-2.5 mt-2.5 mr-2.5">
                                    <input type="radio" name="resolve_order_why" className="ml-2.5 pull-left" value="others">
                                    <div className="overflow-hidden">
                                        Others
                                    </div>
                                    <div className="form-group ml-2.5 mt-2.5 other-reason d-none">
                                        <textarea name="" style="height: 85px;" className="resize-none form-control"></textarea>
                                    </div>
                                </label>
                            </div>


                            <div className="form-footer mt-30">
                                <button type="submit" className="btn btn-primary btn-md btn-block">
                                    Continue
                                </button>
                                <Link to="/account/orders/123456789012" className="btn btn-transparent-black btn-md btn-block">
                                    Cancel
                                </Link>
                            </div>


                            <div className="mt-5">
                                Need more assistance?
                                Please, contact our <Link to="/support" className="underline hover-orange">customer support</Link>
                            </div>


                            
                            <div className="modal modal-confirm-ordinary">
                                <div className="modal-dialog">
                                    <div className="modal-content">
                                        <div className="modal-header">
                                            <h4 className="modal-title">Order Resolution Confirmation</h4>
                                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div className="modal-body">
                                            <div className="p-2.5">
                                                Are you sure you want to continue?
                                            </div>
                                        </div>
                                        <div className="modal-footer">
                                            <button type="button" className="close btn btn-transparent-black btn-sm" data-dismiss="modal">
                                                <span className="fa fa-times"></span>
                                                Cancel
                                            </button>
                                            <button type="button" className="btn btn-danger btn-sm btn-submit-force">
                                                <span className="fa fa-paper-plane"></span>
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div className="modal modal-confirm-more-time">
                                <div className="modal-dialog">
                                    <div className="modal-content">
                                        <div className="modal-header">
                                            <h4 className="modal-title">Assign Time Extension - Order Resolution Confirmation</h4>
                                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div className="modal-body">
                                            <div className="p-2.5">
                                                
                                                <div className="form-group">
                                                    <label>Select how much extra time you want to give the seller:</label>
                                                    <select name="" id="" className="form-control modal-confirm-more-time-required mt-1.5">
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
                                                </div>

                                            </div>
                                        </div>
                                        <div className="modal-footer">
                                            <button type="button" className="close btn btn-transparent-black btn-sm" data-dismiss="modal">
                                                <span className="fa fa-times"></span>
                                                Cancel
                                            </button>
                                            <button type="button" className="btn btn-danger btn-sm btn-submit-force">
                                                <span className="fa fa-paper-plane"></span>
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div className="modal modal-confirm-more-work">
                                <div className="modal-dialog">
                                    <div className="modal-content">
                                        <div className="modal-header">
                                            <h4 className="modal-title">Assign Time Extension & Payment - Order Resolution Confirmation</h4>
                                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div className="modal-body">
                                            <div className="p-2.5">
                                                
                                                <div className="form-group">
                                                    <label>Select how much extra time you want to give the seller:</label>
                                                    <select name="" id="" className="form-control modal-confirm-more-work-required mt-1.5">
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
                                                </div>

                                                <div className="form-group">
                                                    <label>Extra amount to pay the seller:</label>
                                                    <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                        <div className="input-group-btn">
                                                            <button type="button" className="btn btn-md">
                                                                <span className="font-18">$</span>
                                                            </button>
                                                        </div>
                                                        <input type="number" name="" className="form-control modal-confirm-more-work-required">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div className="modal-footer">
                                            <button type="button" className="close btn btn-transparent-black btn-sm" data-dismiss="modal">
                                                <span className="fa fa-times"></span>
                                                Cancel
                                            </button>
                                            <button type="button" className="btn btn-danger btn-sm btn-submit-force">
                                                <span className="fa fa-paper-plane"></span>
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
