@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('studyTip.title')}}</h2>
            <ol>
              <li><a href="/">{{__('studyTip.home')}}</a></li>
              <li>{{__('studyTip.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container">

          <h2 class="text-center text-primary mb-5">{{__('studyTip.subtitle')}}</h2>

          <div class="row course_wrap">
            @foreach ($study_tips as $study_tip)
              <div class="col-lg-4 col-md-6 col-sm-12 my-3">									
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top img-fluid" src="{{asset('storage/'.$study_tip->image)}}" style="height: 250px">

                  <!-- Text Overlay -->
                  
                  <a href="/study-tip/{{$study_tip->id}}/show"><h4 class="my-3 text-center">{{$study_tip->title}}</h4></a>
                  
                </div>
                </a>
            </div>
            @endforeach
        </div>

        </div>
      </section>

    @endsection
    