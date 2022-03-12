@extends('layouts.front.app')


@section('title')
    Edit Profile
@endsection


@section('og')
    <meta name="description" content="Edit Profile - Posla">
    <meta name="keywords" content="edit, account, profile, user, Posla, Posla.com">
    <meta name="tags" content="edit account profile user posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .account-sidebar-profile{
            color: #FF940A !important;
            border-color: #FF940A !important;
        }
    </style>
@endsection


@section('js')
    <script>
        $(document).ready(function(){

            $(".item-labels-tags-submit").click(function(){
                var item_labels_tags_submit = $(".item-labels-tags-input").val().trim();
                if (item_labels_tags_submit != ''){
                    $(".item-labels-tags-all").append(`
                        <div className="item-labels-tags">
                            `+item_labels_tags_submit+`
                            <input type="hidden" name="skillset[]" readonly value="`+item_labels_tags_submit+`">
                            <span className="fa fa-times item-labels-tags-close"></span>
                        </div>
                    `);
                    $(".item-labels-tags-input").val("");
                }
                else{
                    toastr.error("Please enter your tag");
                }
            });

            $(".item-labels-tags-all").on("click",".item-labels-tags-close",function(){
                $(this).parent(".item-labels-tags").remove();
            });

            $(".language-row-submit").click(function(){
                var language_row_input = $(".language-row-input").val().trim();
                var language_row_select = $(".language-row-select option:selected").text().trim();
                if (language_row_input != ''){
                    if (language_row_select != '- Select -'){
                        $(".language-row-all").append(`
                            <tr>
                                <td>
                                    <div>
                                        `+language_row_input+`
                                    </div>
                                </td>
                                <td>
                                    <div className="text-fade">
                                        `+language_row_select+`
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span className="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                    </div>
                                </td>
                            </tr>
                        `);
                        $(".language-row-input").val("");
                        $(".language-row-select").val("").change();
                    }
                    else{
                        toastr.error("Please select your fluency for " + language_row_input);
                    }
                }
                else{
                    toastr.error("Please enter the language");
                }
            });

            $(".language-row-all").on("click",".language-row-close",function(){
                $(this).parent().parent().parent("tr").remove();
            });

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
                        <li className="breadcrumb-item"><Link to="/account/profile">Profile</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </div>
                <div className="section">
                    <div className="section-title section-title-sm">
                        Edit Profile
                        {{-- <Link to="/account/profile/edit" className="btn btn-orange btn-sm pull-right hover-bg-orange">Save Profile</Link> --}}
                    </div>
                    <div>

                        <form action="/" method="POST" enctype="multipart/form-data">
                            
                            <div className="row">
                                <div className="col-sm-6 mb-30">

                                    <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Basic Information
                                    </div>
                                    <div className="b-1-ddd bt-none p-5">

                                        <div className="form-group">
                                            <label for="name" className="control-label">
                                                Full name:
                                            </label>
                                            <input type="text" name="name" className="form-control" placeholder="" value="">
                                        </div>

                                        <div className="form-group">
                                            <label for="username" className="control-label">
                                                Username:
                                            </label>
                                            <input type="text" name="username" className="form-control" disabled readonly value="">
                                        </div>

                                        <div className="form-group">
                                            <label for="email" className="control-label">
                                                Email Address:
                                            </label>
                                            <input type="email" name="email" className="form-control" disabled readonly value="">
                                        </div>

                                        <div className="form-group">
                                            <label for="phone" className="control-label">
                                                Phone Number:
                                            </label>
                                            <input type="tel" name="phone" className="form-control" value="">
                                        </div>

                                        <div className="form-group">
                                            <label for="dob" className="control-label">
                                                Date of Birth:
                                            </label>
                                            <input type="date" name="dob" className="form-control" value="">
                                        </div>

                                        <div className="form-group">
                                            <label for="gender" className="control-label">
                                                Gender:
                                            </label>
                                            <select name="gender" id="gender">
                                                <option value="">- Select -</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>

                                        <div className="form-group">
                                            <label for="country" className="control-label">
                                                Country:
                                            </label>
                                            <select name="country" id="country">
                                                <option value="">- Select -</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>
                                <div className="col-sm-6 mb-30">

                                    <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Profile Picture
                                    </div>
                                    <div className="b-1-ddd bt-none p-5">

                                                                                
                                        <div className="note p-2.5">
                                            Please upload a professionally-acceptable photo
                                        </div>
                                       

                                        <div className="form-group mt-2.5">
                                            <label className="control-label">
                                                Upload Picture:
                                            </label>
                                            <input type="file" name="profile" className="form-control">
                                        </div>

                                        {{-- if profile picture exist --}}
                                            <div className="">
                                                <div className="pull-left mr-2.5">
                                                    <label className="control-label mt-15">
                                                        Current Photo:
                                                    </label>
                                                </div>
                                                <div className="overflow-hidden">
                                                    <div className="">
                                                        <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; background: #000;">
                                                            <img src="{{asset('img/app/bgs/posla-admin.jpg')}}" alt="Firstname lastname" className="dp-cover" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- end if --}}

                                    </div>


                                    <div className="p-2.5 pl-15 pr-15 mt-30 font-bold bg-blue text-fff">
                                        Description
                                    </div>
                                    <div className="b-1-ddd bt-none p-5">
                                        
                                        <div className="form-group">
                                            <label for="short_description" className="control-label">
                                                Short Description:
                                            </label>
                                            <input type="text" name="short_description" id="short_description" className="form-control" value="">
                                        </div>

                                        <div className="form-group">
                                            <label for="long_description" className="control-label">
                                                Full Description:
                                            </label>
                                            <textarea name="long_description" id="long_description" className="form-control resize-none" style="height: 200px;"></textarea>
                                        </div>

                                    </div>

                                </div>
                                <div className="col-sm-6 mb-30">

                                    <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Skillset
                                    </div>
                                    <div className="b-1-ddd bt-none p-5">
                                        
                                        <div className="input-group input-group-attach-right">
                                            <input type="text" className="form-control item-labels-tags-input" placeholder="Enter tags...">
                                            <div className="input-group-btn">
                                                <button type="button" className="btn btn-md btn-dark item-labels-tags-submit">
                                                    <span className="fa fa-plus"></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div className="item-labels item-labels-md item-labels-tags-all mt-1.5">
                                            <div className="item-labels-tags">
                                                Graphics Design
                                                <input type="hidden" name="skillset[]" readonly value="">
                                                <span className="fa fa-times item-labels-tags-close"></span>
                                            </div>
                                            <div className="item-labels-tags">
                                                iOS App Designer
                                                <input type="hidden" name="skillset[]" readonly value="Mobile App">
                                                <span className="fa fa-times item-labels-tags-close"></span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div className="col-sm-6 mb-30">

                                    <div className="p-2.5 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Languages
                                    </div>
                                    <div className="b-1-ddd bt-none p-5">
                                        
                                        <div className="input-group input-group-attach-right">
                                            <input type="text" className="form-control language-row-input" placeholder="Enter language...">
                                            <select name="language" id="language" className="form-control language-row-select" style="height: 35px !important;">
                                                <option value="">- Select -</option>
                                                <option value="fluent">Fluent</option>
                                                <option value="average">Average</option>
                                                <option value="slighty">Slightly</option>
                                            </select>
                                            <div className="input-group-btn">
                                                <button type="button" className="btn btn-md btn-dark language-row-submit">
                                                    <span className="fa fa-plus"></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div className="table-responsive b-1-ddd mt-2.5">
                                            <table className="table table-tr-lines">
                                                <tbody className="language-row-all">
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                English
                                                            </div>
                                                             <input type="hidden" name="" value="average">
                                                        </td>
                                                        <td>
                                                            <div className="text-fade">
                                                                Fluent
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <span className="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                French
                                                            </div>
                                                             <input type="hidden" name="" value="average">
                                                        </td>
                                                        <td>
                                                            <div className="text-fade">
                                                                Average
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <span className="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                Spanish
                                                            </div>
                                                             <input type="hidden" name="" value="slightly">
                                                        </td>
                                                        <td>
                                                            <div className="text-fade">
                                                                Average
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <span className="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div className="pt-5 bt-1-ddd">

                                <div className="floated-content">
                                    <button type="submit" className="btn btn-blue btn-sm pull-right ml-2.5">
                                        Save Changes
                                    </button>
                                    <Link to="/account/profile" className="btn btn-transparent-black btn-sm pull-right">
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
