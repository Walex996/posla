{{-- header --}}
<div class="navbar navbar-expand-md navbar-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('/img/app/icons/logo-full-fff.png') }}" class="dp-contain" alt="Posla">
        </a>

        <div>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}
                {{-- <span class="fa fa-navicon icon-25"></span> --}}
            {{-- </button> --}}
            <a href="/account" class="navbar-toggler mr-5">
                <span class="fa fa-user-circle icon-25"></span>
            </a>
            <a class="navbar-toggler header_link_sidebar">
                <span class="fa fa-bars icon-25"></span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <div class="navbar-nav mr-auto ml-auto layout-search">
                <form action="/search" method="get" class="input-group">
                    <input type="search" name="q" class="form-control" placeholder="Search projects, deals, and freelancers..." />
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-md">
                            <span class="fa fa-search"></span>
                        </button>
                    </div>
                </form>
            </div>


            <ul class="navbar-nav navbar-nav-links-nav ml-auto d-none d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link active" href="/account/deals/create">Post Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/deals">Find Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Find Projects</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-nav-links-menu ml-auto d-none d-md-flex d-lg-none">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle no-after nowrap floated-content" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="fa fa-caret-down icon-16 pull-right ml-5"></span>
                        Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/account/deals/create">
                            Post Deals
                        </a>
                        <a class="dropdown-item" href="/deals">
                            Find Deals
                        </a>
                        <a class="dropdown-item" href="/">
                            Find Projects
                        </a>
                    </div>
                </li>    
            </ul>

            <ul class="navbar-nav navbar-nav-links-auth ml-auto">
                      
                    <li class="nav-item">
                        <a class="nav-link btn-login cursor-pointer">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-register cursor-pointer">
                            Register
                        </a>
                    </li>

                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle no-after nowrap floated-content" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="fa fa-caret-down icon-16 pull-right ml-5"></span>
                            Username
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/account/dashboard">
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="/account/profile">
                                Profile
                            </a>
                            <a class="dropdown-item" href="/account/orders">
                                My Orders
                            </a>
                            <a class="dropdown-item" href="/account/deals">
                                My Deals
                            </a>
                            <a class="dropdown-item" href="/account/projects">
                                My Projects
                            </a>
                            <a class="dropdown-item" href="/account/project-bids">
                                My Project Bids
                            </a>
                            <a class="dropdown-item" href="/account/favourites">
                                Favourites
                            </a>
                            <a class="dropdown-item" href="/messages">
                                Messages
                            </a>
                            <a class="dropdown-item" href="/account/earnings-withdrawals/">
                                Earnings & Withdrawals
                            </a>
                            <a class="dropdown-item" href="/account/wallet">
                                My Wallet
                            </a>
                            <a class="dropdown-item" href="/account/reviews">
                                My Reviews
                            </a>
                            <a class="dropdown-item" href="/account/settings">
                                Account Settings
                            </a>
                            <a class="dropdown-item" href="">
                                Logout
                            </a>
                        </div>
                    </li>
                    
                
            </ul>

        </div>

    </div>
</div>






<div id="sidebar" style="display: none; left: -100%;">
{{-- <div id="sidebar" style="display: block; left: 0;"> --}}
    <div>
        <a href="/account" id="sidebar_login">
            <div></div>
            <div>
                <div>
                    <img src="{{ asset('/img/app/icons/logo.png') }}" class="dp-contain" alt="Posla">
                </div>
                <div style="margin-top: 10px;">
                    @guest
                        <div class="text-fff font-20 font-bold mt-2 mb-2" style="line-height: 20px;">
                            POSLA
                        </div>
                        <div class="text-fade">
                            Work Smart; Earn Smart
                        </div>
                    @else
                        <span class="fa fa-user-circle icon-fff"></span>
                        Walex996
                        <br>
                        <div class="text-fade">
                            {{-- Buyer --}}
                            Seller
                        </div>
                    @endguest
                </div>
            </div>
        </a>
    </div>
    <div id="sidebar_links">
        <ul>

            <!--
                <li class="sidebar-login nav-auth-out">
                    <a class="btn-login">
                        <span class="fa fa-user-circle" style="font-size: 17px;"></span>
                        <span>Login</span>
                    </a>
                </li>
                <li class="sidebar-register nav-auth-out">
                    <a class="btn-register">
                        <span class="fa fa-user-plus"></span>
                        <span>Register</span>
                    </a>
                </li>
            -->


            <li class="dropdown">
                <a class="dropdown-toggle no-after" data-toggle="dropdown">
                    <span class="fa fa-user-circle" style="font-size: 17px;"></span>
                    <span>My Account</span>
                    <span class="fa fa-caret-down pull-right"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="sidebar-account-dashboard">
                        <a href="/account/dashboard">
                            <span class="fa fa-th-large"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-account-profile">
                        <a href="/account/profile">
                            <span class="fa fa-user"></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-account-orders">
                        <a href="/account/orders">
                            <span class="fa fa-shopping-cart"></span>
                            <span>My Orders</span>
                        </a>
                    </li>
                    <li class="sidebar-account-deals">
                        <a href="/account/deals">
                            <span class="fa fa-share-alt"></span>
                            <span>My Deals</span>
                        </a>
                    </li>
                    <li class="sidebar-account-projects">
                        <a href="/account/projects">
                            <span class="fa fa-star"></span>
                            <span>My Projects</span>
                        </a>
                    </li>
                    <li class="sidebar-account-project-bids">
                        <a href="/account/project-bids">
                            <span class="fa fa-star-half-alt"></span>
                            <span>My Projects Bids</span>
                        </a>
                    </li>
                    <li class="sidebar-account-favourites">
                        <a href="/account/favourites">
                            <span class="fa fa-heart"></span>
                            <span>Favourites</span>
                        </a>
                    </li>
                    <li class="sidebar-account-messages">
                        <a href="/messages">
                            <span class="fa fa-envelope"></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="sidebar-account-earnings">
                        <a href="/account/earnings-withdrawals/">
                            <span class="fa fa-credit-card"></span>
                            <span>Earnings & Withdrawals</span>
                        </a>
                    </li>
                    <li class="sidebar-account-wallet">
                        <a href="/account/wallet">
                            <span class="fa fa-wallet"></span>
                            <span>My Wallet</span>
                        </a>
                    </li>
                    <li class="sidebar-account-reviews">
                        <a href="/account/reviews">
                            <span class="fa fa-star"></span>
                            <span>My Reviews</span>
                        </a>
                    </li>
                    <li class="sidebar-account-settings">
                        <a href="/account/settings" id="acc-sidebar-settings">
                            <span class="fa fa-user-cog"></span>
                            <span>Account Settings</span>
                        </a>
                    </li>
                </ul>
            </li>

            
            <hr class="hr-blue hr-2">

            <li class="sidebar-home">
                <a href="/">
                    <span class="fa fa-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-post-deals dropdown">
                <a class="dropdown-toggle no-after" data-toggle="dropdown">
                    <span class="fa fa-list"></span>
                    <span>All Categories Deals</span>
                    <span class="fa fa-caret-down pull-right"></span>
                </a>
                <ul class="dropdown-menu sidebar-category-all">
                    <li class="sidebar-category-category-url">
                        <a href="/category/business/projects">
                            <span class="fa fa-list-alt"></span>
                            <span>Category 1</span>
                        </a>
                    </li>
                    <li class="sidebar-category-category-url">
                        <a href="/category/business/projects">
                            <span class="fa fa-list-alt"></span>
                            <span>Category 2</span>
                        </a>
                    </li>
                    <li class="sidebar-category-category-url">
                        <a href="/category/business/projects">
                            <span class="fa fa-list-alt"></span>
                            <span>Category 3</span>
                        </a>
                    </li>
                    <li class="sidebar-category-category-url">
                        <a href="/category/business/projects">
                            <span class="fa fa-list-alt"></span>
                            <span>Category 4</span>
                        </a>
                    </li>
                    <li class="sidebar-category-category-url">
                        <a href="/category/business/projects">
                            <span class="fa fa-list-alt"></span>
                            <span>Category 5</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-post-deals">
                <a href="/account/deals/create">
                    <span class="fa fa-star"></span>
                    <span>Post Deals</span>
                </a>
            </li>
            <li class="sidebar-find-deals">
                <a href="/deals">
                    <span class="fa fa-star"></span>
                    <span>Find Deals</span>
                </a>
            </li>
            <li class="sidebar-post-projects">
                <a href="/">
                    <span class="fa fa-star"></span>
                    <span>Post Projects</span>
                </a>
            </li>
            <li class="sidebar-find-projects">
                <a href="/">
                    <span class="fa fa-star"></span>
                    <span>Find Projects</span>
                </a>
            </li>
            <li class="sidebar-search">
                <a href="/search">
                    <span class="fa fa-search"></span>
                    <span>Search</span>
                </a>
            </li>

            <hr class="hr-blue hr-2">

            <li class="sidebar-about">
                <a href="/about">
                    <span class="fa fa-align-left"></span>
                    <span>About</span>
                </a>
            </li>
            <li class="sidebar-contact">
                <a href="/support">
                    <span class="fa fa-desktop"></span>
                    <span>Support Center</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms">
                    <span class="fa fa-file"></span>
                    <span>Terms</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms#payment">
                    <span class="fa fa-file"></span>
                    <span>Payment Policy</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms#payment">
                    <span class="fa fa-file"></span>
                    <span>Refund Policy</span>
                </a>
            </li>

            <li class="sidebar-about">
                <a href="/about">
                    <span class="fa fa-align-left"></span>
                    <span>About</span>
                </a>
            </li>
            <li class="sidebar-contact">
                <a href="/support">
                    <span class="fa fa-desktop"></span>
                    <span>Support Center</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms">
                    <span class="fa fa-file"></span>
                    <span>Terms</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms#payment">
                    <span class="fa fa-file"></span>
                    <span>Payment Policy</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms#payment">
                    <span class="fa fa-file"></span>
                    <span>Refund Policy</span>
                </a>
            </li>

            <li class="sidebar-about">
                <a href="/about">
                    <span class="fa fa-align-left"></span>
                    <span>About</span>
                </a>
            </li>
            <li class="sidebar-contact">
                <a href="/support">
                    <span class="fa fa-desktop"></span>
                    <span>Support Center</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms">
                    <span class="fa fa-file"></span>
                    <span>Terms</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms#payment">
                    <span class="fa fa-file"></span>
                    <span>Payment Policy</span>
                </a>
            </li>
            <li class="sidebar-terms">
                <a href="/terms#payment">
                    <span class="fa fa-file"></span>
                    <span>Refund Policy</span>
                </a>
            </li>

            <hr class="hr-blue hr-2">
            <li class="nav-auth-in">
                <a href="">
                    <span class="fa fa-sign-out-alt"></span>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </div>
</div>

<div id="sidebar_fade" class="bg-fade"></div>






@include('front.auth.login')

@include('front.auth.register')

@include('front.auth.forgot-password')


{{-- faded background --}}
<div class="bg-fade bg-fade-auth"></div>