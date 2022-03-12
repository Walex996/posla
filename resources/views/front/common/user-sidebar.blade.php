<div className="section">
    <div className="account-sidebar-info text-center">
        <Link to="/user/abcde12345" className="d-block">
            <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" className="dp-cover" />
        </Link>
        <Link to="/user/abcde12345" className="font-bold hover-underline">
            Firstname lastname
        </Link>
        <div className="text-fade">
            short description short description short description
        </div>
        <div>
            <div className="rating-box mt-1.5">
                <div>
                    <div></div>
                    <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                </div>
                <div>
                    <span className="font-bold text-orange">
                        5.0
                    </span>
                    <span className="text-fade">
                        (18 reviews)
                    </span>
                </div>
            </div>
        </div>
        <div className="text-center mt-1.5">
            <Link to="/messages/user000000" className="btn btn-blue btn-sm btn-block">
                Send Message
            </Link>
        </div>
    </div>

    <div className="mt-2.5">
        <div className="bt-1-ddd pt-2.5 pb-10">
            <div className="pull-left mr-1.5">
                <span className="fa fa-flag"></span>
            </div>
            <div className="overflow-hidden">
                Country:
                <span>
                    Nigeria
                </span>
            </div>
        </div>
        <div className="bt-1-ddd pt-2.5 pb-10">
            <div className="pull-left mr-1.5">
                <span className="fa fa-user-circle"></span>
            </div>
            <div className="overflow-hidden">
                Member Since:
                <span>
                    Jan 11, 2011
                </span>
            </div>
        </div>
    </div>
</div>

<div className="section p-0">
    <div>

        <ul className="nav nav-tabs posla-tabs posla-tabs-2">
            <li className="nav-item">
                <Link to="#buyer-stats" data-toggle="tab" className="nav-link p-2.5">
                    <div className="text-center">
                        Buyer's Stats
                    </div>
                </Link>
            </li>
            <li className="nav-item">
                <Link to="#seller-stats" data-toggle="tab" className="nav-link p-2.5 active">
                    <div className="text-center">
                        Seller's Stats
                    </div>
                </Link>
            </li>
        </ul>
    
        <div className="tab-content mt-5">
            <div className="tab-pane" id="buyer-stats">
                <div className="text-fade text-small pr-2.5 pl-2.5">
                    Information displayed below is in respect to the buyer's section of this user only.
                </div>

                <div className="text-left-right text-left-right-70-30 mt-5">
                    <div className="bt-1-eee">
                        <div>
                            <span className="fa fa-file"></span>
                            <div className="overflow-hidden">
                                Projects Posted:
                            </div>
                        </div>
                        <div className="text-right pr-2.5">
                            117
                        </div>
                    </div>
                    <div className="bt-1-eee">
                        <div>
                            <span className="fa fa-star"></span>
                            <div className="overflow-hidden">
                                Projects Issuance:
                            </div>
                        </div>
                        <div className="text-right pr-2.5">
                            4.5
                        </div>
                    </div>
                    <div className="bt-1-eee">
                        <div>
                            <span className="fa fa-users"></span>
                            <div className="overflow-hidden">
                                Sellers worked with:
                            </div>
                        </div>
                        <div className="text-right pr-2.5">
                            2
                        </div>
                    </div>
                </div>

            </div>
            <div className="tab-pane active" id="seller-stats">

                <div className="text-fade text-small pr-2.5 pl-2.5">
                    Information displayed below is in respect to the seller's section of this user only.
                </div>

                <div className="text-left-right text-left-right-70-30 mt-5">
                    <div className="bt-1-eee">
                        <div>
                            <span className="fa fa-file"></span>
                            <div className="overflow-hidden">
                                Projects Completed:
                            </div>
                        </div>
                        <div className="text-right pr-2.5">
                            117
                        </div>
                    </div>
                    <div className="bt-1-eee">
                        <div>
                            <span className="fa fa-star"></span>
                            <div className="overflow-hidden">
                                Overall Rating:
                            </div>
                        </div>
                        <div className="text-right pr-2.5">
                            4.5
                        </div>
                    </div>
                    <div className="bt-1-eee">
                        <div>
                            <span className="fa fa-users"></span>
                            <div className="overflow-hidden">
                                Buyers worked with:
                            </div>
                        </div>
                        <div className="text-right pr-2.5">
                            83
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>

<div className="section">
    <div className="section-title">
        Description
    </div>
    <div>
        
        <div>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </div>

    </div>
</div>

<div className="section">
    <div className="section-title">
        Languages
    </div>
    <div>

        <div>
            English
            -
            Fluent
        </div>

        <div className="mt-1.5">
            French
            -
            Average
        </div>

        <div className="mt-1.5">
            Spanish
            -
            Average
        </div>

    </div>
</div>

<div className="section">
    <div className="section-title">
        Skillset
    </div>
    <div>
        <div className="mt-0 item-labels item-labels-tags-all">

            <div className="item-labels-tags">
                hgqwjdknq
            </div>
        
            <div className="item-labels-tags">
                qwd
            </div>
        
            <div className="item-labels-tags">
                yukyukuy
            </div>
        
            <div className="item-labels-tags">
                ersdvcass
            </div>
        
            <div className="item-labels-tags">
                bnvbnvb
            </div>
            
        </div>
    </div>
</div>