@extends('client.layouts.master')

    @section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Change Password</h2>
              <ol>
                <li><a href="/">Home</a></li>
                <li>Change Password</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-6">
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
    
              <div class="col-lg-6">
                <div class="app-card app-card-settings shadow-sm p-4">
						    
                    <div class="app-card-body">
                        <form class="settings-form" method="post" action="/profile/store/change-password">
                            @method('PATCH')
                            @csrf
                            
                            <div class="old_password mb-3">
								<label class="sr-only" for="signin-old-password">Old Password</label>
								<input id="signin-old-password" type="password" class="form-control signin-password" name="old_password" placeholder="Old Password" required="required">
							</div><!--//form-group-->
                            <div class="password mb-3">
								<label class="sr-only" for="signin-new-password">New Password</label>
								<input id="signin-new-password" type="password" class="form-control signin-password" name="new_password" placeholder="New Password" required="required">
							</div><!--//form-group-->
                            <div class="password mb-3">
								<label class="sr-only" for="signin-new-password_confirmation">Confirm New Password</label>
								<input id="signin-new-password_confirmation" type="password" class="form-control signin-password_confirmation" name="new_password_confirmation" placeholder="New Password Confirmation" required="required">
							</div><!--//form-group-->


                            <button type="submit" class="btn btn-outline-success my-2" >Update Password</button>
                        </form>
                    </div><!--//app-card-body-->
                    
                </div><!--//app-card-->
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
        </main><!-- End #main -->


    @endsection