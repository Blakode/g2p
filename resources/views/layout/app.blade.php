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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
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

    @include('layout.header')

@yield('content')

       <a href="https://wa.me/message/7YOCPKJ3M27PE1" class="float" target="_blank">
             <i class="fab fa-whatsapp my-float"></i>
        </a>
    @include('layout.footer')

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