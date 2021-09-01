
                <div class="section">
                    <div class="section-title">
                        Active Deals (6)
                        <a href="/account/deals" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div>
                        {{-- maximum of 3 deals where status == active --}}

                        <div class="deal-list deal-list-mini row">
                            <div class="col-sm-6 col-lg-4">
                                @include('front.common.deal')
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                @include('front.common.deal')
                            </div>
                            <div class="col-sm-6 col-lg-4 d-none d-lg-block">
                                @include('front.common.deal')
                            </div>
                        </div>
                        <div>
                            <a href="/account/deals" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                                View All Deals
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="section">
                    <div class="section-title">
                        Active Projects (6)
                        <a href="/account/projects" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div>
                        <div class="project-list project-list-wide">
                            {{-- maximum of 3 projects where status == active --}}
                            @include('front.common.project')
                        </div>
                    </div>
                    <div>
                        <a href="/account/projects" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Projects
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 col-md-12 col-lg-6">
                        <div class="section">
                            <div class="section-title">
                                Stats - Seller
                            </div>
                            <div>
                                <div class="tab-pane container p-0" id="price_3_premium">
                                    <div class="text-left-right text-left-right-60-40">
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-file"></span>
                                                <div class="overflow-hidden">
                                                    Projects Completed:
                                                </div>
                                            </div>
                                            <div>
                                                117
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-star"></span>
                                                <div class="overflow-hidden">
                                                    Overall Rating:
                                                </div>
                                            </div>
                                            <div>
                                                4.5
                                            </div>
                                        </div>
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-users"></span>
                                                <div class="overflow-hidden">
                                                    Buyers worked with:
                                                </div>
                                            </div>
                                            <div>
                                                83
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-6">
                        <div class="section">
                            <div class="section-title">
                                Stats - Buyer
                            </div>
                            <div>
                                <div class="tab-pane container p-0" id="price_3_premium">
                                    <div class="text-left-right text-left-right-60-40">
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-file"></span>
                                                <div class="overflow-hidden">
                                                    Projects Posted:
                                                </div>
                                            </div>
                                            <div>
                                                3
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <span class="fa fa-star"></span>
                                                <div class="overflow-hidden">
                                                    Projects Issuance:
                                                </div>
                                            </div>
                                            <div>
                                                2
                                            </div>
                                        </div>
                                        <div class="bg-eee">
                                            <div>
                                                <span class="fa fa-users"></span>
                                                <div class="overflow-hidden">
                                                    Sellers worked with:
                                                </div>
                                            </div>
                                            <div>
                                                2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section">
                    <div class="section-title">
                        My Reviews
                    </div>
                    <div>
                        <div class="rating-box rating-box-lg mt-5">
                            <div>
                                <div></div>
                                <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                            </div>
                            <div class="font-bold text-orange">
                                5.0
                            </div>
                        </div>
                    </div>
                    <div class="p-20 pb-0 mb-20 b-1-ddd">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="reviews-summary">
                                    <div>
                                        Seller communication level
                                        <span class="font-bold">(4.5)</span>
                                    </div>
                                    <div>
                                        <div style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="reviews-summary">
                                    <div>
                                        Seller communication level
                                        <span class="font-bold">(4.5)</span>
                                    </div>
                                    <div>
                                        <div style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="reviews-summary">
                                    <div>
                                        Seller communication level
                                        <span class="font-bold">(4.5)</span>
                                    </div>
                                    <div>
                                        <div style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="reviews-summary">
                                    <div>
                                        Seller communication level
                                        <span class="font-bold">(4.5)</span>
                                    </div>
                                    <div>
                                        <div style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="reviews-summary">
                                    <div>
                                        Seller communication level
                                        <span class="font-bold">(4.5)</span>
                                    </div>
                                    <div>
                                        <div style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title">
                        1809 Reviews
                        <a href="/account/reviews" class="btn btn-transparent-black btn-xs pull-right hover-bg-orange">View All</a>
                    </div>
                    <div>
                        
                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>
                        
                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>
                        
                        <div class="user-msg b-1-eee">
                            <div class="overflow-hidden">
                                <div class="user-msg-img pull-left">
                                    <img src="{{asset('img/app/samples/user.png')}}" alt="Firstname lastname" class="dp-contain" />
                                </div>
                                <div class="pull-right d-none d-sm-block">
                                    <div class="rating-box mt-5">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="font-bold">
                                        Firstname Lastname
                                    </div>
                                    <div class="text-fade">
                                        Published: Jan 12, 2019
                                    </div>
                                    <div class="rating-box d-block d-sm-none">
                                        <div>
                                            <div></div>
                                            <div style="width: 75%;"></div> {{-- put product rating here (in percentage) --}}
                                        </div>
                                        <div class="font-bold text-orange">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 font-normal text-justify">
                                I've worked with Kristen twice now. I have never worked with a graphic designer before and she's truly the best. Such a great lady and works really hard to make her customers satisfied. She is also really talented, open to ideas and works fast.
                            </div>
                        </div>

                        <a href="/account/reviews" class="d-block text-center pt-10 pb-10 b-1-ddd bg-eee hover-bg-orange">
                            View All Reviews
                            <span class="fa fa-angle-right"></span>
                        </a>
                        
                    </div>
                </div>