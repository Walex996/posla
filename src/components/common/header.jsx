import React, { Component } from "react";
import Dropdown from "utils/dropdown";
import { Link, NavLink } from "react-router-dom";
import logo from "assets/img/app/icons/logo.png";
import logoWhiteFull from "assets/img/app/icons/logo-full-fff.png";

class Header extends Component {
    state = {};

    render() {
        return (
            <div>
                <div className="navbar navbar-expand-md navbar-dark shadow-sm">
                    <div className="container">

                        <Link className="navbar-brand" to="/">
                            <img src={logoWhiteFull} className="dp-contain" alt="Posla" />
                        </Link>

                        <div>
                            <Link to="/account" className="navbar-toggler mr-5">
                                <span className="fa fa-user-circle icon-25"></span>
                            </Link>
                            <Link to="#" className="navbar-toggler header_link_sidebar">
                                <span className="fa fa-bars icon-25"></span>
                            </Link>
                        </div>

                        <div className="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <div className="navbar-nav mr-auto ml-auto layout-search">
                                <form action="/search" method="get" className="input-group">
                                    <input type="search" name="q" className="form-control" placeholder="Search projects, deals, and freelancers..." />
                                    <div className="input-group-btn">
                                        <button type="submit" className="btn btn-default btn-md">
                                            <span className="fa fa-search"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>


                            <ul className="navbar-nav navbar-nav-links-nav ml-auto d-none d-lg-flex">
                                <li className="nav-item">
                                    <NavLink className="nav-link active" to="/account/deals/create">Post Deals</NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink className="nav-link" to="/deals">Find Deals</NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink className="nav-link" to="/">Find Projects</NavLink>
                                </li>
                            </ul>

                            <ul className="navbar-nav navbar-nav-links-menu ml-auto mr-2 d-none d-md-flex d-lg-none">
                                <li className="nav-item">
                                    <Dropdown>
                                        <div className="btn btn-sm nowrap">
                                            <span>
                                                Menu
                                            </span>
                                            <span className="fa fa-caret-down icon-16 ml-2"></span>
                                        </div>
                                        <div>
                                            <Link className="dropdown-item" to="/account/deals/create">
                                                Post Deals
                                            </Link>
                                            <Link className="dropdown-item" to="/deals">
                                                Find Deals
                                            </Link>
                                            <Link className="dropdown-item" to="/">
                                                Find Projects
                                            </Link>
                                        </div>
                                    </Dropdown>

                                </li>    
                            </ul>

                            <ul className="navbar-nav ml-auto">
                                
                                {/* 
                                <li className="nav-item">
                                    <Link to="#" className="nav-link btn-login cursor-pointer">
                                        Login
                                    </Link>
                                </li>
                                <li className="nav-item">
                                    <Link to="#" className="nav-link btn-register cursor-pointer">
                                        Register
                                    </Link>
                                </li>
                                */}

                                
                                <li className="nav-item">
                                    
                                    <Dropdown>
                                        <div className="btn btn-transparent-white btn-sm nowrap">
                                            <span>
                                                Username
                                            </span>
                                            <span className="fa fa-caret-down icon-16 ml-2"></span>
                                        </div>
                                        <div>
                                            <Link className="dropdown-item" to="/account/dashboard">
                                                Dashboard
                                            </Link>
                                            <Link className="dropdown-item" to="/account/profile">
                                                Profile
                                            </Link>
                                            <Link className="dropdown-item" to="/account/orders">
                                                My Orders
                                            </Link>
                                            <Link className="dropdown-item" to="/account/deals">
                                                My Deals
                                            </Link>
                                            <Link className="dropdown-item" to="/account/projects">
                                                My Projects
                                            </Link>
                                            <Link className="dropdown-item" to="/account/project-bids">
                                                My Project Bids
                                            </Link>
                                            <Link className="dropdown-item" to="/account/favourites">
                                                Favourites
                                            </Link>
                                            <Link className="dropdown-item" to="/messages">
                                                Messages
                                            </Link>
                                            <Link className="dropdown-item" to="/account/earnings-withdrawals/">
                                                Earnings & Withdrawals
                                            </Link>
                                            <Link className="dropdown-item" to="/account/wallet">
                                                My Wallet
                                            </Link>
                                            <Link className="dropdown-item" to="/account/reviews">
                                                My Reviews
                                            </Link>
                                            <Link className="dropdown-item" to="/account/settings">
                                                Account Settings
                                            </Link>
                                            <Link to="#" className="dropdown-item">
                                                Logout
                                            </Link>
                                        </div>
                                    </Dropdown>
                        
                                </li>
                            
                            </ul>

                        </div>

                    </div>
                </div>






                <div id="sidebar" style={{"display":"none","left":"-100%"}}>
                {/* <div id="sidebar" style={{"display":"block","left":"0"}}> */}
                    <div>
                        <Link to="/account" id="sidebar_login">
                            <div></div>
                            <div>
                                <div>
                                    <img src={logo} className="dp-contain" alt="Posla" />
                                </div>
                                <div style={{"marginTop":"10px"}}>
                                    
                                    <div className="text-fff font-20 font-bold mt-2 mb-2" style={{"lineHeight":"20px"}}>
                                        POSLA
                                    </div>
                                    <div className="text-fade">
                                        Work Smart; Earn Smart
                                    </div>
                                
                                    {/* 
                                    <span className="fa fa-user-circle icon-fff"></span>
                                    Walex996
                                    <br />
                                    <div className="text-fade">
                                        Seller
                                    </div>
                                     */}
                                    
                                </div>
                            </div>
                        </Link>
                    </div>
                    <div id="sidebar_links">
                        <ul>

                            {/* 
                                <li className="sidebar-login nav-auth-out">
                                    <Link to="#" className="btn-login">
                                        <span className="fa fa-user-circle" style={{"fontSize":"17px"}}></span>
                                        <span>Login</span>
                                    </Link>
                                </li>
                                <li className="sidebar-register nav-auth-out">
                                    <Link to="#" className="btn-register">
                                        <span className="fa fa-user-plus"></span>
                                        <span>Register</span>
                                    </Link>
                                </li>
                             */}


                            <li className="dropdown">
                                <Link to="#" className="dropdown-toggle no-after" data-toggle="dropdown">
                                    <span className="fa fa-user-circle" style={{"fontSize":"17px"}}></span>
                                    <span>My Account</span>
                                    <span className="fa fa-caret-down pull-right"></span>
                                </Link>
                                <ul className="dropdown-menu">
                                    <li className="sidebar-account-dashboard">
                                        <Link to="/account/dashboard">
                                            <span className="fa fa-th-large"></span>
                                            <span>Dashboard</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-profile">
                                        <Link to="/account/profile">
                                            <span className="fa fa-user"></span>
                                            <span>Profile</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-orders">
                                        <Link to="/account/orders">
                                            <span className="fa fa-shopping-cart"></span>
                                            <span>My Orders</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-deals">
                                        <Link to="/account/deals">
                                            <span className="fa fa-share-alt"></span>
                                            <span>My Deals</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-projects">
                                        <Link to="/account/projects">
                                            <span className="fa fa-star"></span>
                                            <span>My Projects</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-project-bids">
                                        <Link to="/account/project-bids">
                                            <span className="fa fa-star-half-alt"></span>
                                            <span>My Projects Bids</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-favourites">
                                        <Link to="/account/favourites">
                                            <span className="fa fa-heart"></span>
                                            <span>Favourites</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-messages">
                                        <Link to="/messages">
                                            <span className="fa fa-envelope"></span>
                                            <span>Messages</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-earnings">
                                        <Link to="/account/earnings-withdrawals/">
                                            <span className="fa fa-credit-card"></span>
                                            <span>Earnings & Withdrawals</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-wallet">
                                        <Link to="/account/wallet">
                                            <span className="fa fa-wallet"></span>
                                            <span>My Wallet</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-reviews">
                                        <Link to="/account/reviews">
                                            <span className="fa fa-star"></span>
                                            <span>My Reviews</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-account-settings">
                                        <Link to="/account/settings" id="acc-sidebar-settings">
                                            <span className="fa fa-user-cog"></span>
                                            <span>Account Settings</span>
                                        </Link>
                                    </li>
                                </ul>
                            </li>

                            
                            <hr className="hr-blue hr-2" />

                            <li className="sidebar-home">
                                <Link to="/">
                                    <span className="fa fa-home"></span>
                                    <span>Home</span>
                                </Link>
                            </li>
                            <li className="sidebar-post-deals dropdown">
                                <Link to="#" className="dropdown-toggle no-after" data-toggle="dropdown">
                                    <span className="fa fa-list"></span>
                                    <span>All Categories Deals</span>
                                    <span className="fa fa-caret-down pull-right"></span>
                                </Link>
                                <ul className="dropdown-menu sidebar-category-all">
                                    <li className="sidebar-category-category-url">
                                        <Link to="/category/projects/music">
                                            <span className="fa fa-list-alt"></span>
                                            <span>Category 1</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-category-category-url">
                                        <Link to="/category/projects/music">
                                            <span className="fa fa-list-alt"></span>
                                            <span>Category 2</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-category-category-url">
                                        <Link to="/category/projects/music">
                                            <span className="fa fa-list-alt"></span>
                                            <span>Category 3</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-category-category-url">
                                        <Link to="/category/projects/music">
                                            <span className="fa fa-list-alt"></span>
                                            <span>Category 4</span>
                                        </Link>
                                    </li>
                                    <li className="sidebar-category-category-url">
                                        <Link to="/category/projects/music">
                                            <span className="fa fa-list-alt"></span>
                                            <span>Category 5</span>
                                        </Link>
                                    </li>
                                </ul>
                            </li>
                            <li className="sidebar-post-deals">
                                <Link to="/account/deals/create">
                                    <span className="fa fa-star"></span>
                                    <span>Post Deals</span>
                                </Link>
                            </li>
                            <li className="sidebar-find-deals">
                                <Link to="/deals">
                                    <span className="fa fa-star"></span>
                                    <span>Find Deals</span>
                                </Link>
                            </li>
                            <li className="sidebar-post-projects">
                                <Link to="/">
                                    <span className="fa fa-star"></span>
                                    <span>Post Projects</span>
                                </Link>
                            </li>
                            <li className="sidebar-find-projects">
                                <Link to="/">
                                    <span className="fa fa-star"></span>
                                    <span>Find Projects</span>
                                </Link>
                            </li>
                            <li className="sidebar-search">
                                <Link to="/search">
                                    <span className="fa fa-search"></span>
                                    <span>Search</span>
                                </Link>
                            </li>

                            <hr className="hr-blue hr-2" />

                            <li className="sidebar-about">
                                <Link to="/about">
                                    <span className="fa fa-align-left"></span>
                                    <span>About</span>
                                </Link>
                            </li>
                            <li className="sidebar-contact">
                                <Link to="/support">
                                    <span className="fa fa-desktop"></span>
                                    <span>Support Center</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms">
                                    <span className="fa fa-file"></span>
                                    <span>Terms</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms#payment">
                                    <span className="fa fa-file"></span>
                                    <span>Payment Policy</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms#payment">
                                    <span className="fa fa-file"></span>
                                    <span>Refund Policy</span>
                                </Link>
                            </li>

                            <li className="sidebar-about">
                                <Link to="/about">
                                    <span className="fa fa-align-left"></span>
                                    <span>About</span>
                                </Link>
                            </li>
                            <li className="sidebar-contact">
                                <Link to="/support">
                                    <span className="fa fa-desktop"></span>
                                    <span>Support Center</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms">
                                    <span className="fa fa-file"></span>
                                    <span>Terms</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms#payment">
                                    <span className="fa fa-file"></span>
                                    <span>Payment Policy</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms#payment">
                                    <span className="fa fa-file"></span>
                                    <span>Refund Policy</span>
                                </Link>
                            </li>

                            <li className="sidebar-about">
                                <Link to="/about">
                                    <span className="fa fa-align-left"></span>
                                    <span>About</span>
                                </Link>
                            </li>
                            <li className="sidebar-contact">
                                <Link to="/support">
                                    <span className="fa fa-desktop"></span>
                                    <span>Support Center</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms">
                                    <span className="fa fa-file"></span>
                                    <span>Terms</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms#payment">
                                    <span className="fa fa-file"></span>
                                    <span>Payment Policy</span>
                                </Link>
                            </li>
                            <li className="sidebar-terms">
                                <Link to="/terms#payment">
                                    <span className="fa fa-file"></span>
                                    <span>Refund Policy</span>
                                </Link>
                            </li>

                            <hr className="hr-blue hr-2" />
                            <li className="nav-auth-in">
                                <Link to="">
                                    <span className="fa fa-sign-out-alt"></span>
                                    <span>Logout</span>
                                </Link>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div id="sidebar_fade" className="bg-fade"></div>


            </div>
        );
    }
}

export default Header;
