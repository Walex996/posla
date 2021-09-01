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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
                        <div class="deal-crud-requirement">
                            <div>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                                <div class="text-fade overflow-hidden">
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


    <div class="modal" id="addQuestion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Question</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="p-10">
                        
                        <div class="form-group">
                            <label>Question:</label>
                            <input type="text" class="form-control add-question-text" />
                        </div>

                        <div class="form-group">
                            <label>Response Type:</label>
                            <div class="form-group mt-5">
                                <label class="checkbox-inline b-1-ddd pt-5 pb-5 mt-10 mr-10 pr-10 d-inline">
                                    <input type="text">
                                    <input type="radio" checked class="ml-10">
                                    Free Text
                                </label>

                                {{-- for V1, let's do only free text --}}
                                <!--
                                <label class="checkbox-inline b-1-ddd pt-5 pb-5 mt-10 mr-10 pr-10 d-inline">
                                    <input type="radio" name="" class="ml-10">
                                    Dropdown Options
                                </label>
                                -->

                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close btn btn-transparent-black btn-sm" data-dismiss="modal">
                        <span class="fa fa-times"></span>
                        Cancel
                    </button>
                    <button type="button" class="btn btn-blue btn-sm add-question-btn">
                        <span class="fa fa-plus"></span>
                        Add Question
                    </button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')
                
            </div>
            
            <div class="col-12 col-md-8 col-lg-9">
                
                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item"><a href="/account/deals">Deals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Deal</li>
                    </ol>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        Edit Deal
                    </div>
                    <div>
                        
                        @include('front.common.nav-tabs-deal-mgmt', ['active' => 4])
                        
                        <div class="tab-content">
                            <div class="tab-pane active">

                                <form action="{{route('deal.edit.requirement.update', $deal->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="b-1-ddd">

                                        <div class="p-20">
                                            
                                            <div class="mx-auto mw-600 p-20 b-1-ddd">
                                                
                                                <div>
                                                    <div class="font-bold">
                                                        Get all the information you need from buyers, to get started.
                                                    </div>
                                                    <div class="text-fade">
                                                        Add questions to help buyers provide you with exactly what you need to start working on their orders.
                                                    </div>
                                                </div>

                                                <div class="mt-20 deal-crud-requirement-all">

                                                    {{-- start: foreach loop --}}
                                                    @forelse ($deal->requirements as $requirement)
                                                        <div class="deal-crud-requirement">
                                                            <div>
                                                                <div class="pull-right">
                                                                    <button type="button" class="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                                                        <span class="fa fa-times"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="text-fade overflow-hidden">
                                                                    Free Text
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <input name="questions[{{$requirement->id}}][question]" class="form-control  mt-10" type="text" value="{{$requirement->question}}" placeholder=" What is your age range?">
                                                                {{-- What is your printer configuration format? --}}
                                                            </div>
                                                            <input type="hidden" name="">
                                                        </div>
                                                        
                                                    @empty
                                                        <div class="deal-crud-requirement">
                                                            <div>
                                                                <div class="pull-right">
                                                                    <button type="button" class="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                                                        <span class="fa fa-times"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="text-fade overflow-hidden">
                                                                    Free Text
                                                                </div>
                                                            </div>
                                                            <div>
                                                                {{-- What is your age range something? --}}
                                                            </div>
                                                            <input type="hidden" name="">
                                                        </div>
                                                        
                                                    @endforelse
                                                        
                                                        
                                                        {{-- <div class="deal-crud-requirement">
                                                            <div>
                                                                <div class="pull-right">
                                                                    <button type="button" class="btn btn-danger btn-xs deal-crud-requirement-cancel">
                                                                        <span class="fa fa-times"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="text-fade overflow-hidden">
                                                                    Free Text
                                                                </div>
                                                            </div>
                                                            <div>
                                                                What color variations would you like?
                                                            </div>
                                                            <input type="hidden" name="">
                                                        </div> --}}
                                                    {{-- end: foreach loop --}}

                                                </div>

                                                <div>
                                                    <button type="button" class="btn btn-transparent-black btn-sm icon-left" data-toggle="modal" data-target="#addQuestion">
                                                        <span class="fa fa-plus"></span>
                                                        Add Another Question
                                                    </button>
                                                </div>

                                            </div>

                                        </div>

                                        
                                        <div class="p-15 mt-15 bt-1-ddd floated-content">
                                            <div class="pull-right">
                                                <a href="{{route('deal.edit.pricing', $deal->id)}}" class="btn btn-transparent-black btn-sm icon-left">
                                                    <span class="fa fa-angle-left"></span>
                                                    Back
                                                </a>
                                                <button type="submit" class="btn btn-blue btn-sm icon-right">
                                                    Proceed
                                                    <span class="fa fa-angle-right"></span>
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
