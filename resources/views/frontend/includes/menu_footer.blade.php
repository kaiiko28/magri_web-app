<div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
        <div class="col">
            <a class="text-dark small font-weight-bold text-decoration-none" href="{{route('home')}}">
            <p class="h4 m-0"><i class="feather-home text-dark"></i></p>Home</a>
        </div>
        <div class="col">
            <a class="text-dark small font-weight-bold text-decoration-none" href="{{route('most_popular')}}">
            <p class="h4 m-0"><i class="feather-map-pin"></i></p>Trending</a>
        </div>
        <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
            <div class="bg-danger rounded-circle mt-n0 shadow">
                <a class="text-white small font-weight-bold text-decoration-none" href="{{route('checkout')}}"><i class="feather-shopping-cart"></i></a>
            </div>
        </div>
        <div class="col">
            <a class="text-dark small font-weight-bold text-decoration-none" href="{{route('favorites')}}">
            <p class="h4 m-0"><i class="feather-heart"></i></p>Favorites</a>
        </div>
        <div class="col selected">
            <a class="text-danger small font-weight-bold text-decoration-none" href="{{route('profile')}}">
            <p class="h4 m-0"><i class="feather-user"></i></p>Profile</a>
        </div>
    </div>
</div>