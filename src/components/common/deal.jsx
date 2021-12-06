import React, { Component } from "react";
import { Link } from "react-router-dom";
import deal1 from "assets/img/app/samples/deal-1.png";
import user from "assets/img/app/samples/user.png";

class Deal extends Component {

    state = {};

    render() {

        return (

            <Link to="/deal/4567543234/i-will-make-a-nice-banner-for-your-business" className="deal">
                
                <div className="deal-info-top">
                    <div>
                        <img src={deal1} alt="Olawale Lawal" className="dp-cover" />
                    </div>
                    <div className="">
                        <div>
                            <img src={user} alt="Olawale Lawal" className="dp-contain" />
                        </div>
                        <div className="text-fade font-13 ellipsis">
                            Olawale Lawal
                        </div>
                    </div>
                    <div className="ellipsis-2-lines mt-1.5 pr-2.5 pl-2.5" style={{"minHeight":"38px"}}>
                        I can abc build a beautiful bespoke logo for your company using the style and color combination you prefer.
                    </div>
                </div>

                <div className="mt-2.5 mr-2.5 ml-2.5 ellipsis">
                    <div className="project-price">
                        <span className="font-size-2.5 text-fade">Starting At&nbsp;</span>
                        $400
                    </div>
                    <div className="item-labels">
                        <div className="item-labels-new">
                            New
                        </div>
                        <div className="item-labels-featured">
                            Featured
                        </div>
                    </div>
                </div>

                <div className="pt-1 bt-1-ddd">
                    <div className="mt-0 pl-2.5 item-labels item-labels-tags-all ellipsis">
                        <div className="item-labels-prefix">
                            Tags & Skills:
                        </div>
                        <div className="item-labels-tags">
                            Mobile App
                        </div>
                        <div className="item-labels-tags">
                            iOS App
                        </div>
                        <div className="item-labels-tags">
                            App Store
                        </div>
                        <div className="item-labels-tags">
                            Swift Language
                        </div>
                        <div className="item-labels-tags">
                            Objective C
                        </div>
                    </div>
                </div>
                
            </Link>

        );
    }
}

export default Deal;