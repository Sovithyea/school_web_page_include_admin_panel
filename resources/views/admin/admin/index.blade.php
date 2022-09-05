@extends('admin.layouts.master')

    @section('content')

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">						    
                        <a class="btn app-btn-secondary" href="/admin/admin/create">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            Add Admin
                        </a>
                    </div>

				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Admin</h1>
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
												<th class="cell">Name</th>
                                                <th class="cell">Email</th>
												<th class="cell">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($admins as $admin)
                                                <tr>
                                                    <td class="cell">{{$admin->id}}</td>
                                                    <td class="cell"><span class="truncate">{{$admin->name}}</span></td>
                                                    <td class="cell"><span class="truncate">{{$admin->email}}</span></td>
                                                    <td class="cell">
                                                        <a href="/admin/admin/{{$admin->id}}/edit" class="btn btn-success">Edit</a>
                                                        <a href="/admin/admin/{{$admin->id}}/delete" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
										</tbody>
									</table>
                    </div>	      
                </div>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	

    @endsection