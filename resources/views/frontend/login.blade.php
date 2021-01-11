<x-form-layout>


	<x-slot name="slot"> 
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
						</form><a class="text-decoration-none" href="{{route('forgot_password')}}">
						<p class="text-center">Forgot your password?</p></a>
						<div class="d-flex align-items-center justify-content-center">
							<a href="{{route('signup')}}">
							<p class="text-center m-0">Don't have an account? Sign up</p></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-form-layout>