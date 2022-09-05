@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>{{__('home.welcome')}}<span>{{__('home.name')}}</span></h1>
      <h2>{{__('home.subtitle01')}}</h2>
      <h2>{{__('home.subtitle02')}}</h2>
      <a href="/course" class="btn-get-started scrollto">{{__('home.button01')}}</a>
    </div>
  </section><!-- End Hero -->
      <section class="inner-page my-5">
        <div class="container">
          <h2 class="text-primary text-center">{{__('home.subtitle03')}}</h2>
          <p class="text-primary text-center">{{__('home.subtitle04')}}</p>
          <div class="row  mt-5">
            <div class="col-md-4">
              <div class="card rounded-0 border-primary text-primary"">
                <div class="card-header text-center border-primary bg-white h5 py-3">
                  Information 
                  <br><br>
                  Technology
                  <br><br>
                  <span class="text-black">
                    ICT Professional
                  </span>
                  <br>
                </div>
                <!-- list group IT-->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Basic Web Development</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Advance Web Development</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Java Programming</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Flutter 2.0 Mobile Development</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Android Native App Development</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">IOS Navtive Development</span>
                      </a>
                  </li>
              </ul>
          <!--end list group-->
              </div>
            </div>
            <div class="col-md-4">
              <div class="card rounded-0 border-primary text-primary"">
                <div class="card-header text-center border-primary bg-white h5 py-3">
                  Architectural
                  <br><br>
                  Interior Design
                  <br><br>
                  <span class="text-black">
                    Professional
                  </span>
                  <br>
                </div>
                <!-- list group IT-->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Socail Media Marketing & Computer Literacy Skill</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Computer Administrator (MS Office)</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Digital Marketing with Facebook</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Digital Marketing with Google</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">SEO & Social Media Marketing Strategy</span>
                      </a>
                  </li>
              </ul>
          <!--end list group-->
              </div>
            </div>
            <div class="col-md-4">
              <div class="card rounded-0 border-primary text-primary"">
                <div class="card-header text-center border-primary bg-white h5 py-3">
                  Media
                  <br><br>
                  Graphic Design
                  <br><br>
                  <span class="text-black">
                    Professional
                  </span>
                  <br>
                </div>
                <!-- list group IT-->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Graphic Design with PS & AI</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Basic Photopraphy & Videography</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Video Editing Ae / PR / C4D</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Animation Class</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">UI/UX Design</span>
                      </a>
                  </li>
                  <li class="list-group-item border-primary">
                      <a href="#!" class="nav-link my-2">
                          <span class="course-name">Architectural with Sketchup & VRay</span>
                      </a>
                  </li>
              </ul>
          <!--end list group-->
              </div>
            </div>
          </div>
        </div>
        <div class="bg-secondary h1 text-center text-primary py-4 bg-opacity-10" style="margin-top: 3rem; height: 7rem;">
          {{__('home.subtitle05')}}
        </div>
      </section>

    @endsection
    