@extends('layout.admin')

@section('title', 'Portfolio Details')

@section('content')
<div class='box-besidebar'>
    <div class="row ml-15 p-4">
<main class="main-content site-wrapper-reveal">
    <!--== Start Portfolio Area Wrapper ==-->
    <div class="portfolio-area portfolio-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-content">
              <div class="content" data-aos="fade-up">
                 <a href="{{route('portfolio')}}"><p class="category">Category</p></a>
                <h3 class="title">{{  $categoryDetails->name }}</h3>
              </div>
              <div class="portfolio-info">
                <div class="row">
                  <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up">
                    <div class="info-item">
                      <span>Client</span>
                      {{ $categoryDetails->client}}
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-item">
                      <span>Date</span>
                      {{$categoryDetails->date}}
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="info-item">
                      <span>Team</span>
                      Graphics2Prints
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="900">
                    <div class="info-item style-two">
                      <span>Services</span>
                     {{$categoryDetails->services}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-content" data-aos="fade-up">
                <p>{{$categoryDetails->description}}</p>
              </div>

               @foreach ($categoryDetails->images as $image)
                        <div class="thumb section-padding-bottom" data-aos="fade-up" data-aos-delay="300">
                            <!-- Add your image HTML, using $image data -->
                            <img class="w-60" src="{{Storage::url($image->url) }}" alt="Image">
                        </div>
                    @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Portfolio Area Wrapper ==-->
    </main>
   </div>

</div>
@endsection