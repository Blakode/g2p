
    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-area reveal-footer border-top-style">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="footer-content">

              <div class="widget-item">
                <div class="widget-footer-nav">
                  <nav>
                    <ul>
                      <li><a href="#">term & condition</a></li>
                      <li><a href="#">policy</a></li>
                      <li><a href="#">map</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="widget-item text-center">
                <div class="about-widget">
                  <a class="footer-logo" href="{{route('home')}}">
                    <img src="/img/logo.png" alt="Logo">
                  </a>
                </div>
                <div class="widget-copyright">
                  <p>© {{ date("Y") }} <span>Graphics2Prints</span>
                </div>
              </div>
              <div class="widget-item">
                <ul class="widget-social">
                    <li class="social-text"><span>Follow us on social:</span></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100085467233190&mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/graphics2prints?igsh=amRnaGptbTNkZDF4"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
      <div class="off-canvas-inner">
        <div class="off-canvas-overlay"></div>
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
          <!-- Off Canvas Header -->
          <div class="off-canvas-header">
            <div class="close-action">
              <button class="btn-close"><i class="icon_close"></i></button>
            </div>
          </div>

          <div class="off-canvas-item">
            <!-- Start Asside Menu Wrapper -->
            <div class="asside-navigation-area">
              <ul class="asside-menu nav" id="assideMenuNav">
                <li><a class="active" href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            <!-- End Asside Menu Wrapper -->
          </div>
          <!-- Off Canvas Footer -->
          <div class="off-canvas-footer"></div>
        </div>
        <!-- End Off Canvas Content Wrapper -->
      </div>
    </aside>
    <!--== End Side Menu ==-->
  </div>