  <!--== Start Header Wrapper ==-->
    <header class="header-area header-default sticky-header">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-between">

          <!-- Header Logo Start -->
          <div class="col-auto">
            <div class="header-logo-area">
              <a href="{{route('home')}}">
                <img class="logo-main" src="/img/logo.png" alt="Logo" />
                <img class="logo-light" src="/img/logo.png" alt="Logo" />
              </a>
            </div>
          </div>
          <!-- Header Logo End -->

          <!-- Hamburger Menu Start -->
          <div class="col-auto">
              <ul class="main-menu nav justify-content-center header-navigation-web ">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            <div class="header-navigation-area d-none">
              <ul class="main-menu nav justify-content-center">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            <div class="header-action-area header-navigation-area">
              <button class="btn-menu">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <span class="menu-text">Menu</span>
            </div>
          </div>
          <!-- Hamburger Menu Start -->     

          <!-- Header Search Start -->
          <div class="col-auto d-none">
              <div class="header-search">
                <a href="javascript:void(0)" class="header-search-toggle"><i class="icofont-search-1"></i></a>
              </div>
          </div>
          <!-- Header Search Start -->
        </div>
      </div>
    </header>
    <!--== End Header Wrapper ==-->
