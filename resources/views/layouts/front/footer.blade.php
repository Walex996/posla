<footer id="footer" class="">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('/img/app/icons/logo-colored-orange.png') }}" class="dp-contain" alt="Posla">
            <p class="mt-10">
              Posla.com is a reputable freelance platform aimed at: <br>
              <ul class="list-style">
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
              
            <br>
            <a href="{{url('/about')}}" class="underline">Read More</a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Get Started</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="{{route('deals.create.rule')}}">Post Deals</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="{{route('front.deal')}}">Find Deals</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="{{url('/account/projects/create')}}">Post Projects</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="{{route('front.project')}}">Find Projects</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="{{url('/search')}}">Search All</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><i class="fa fa-angle-right"></i> <a href="{{url('/about')}}">About Us</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="{{url('/support')}}">Support Center</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="{{url('/terms')}}">Terms of Use</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="{{url('/terms#payment')}}">Payment Policy</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="{{url('/terms#refund')}}">Refunds Policy</a></li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              4, Jefferson street, Lekki Phase 1, Lekki, Lagos.
              <strong>Phone:</strong>
              <a href="tel:08012345678">0801-234-5678</a>,
              <a href="tel:08012345678">0801-234-5678</a>
              <br>
              <strong>Email:</strong>
              <a href="mailto:info@posla.com">info@posla.com</a>
            </p>

            <div class="social-links">
              <a target="_blank" href="" title="Visit our YouTube Channel" class="youtube"><i class="fab fa-youtube"></i></a>
              <a target="_blank" href="" title="" class="facebook"><i class="fab fa-facebook"></i></a>
              <a target="_blank" href="" title="" class="twitter"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="" title="" class="instagram"><i class="fab fa-instagram"></i></a>
              <a target="_blank" href="" title="" class="linkedin"><i class="fab fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <?=date("Y");?> <a href="{{url('/')}}" class="font-bold hover-underline">Posla.com</a> All Rights Reserved
      </div>
    </div>
  </footer>