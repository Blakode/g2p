<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>@yield('title')</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />


  <!--== Main Style CSS ==-->
  <link href="/css/style.css" rel="stylesheet" />

</head>

<body>
  <!--wrapper start-->
  <div class="wrapper home-default-wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
    <header class="header-area header-default sticky-header">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
          <!-- Hamburger Menu Start -->
          <div class="col-auto">
            <div class="header-navigation-area d-none">
            </div>
          </div>
          <!-- Hamburger Menu Start -->

          <!-- Header Logo Start -->
          <div class="col-auto">
            <div class="header-logo-area">
              <a href="{{route('category-manage')}}">
                <img class="logo-main" src="/img/logo.png" alt="Logo" />
                <img class="logo-light" src="/img/logo.png" alt="Logo" />
              </a>
            </div>
          </div>
          <!-- Header Logo End -->
        </div>
      </div>
   
    @include('layout.sidebar')
   
    </header>
    <!--== End Header Wrapper ==-->

   


@yield('content')



      <!--=======================Javascript============================-->

  <!--=== Modernizr Min Js ===-->
  <script src="/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="/js/jquery-migrate.js"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="/js/bootstrap.min.js"></script>
  <!--=== jquery UI Min Js ===-->
  <script src="/js/jquery-ui.min.js"></script>
  <!--=== Plugin Collection Js ===-->
  <script src="/js/plugincollection.js"></script>

  <!--=== Custom Js ===-->
  <script src="/js/custom.js"></script>

</body>

</html>