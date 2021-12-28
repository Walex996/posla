import React, { Component } from "react";
import { Link } from "react-router-dom";
import Deal from "components/common/deal.jsx";
// import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
// import Dropdown from "utils/dropdown";
// import logo from "assets/images/icons/logo.jpg";


class Home extends Component {
    
    state = {};

    render() {

        return (
            <div>
                
                <div className="modal" id="modalCategories">
                    <div className="modal-dialog">
                        <div className="modal-content">
                            <div className="modal-header">
                                <h4 className="modal-title">Deal Categories</h4>
                                <button type="button" className="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div className="modal-body">
                                <div className="p-2.5">
                                    
                                    <div className="font-bold">
                                        Select a category:
                                    </div>

                                    <div className="home-category-list mt-5">
                                        
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>
                                        <Link to="/category/deals/music-audio">
                                            <span className="fa fa-angle-right icon-000 icon-18 float-right d-inline"></span>
                                            Category Name
                                        </Link>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    

                <div className="container">
                    <div className="row">
                        
                        <div className="col-md-4 col-lg-3 d-none d-md-block">

                            <div className="sticky-top mb-8">
                                <div className="home-category-list">

                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    <Link to="/category/deals/music-audio">
                                        Category Name
                                        <span className="fa fa-angle-right"></span>
                                    </Link>
                                    
                                </div>

                                <div className="mt-3">
                                    <Link to="/support" className="text-fade d-inline hover-underline">
                                        Suggest a category
                                        <span className="fa fa-angle-right icon-grey ml-2"></span>
                                    </Link>
                                </div>
                            </div>

                        </div>

                        <div className="col-md-8 col-lg-6">

                            <div className="row">
                                <div className="col-sm-6 col-lg-12">

                                    <div className="section">
                                        <form action="/account/deals/create" className="post-project">
                                            <div className="section-title">
                                                <span className="fa fa-edit mr-2"></span>
                                                Create New Deal
                                            </div>
                                            <div className="form-group">
                                                <textarea name="title" id="" className="form-control" placeholder="I will..." style={{"height":"50px"}}></textarea>
                                            </div>
                                            <div className="floated-content">
                                                <div className="form-group pull-left d-none">
                                                    <select name="privacy" id="privacy" className="form-control">
                                                        <option value="">-- Select Privacy --</option>
                                                    </select>
                                                </div>
                                                <button className="btn btn-blue btn-sm float-right">
                                                    Continue
                                                    <span className="fa fa-angle-right ml-2"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div className="section d-none d-sm-block d-md-none">
                                        <button type="button" data-toggle="modal" data-target="#modalCategories" className="d-block text-black">
                                            <span className="fa fa-list-alt pull-left icon-18 mr-2.5 icon-blue"></span>
                                            <span className="relative -top-0.5">View all deal categories 1</span>
                                            <span className="fa fa-angle-right icon-18 ml-3"></span>
                                        </button>
                                    </div>

                                </div>
                                <div className="col-sm-6">
                                    <div className="home-section-user bg-fff shadow-sm mb-8 br-4 d-block d-lg-none">
                                        <div></div>
                                        <div className="home-section-user-info">
                                            <Link to="/account">
                                                <span className="fa fa-user"></span>
                                            </Link>
                                            <div>
                                                <Link to="/account" className="font-bold d-block hover-underline">
                                                    Olawale Lawal
                                                </Link>
                                                <div className="text-fade">
                                                    Frontend Developer, UIUX Designer, Graphics Designer
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <Link to="/projects" className="btn btn-orange btn-block">
                                                Switch to Selling
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div className="section d-block d-sm-none">
                                <button type="button" data-toggle="modal" data-target="#modalCategories" className="d-block text-black">
                                    <span className="fa fa-list-alt pull-left icon-18 mr-2.5 icon-blue"></span>
                                    <span className="relative -top-0.5">View all deal categories 2</span>
                                    <span className="fa fa-angle-right icon-18 ml-3"></span>
                                </button>
                            </div>
                            

                            <div className="section">
                                <div className="section-title">
                                    Featured Deals
                                </div>
                                <div className="deal-list deal-list-double">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                            </div>


                            <div className="section">
                                <div className="section-title">
                                    Category Name
                                    <Link to="/category/deals/music-audio" className="btn btn-transparent-black btn-xs float-right hover-bg-orange">View All</Link>
                                </div>
                                <div className="deal-list deal-list-double">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                                
                                <Link to="/category/deals/music-audio" className="d-block text-center pt-2.5 pb-2.5 b-1-ddd bg-eee hover-bg-orange">
                                    View All CategoryName Deals
                                    <span className="fa fa-angle-right ml-2"></span>
                                </Link>
                            </div>



                            <div className="section">
                                <div className="section-title">
                                    Category Name
                                    <Link to="/category/deals/music-audio" className="btn btn-transparent-black btn-xs float-right hover-bg-orange">View All</Link>
                                </div>
                                <div className="deal-list deal-list-double">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                                
                                <Link to="/category/deals/music-audio" className="d-block text-center pt-2.5 pb-2.5 b-1-ddd bg-eee hover-bg-orange">
                                    View All CategoryName Deals
                                    <span className="fa fa-angle-right ml-2"></span>
                                </Link>
                            </div>



                            <div className="section">
                                <div className="section-title">
                                    Category Name
                                    <Link to="/category/deals/music-audio" className="btn btn-transparent-black btn-xs float-right hover-bg-orange">View All</Link>
                                </div>
                                <div className="deal-list deal-list-double">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                                
                                <Link to="/category/deals/music-audio" className="d-block text-center pt-2.5 pb-2.5 b-1-ddd bg-eee hover-bg-orange">
                                    View All CategoryName Deals
                                    <span className="fa fa-angle-right ml-2"></span>
                                </Link>
                            </div>



                            <div className="section">
                                <div className="section-title">
                                    Category Name
                                    <Link to="/category/deals/music-audio" className="btn btn-transparent-black btn-xs float-right hover-bg-orange">View All</Link>
                                </div>
                                <div className="deal-list deal-list-double">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                                
                                <Link to="/category/deals/music-audio" className="d-block text-center pt-2.5 pb-2.5 b-1-ddd bg-eee hover-bg-orange">
                                    View All CategoryName Deals
                                    <span className="fa fa-angle-right ml-2"></span>
                                </Link>
                            </div>



                            <div className="section">
                                <div className="section-title">
                                    Category Name
                                    <Link to="/category/deals/music-audio" className="btn btn-transparent-black btn-xs float-right hover-bg-orange">View All</Link>
                                </div>
                                <div className="deal-list deal-list-double">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                                
                                <Link to="/category/deals/music-audio" className="d-block text-center pt-2.5 pb-2.5 b-1-ddd bg-eee hover-bg-orange">
                                    View All CategoryName Deals
                                    <span className="fa fa-angle-right ml-2"></span>
                                </Link>
                            </div>



                        </div>
                        
                        <div className="col-lg-3 d-none d-lg-block">
                            
                            <div className="home-section-user bg-fff shadow-sm mb-8 br-4">
                                <div></div>
                                <div className="home-section-user-info">
                                    <Link to="/account">
                                        <span className="fa fa-user"></span>
                                    </Link>
                                    <div>
                                        <Link to="/account" className="font-bold d-block hover-underline">
                                            Olawale Lawal
                                        </Link>
                                        <div className="text-fade">
                                            Frontend Developer, UIUX Designer, Graphics Designer
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <Link to="/projects" className="btn btn-orange btn-block">
                                        Switch to Selling
                                    </Link>
                                </div>
                            </div>

                            <div className="section pl-2.5 pr-2.5 sticky-top">
                                <div className="section-title">
                                    Latest Deals
                                </div>
                                <div className="deal-list deal-list-single">
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                    <Deal />
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        );
    }
}

export default Home;
