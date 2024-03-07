@extends('layout.app')

@section('title', 'Portfolio')

@section('content')
      
  <main class="main-content site-wrapper-reveal">
    <!--== Start Hero Area Wrapper ==-->
    <div class="home-slider-area slider-photographer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-11 col-xl-10 m-auto">
            <div class="slider-content-area" data-aos="fade-up">
              <h5>If you’re ready for a brand experience you’d always relish; Speed and solutions that suit your budget,
                please lets meet you for a briefing.
                We will go all the length to make it worth your while.</h5>
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

