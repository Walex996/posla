@extends('layouts.front.app')


@section('title')
    Review - Order - Account - Firstname Lastname
@endsection


@section('og')
    <meta name="description" content="Review Order - Posla">
    <meta name="keywords" content="review orders, user, Posla, Posla.com">
    <meta name="tags" content="review orders account user posla posla.com">
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

            function countStars(ele, count){
                var ele = ele;
                var index = count;
                ele.next().text("("+count+")");
                ele.next().next().val(count);
            }

            function pluralize(string, qty){
                if (qty != 1){
                    return (string + 's');
                }
                else{
                    return (string);
                }
            }
            

            $(".product-rating-new-js > div:nth-child(1) > div").hover(function(){
                $(this).addClass("scale-1");
                $(this).prevAll().addClass("scale-1");
            }, function(){
                $(this).removeClass("scale-1");
                $(this).prevAll().removeClass("scale-1");
            });

            // $(".product-rating-new-js > div:nth-child(1)").mouseleave(function(){
                // $(this).children().children().removeClass("scale-1");
            // });

            $(".product-rating-new-js > div:nth-child(1) > div").click(function(){
                $(this).parent().parent().parent().removeClass('error');
                // alert($(this).index() + 1);
                $(this).addClass("selected");
                $(this).prevAll().addClass("selected");
                $(this).nextAll().removeClass("selected");
                var count = ($(this).index() + 1);
                countStars($(this).parent(), count);
                toastr.success("You rated " + $(this).parent().parent().prev().text().trim() + " " + count + " " + pluralize('star',count));
            });

            function checkRatingSelection(){
                var empty_value = 'n';
                $(".product-rating-new > div > div > div").removeClass('error');
                $(".hidden-rating-value").each(function(){
                    if ($(this).val().trim() == ''){
                        $(this).parent().parent().addClass('error');
                        empty_value = 'y';
                    }
                });
                if (empty_value == 'y'){
                    return false;
                }
                return true;
            }

            $(".form").submit(function(e){
                if (!checkRatingSelection()){
                    toastr.error("Please select all your reactions for this product review");
                    e.preventDefault();
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
                <li className="breadcrumb-item active" aria-current="page">Review</li>
            </ol>
        </div>

        <div className="section">
            <div className="section-title section-title-sm">
                Review Orders - #123456789012
            </div>

            <div className="row">
                <div className="col-lg-3">

                    <div className="row sticky-top">
                        <div className="col-sm-6 col-lg-12">
                            <div className="floated-content p-2.5 mb-30 b-1-ddd">
                                <Link to="/user/abcde12345" className="pull-left mr-2.5 br-50" style="width: 70px; height: 70px;">
                                    <img src={user} alt="Firstname lastname" className="dp-cover" />
                                </Link>
                                <div className="overflow-hidden">
                                    <Link to="/user/abcde12345" className="font-bold d-block hover-underline mt-1.5">
                                        Anthony Clifford
                                    </Link>
                                    <div>
                                        <div className="rating-box rating-box-fff mt-2">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {/*put product rating here (in percentage) */}
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

                    <form method="post" action="/account/order/123456789012" className="form b-1-ddd p-5-10">
                        <div className="mb-5">
                            <h5 className="font-13 font-bold text-center">
                                Please rate this deal based on his performance and project delivery.
                            </h5>
                        </div>
    
                        <div className="note d-non text-center mb-30">
                            Click the stars to rate this product.
                            <hr />
                            {/*&nbsp; &nbsp; || &nbsp; &nbsp;  */}
                            <span className="nowrap">
                                1 <span className="fa fa-star"></span> represents worst experience
                            </span>
                            &nbsp; &nbsp; || &nbsp; &nbsp; 
                            <span className="nowrap">
                                5 <span className="fa fa-star"></span> represents best experience
                            </span>
                        </div>
    
                        <div className="product-rating-new">
                            <div className="row">
                                
                                <div className="col-sm-6 col-xl-4">
                                    <div className="p-25 br-5 b-1-ddd">
                                        <div>
                                            Seller communication 1
                                        </div>
                                        <div className="product-rating-new-js">
                                            <div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" className="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div className="col-sm-6 col-xl-4">
                                    <div className="p-25 br-5 b-1-ddd">
                                        <div>
                                            Transparency
                                        </div>
                                        <div className="product-rating-new-js">
                                            <div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" className="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div className="col-sm-6 col-xl-4">
                                    <div className="p-25 br-5 b-1-ddd">
                                        <div>
                                            Speed of Delivery
                                        </div>
                                        <div className="product-rating-new-js">
                                            <div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" className="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div className="col-sm-6 col-xl-4">
                                    <div className="p-25 br-5 b-1-ddd">
                                        <div>
                                            Accuracy of Delivered Job
                                        </div>
                                        <div className="product-rating-new-js">
                                            <div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" className="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div className="col-sm-6 col-xl-4">
                                    <div className="p-25 br-5 b-1-ddd">
                                        <div>
                                            Something here
                                        </div>
                                        <div className="product-rating-new-js">
                                            <div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                                <div><span className="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" className="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
    
                        <div className="bt-2-eee pt-30 mt-5">
                            <div className="form-group">
                                <label for="address">Please enter your review for this project:</label>
                                <textarea name="description" rows="5" className="form-control" placeholder="Your review" style="height: 150px;" required></textarea>
                            </div>
                        </div>
    
                        <div className="mt-5">
                            <button type="submit" className="btn btn-blue btn-block">
                                Submit Review
                            </button>
                            <Link to="/account/orders/123456789012" className="btn btn-transparent-grey btn-block mt-1.5">
                                Cancel
                            </Link>
                        </div>
    
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
