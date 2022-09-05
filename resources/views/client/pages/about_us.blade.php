@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('about.title')}}</h2>
            <ol>
              <li><a href="/">{{__('about.home')}}</a></li>
              <li>{{__('about.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container w-75 mx-auto">
          <h4>{{__('about.subtitle')}}</h4>
          <p>{{__('about.sentence01')}}</p>
          <br>
          <p>{{__('about.sentence02')}}</p>
          <br>
          <p>{{__('about.ul01')}}</p>
          <ul style="list-style-type: none;">
            <li>{{__('about.li01')}}</li>
            <li>{{__('about.li02')}}</li>
            <li>{{__('about.li03')}}</li>
          </ul>
          <p>{{__('about.ul02')}}</p>
          <ul style="list-style-type: none;">
            <li>{{__('about.li04')}}</li>
            <li>{{__('about.li05')}}</li>
            <li>{{__('about.li06')}}</li>
            <li>{{__('about.li07')}}</li>
            <li>{{__('about.li08')}}</li>
          </ul>
        </div>
      </section>

    @endsection
    