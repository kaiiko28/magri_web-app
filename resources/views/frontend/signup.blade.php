<x-form-layout>
    

    <x-slot name="slot"> 
        <div class="osahan-signup login-page">
            <video autoplay="" id="vid" loop=""><source src="{{asset('frontend')}}/img/bg.mp4" type="video/mp4"> <source src="{{asset('frontend')}}/img/bg.mp4" type="video/ogg"> Your browser does not support the video tag.</video>
            <div class="d-flex align-items-center justify-content-center flex-column vh-100">
                <div class="px-5 col-md-6 ml-auto">
                    <div class="px-5 col-10 mx-auto">
                        <h2 class="text-dark my-0">Hello There.</h2>
                        <p class="text-50">Sign up to continue</p>
                        <form action="#" class="mt-5 mb-4">
                            <div class="form-group">
                                <label class="text-dark" for="exampleInputName1">Name</label> <input aria-describedby="nameHelp" class="form-control" id="exampleInputName1" placeholder="Enter Name" type="text">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="exampleInputNumber1">Mobile Number</label> <input aria-describedby="numberHelp" class="form-control" id="exampleInputNumber1" placeholder="Enter Mobile" type="number">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="exampleInputPassword1">Password</label> <input class="form-control" id="exampleInputPassword1" placeholder="Enter Password" type="password">
                            </div><button class="btn btn-primary btn-lg btn-block">SIGN UP</button>
                            <div class="py-2">
                                <button class="btn btn-facebook btn-lg btn-block"><i class="feather-facebook"></i> Connect with Facebook</button>
                            </div>
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