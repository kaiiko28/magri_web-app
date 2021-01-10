<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{asset('frontend')}}/{{ asset('js/app.js') }}" defer></script>
    <link href="{{asset('frontend')}}/vendor/slick/slick.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('frontend')}}/vendor/slick/slick-theme.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('frontend')}}/vendor/icons/feather.css" rel="stylesheet" type="text/css">
	<link href="{{asset('frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
	<link href="{{asset('frontend')}}/vendor/sidebar/demo.css" rel="stylesheet">
    @yield('styles')
</head>
<body>
    


    <div class="login-page vh-100">
		<video autoplay="" id="vid" loop=""><source src="{{asset('frontend')}}/img/bg.mp4" type="video/mp4"> <source src="{{asset('frontend')}}/img/bg.mp4" type="video/ogg"> Your browser does not support the video tag.</video>
		<div class="d-flex align-items-center justify-content-center vh-100">
			<div class="px-5 col-md-6 ml-auto">
				<div class="px-5 col-10 mx-auto">
					<h2 class="text-dark my-0">Welcome Back</h2>
					<p class="text-50">Sign in to continue</p>
					<form action="#" class="mt-5 mb-4">
						<div class="form-group">
							<label class="text-dark" for="exampleInputEmail1">Email</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" type="email">
						</div>
						<div class="form-group">
							<label class="text-dark" for="exampleInputPassword1">Password</label> <input class="form-control" id="exampleInputPassword1" placeholder="Enter Password" type="password">
						</div><button class="btn btn-primary btn-lg btn-block">SIGN IN</button>
						<div class="py-2">
							<button class="btn btn-lg btn-facebook btn-block"><i class="feather-facebook"></i> Connect with Facebook</button>
						</div>
					</form><a class="text-decoration-none" href="forgot_password.html">
					<p class="text-center">Forgot your password?</p></a>
					<div class="d-flex align-items-center justify-content-center">
						<a href="signup.html">
						<p class="text-center m-0">Don't have an account? Sign up</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="main-nav">
		<ul class="second-nav">
			<li>
				<a href="{{route('home')}}"><i class="feather-home mr-2"></i> Homepage</a>
			</li>
			<li>
				<a href="my_order.html"><i class="feather-list mr-2"></i> My Orders</a>
			</li>
			<li>
				<a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
				<ul>
					<li>
						<a href="{{route('login')}}">Login</a>
					</li>
					<li>
						<a href="signup.html">Register</a>
					</li>
					<li>
						<a href="forgot_password.html">Forgot Password</a>
					</li>
					<li>
						<a href="verification.html">Verification</a>
					</li>
					<li>
						<a href="location.html">Location</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="favorites.html"><i class="feather-heart mr-2"></i> Favorites</a>
			</li>
			<li>
				<a href="trending.html"><i class="feather-trending-up mr-2"></i> Trending</a>
			</li>
			<li>
				<a href="most_popular.html"><i class="feather-award mr-2"></i> Most Popular</a>
			</li>
			<li>
				<a href="{{route('restaurant')}}"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a>
			</li>
			<li>
				<a href="checkout.html"><i class="feather-list mr-2"></i> Checkout</a>
			</li>
			<li>
				<a href="successful.html"><i class="feather-check-circle mr-2"></i> Successful</a>
			</li>
			<li>
				<a href="map.html"><i class="feather-map-pin mr-2"></i> Live Map</a>
			</li>
			<li>
				<a href="#"><i class="feather-user mr-2"></i> Profile</a>
				<ul>
					<li>
						<a href="profile.html">Profile</a>
					</li>
					<li>
						<a href="favorites.html">Delivery support</a>
					</li>
					<li>
						<a href="contact-us.html">Contact Us</a>
					</li>
					<li>
						<a href="terms.html">Terms of use</a>
					</li>
					<li>
						<a href="privacy.html">Privacy & Policy</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
				<ul>
					<li>
						<a href="not-found.html">Not Found</a>
					</li>
					<li>
						<a href="maintence.html">Maintence</a>
					</li>
					<li>
						<a href="coming-soon.html">Coming Soon</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="feather-link mr-2"></i> Navigation Link Example</a>
				<ul>
					<li>
						<a href="#">Link Example 1</a>
						<ul>
							<li>
								<a href="#">Link Example 1.1</a>
								<ul>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Link Example 1.2</a>
								<ul>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
									<li>
										<a href="#">Link</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Link Example 2</a>
					</li>
					<li>
						<a href="#">Link Example 3</a>
					</li>
					<li>
						<a href="#">Link Example 4</a>
					</li>
					<li data-nav-custom-content="">
						<div class="custom-message">
							You can add any custom content to your navigation items. This text is just an example.
						</div>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="bottom-nav">
			<li class="email">
				<a class="text-danger" href="{{route('home')}}">
				<p class="h5 m-0"><i class="feather-home text-danger"></i></p>Home</a>
			</li>
			<li class="github">
				<a href="faq.html">
				<p class="h5 m-0"><i class="feather-message-circle"></i></p>FAQ</a>
			</li>
			<li class="ko-fi">
				<a href="contact-us.html">
				<p class="h5 m-0"><i class="feather-phone"></i></p>Help</a>
			</li>
		</ul>
    </nav>
    
    
    <script src="{{asset('frontend')}}/vendor/jquery/jquery.min.js" type="49c9adfc5a9526bd2995e4db-text/javascript">
	</script> 
	<script src="{{asset('frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js" type="49c9adfc5a9526bd2995e4db-text/javascript">
	</script> 
	<script src="{{asset('frontend')}}/vendor/slick/slick.min.js" type="49c9adfc5a9526bd2995e4db-text/javascript">
	</script> 
	<script src="{{asset('frontend')}}/vendor/sidebar/hc-offcanvas-nav.js" type="49c9adfc5a9526bd2995e4db-text/javascript">
	</script> 
	<script src="{{asset('frontend')}}/js/osahan.js" type="49c9adfc5a9526bd2995e4db-text/javascript">
	</script> 
	
    <script data-cf-settings="ad6ae397397789a8347553ad-|49" defer src="{{asset('frontend')}}/js/rocket-loader.min.js">
    </script>
    
</body>
</html>