@extends('admin.layouts.master')

    @section('content')

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">						    
                        <a class="btn app-btn-secondary" href="/admin/course/create">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            Add Course
                        </a>
                    </div>

				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Course</h1>
				    </div>
                    
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        
					    
							        <table class="table app-table-hover mb-0 text-left my-auto">
										<thead>
											<tr>
												<th class="cell">ID</th>
												<th class="cell">Title</th>
                                                <th class="cell">Image</th>
                                                <th class="cell">Course Type</th>
                                                <th class="cell">Start Class</th>
												<th class="cell">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($courses as $course)
                                                <tr>
                                                    <td class="cell">{{$course->id}}</td>
                                                    <td class="cell"><span class="truncate">{{$course->title}}</span></td>
                                                    <td class="cell"><span class="truncate"><img src="{{asset('storage/'.$course->image)}}" width="125px"/></span></td>
                                                    <td class="cell"><span class="truncate">{{$course->courseType->title}}</span></td>
                                                    <td class="cell"><span class="truncate">{{$course->start_class}}</span></td>
                                                    <td class="cell">
                                                        
                                                        <a href="/admin/course/{{$course->id}}/show">
                                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 1.2rem; color: #374151" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            </svg>  
                                                        </a>

                                                        <a href="/admin/course/{{$course->id}}/edit">
                                                            <svg style="width: 1.2rem;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                            </svg>     
                                                        </a>

                                                        <a href="/admin/course/{{$course->id}}/delete">
                                                            <svg style="width: 1.2rem; color: #ef4444" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                            </svg>  
                                                        </a>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
										</tbody>
									</table>
                                    <div class="d-flex my-3 mx-auto">
                                        {!! $courses->links() !!}
                                    </div>
                    </div>	      
                </div>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	

    @endsection