@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('contact.title')}}</h2>
            <ol>
              <li><a href="/">{{__('contact.home')}}</a></li>
              <li>{{__('contact.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container w-75 mx-auto">
          <h4>{{__('contact.title')}}</h4>
          <p style="margin-left: 2rem">{{__('contact.subtitle')}}</p>
        </div>
        <div class="contrainer my-5">
        
  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.755140958219!2d104.90047345129959!3d11.569403191746073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517869c35db1%3A0x544bdc3a90bb4aa7!2sInstinct%20Institute!5e0!3m2!1sen!2skh!4v1654071062273!5m2!1sen!2skh" style="width: 100%; min-height: 26rem;border:none" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
        </div>
        <div class="container w-75 mx-auto row">
          <div class="col-md-4 col-12">
            <div class="card border-0 bg-secondary bg-opacity-10 rounded-0" style="height: 8rem">
              <div class="row mt-4">
                <svg style="width: 3rem; margin-left: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                </svg>              
                {{__('contact.address')}}
              </div>
              <small class="w-75 mx-auto my-2 text-center">#29, Street 112, Sangkat Psar Depo 3
                Khan Tuol Kok, Phnom Penh, Cambodia</small>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="card border-0 bg-secondary bg-opacity-10 rounded-0" style="height: 8rem">
              <div class="row mt-4">
                <svg style="width: 3rem; margin-left: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>                
                {{__('contact.phone')}}
              </div>
              <div class="w-75 mx-auto my-2 text-left">
                <small>(+855) 23 655 6 168</small>
                <br>
                <small>(+855) 76 6 8888 38</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="card border-0 bg-secondary bg-opacity-10 rounded-0" style="height: 8rem">
              <div class="row mt-4">
                <svg style="width: 3rem; margin-left: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                  <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>                
                {{__('contact.email')}}
              </div>
              <small class="w-75 mx-auto my-2">info@instinct.edu.kh</small>
            </div>
          </div>
        </div>
      </section>
      

    @endsection
    