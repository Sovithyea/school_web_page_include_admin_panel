<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignment Laravel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v4.8.1
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid w-75 mx-auto d-flex align-items-center">

      <div class="logo me-auto">
        <a href="/"><img src="{{asset('assets/img/logo school.jpg')}}" width="125px"/></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            @include('client.layouts.alert')
          </li>
          <li><a class="nav-link scrollto" href="/course">{{__('header.course')}}</a></li>
          <li><a class="nav-link scrollto" href="/about">{{__('header.about')}}</a></li>
          <li><a class="nav-link scrollto " href="/study-tip">{{__('header.study-tip')}}</a></li>
          <li><a class="nav-link scrollto" href="/event">{{__('header.event')}}</a></li>
          <li><a class="nav-link scrollto" href="/contact">{{__('header.contact')}}</a></li>
          <li class="dropdown"><a href="#"><span>{{Auth::user() ? ('Welcome! ') . Auth::user()->username : 'Guest'}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @auth
                <li><a href="/profile/show">{{__('header.view-profile')}}</a></li>
                <li><a href="/profile/edit">{{__('header.edit-profile')}}</a></li>
                <li><a href="/profile/change-password">{{__('header.change-password')}}</a></li>
                <li><a href="/logout">{{__('header.logout')}}</a></li>
              @else
                <li><a href="/login">{{__('header.login')}}</a></li>
                <li><a href="/register">{{__('header.register')}}</a></li>
                <li><a href="/forget-password">{{__('header.forgot')}}</a></li>
              @endauth
            </ul>
          </li>
          <li class="dropdown" style="margin-left: 1rem">
            @if(session()->get('locale') == 'en')
              <img src="{{ asset('assets/img/en.png') }}" height="30rem"/>  
            @else
              <img src="{{ asset('assets/img/km.png') }}" height="30rem"/>  
            @endif
            <ul>
              @if (session()->get('locale') == 'en')
                <li><a href="/lang/km"><img src="{{ asset('assets/img/km.png') }}" height="30rem"/>  </a></li>
              @else
                <li><a href="/lang/en"><img src="{{ asset('assets/img/en.png') }}" height="30rem"/>  </a></li>
              @endif
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
