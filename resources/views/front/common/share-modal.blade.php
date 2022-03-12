<div className="modal" id="shareModal">
    <div className="modal-dialog">
        <div className="modal-content">

            <div className="modal-header">
                <h4 className="modal-title">Share</h4>
                <button type="button" className="close" data-dismiss="modal">&times;</button>
            </div>

            <div className="modal-body">
                
                <div className="connection-modal">
                    
                    <div className="connection-modal-single">

                        <div className="form-group mx-auto mt-5" style="max-width: 350px;">
                            <label>Direct Link</label>
                            <div className="input-group">
                                <input type="text" className="form-control readonly" id="direct-share-link" onfocus="highlightShareLink()" readonly
                                value="share_link" />
                                <button type="button" className="btn btn-blue btn-sm" onclick="copyShareLink()" style="border-radius: 0 !important; height: 35px;">
                                    <i className="fa fa-copy"></i>
                                    Copy
                                </button>
                            </div>
                        </div>

                    </div>    

                    <div className="text-center bt-1-ddd bb-1-ddd pt-2.5 pb-10 mt-5 mb-5 mr-65 ml-65">
                        Share on Social Media
                    </div>

                    <div className="connection-modal-social">


                        <Link to="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" className="fb_color_bg">
                            <span className="fab fa-facebook-f"></span>
                        </Link>

                        <Link to="https://twitter.com/home?status=" className="twitter_color_bg" target="_blank">
                            <span className="fab fa-twitter"></span>
                        </Link>

                        <Link to="whatsapp://send?text=" target="_blank" className="whatsapp_color_bg">
                            <span className="fab fa-whatsapp"></span>
                        </Link>

                        <Link to="mailto:?subject=share_text&body=" target="_blank" style="background: #f66;">
                            <span className="fa fa-envelope"></span>
                        </Link>

                        <Link to="https://www.linkedin.com/shareArticle?mini=true&url=" target="_blank" className="linkedin_color_bg">
                            <span className="fab fa-linkedin"></span>
                        </Link>

                        <Link to="http://pinterest.com/pin/create/button/?url=" target="_blank" className="pinterest_color_bg">
                            <span className="fab fa-pinterest"></span>
                        </Link>

                    </div>

                </div>    

            </div>

            <div className="modal-footer">
                {/*<button type="button" className="btn btn-danger btn-sm" data-dismiss="modal">Close</button> */}
            </div>

        </div>
    </div>
</div>
