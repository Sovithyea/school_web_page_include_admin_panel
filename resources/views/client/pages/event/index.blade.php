@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('event.title')}}</h2>
            <ol>
              <li><a href="/">{{__('event.home')}}</a></li>
              <li>{{__('event.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container">
          <h2 class="text-center text-primary">
            {{__('event.subtitle')}}
          </h2>
          @foreach ($events as $event)
            
          <div class="col-md-8 col-12 mx-auto my-5">
            <div class="row">
              <div class="col-md-7 col-12">
                <img src="{{asset('storage/'.$event->image)}}" class="w-100" style="height: 250px"/>
              </div>
              <div class="col-md-5 col-12 my-3">
                <a href="/event/{{$event->id}}/show"><h4>{{$event->topic}}</h4> </a>
                <small>Date: {{$event->date}}</small>
                <br>
                <small>Time: {{$event->time}}</small>
                <br><br><br><br>
                <a href="" class="w-100 mt-2 btn btn btn-outline-secondary">Expired</a>
      
              </div>
            </div>
          </div>

          @endforeach
        </div>
      </section>

    @endsection
    