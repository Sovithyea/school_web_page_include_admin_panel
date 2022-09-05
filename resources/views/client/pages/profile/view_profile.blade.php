@extends('client.layouts.master')

    @section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Your Profile</h2>
              <ol>
                <li><a href="/">Home</a></li>
                <li>Your Profile</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                      <img src="{{asset('assets/img/rose-g26c09eb4f_1920.jpg')}}" alt="">
                    </div>
                    
    
                    <div class="swiper-slide">
                        <img src="{{asset('assets/img/flower-ga169f725a_1920.jpg')}}" alt="">
                    </div>
      
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Profile information</h3>
                  <ul>
                    <li><strong>First Name</strong>: {{$user->firstname}}</li>
                    <li><strong>Last Name</strong>: {{$user->lastname}}</li>
                    <li><strong>Username</strong>: {{$user->username}}</li>
                    <li><strong>Gender</strong>: {{$user->gender}}</li>
                    <li><strong>Email</strong>: {{$user->email}}</li>
                    <li><strong>Phone Number</strong>: {{$user->phonenumber}}</li>
                  </ul>
                  <div class="row">
                    <div class="col-md-6"><a href="/profile/edit" class="btn btn-outline-secondary">Edit Profile</a></div>
                    <div class="col-md-6"><a href="/profile/delete" class="btn btn-outline-danger">Delete Account</a></div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
        </main><!-- End #main -->


    @endsection