<x-form-layout>


	<x-slot name="slot"> 

		<div class="osahan-signup login-page">
			<video autoplay="" id="vid" loop=""><source src="{{asset('frontend')}}/img/bg.mp4" type="video/mp4"> <source src="{{asset('frontend')}}/img/bg.mp4" type="video/ogg"> Your browser does not support the video tag.</video>
			<div class="d-flex align-items-center justify-content-center flex-column vh-100">
				<div class="px-5 col-md-6 ml-auto">
					<div class="px-5 col-10 mx-auto">
						<h2>Forgot password</h2>
						<p>Enter your email address below and we'll send you an email with instructions on how to change your password</p>
						<form action="#" class="mt-5 mb-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label> <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" type="email">
							</div><button class="btn btn-primary btn-lg btn-block">Send</button>
						</form>
					</div>
					<div class="new-acc d-flex align-items-center justify-content-center">
						<a href="{{route('loginpage')}}">
						<p class="text-center m-0">Already an account? Sign in</p></a>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-form-layout>