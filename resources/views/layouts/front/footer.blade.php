<footer id="footer" className="">
    <div className="footer-top">
      <div className="container">
        <div className="row">

          <div className="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('/img/app/icons/logo-colored-orange.png') }}" className="dp-contain" alt="Posla">
            <p className="mt-2.5">
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
            <Link to="{{url('/about')}}" className="underline">Read More</Link>
            </p>
          </div>

          <div className="col-lg-3 col-md-6 footer-links">
            <h4>Get Started</h4>
            <ul>
              <li><i className="fa fa-angle-right"></i> <Link to="/deals/create/rule">Post Deals</Link></li>
              <li><i className="fa fa-angle-right"></i> <Link to="/deals">Find Deals</Link></li>
              <li><i className="fa fa-angle-right"></i> <Link to="/account/projects/create">Post Projects</Link></li>
              <li><i className="fa fa-angle-right"></i> <Link to="/">Find Projects</Link></li>
              <li><i className="fa fa-angle-right"></i> <Link to="/search">Search All</Link></li>
            </ul>
          </div>

          <div className="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><i className="fa fa-angle-right"></i> <Link to="{{url('/about')}}">About Us</Link></li>
                <li><i className="fa fa-angle-right"></i> <Link to="{{url('/support')}}">Support Center</Link></li>
                <li><i className="fa fa-angle-right"></i> <Link to="{{url('/terms')}}">Terms of Use</Link></li>
                <li><i className="fa fa-angle-right"></i> <Link to="{{url('/terms#payment')}}">Payment Policy</Link></li>
                <li><i className="fa fa-angle-right"></i> <Link to="{{url('/terms#refund')}}">Refunds Policy</Link></li>
              </ul>
          </div>

          <div className="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              4, Jefferson street, Lekki Phase 1, Lekki, Lagos.
              <strong>Phone:</strong>
              <Link to="tel:08012345678">0801-234-5678</Link>,
              <Link to="tel:08012345678">0801-234-5678</Link>
              <br />
              <strong>Email:</strong>
              <Link to="mailto:info@posla.com">info@posla.com</Link>
            </p>

            <div className="social-links">
              <Link target="_blank" to="" title="Visit our YouTube Channel" className="youtube"><i className="fab fa-youtube"></i></Link>
              <Link target="_blank" to="" title="" className="facebook"><i className="fab fa-facebook"></i></Link>
              <Link target="_blank" to="" title="" className="twitter"><i className="fab fa-twitter"></i></Link>
              <Link target="_blank" to="" title="" className="instagram"><i className="fab fa-instagram"></i></Link>
              <Link target="_blank" to="" title="" className="linkedin"><i className="fab fa-linkedin"></i></Link>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div className="container">
      <div className="copyright">
        &copy; Copyright <?=date("Y");?> <Link to="{{url('/')}}" className="font-bold hover-underline">Posla.com</Link> All Rights Reserved
      </div>
    </div>
  </footer>