@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('courseShow.title')}}</h2>
            <ol>
              <li><a href="/">{{__('courseShow.home')}}</a></li>
              <li>{{__('courseShow.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container">
          <h3>{{$course->title}} ({{$course->skill_level}})</h3>
          <div class="row">


            <div class="col-md-8 col-12 my-5">
              <img src="{{asset('storage/'.$course->image)}}" class="w-100"/>
              <div class="my-3">{!!$course->description!!}</div>
            </div>


            <div class="col-md-4 col-12 my-5">
              <div class="card mb-5">


                <div class="card-header">
                  ${{$course->price}}
                </div>


                <div class="card-body">
                  <h5 style="font-family: 'Times New Roman', Times, serif; font-weight: bold; color: red">15% Discount</h5>
                  <p>For register more than 2 peoples.</p>
                  <div style="display: flex; justify-content: space-between">
                    <div>Duration:</div>
                    <div>{{$course->duration}} Hours</div>
                  </div>
                  <div style="display: flex; justify-content: space-between">
                    <div>Skill Level:</div>
                    <div>{{$course->skill_level}}</div>
                  </div>
                  <div style="display: flex; justify-content: space-between">
                    <div>Start Class:</div>
                    <div>{{$course->start_class}}</div>
                  </div>
                </div>


                <div class="card-footer">
                  <a href="#" class="btn btn-primary btn-sm">Take This Course</a>
                </div>
              </div>

              @foreach ($similars as $similar)
              
              <div class="row my-3">
                <div class="col-md-5">
                  <a href="/course/{{$similar->id}}/show">
                    <img src="{{asset('storage/'.$similar->image)}}" class="w-100"/>
                  </a>
                </div>
                <div class="col-md-7">
                  <small>{{$similar->title}}</small>
                  <h4 class="font-monospace">${{$similar->price}}</h4>
                </div>
                <hr class="my-2">
              </div>

              @endforeach
            </div>
          </div>
        </div>
      </section>

    @endsection
    