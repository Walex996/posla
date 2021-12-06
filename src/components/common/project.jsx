import React, { Component } from "react";
import { Link } from "react-router-dom";

class Project extends Component {

    state = {};

    render() {

        return (

            <Link to="/project/4567543234/i-need-a-graphics-designer-for-my-company" className="project">
            
                <div>
                    <div>
                        <span className="fa fa-angle-right icon-50"></span>
                    </div>
                    <div className="">
                        <div className="font-bold">
                            I need a bike rider for my new logistic business
                        </div>
        
                        <div className="text-fade ellipsis-2-lines mt-1.5">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                </div>
        
                <div className="mt-1.5 ellipsis">
                    <div className="project-price">
                        $150
                    </div>
                    <div className="item-labels">
                        <div className="item-labels-new">
                            New
                        </div>
                        <div className="item-labels-featured">
                            Featured
                        </div>
                        <div className="item-labels-proposals">
                            18 proposals
                        </div>
                    </div>
                </div>
        
                <div className="item-labels item-labels-tags-all ellipsis">
                    <div className="item-labels-prefix">
                        Tags & Skills:
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                    <div className="item-labels-tags">
                        Tag name
                    </div>
                </div>
        
            </Link>
        
        );
    }
}

export default Project;