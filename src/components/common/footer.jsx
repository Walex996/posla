import React, { Component } from "react";
import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import logoOrange from "assets/img/app/icons/logo-colored-orange.png";

class Footer extends Component {
    state = {};

    render() {
        return (
            <>
                <div id="footer" className="">
                    <div className="footer-top">
                        <div className="container">
                            <div className="row">

                                <div className="col-lg-3 col-md-6 footer-info">
                                    <img src={logoOrange} className="dp-contain" alt="Posla" />
                                    <p className="mt-10">
                                        Posla.com is a reputable freelance platform aimed at: <br />
                                        <ul className="list-style">
                                            <li>
                                                <p>
                                                    ensuring adequate & reliable delivery of their projects (for buyers);
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    and receiving interesting & lucrative projects (for sellers).
                                                </p>
                                            </li>
                                        </ul>
                                        <br />
                                        <Link to="/about" className="underline">Read More</Link>
                                    </p>
                                </div>

                                <div className="col-lg-3 col-md-6 footer-links">
                                    <h4>Get Started</h4>
                                    <ul>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/deals/create/rule">Post Deals</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/deals">Find Deals</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/account/projects/create">Post Projects</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/">Find Projects</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/search">Search All</Link></li>
                                    </ul>
                                </div>

                                <div className="col-lg-3 col-md-6 footer-links">
                                    <h4>Useful Links</h4>
                                    <ul>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/about">About Us</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/support">Support Center</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/terms">Terms of Use</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/terms#payment">Payment Policy</Link></li>
                                        <li><FontAwesomeIcon icon="angle-right" /> <Link to="/terms#refund">Refunds Policy</Link></li>
                                    </ul>
                                </div>

                                <div className="col-lg-3 col-md-6 footer-contact">
                                    <h4>Contact Us</h4>
                                    <p>
                                        4, Jefferson street, Lekki Phase 1, Lekki, Lagos.
                                        <br />
                                        <strong>Phone:&nbsp;</strong>
                                        <Link to={{pathname:"tel:08012345678"}}>0801-234-5678</Link>,&nbsp;
                                        <Link to={{pathname:"tel:08012345678"}}>0801-234-5678</Link>
                                        <br />
                                        <strong>Email:&nbsp;</strong>
                                        <Link to={{pathname:"mailto:info@posla.com"}}>info@posla.com</Link>
                                    </p>

                                    <div className="social-links">
                                        <Link target="_blank" to="" title="Visit our YouTube Channel" className="youtube">
                                            <FontAwesomeIcon icon={['fab', 'youtube']} />
                                        </Link>
                                        <Link target="_blank" to="" title="" className="facebook">
                                            <FontAwesomeIcon icon={['fab', 'facebook']} />
                                        </Link>
                                        <Link target="_blank" to="" title="" className="twitter">
                                            <FontAwesomeIcon icon={['fab', 'twitter']} />
                                        </Link>
                                        <Link target="_blank" to="" title="" className="instagram">
                                            <FontAwesomeIcon icon={['fab', 'instagram']} />
                                        </Link>
                                        <Link target="_blank" to="" title="" className="linkedin">
                                            <FontAwesomeIcon icon={['fab', 'linkedin']} />
                                        </Link>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div className="container">
                        <div className="copyright">
                            &copy; Copyright {new Date().getFullYear()} <Link to="/" className="font-bold hover-underline">Posla.com</Link> All Rights Reserved
                        </div>
                    </div>
                </div>
            </>
        );
    }
}

export default Footer;
