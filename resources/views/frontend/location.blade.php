<x-guest-layout>

    <x-slot name="slot">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center mb-4">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Location</h4>
            </div>
        </div>
        <div class="location-page container">
            <div class="d-flex align-items-center justify-content-center flex-column py-5">
                <img alt="Responsive image" class="img-fluid" src="{{asset('frontend')}}/img/location.png">
                <div class="px-4 text-center mt-4">
                    <h5 class="text-dark">Hi, nice to meet you!</h5>
                    <p class="mb-5">Choose your location to start find restaurants around you.</p>
                    <a class="btn btn-lg btn-primary btn-block my-4" href="{{route('home')}}"><i class="feather-navigation"></i> Use current location</a>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>