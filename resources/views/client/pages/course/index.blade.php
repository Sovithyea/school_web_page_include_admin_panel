@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('course.title')}}</h2>
            <ol>
              <li><a href="/">{{__('course.home')}}</a></li>
              <li>{{__('course.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container">
          <p>
            {{__('course.subtitle')}}
          </p>
          <a href="/course" class="btn btn-primary rounded-0 mx-2">All Courses</a>
          {{-- <a href="/course" class="btn btn-info">Reset</a> --}}
          @foreach ($course_types as $course_type)
            <a href="/course?c={{$course_type->id}}" class="btn btn-primary rounded-0 mx-2 my-5">{{$course_type->title}}</a>
          @endforeach
          <div class="row course_wrap">
            @foreach ($courses as $course)
              <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <a href="course/{{$course->id}}/show">									
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top img-fluid" src="{{asset('storage/'.$course->image)}}" style="height: 250px">

                  <!-- Text Overlay -->
                  
                  <h4 class="my-3 text-center">{{$course->title}}</h4>
                  
                </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="d-flex my-3 mx-auto">
          {!! $courses->links() !!}
        </div>
      </section>

    @endsection
    