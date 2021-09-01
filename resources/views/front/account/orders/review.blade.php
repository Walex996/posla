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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
    
    <div class="container">

        <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/account">Account</a></li>
                <li class="breadcrumb-item"><a href="/account/orders">Orders</a></li>
                <li class="breadcrumb-item"><a href="/account/orders/123456789012">123456789012</a></li>
                <li class="breadcrumb-item active" aria-current="page">Review</li>
            </ol>
        </div>

        <div class="section">
            <div class="section-title section-title-sm">
                Review Orders - #123456789012
            </div>

            <div class="row">
                <div class="col-lg-3">

                    <div class="row sticky-top">
                        <div class="col-sm-6 col-lg-12">
                            <div class="floated-content p-10 mb-30 b-1-ddd">
                                <a href="/user/abcde12345" class="pull-left mr-10 br-50" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-cover" />
                                </a>
                                <div class="overflow-hidden">
                                    <a href="/user/abcde12345" class="font-bold d-block hover-underline mt-5">
                                        Anthony Clifford
                                    </a>
                                    <div>
                                        <div class="rating-box rating-box-fff mt-2">
                                            <div>
                                                <div></div>
                                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                            </div>
                                            <div class="ml-0">
                                                3.75 (233 reviews)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="floated-content p-10 mb-30 b-1-ddd">
                                <a href="/deal/1234" class="pull-left mr-10 d-block d-lg-none d-xl-block overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                </a>
                                <a href="/deal/1234" class="mr-10 d-none d-lg-block d-xl-none overflow-hidden" style="width: 70px; height: 70px;">
                                    <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" class="dp-contain" />
                                </a>
                                <div class="overflow-hidden">
                                    <a href="/deal/1234" class="font-bold hover-underline">
                                        I will design a beautiful logo for your business
                                    </a>
                                    <div class="text-fade mt-5">
                                        <div>
                                            Category (Subcategory)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div class="col-lg-9">

                    <hr class="hr-orange d-block d-lg-none mt-0 hr-2">

                    <form method="post" action="/account/order/123456789012" class="form b-1-ddd p-20-10">
                        <div class="mb-20">
                            <h5 class="font-13 font-bold text-center">
                                Please rate this deal based on his performance and project delivery.
                            </h5>
                        </div>
    
                        <div class="note d-non text-center mb-30">
                            Click the stars to rate this product.
                            <hr>
                            {{-- &nbsp; &nbsp; || &nbsp; &nbsp;  --}}
                            <span class="nowrap">
                                1 <span class="fa fa-star"></span> represents worst experience
                            </span>
                            &nbsp; &nbsp; || &nbsp; &nbsp; 
                            <span class="nowrap">
                                5 <span class="fa fa-star"></span> represents best experience
                            </span>
                        </div>
    
                        <div class="product-rating-new">
                            <div class="row">
                                
                                <div class="col-sm-6 col-xl-4">
                                    <div class="p-25 br-5 b-1-ddd">
                                        <div>
                                            Seller communication 1
                                        </div>
                                        <div class="product-rating-new-js">
                                            <div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" class="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-xl-4">
                                    <div class="p-25 br-5 b-1-ddd">
                                        <div>
                                            Transparency
                                        </div>
                                        <div class="product-rating-new-js">
                                            <div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" class="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-xl-4">
                                    <div class="p-25 br-5 b-1-ddd">
                                        <div>
                                            Speed of Delivery
                                        </div>
                                        <div class="product-rating-new-js">
                                            <div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" class="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-xl-4">
                                    <div class="p-25 br-5 b-1-ddd">
                                        <div>
                                            Accuracy of Delivered Job
                                        </div>
                                        <div class="product-rating-new-js">
                                            <div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" class="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-xl-4">
                                    <div class="p-25 br-5 b-1-ddd">
                                        <div>
                                            Something here
                                        </div>
                                        <div class="product-rating-new-js">
                                            <div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                                <div><span class="fa fa-star"></span></div>
                                            </div>
                                            <div>
                                                (0)
                                            </div>
                                            <input type="hidden" name="" class="hidden-rating-value">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
    
                        <div class="bt-2-eee pt-30 mt-20">
                            <div class="form-group">
                                <label for="address">Please enter your review for this project:</label>
                                <textarea name="description" rows="5" class="form-control" placeholder="Your review" style="height: 150px;" required></textarea>
                            </div>
                        </div>
    
                        <div class="mt-20">
                            <button type="submit" class="btn btn-blue btn-block">
                                Submit Review
                            </button>
                            <a href="/account/orders/123456789012" class="btn btn-transparent-grey btn-block mt-5">
                                Cancel
                            </a>
                        </div>
    
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
