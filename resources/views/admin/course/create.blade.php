@extends('admin.layouts.master')

    @section('content')


    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">		


                <h1 class="app-page-title">Create Course</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Course </h3>
		                <div class="section-intro">Fill the below form to create new course. <a href="help.html">Learn more</a></div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" method="post" action="/admin/course/store/create" enctype="multipart/form-data">
                                    @csrf
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label @if($errors->has('title')) is-invalid @endif">Title:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
											</svg></span>
										</label>
									    <input type="text" class="form-control"  placeholder="Enter Course Title"  id="setting-input-1" name="title" required>
									</div>

									<div class="mb-3">
										<label for="course_type" class="form-label">Course Type:</label>
										<select name="course_type" class="@if($errors->has('course_type')) is-invalid @endif  form-control" id="course_type" >
											<option value="">Choose</option>
											@foreach ($course_types as $course_type)
											  <option @selected(old('course_type') == $course_type->id)  value="{{$course_type->id}}">{{$course_type->title}}</option>
											@endforeach
										</select>
										@if ($errors->has('course_type'))
										  <div class="invalid-feedback">
											  {{$errors->first('course_type')}}
										  </div>
										@endif

                                    <div class="mb-3">
									    <label for="setting-input-2" class="form-label @if($errors->has('price')) is-invalid @endif ">Price:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
											</svg></span>
										</label>
									    <input type="number" class="form-control"  placeholder="Enter Course Price"  id="setting-input-2" name="price" required>
									</div>
                                    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Duration:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
											</svg></span>
										</label>
									    <input type="text" class="form-control"  placeholder="Enter Course Duration"  id="setting-input-3" name="duration" required>
									</div>
                                    <div class="mb-3">
									    <label for="setting-input-4" class="form-label">Skill Level:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
											</svg></span>
										</label>
									    <input type="text" class="form-control"  placeholder="Enter Course Skill Level"  id="setting-input-4" name="skill_level" required>
									</div>
                                    <div class="mb-3">
									    <label for="setting-input-5" class="form-label">Start Class:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
											</svg></span>
										</label>
									    <input type="text" class="form-control"  placeholder="Enter Course Start Class"  id="setting-input-1" name="start_class" required>
									</div>

									<div class="mb-3">
										<label for="image" class="form-label">Image:<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
											</svg></span>
										</label>
										<input name="image" type="file" class="@if($errors->has('image')) is-invalid @endif form-control" id="image">
									  @if ($errors->has('image'))
										<div class="invalid-feedback">
											{{$errors->first('image')}}
										</div>
									  @endif
									</div>
									
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description:</label>
                                        <textarea id="test" name="description" class="form-control @if($errors->has('description')) is-invalid @endif">{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('description')}}
                                        </div>
                                    @endif

									<button type="submit" class="btn app-btn-primary my-3" >Create Course Type</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->




            </div>
        </div>
    </div>
	<style>
		.ck-editor__editable_inline {
		min-height: 150px;
	}
	</style>
    @endsection
    
    
    @push('scripts')
		<script>
			ClassicEditor
				.create( document.querySelector( '#test' ) )
				.catch( error => {
					console.error( error );
				} );
		</script>
    @endpush