@extends('client.layouts.master')

    @section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Edit Profile</h2>
              <ol>
                <li><a href="/">Home</a></li>
                <li>Edit Profile</li>
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
                        <form class="settings-form" method="post" action="/profile/update">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">First Name:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg></span></label>
                                <input type="text" class="form-control"  placeholder="Enter First Name" value="{{$user->firstname}}" id="setting-input-1" name="firstname" required>
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Last Name:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg></span></label>
                                <input type="text" class="form-control"  placeholder="Enter Last Name" value="{{$user->lastname}}"  id="setting-input-2" name="lastname" required>
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">Username:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg></span></label>
                                <input type="text" class="form-control"  placeholder="Enter Username"  id="setting-input-3" value="{{$user->username}}" name="username" required>
                            </div>

                                
                            <div class="mb-3">
                                <label for="setting-input-4" class="form-label">Email:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg></span></label>
                                <input type="email" class="form-control"  placeholder="Enter Email"  id="setting-input-4" name="email" value="{{$user->email}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-5" class="form-label">Gender:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg></span></label>
                                <select  name="gender" class="form-control" id=setting-input-5>
                                    <option>Choose</option>
                                    <option @if ($user->gender == 'male') selected @endif value="male">Male</option>
                                    <option @if ($user->gender == 'female') selected @endif value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-6" class="form-label">Phone Number:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg></span></label>
                                <input type="number" class="form-control"  placeholder="Enter Phone Number" value="{{$user->phonenumber}}"  id="setting-input-6" name="phonenumber" required>
                            </div>


                            <button type="submit" class="btn btn-outline-success my-2" >Update Profile</button>
                        </form>
                    </div><!--//app-card-body-->
                    
                </div><!--//app-card-->
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
        </main><!-- End #main -->


    @endsection