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
					<h2 class="auth-heading text-center mb-5">Register to Instinct</h2>
			        <div class="auth-form-container text-start">

						<form class="auth-form login-form" method="post" action="/store/register">         
							@csrf
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Email</label>
								<input id="signin-email" type="email" class="form-control signin-email" placeholder="Email address" name="email" required="required">
							</div><!--//form-group-->
							<div class="firstname mb-3">
								<label class="sr-only" for="signin-firstname">First Name</label>
								<input id="signin-firstname" type="text" class="form-control signin-firstname" name="firstname" placeholder="First Name" required="required">
							</div><!--//form-group-->
                            <div class="lastname mb-3">
								<label class="sr-only" for="signin-lastname">Last Name</label>
								<input id="signin-lastname" type="text" class="form-control signin-password" name="lastname" placeholder="Last Name" required="required">
							</div><!--//form-group-->
                            <div class="password mb-3">
								<label class="sr-only" for="signin-username">Username</label>
								<input id="signin-username" type="text" class="form-control signin-username" name="username" placeholder="Username" required="required">
							</div><!--//form-group-->
                            <div class="phonenumber mb-3">
								<label class="sr-only" for="signin-phonenumber">Phone Number</label>
								<input id="signin-phonenumber" type="text" class="form-control signin-phonenumber" name="phonenumber" placeholder="Phone Number" required="required">
							</div><!--//form-group-->

                            <div class="gender mb-3">
								<label class="sr-only" for="signin-gender">Gender</label>
								<select name="gender" class="form-control" id=setting-input-5>
                                    <option>Choose</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
							</div><!--//form-group-->

                            <div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" type="password" class="form-control signin-password" name="password" placeholder="Password" required="required">
							</div><!--//form-group-->
                            <div class="password mb-3">
								<label class="sr-only" for="signin-password_confirmation">Confirm Password</label>
								<input id="signin-password_confirmation" type="password" class="form-control signin-password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required="required">
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Register</button>
							</div>

						</form>
						
						<div class="auth-option text-center pt-5">Already have account? Sign in <a class="text-link" href="/login" >here</a>.</div>
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

