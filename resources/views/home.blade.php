@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    
    <!-- Slider/Intro Section Start -->
    <div class="intro-slider-wrap section">
        <div class="intro-slider">
            <div class="intro-section section overlay" data-bg-img="img/photos/1.jpg">
                <div class="container">
                    <div class="row row-cols-lg-1 row-cols-1">

                        <div class="col align-self-center">
                            <div class="intro">
                                <div class="intro-logo-container">
                                <a href="{{route('portfolio')}}" alt="360 Prints" ><img src="img/photos/print.png" alt="" /></a>
                                <a href="{{route('portfolio')}}" alt="360 Gift" ><img src="img/photos/gift.png" alt="" /></a>
                                <a href="{{route('portfolio')}}" alt="360 Engraving" ><img src="img/photos/engrave.png" alt="" /></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="swiper-pagination home1-slider-pagination"></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->

    <main class="main-content site-wrapper-reveal">
      <!--== Start Hero Area Wrapper ==-->
      <div class="home-slider-area slider-photographer">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-11 col-xl-10 m-auto">
              <div class="slider-content-area" data-aos="fade-up">
                <h5>Graphics 2 Prints pride itself as a most innovative print production company. Founded in the year, 
                  <br> 2002 with it&apos;s lead operational base in Lagos, Nigeria and representatives spread across the nation and UK. It is run and managed by seasoned veterans all with unique creative abilities that has
                  <br>become the pedestal for the company to remain in the forefront.</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--== End Hero Area Wrapper ==-->
    <!--== Start Portfolio Area Wrapper ==-->
    @component('components.portfolio', ['categories' => $categories, 'first_category' => $first_category])
    @endcomponent
    <!--== End Portfolio Area Wrapper ==-->
    </main>
@endsection