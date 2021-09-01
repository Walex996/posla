<div class="modal" id="shareModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Share</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                
                <div class="connection-modal">
                    
                    <div class="connection-modal-single">

                        <div class="form-group mx-auto mt-20" style="max-width: 350px;">
                            <label>Direct Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control readonly" id="direct-share-link" onfocus="highlightShareLink()" readonly
                                value="<?=$share_link;?>" />
                                <button type="button" class="btn btn-blue btn-sm" onclick="copyShareLink()" style="border-radius: 0 !important; height: 35px;">
                                    <i class="fa fa-copy"></i>
                                    Copy
                                </button>
                            </div>
                        </div>

                    </div>    

                    <div class="text-center bt-1-ddd bb-1-ddd pt-10 pb-10 mt-20 mb-20 mr-65 ml-65">
                        Share on Social Media
                    </div>

                    <div class="connection-modal-social">


                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$share_text . $share_link;?>" target="_blank" class="fb_color_bg">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="https://twitter.com/home?status=<?=$share_text . $share_link;?>" class="twitter_color_bg" target="_blank">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="whatsapp://send?text=<?=$share_text . $share_link;?>" target="_blank" class="whatsapp_color_bg">
                            <span class="fab fa-whatsapp"></span>
                        </a>

                        <a href="mailto:?subject=<?=$share_text;?>&body=<?=$share_text . $share_link;?>" target="_blank" style="background: #f66;">
                            <span class="fa fa-envelope"></span>
                        </a>

                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$share_text . $share_link;?>" target="_blank" class="linkedin_color_bg">
                            <span class="fab fa-linkedin"></span>
                        </a>

                        <a href="http://pinterest.com/pin/create/button/?url=<?=$share_text . $share_link;?>" target="_blank" class="pinterest_color_bg">
                            <span class="fab fa-pinterest"></span>
                        </a>

                    </div>

                </div>    

            </div>

            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button> --}}
            </div>

        </div>
    </div>
</div>
