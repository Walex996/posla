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
    </style>
@endsection


@section('js')
    <script>
        $(document).ready(function(){

            $(".add-question-btn").click(function(){
                var add_question_text = $(".add-question-text").val().trim();
                if (add_question_text != ''){
                    $(".deal-crud-requirement-all").append(`
                        <div className="deal-crud-requirement">
                            <div>
                                <div className="pull-right">
                                    <button type="button" className="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                        <span className="fa fa-times"></span>
                                    </button>
                                </div>
                                <div className="text-fade overflow-hidden">
                                    Free Text
                                </div>
                            </div>
                            <div>
                                `+add_question_text+`
                            </div>
                            <input type="hidden" name="">
                        </div>
                    `);
                    $(".add-question-text").val("");
                    $("#addQuestion").modal("hide");
                }
                else{
                    toastr.error("Please enter the question to ask the buyer");
                }
            });

            $(".deal-crud-requirement-all").on("click",".deal-crud-requirement-cancel",function(){
                $(this).parent().parent().parent(".deal-crud-requirement").remove();
            });

        });
    </script>
@endsection


@section('content')


    <div className="modal" id="addQuestion">
        <div className="modal-dialog">
            <div className="modal-content">
                <div className="modal-header">
                    <h4 className="modal-title">Add Question</h4>
                    <button type="button" className="close" data-dismiss="modal">&times;</button>
                </div>
                <div className="modal-body">
                    <div className="p-2.5">
                        
                        <div className="form-group">
                            <label>Question:</label>
                            <input type="text" className="form-control add-question-text" />
                        </div>

                        <div className="form-group">
                            <label>Response Type:</label>
                            <div className="form-group mt-1.5">
                                <label className="checkbox-inline b-1-ddd pt-1.5 pb-1.5 mt-2.5 mr-2.5 pr-2.5 d-inline">
                                    <input type="text">
                                    <input type="radio" checked className="ml-2.5">
                                    Free Text
                                </label>

                                {{-- for V1, let's do only free text --}}
                                <!--
                                <label className="checkbox-inline b-1-ddd pt-1.5 pb-1.5 mt-2.5 mr-2.5 pr-2.5 d-inline">
                                    <input type="radio" name="" className="ml-2.5">
                                    Dropdown Options
                                </label>
                                -->

                            </div>
                        </div>

                    </div>
                </div>
                <div className="modal-footer">
                    <button type="button" className="close btn btn-transparent-black btn-sm" data-dismiss="modal">
                        <span className="fa fa-times"></span>
                        Cancel
                    </button>
                    <button type="button" className="btn btn-blue btn-sm add-question-btn">
                        <span className="fa fa-plus"></span>
                        Add Question
                    </button>
                </div>
            </div>
        </div>
    </div>

    
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
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 4])
                        
                        <div className="tab-content">
                            <div className="tab-pane active">

                                <form action="/account/deals/edit/1234/publish">
                                    
                                    <div className="b-1-ddd">

                                        <div className="p-5">
                                            
                                            <div className="mx-auto mw-600 p-5 b-1-ddd">
                                                
                                                <div>
                                                    <div className="font-bold">
                                                        Get all the information you need from buyers, to get started.
                                                    </div>
                                                    <div className="text-fade">
                                                        Add questions to help buyers provide you with exactly what you need to start working on their orders.
                                                    </div>
                                                </div>

                                                <div className="mt-5 deal-crud-requirement-all">

                                                        <div className="deal-crud-requirement">
                                                            <div>
                                                                <div className="pull-right">
                                                                    <button type="button" className="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                                                        <span className="fa fa-times"></span>
                                                                    </button>
                                                                </div>
                                                                <div className="text-fade overflow-hidden">
                                                                    Free Text
                                                                </div>
                                                            </div>
                                                            <div>
                                                                What is your age range something?
                                                            </div>
                                                            <input type="hidden" name="">
                                                        </div>
                                                        
                                                        
                                                        <div className="deal-crud-requirement">
                                                            <div>
                                                                <div className="pull-right">
                                                                    <button type="button" className="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                                                        <span className="fa fa-times"></span>
                                                                    </button>
                                                                </div>
                                                                <div className="text-fade overflow-hidden">
                                                                    Free Text
                                                                </div>
                                                            </div>
                                                            <div>
                                                                What color variations would you like?
                                                            </div>
                                                            <input type="hidden" name="">
                                                        </div>

                                                </div>

                                                <div>
                                                    <button type="button" className="btn btn-transparent-black btn-sm icon-left" data-toggle="modal" data-target="#addQuestion">
                                                        <span className="fa fa-plus"></span>
                                                        Add Another Question
                                                    </button>
                                                </div>

                                            </div>

                                        </div>

                                        
                                        <div className="p-15 mt-15 bt-1-ddd floated-content">
                                            <div className="pull-right">
                                                <Link to="/account/deals/edit/1234/pricing" className="btn btn-transparent-black btn-sm icon-left">
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
