@extends('admin.layouts.master')

    @section('content')


    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">		


                <h1 class="app-page-title">Course Detail</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Course: {{$course->title}}</h3>
		                <div class="section-intro">Course Type: {{$course->courseType->title}} <a href="help.html">Learn more</a></div>
                        <img src="{{asset('storage/'. $course->image)}}" class="w-100 my-5"/>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
                                    <div class="mb-3">
                                        Course Detail <hr/>
                                    </div>
								    <div class="mb-3">
									    Price: {{$course->price}}$
									</div>

                                    <div class="mb-3">
									    Duration: {{$course->duration}}Hours
									</div>

                                    <div class="mb-3">
									    Skill Level: {{$course->skill_level}}
									</div>

                                    <div class="mb-3">
									    Start Class: {{$course->start_class}}
									</div>

                                    <div class="mb-3">
									    Publish by Admin: N/A
									</div>

                                    <div class="mb-3">
									    {!!$course->description!!}
									</div>

                                    <div class="mb-3">
									    
									</div>
									<a href="/admin/course" class="btn app-btn-primary" >Back</a>
							    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->




            </div>
        </div>
    </div>
    @endsection