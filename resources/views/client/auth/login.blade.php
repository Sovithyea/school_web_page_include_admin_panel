<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Assignment Laravel</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    {{-- <link rel="{{asset('shortcut icon')}}" href="favicon.ico">  --}}
    
    <!-- FontAwesome JS-->
    <script defer src="{{asset('admin_assets/plugins/fontawesome/js/all.min.js')}}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('admin_assets/css/portal.css')}}">

</head> 

<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{asset('admin_assets/images/app-logo.svg')}}" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in to Instinct</h2>
			        <div class="auth-form-container text-start">
						@if (session()->has('error'))
							<div class="alert text-danger m-3" role="alert">
								{{session()->get('error')}}
							</div>
						@endif

						@if ($errors->any())
							<div class="alert alert-danger text-danger">Please Following Our Policy!</div>
						@endif
						<form class="auth-form login-form" method="post" action="{{ route('store_login')}}">         
							@csrf
							<div class="email mb-3">
								<label class="sr-only @if($errors->has('email')) is-invalid @endif" for="signin-email">Email</label>
								<input id="signin-email" type="text" class="form-control" placeholder="Email address" name="email">
								@if ($errors->has('email'))
									<div class="invalid-feedback">
									  	{{$errors->first('email')}}
									</div>
								@endif
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only @if($errors->has('password')) is-invalid @endif" for="signin-password">Password</label>
								<input id="signin-password" type="password" class="form-control signin-password" name="password" placeholder="Password">
								@if ($errors->has('password'))
									<div class="invalid-feedback">
									  	{{$errors->first('password')}}
									</div>
								@endif
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Remember me
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="/forgot-password">Forgot password?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="/register" >here</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Powered by <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> Assignment</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 
