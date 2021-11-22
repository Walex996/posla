import React, { Component } from "react";
import { Link } from "react-router-dom";
// import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
// import Dropdown from "utils/dropdown";
// import logo from "assets/images/icons/logo.jpg";
import ad1 from "assets/img/app/samples/ad-400-200-1.jpg";

class Home extends Component {
    
    state = {};

    render() {

        return (
            <div>
                
                <div className="container">
                    <div className="row">
                        
                        <div className="col-md-4 col-lg-3 d-none d-md-block">

                            <div className="section sticky-top">
                                {/* @include('front.common.filter-deals') */}
                            </div>

                        </div>

                        <div className="col-md-8 col-lg-6">


                            <div className="modal" id="filter">
                                <div className="modal-dialog">
                                    <div className="modal-content">
                                        <div className="modal-header">
                                            <h4 className="modal-title">Filter</h4>
                                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div className="modal-body">
                                            <div className="p-10">
                                                {/* @include('front.common.filter-deals') */}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div className="mb-20">
                                <div className="text-center">
                                    <div className="font-20 font-bold">
                                        Category name
                                    </div>
                                    <div className="font-12 text-fade">
                                        (30 active deals)
                                    </div>
                                </div>
                            </div>

                            <div className="section mb-5 pb-5">
                                <div className="section-title floated-content">

                                    <button className="btn btn-transparent-black d-block d-md-none pull-left btn-sm" data-toggle="modal" data-target="#filter">
                                        <span className="fa fa-filter"></span>
                                        Filter
                                    </button>
                                    
                                    <div className="font-bold d-none d-md-inline mt-10 pull-left">
                                        Showing 1 - 15 of 31
                                    </div>

                                    <form method="get" action="" className="pull-right">
                                        <select className="form-control-md" style={{"width":"100px","padding":"0px !important"}}>
                                            <option value="new" selected>Newest First</option>
                                            <option value="old">Oldest First</option>
                                            <option value="budget_high_low">Budget - High to Low</option>
                                            <option value="budget_low_high">Budget - Low to High</option>
                                            <option value="ratings_high_low">Ratings - High to Low</option>
                                            <option value="ratings_low_high">Ratings - Low to High</option>
                                        </select>
                                    </form>

                                </div>

                                <div className="deal-list deal-list-double">
                                    {/* @include('front.common.deal') */}
                                    {/* @include('front.common.deal') */}
                                    {/* @include('front.common.deal') */}
                                    {/* @include('front.common.deal') */}
                                    {/* @include('front.common.deal') */}
                                </div>
                            </div>

                            <div className="section">
                                //pagination here
                            </div>

                        </div>
                        
                        <div className="col-lg-3 d-none d-lg-block">
                            
                            <Link to="#" className="posla-ad-space">
                                <img src={ad1} className="dp-contain" alt="Ad" />
                            </Link>

                            <div className="section pl-10 pr-10 sticky-top">
                                <div className="section-title">
                                    Featured Deals
                                </div>
                                <div className="deal-list deal-list-single">
                                    {/* @include('front.common.deal') */}
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
