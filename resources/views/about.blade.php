@extends('layout.app')

@section('title', 'About US')

@section('content')
     <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <div class="page-title-area">
      <div class="container">
        <div class="row">
          {{-- <div class="col-lg-12" data-aos="fade-up">
            <div class="page-title-content content-style2 text-center">
              <h4 class="page-title">About</h4>
              <h2 class="title">We Are Graphics2Prints Studio</h2>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="thumb" data-aos="fade-up" data-aos-delay="300"><img class="w-100 section overlay" src="/img/photos/w4.jpg" alt="Alexis-Image"></div>
    </div>
    <!--== End Page Title Area ==-->

    <!--== Start Service Area Wrapper ==-->
    <div class="service-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-8 mb-sm-50 mb-md-70" data-aos="fade-up">
            <h2 class="title">Message from the manager !</h2>
            <p>We invite you into our world of creativity, quality and timeliness, where excellent creative design
            and print interplay under one roof. The next few pages showcases some of our products and
            solutions. What we do look for in client relationships is some understanding of, and appreciation for,
            good design,print,product and the value this can bring.<br/> So, if this all makes sense and you like what
            you see, then we'd like to work with YOU.
            </p>
          </div>
          <div class="col-lg-4 col-xl-3 offset-xl-1" data-aos="fade-up" data-aos-delay="300">
            <h2 class="title">Our Services</h2>
            <ul>
              <li><a href="{{route('portfolio')}}">360 PRINTS</a></li>
              <li><a href="{{route('portfolio')}}">360 ENGRAVE</a></li>
              <li><a href="{{route('portfolio')}}">360 GIFTS</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--== End Service Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <div class="team-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <h2 class="title">Message from the team</h2>
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </div>
    <!--== End Team Area Wrapper ==-->
    <!--== Start Quote Area Wrapper ==-->
    <div class="blockquote-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <blockquote class="blockquote-style">
              <p>"The possibilities inherent in any organisation is not just tied to it’s infrastructure, but to a greater
              extent its workforce.<br/> We have our fair share of the best hands in personel. "</p>
              <cite>
                <span class="name">Dolapo</span>
                <span class="job">CEO's Overview</span>
              </cite>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <!--== End Quote Area Wrapper ==-->

    <!--== Start Award Area Wrapper ==-->
    {{-- <div class="award-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <h2 class="title">Awards Achieved</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="award-content">
              <div class="award-item" data-aos="fade-up" data-aos-delay="300">
                <div class="award-year">2017</div>
                <div class="content">
                  <div class="item">
                    <p>500px</p>
                    <h4>Photo Of The Years for <span>Emila</span></h4>
                  </div>
                  <div class="item">
                    <p>Unsplash</p>
                    <h4>Honorable Mention for <span>Listofy Stream Music App</span></h4>
                  </div>
                  <div class="item">
                    <p>Pexel</p>
                    <h4>Gold In Digital Craft for <span>Biford</span></h4>
                  </div>
                </div>
              </div>
              <div class="award-item" data-aos="fade-up" data-aos-delay="600">
                <div class="award-year">2016</div>
                <div class="content">
                  <div class="item">
                    <p>500px</p>
                    <h4>Coporate Social Responsiblity for <span>ABC</span></h4>
                  </div>
                  <div class="item">
                    <p>Shutterstocks</p>
                    <h4>Best Showcase for <span>Gym App</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!--== End Award Area Wrapper ==-->

    <!--== Start Brand Area Wrapper ==-->
    <div class="brand-logo-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <h2 class="title">Our Clients</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <div class="swiper-container brand-logo-slider-container">
              <div class="swiper-wrapper brand-logo-slider">
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/1.png" alt="Federal"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/2.png" alt="Lagos State Goverment"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/3.png" alt="IHS Logo"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/4.png" alt="Haier Thermocool Logo"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/5.png" alt="Shushi Logo"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="m-2"></div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <div class="swiper-container brand-logo-slider-container">
              <div class="swiper-wrapper brand-logo-slider">
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/6.png" alt="FCMB-Logo"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/7.png" alt="Brents-Logo"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/8.png" alt="Andela-Logo"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/9.png" alt="American-Honey-Logo"></a>
                </div>
                <div class="swiper-slide brand-logo-item">
                  <a href="#"><img src="/img/brand-logo/10.png" alt="Alexis-Brand-Logo"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Area Wrapper ==-->
  </main>

@endsection