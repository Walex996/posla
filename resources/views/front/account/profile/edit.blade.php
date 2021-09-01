@extends('layouts.front.app')


@section('title')
    Edit Profile - {{$user->name}}
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
    <link href="{{ asset('/css/misc.css') }}" rel="stylesheet">
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
                        <div class="item-labels-tags">
                            `+item_labels_tags_submit+`
                            <input type="hidden" name="skillset[]" readonly value="`+item_labels_tags_submit+`">
                            <span class="fa fa-times item-labels-tags-close"></span>
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
                                    <div class="text-fade">
                                        `+language_row_select+`
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="fa fa-times icon-red cursor-pointer language-row-close"></span>
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
    
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-lg-3">

                @include('front.common.account-sidebar')

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                <div aria-label="breadcrumb" class="details-page-breadcrumb mb-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/account">Account</a></li>
                        <li class="breadcrumb-item"><a href="/account/profile">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </div>
                <div class="section">
                    <div class="section-title section-title-sm">
                        Edit Profile
                        {{-- <a href="/account/profile/edit" class="btn btn-orange btn-sm pull-right hover-bg-orange">Save Profile</a> --}}
                    </div>
                    <div>

                        <form action="{{route('account.profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6 mb-30">

                                    <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Basic Information
                                    </div>
                                    <div class="b-1-ddd bt-none p-20">

                                        <div class="form-group">
                                            <label for="name" class="control-label">
                                                Full name:
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="" value="{{$user->name}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="control-label">
                                                Username:
                                            </label>
                                            <input type="text" name="username" class="form-control" disabled readonly value="{{$user->username}}"">
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="control-label">
                                                Email Address:
                                            </label>
                                            <input type="email" name="email" class="form-control" disabled readonly value="{{$user->email}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class="control-label">
                                                Phone Number:
                                            </label>
                                            <input type="tel" name="phone" class="form-control" value="{{$user->phone}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="dob" class="control-label">
                                                Date of Birth:
                                            </label>
                                            <input type="date" name="dob" class="form-control" value="{{$user->dob ? $user->dob->format('Y-m-d') : ''}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="gender" class="control-label">
                                                Gender:
                                            </label>
                                            <select name="gender" id="gender">
                                                <option value="">- Select -</option>
                                                <option value="male" @if ($user->gender == 'male') selected @endif>Male</option>
                                                <option value="female" @if ($user->gender == 'female' ) selected @endif>Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="country" class="control-label">
                                                Country:
                                            </label>
                                            <select name="country" id="country">
                                                <option value="">- Select -</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-sm-6 mb-30">

                                    <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Profile Picture
                                    </div>
                                    <div class="b-1-ddd bt-none p-20">

                                                                                
                                        <div class="note p-10">
                                            Please upload a professionally-acceptable photo
                                        </div>
                                       

                                        <div class="form-group mt-10">
                                            <label class="control-label">
                                                Upload Picture:
                                            </label>
                                            <input type="file" name="profile" class="form-control">
                                        </div>

                                        {{-- if profile picture exist --}}
                                        @if($user->getFirstMediaUrl('profile'))
                                            <div class="">
                                                <div class="pull-left mr-10">
                                                    <label class="control-label mt-15">
                                                        Current Photo:
                                                    </label>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <div class="">
                                                        <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; background: #000;">
                                                            <img src="{{asset($user->getFirstMediaUrl('profile'))}}" alt="Firstname lastname" class="dp-cover" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- end if --}}

                                    </div>


                                    <div class="p-10 pl-15 pr-15 mt-30 font-bold bg-blue text-fff">
                                        Description
                                    </div>
                                    <div class="b-1-ddd bt-none p-20">
                                        
                                        <div class="form-group">
                                            <label for="short_description" class="control-label">
                                                Short Description:
                                            </label>
                                            <input type="text" name="short_description" id="short_description" class="form-control" value="{{$user->short_description}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="long_description" class="control-label">
                                                Full Description:
                                            </label>
                                            <textarea name="long_description" id="long_description" class="form-control resize-none" style="height: 200px;">{{$user->long_description}}</textarea>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-sm-6 mb-30">

                                    <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Skillset
                                    </div>
                                    <div class="b-1-ddd bt-none p-20">
                                        
                                        <div class="input-group input-group-attach-right">
                                            <input type="text" class="form-control item-labels-tags-input" placeholder="Enter tags...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-md btn-dark item-labels-tags-submit">
                                                    <span class="fa fa-plus"></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="item-labels item-labels-md item-labels-tags-all mt-5">
                                            @foreach ($user->skillset as $skill)
                                                <div class="item-labels-tags">
                                                    {{$skill}}
                                                    <input type="hidden" name="skillset[]" readonly value="{{$skill}}">
                                                    <span class="fa fa-times item-labels-tags-close"></span>
                                                </div> 
                                            @endforeach
                                            {{-- <div class="item-labels-tags">
                                                iOS App Designer
                                                <input type="hidden" name="skillset[]" readonly value="Mobile App">
                                                <span class="fa fa-times item-labels-tags-close"></span>
                                            </div> --}}
                                        </div>

                                    </div>

                                </div>
                                <div class="col-sm-6 mb-30">

                                    <div class="p-10 pl-15 pr-15 font-bold bg-blue text-fff">
                                        Languages
                                    </div>
                                    <div class="b-1-ddd bt-none p-20">
                                        
                                        <div class="input-group input-group-attach-right">
                                            <input type="text" class="form-control language-row-input" placeholder="Enter language...">
                                            <select name="language" id="language" class="form-control language-row-select" style="height: 35px !important;">
                                                <option value="">- Select -</option>
                                                <option value="fluent">Fluent</option>
                                                <option value="average">Average</option>
                                                <option value="slighty">Slightly</option>
                                            </select>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-md btn-dark language-row-submit">
                                                    <span class="fa fa-plus"></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="table-responsive b-1-ddd mt-10">
                                            <table class="table table-tr-lines">
                                                <tbody class="language-row-all">
                                                    @foreach ($user->languages as $language => $level)
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <input type="hidden" name="languages[{{$language}}]" value="{{$level}}">
                                                                    {{$language}}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-fade">
                                                                    {{$level}}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                French
                                                            </div>
                                                             <input type="hidden" name="languages[French]" value="average">
                                                        </td>
                                                        <td>
                                                            <div class="text-fade">
                                                                Average
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <span class="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                Spanish
                                                            </div>
                                                             <input type="hidden" name="languages[Spanish]" value="slightly">
                                                        </td>
                                                        <td>
                                                            <div class="text-fade">
                                                                Average
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <span class="fa fa-times icon-red cursor-pointer language-row-close"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="pt-20 bt-1-ddd">

                                <div class="floated-content">
                                    <button type="submit" class="btn btn-blue btn-sm pull-right ml-10">
                                        Save Changes
                                    </button>
                                    <a href="/account/profile" class="btn btn-transparent-black btn-sm pull-right">
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
