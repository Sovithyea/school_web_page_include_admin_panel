@extends('client.layouts.master')

    @section('content')
    
            <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">
          
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{__('eventshow.title')}}</h2>
            <ol>
              <li><a href="/">{{__('event.home')}}</a></li>
              <li>{{__('eventshow.title')}}</li>
            </ol>
          </div>
          
        </div>
      </section><!-- End Breadcrumbs -->
    
      <section class="inner-page">
        <div class="container">
          <h4 class="mb-3">
            {{__('eventshow.subtitle')}}
          </h4>

          <div class="row">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="col-md-10 mx-auto my-5">
                        <h4 class="text-capitalize text-primary">Topic: "{{$event->topic}}"</h4>
                        <img src="{{asset('storage/'.$event->image)}}" class="w-100 my-5"/>
                        <div>Location: <span style="margin-left: 2.3rem">{{$event->location}}</span></div>
                        <div>Date: <span style="margin-left: 4rem">{{$event->date}}</span></div>
                        <div>Time: <span style="margin-left: 4rem">{{$event->time}}</span></div>
                        <h4 class="text-primary my-3">Description</h4>
                        <div>{!!$event->description!!}</div>
                        <h4 class="text-primary my-3">Location</h4>
                        <div class="col-md-12 map">{!!$event->map!!}</div>
                        <h4 class="text-primary my-3">CONTACT INFORMATION</h4>
                        <table class="col-md-12 col-12">
                            <tr>
                                <td><strong>Contact Person:</strong></td>
                                <td>HR Department</td>
                            </tr>
                            <tr>
                                <td rowspan="3">Phone:</td>
                                <td>(+855) 23 655 6168</td>
                            </tr>
                            <tr>
                                <td>(+855) 76 6888 838</td>
                            </tr>
                            <tr>
                                <td>(+855) 86 808 139</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>info@instinct.edu.kh</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>#72,Str 566, Toul Kork Commune Phnom Penh 00855</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-danger text-center">Register Here</h5>
                    </div>
                    <div class="card-body">
                        <a href="" class="w-100 mt-2 btn btn btn-outline-secondary disabled">Expired</a>
                    </div>
                </div>
            </div>
          </div>

        </div>
      </section>

    @endsection
    