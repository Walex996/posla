@extends('layouts.front.app')


@section('title')
    Project title
@endsection


@section('og')
    <meta name="description" content="Project title - Posla">
    <meta name="keywords" content="Project title, Posla, Posla.com">
    <meta name="tags" content="project_title project_tags_exploded posla posla.com">
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection


@section('css')
    <link to="{{ asset('/css/misc.css') }}" rel="stylesheet">
    <style>
        .status-open{
            color: #FF940A;
        }
        .status-closed{
            color: #f66;
        }
    </style>
@endsection


@section('content')
    
    @include('front.common.share-modal')

    <div className="container">
        
        <div className="section d-none d-sm-block p-1.5">
            <div className="row">
                <div className="col-lg-6">
                    <ul className="ul-inline details-page-top">
                        <li>
                            <Link to="#overview">
                                Overview
                            </Link>
                        </li>
                        <li>
                            <Link to="#description">
                                Description
                            </Link>
                        </li>
                        <li>
                            <Link to="#about">
                                About This Buyer
                            </Link>
                        </li>
                        <li>
                            <Link to="#proposals">
                                Proposals
                            </Link>
                        </li>
                    </ul>
                </div>
                <div className="col-lg-6 d-none d-lg-block">
                    <form action="">
                        <ul className="ul-inline pull-right mt-1">
                            <li>
                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Favourite" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-heart" style="position: relative; top: 1px;"></span>
                                </button>
                            </li>
                            <li>
                                <Link className="p-0" title="Share Project" data-widget="collapse" data-toggle="tooltip">
                                    <button type="button" className="btn btn-transparent-black btn-xs hover-bg-orange" data-toggle="modal" data-target="#shareModal">
                                        <span className="fas fa-share-alt"></span>
                                    </button>
                                </Link>
                            </li>
                            <li>
                                <Link data-toggle="modal" data-target="#flag" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Report Project" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-flag"></span>
                                </Link>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>

        <div className="row">
            
            <div className="col-md-8">

                <div aria-label="breadcrumb" className="details-page-breadcrumb mb-10">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/category/projects/category1">Category</Link></li>
                        <li className="breadcrumb-item"><Link to="/category/projects/category1">SubCategory</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">12345678</li>
                    </ol>
                </div>

                <div id="overview">
                    <div>
                        <h4 className="font-bold">
                            I Need An Accountant For My New Logistics Busine
                        </h4>
                    </div>
                    <div className="details-title-sub floated-content mt-2.5">
                        <div className="pull-left">
                            <Link to="/user/abcde12345" className="user-img-text">
                                <div>
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                </div>
                                <div className="hover-underline">
                                    Olawale Lawal
                                </div>
                            </Link>
                        </div>
                        <div className="pull-left">|</div>
                        <div className="pull-left">
                            5 months ago
                        </div>
                    </div>
                </div>

                <div className="section mt-2.5">
                    <div className="row">
                        <div className="col-6 col-sm-3 col-md-6 col-lg-3 text-center br-2-ddd pt-2.5 pb-10">
                            <div className="font-20 font-bold">
                                $1500
                            </div>
                            <div className="text-fade">
                                Budget
                            </div>
                        </div>
                        <div className="col-6 col-sm-3 col-md-6 col-lg-3 text-center br-2-ddd pt-2.5 pb-10 b-none b-md-none">
                            <div className="font-20 font-bold">
                                23
                            </div>
                            <div className="text-fade">
                                Proposals
                            </div>
                        </div>
                        <div className="col-6 col-sm-3 col-md-6 col-lg-3 text-center br-2-ddd pt-2.5 pb-10">
                            <div className="font-20 font-bold">
                                41
                            </div>
                            <div className="text-fade">
                                views
                            </div>
                        </div>
                        <div className="col-6 col-sm-3 col-md-6 col-lg-3 text-center pt-2.5 pb-10">
                            {{-- classes => status-open, status-closed --}}
                            <div className="font-20 font-bold status-open">
                                Open
                            </div>
                            <div className="text-fade">
                                Status
                            </div>
                        </div>
                    </div>
                </div>

                <div className="section" id="description">
                    <div className="section-title">
                        Description
                    </div>
                    <div className="line-height-25">
                        Application Type: iOS (Native) <br />
                        Brief: App Based Security and Community management System. <br />
                        Some Similar Apps/Websites: Mygate<br />
                        Features: 3 Modules, Guard Resident and tenant Admin/Super Admin  <br />
                        Designs: Need to be developed<br />
                        APIs Status: Need to be developed<br />
                        Backend Technology (APIs): APIs need to be developed in NodeJS<br />
                        Send a Proposal if you can do it and I will send a detailed Requirement Documents for further discussion if I shortlist your Proposal.
                    </div>
                    <div className="mt-2.5">
                        <div className="pt-2.5 bt-1-ddd item-labels item-labels-tags-all d-block">
                            <div className="item-labels-prefix">
                                Tags & Skills:
                            </div>
                            <div className="item-labels-tags">
                                tag1
                            </div>
                            <div className="item-labels-tags">
                                tag1
                            </div>
                            <div className="item-labels-tags">
                                tag1
                            </div>
                            <div className="item-labels-tags">
                                tag1
                            </div>
                            <div className="item-labels-tags">
                                tag1
                            </div>
                            <div className="item-labels-tags">
                                tag1
                            </div>
                        </div>
                    </div>
                </div>

                <div className="d-block d-md-none">
                    <div className="section">
                        <div>
                            <button type="button" className="btn btn-blue btn-block" data-toggle="modal" data-target="#send_proposal">
                                Send Proposal
                            </button>
                        </div>
                        <div className="mt-15 mb-10">
                            Posted By:
                        </div>
                        <div className="text-left-right text-left-right-60-40">
                            <div className="bg-eee">
                                <div>
                                    <span className="fa fa-user"></span>
                                    <div className="overflow-hidden">
                                        Name:
                                    </div>
                                </div>
                                <div>
                                    Firstname lastname
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span className="fa fa-flag"></span>
                                    <div className="overflow-hidden">
                                        Country:
                                    </div>
                                </div>
                                <div>
                                    Nigeria
                                </div>
                            </div>
                            <div className="bg-eee">
                                <div>
                                    <span className="fa fa-file"></span>
                                    <div className="overflow-hidden">
                                        Projects Posted:
                                    </div>
                                </div>
                                <div>
                                    10
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span className="fa fa-file-alt"></span>
                                    <div className="overflow-hidden">
                                        Projects Issuance:
                                    </div>
                                </div>
                                <div>
                                    90%
                                </div>
                            </div>
                            <div className="bg-eee">
                                <div>
                                    <span className="fa fa-file-alt"></span>
                                    <div className="overflow-hidden">
                                        Projects Completed:
                                    </div>
                                </div>
                                <div>
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="section">
                        <div className="section-title">
                            Share Link
                        </div>
                        <div>
                            <div className="">
                                This is a private project. Copy the link below to share.
                            </div>
                            <div>
                                <div className="copy-link mt-1.5">
                                    <div className="input-group">
                                        <input type="search" name="q" className="form-control" onfocus="highlightShareLink('direct-share-link-1')" id="direct-share-link-1" value="$share_link" readonly />
                                        <div className="input-group-btn">
                                            <button type="submit" className="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-1')" style="border-radius: 0 !important; height: 35px;">
                                                <span className="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div className="text-center mt-2.5">
                                    <button type="button" className="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span className="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="section" id="about">
                    <div className="section-title">
                        About this Buyer
                    </div>
                    <div>
                        <Link to="/user/abcde12345" className="user-img-text user-img-text-md">
                            <div>
                                <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                            </div>
                            <div className="pt-1.5 underline-none">
                                Firstname lastname
                                <div className="pt-1">
                                    <button className="btn btn-transparent-black btn-xs hover-bg-black">
                                        View buyer's profile
                                    </button>
                                </div>
                            </div>
                        </Link>
                    </div>
                    <div className="bt-1-ddd pt-2.5 mt-2.5">
                        <div className="row">
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Country
                                </div>
                                <div>
                                    Ireland
                                </div>
                            </div>
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Gender
                                </div>
                                <div>
                                    Female
                                </div>
                            </div>
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Member Since
                                </div>
                                <div>
                                    {{$project->owner->created_at}}
                                </div>
                            </div>
                            <div className="col-sm-6 mb-5">
                                <div className="text-fade">
                                    Project Issuance Rate
                                </div>
                                <div className="text-orange">
                                    90%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="line-height-20 bt-1-ddd pt-2.5">
                        Hi, I am a project manager working for a startup here in Ireland. I also help clients (individuals and businesses) to manage their online platforms (be it Web, Mobile, or Desktop Applications). I can manage projects both at development stage and maintenance stage.
                    </div>
                </div>

                <div className="section mb-0" id="proposals">
                    <div className="section-title">
                        Proposals
                    </div>
                    <div>
                        <ul className="nav nav-tabs posla-tabs posla-tabs-4">
                            <li className="nav-item">
                                <Link className="nav-link active" data-toggle="tab" to="#proposals_all">
                                    <div className="font-20 font-bold">
                                        17
                                    </div>
                                    <div className="text-fade line-height-mini mb-1.5">
                                        Received Proposals
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" data-toggle="tab" to="#proposals_active">
                                    <div className="font-20 font-bold">
                                        10
                                    </div>
                                    <div className="text-fade line-height-mini mb-1.5">
                                        Active Proposals
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" data-toggle="tab" to="#proposals_shortlisted">
                                    <div className="font-20 font-bold">
                                        3
                                    </div>
                                    <div className="text-fade line-height-mini mb-1.5">
                                        Shortlisted Proposals
                                    </div>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" data-toggle="tab" to="#proposals_rejected">
                                    <div className="font-20 font-bold">
                                        7
                                    </div>
                                    <div className="text-fade line-height-mini mb-1.5">
                                        Rejected Proposals
                                    </div>
                                </Link>
                            </li>
                        </ul>


                        <form className="modal" id="view_proposal_1">
                            <div className="modal-dialog">
                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h4 className="modal-title">John Clifford's Proposal</h4>
                                        <button type="button" className="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div className="modal-body">
                                        <div className="p-2.5">
                                            
                                            <div className="">
                                                <div className="text-fade">
                                                    Proposal:
                                                </div>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                </div>
                                                {{-- if attachment exists --}}
                                                <div className="floated-content mt-2.5">
                                                    <Link to="" className="media">
                                                        <div className="text-center">
                                                            {{-- if it's an image, display it directly --}}
                                                            <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                                        </div>
                                                        <div>
                                                            <div className="pull-right ml-1.5">
                                                                <span className="text-fade text-small">(33kb)</span>
                                                            </div>
                                                            <div className="overflow-hidden ellipsis">
                                                                <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                                <span className="">12412412412.jpg</span>
                                                            </div>
                                                        </div>
                                                    </Link>
                                                    <Link to="" className="media">
                                                        <div className="text-center">
                                                            {{-- if it's an image, display it directly --}}
                                                            <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                                        </div>
                                                        <div>
                                                            <div className="pull-right ml-1.5">
                                                                <span className="text-fade text-small">(33kb)</span>
                                                            </div>
                                                            <div className="overflow-hidden ellipsis">
                                                                <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                                <span className="">12412412412.jpg</span>
                                                            </div>
                                                        </div>
                                                    </Link>
                                                </div>
                                                {{-- endif attachment exists --}}
                                            </div>

                                            <div className="mt-5">
                                                <div className="text-fade">
                                                    Proposed Budget (Total):
                                                </div>
                                                <div>
                                                    $500
                                                </div>
                                            </div>

                                            <div className="mt-5">
                                                <div className="text-fade">
                                                    Minimum Deposit:
                                                </div>
                                                <div>
                                                    $100
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div className="modal-footer">
                                        <button type="button" className="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                            <span className="fa fa-times"></span>
                                            Close
                                        </button>
                                        <button type="submit" className="btn btn-blue btn-sm add-question-btn icon-left">
                                            <span className="fa fa-plus"></span>
                                            Shortlist Proposal
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                          
                        <form action="/cart" className="modal" id="view_proposal_2">
                            <div className="modal-dialog">
                                <div className="modal-content">
                                    <div className="modal-header">
                                        <h4 className="modal-title">John Clifford's Proposal</h4>
                                        <button type="button" className="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div className="modal-body">
                                        <div className="p-2.5">
                                            
                                            <div className="">
                                                <div className="text-fade">
                                                    Proposal:
                                                </div>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                </div>
                                                {{-- if attachment exists --}}
                                                <div className="floated-content mt-2.5">
                                                    <Link to="" className="media">
                                                        <div className="text-center">
                                                            {{-- if it's an image, display it directly --}}
                                                            <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                                        </div>
                                                        <div>
                                                            <div className="pull-right ml-1.5">
                                                                <span className="text-fade text-small">(33kb)</span>
                                                            </div>
                                                            <div className="overflow-hidden ellipsis">
                                                                <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                                <span className="">12412412412.jpg</span>
                                                            </div>
                                                        </div>
                                                    </Link>
                                                    <Link to="" className="media">
                                                        <div className="text-center">
                                                            {{-- if it's an image, display it directly --}}
                                                            <img src="{{asset('img/app/samples/boxes.jpg')}}" alt="" className="dp-contain" />
                                                        </div>
                                                        <div>
                                                            <div className="pull-right ml-1.5">
                                                                <span className="text-fade text-small">(33kb)</span>
                                                            </div>
                                                            <div className="overflow-hidden ellipsis">
                                                                <span className="fa fa-arrow-alt-circle-down icon-blue"></span>
                                                                <span className="">12412412412.jpg</span>
                                                            </div>
                                                        </div>
                                                    </Link>
                                                </div>
                                                {{-- endif attachment exists --}}
                                            </div>

                                            <div className="mt-5">
                                                <div className="text-fade">
                                                    Proposed Budget (Total):
                                                </div>
                                                <div>
                                                    $500
                                                </div>
                                            </div>

                                            <div className="mt-5">
                                                <div className="text-fade">
                                                    Minimum Deposit:
                                                </div>
                                                <div>
                                                    $100
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div className="modal-footer">
                                        <button type="button" className="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                            <span className="fa fa-times"></span>
                                            Close
                                        </button>
                                        <button type="submit" className="btn btn-orange btn-sm add-question-btn icon-left">
                                            <span className="fas fa-cart-plus"></span>
                                            Assign Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                          
                        <div className="tab-content">
                            <div className="tab-pane container active p-0" id="proposals_all">

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-red" title="Remove shortlist" data-widget="collapse" data-toggle="tooltip">Shortlisted</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-red" title="Remove shortlist" data-widget="collapse" data-toggle="tooltip">Shortlisted</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-red" title="Remove shortlist" data-widget="collapse" data-toggle="tooltip">Shortlisted</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div className="tab-pane container p-0 fade" id="proposals_active">
                                
                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div className="tab-pane container p-0 fade" id="proposals_shortlisted">

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_2">View Proposal</button>
                                                <button type="button" className="btn btn-orange btn-xs" data-toggle="modal" data-target="#view_proposal_2">Assign Project</button>
                                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-red" title="Remove shortlist" data-widget="collapse" data-toggle="tooltip">Shortlisted</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_2">View Proposal</button>
                                                <button type="button" className="btn btn-orange btn-xs" data-toggle="modal" data-target="#view_proposal_2">Assign Project</button>
                                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-red" title="Remove shortlist" data-widget="collapse" data-toggle="tooltip">Shortlisted</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="button" className="btn btn-orange btn-xs" data-toggle="modal" data-target="#view_proposal_2">Assign Project</button>
                                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-red" title="Remove shortlist" data-widget="collapse" data-toggle="tooltip">Shortlisted</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div className="tab-pane container p-0 fade" id="proposals_rejected">

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="">
                                    <div className="user-img-text user-img-text-md bb-1-ddd proposal-list-each">
                                        <Link to="" className="pull-left">
                                            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-contain" />
                                        </Link>
                                        <div className="pull-right d-none d-sm-block d-md-none d-lg-block ml-15">
                                            <div>
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="text-fade">
                                                12 projects received
                                            </div>
                                            <div className="text-fade">
                                                9 projects completed
                                            </div>
                                        </div>
                                        <div className="overflow-hidden">
                                            <Link to="" className="font-bold hover-underline">
                                                John Clifford
                                            </Link>
                                            <div className="text-fade">
                                                <span className="fa fa-flag text-fade"></span>
                                                Nigeria
                                                &nbsp; | &nbsp;
                                                <span className="fa fa-clock text-fade"></span>
                                                2 hours ago
                                            </div>
                                            <div className="text-fade">
                                                Swift, Objective C, Python, Machine Learning, AI
                                            </div>
                                            <div className="d-block d-sm-none d-md-block d-lg-none">
                                                <div className="rating-box">
                                                    <div>
                                                        <div></div>
                                                        <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                                    </div>
                                                    <div>
                                                        {{-- <span className="fa fa-star"></span> --}}
                                                        3.75
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="mt-2">
                                                <button type="button" className="btn btn-blue btn-xs" data-toggle="modal" data-target="#view_proposal_1">View Proposal</button>
                                                <button type="submit" className="btn btn-orange btn-xs">Shortlist</button>
                                                <button type="submit" className="btn btn-transparent-black hover-bg-red btn-xs">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <form action="" className="modal" id="send_proposal">
                <div className="modal-dialog modal-lg">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h4 className="modal-title">Send Proposal</h4>
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div className="modal-body">
                            <div className="p-5-10">

                                <div className="row">
                                    <div className="col-lg-8">
                                        
                                        <div>
                                            <div className="form-group">
                                                <label className="control-label">
                                                    My Proposal:
                                                    <span className="required">*</span>
                                                </label>
                                                <textarea className="form-control resize-none" style="height: 85px;" placeholder="Type a message or use a template..."></textarea>
                                            </div>
                                        </div>

                                        <div className="mt-30 b-1-ddd p-2.5">
                                            <div>
                                                Upload Attachments (optional)
                                            </div>
                                            <div className="row">
                                                <div className="col-sm-6 mt-2.5">
                                                    <input type="file" className="form-control">
                                                </div>
                                                <div className="col-sm-6 mt-2.5">
                                                    <input type="file" className="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div className="row mt-5">
                                            <div className="col-sm-6">
                                                <div className="form-group">
                                                    <label className="control-label">
                                                        Proposed Budget (Total):
                                                    </label>
                                                    <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                        <div className="input-group-btn">
                                                            <button type="button" className="btn btn-md">
                                                                <span className="font-18">$</span>
                                                            </button>
                                                        </div>
                                                        <input type="number" className="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="col-sm-6">
                                                <div className="form-group">
                                                    <label className="control-label">
                                                        Minimum Deposit:
                                                    </label>
                                                    <div className="input-group input-group-attach input-group-attach-transparent input-group-attach-transparent-left">
                                                        <div className="input-group-btn">
                                                            <button type="button" className="btn btn-md">
                                                                <span className="font-18">$</span>
                                                            </button>
                                                        </div>
                                                        <input type="number" className="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div className="col-lg-4">
                                        <hr className="hr-orange d-block d-lg-none hr-2 mt-2.5 mb-10">
                                        <div className="font-bold">
                                            Proposal Templates:
                                        </div>
                                        <div className="">
                                            <div className="b-1-ddd mb-10 p-1.5 overflow-auto" style="height: 90px;">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                            </div>
                                            <div className="b-1-ddd mb-10 p-1.5 overflow-auto" style="height: 90px;">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                            </div>
                                            <div className="b-1-ddd mb-10 p-1.5 overflow-auto" style="height: 90px;">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="close btn btn-transparent-black btn-sm icon-left" data-dismiss="modal">
                                <span className="fa fa-times"></span>
                                Cancel  
                            </button>
                            <button type="submit" className="btn btn-blue btn-sm add-question-btn icon-left">
                                <span className="fa fa-paper-plane"></span>
                                Submit Proposal  
                            </button>
                        </div>
                    </div>
                </div>
            </form>


            <div className="col-md-4 d-none d-md-block">

                <div className="sticky-top d-none d-lg-block">
                    <div className="section">
                        <div>
                            <button type="button" className="btn btn-blue btn-block" data-toggle="modal" data-target="#send_proposal">
                                Send Proposal
                            </button>
                        </div>
                        <div className="mt-15 mb-10">
                            Posted By:
                        </div>
                        <div className="text-left-right text-left-right-60-40">
                            <div className="bg-eee">
                                <div>
                                    <span className="fa fa-user"></span>
                                    <div className="overflow-hidden">
                                        Name:
                                    </div>
                                </div>
                                <div>
                                    Firstname lastname
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span className="fa fa-flag"></span>
                                    <div className="overflow-hidden">
                                        Country:
                                    </div>
                                </div>
                                <div>
                                    Nigeria
                                </div>
                            </div>
                            <div className="bg-eee">
                                <div>
                                    <span className="fa fa-file"></span>
                                    <div className="overflow-hidden">
                                        Projects Posted:
                                    </div>
                                </div>
                                <div>
                                    15  
                                </div>
                            </div>
                            <div>
                                <div>
                                    <span className="fa fa-file-alt"></span>
                                    <div className="overflow-hidden">
                                        Projects Issuance:
                                    </div>
                                </div>
                                <div>
                                    90%  
                                </div>
                            </div>
                            <div className="bg-eee">
                                <div>
                                    <span className="fa fa-file-alt"></span>
                                    <div className="overflow-hidden">
                                        Projects Completed:
                                    </div>
                                </div>
                                <div>
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="section">
                        <div className="section-title">
                            Share Link
                        </div>
                        <div>
                            <div className="">
                                This is a private project. Copy the link below to share.
                            </div>
                            <div>
                                <div className="copy-link mt-1.5">
                                    <div className="input-group">
                                        <input type="search" name="q" className="form-control" onfocus="highlightShareLink('direct-share-link-2')" id="direct-share-link-2" value="share_link" readonly />
                                        <div className="input-group-btn">
                                            <button type="submit" className="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-2')" style="border-radius: 0 !important; height: 35px;">
                                                <span className="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div className="text-center mt-2.5">
                                    <button type="button" className="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span className="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div className="section d-none d-md-block d-lg-none">
                    <form action="">
                        <ul className="ul-inline">
                            <li>
                                <button type="submit" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Favourite" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-heart" style="position: relative; top: 1px;"></span>
                                </button>
                            </li>
                            <li>
                                <Link className="p-0" title="Share Project" data-widget="collapse" data-toggle="tooltip">
                                    <button type="button" className="btn btn-transparent-black btn-xs hover-bg-orange" data-toggle="modal" data-target="#share">
                                        <span className="fas fa-share-alt"></span>
                                    </button>
                                </Link>
                            </li>
                            <li>
                                <Link data-toggle="modal" data-target="#flag" className="btn btn-transparent-black btn-xs hover-bg-orange" title="Report Project" data-widget="collapse" data-toggle="tooltip">
                                    <span className="fas fa-flag"></span>
                                </Link>
                            </li>
                        </ul>
                    </form>
                </div>

                <div className="sticky-top d-none d-md-block d-lg-none">

                    <div className="section">
                        <div>
                            <button type="button" className="btn btn-blue btn-block" data-toggle="modal" data-target="#send_proposal">
                                Send Proposal
                            </button>
                        </div>
                        <div className="mt-15 mb-10">
                            Posted By:
                        </div>
                        <div className="text-left-right text-left-right-60-40">
                            <div className="bg-eee">
                                <div className="w-100 pull-none">
                                    <span className="fa fa-user"></span>
                                    <div className="overflow-hidden">
                                        Name:
                                    </div>
                                </div>
                                <div className="pl-2.5 pr-2.5">
                                    Firstname lastname
                                </div>
                            </div>
                            <div>
                                <div className="w-100 pull-none">
                                    <span className="fa fa-flag"></span>
                                    <div className="overflow-hidden">
                                        Country:
                                    </div>
                                </div>
                                <div className="pl-2.5 pr-2.5">
                                    Nigeria
                                </div>
                            </div>
                            <div className="bg-eee">
                                <div className="w-100 pull-none">
                                    <span className="fa fa-file"></span>
                                    <div className="overflow-hidden">
                                        Projects Posted:
                                    </div>
                                </div>
                                <div className="pl-2.5 pr-2.5">
                                    10
                                </div>
                            </div>
                            <div>
                                <div className="w-100 pull-none">
                                    <span className="fa fa-file-alt"></span>
                                    <div className="overflow-hidden">
                                        Projects Issuance:
                                    </div>
                                </div>
                                <div className="pl-2.5 pr-2.5">
                                    90%
                                </div>
                            </div>
                            <div className="bg-eee">
                                <div className="w-100 pull-none">
                                    <span className="fa fa-file-alt"></span>
                                    <div className="overflow-hidden">
                                        Projects Completed:
                                    </div>
                                </div>
                                <div className="pl-2.5 pr-2.5">
                                    70%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="section">
                        <div className="section-title">
                            Share Link
                        </div>
                        <div>
                            <div className="">
                                This is a private project. Copy the link below to share.
                            </div>
                            <div>
                                <div className="copy-link mt-1.5">
                                    <div className="input-group">
                                        <input type="search" name="q" className="form-control" onfocus="highlightShareLink('direct-share-link-3')" id="direct-share-link-3" value="share_link" readonly />
                                        <div className="input-group-btn">
                                            <button type="submit" className="btn btn-blue btn-md" onclick="copyShareLink('direct-share-link-3')" style="border-radius: 0 !important; height: 35px;">
                                                <span className="fa fa-copy"></span>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div className="text-center mt-2.5">
                                    <button type="button" className="btn btn-transparent-black btn-sm" data-toggle="modal" data-target="#shareModal">
                                        <span className="fa fa-share-alt"></span>
                                        Share this Deal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        
        <hr />


        <div className="font-18 font-bold pb-10 text-center b-none">
            Other Projects from this buyer
        </div>
        <div className="section">
            <div className="project-list project-list-mini row">
                @forelse ($project->owner->projects as $project)
                    <div className="col-lg-6">
                        @include('front.common.project', ['project' => $project])
                    </div>
                @empty
                    <div className="col-lg-6">
                        'no project'
                    </div>
                    
                @endforelse
            </div>
        </div>
            
        <hr />

        <div className="font-18 font-bold pb-10 text-center b-none">
            Similar {{$project->category->name}} Projects
        </div>
        <div className="section">
            <div className="project-list project-list-mini row">
                @forelse ($project->category->projects as $project)
                    <div className="col-lg-6">
                         @include('front.common.project', ['project' => $project])
                    </div> 
                @empty
                    <div className="col-lg-6">
                        no project
                    </div>
                @endforelse
            </div>
        </div>
            

    </div>

@endsection
