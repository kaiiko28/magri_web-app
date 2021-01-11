<nav id="main-nav">
    <ul class="second-nav">
        <li>
            <a href="{{route('home')}}"><i class="feather-home mr-2"></i> Homepage</a>
        </li>
        <li>
            <a href="{{route('my_order')}}"><i class="feather-list mr-2"></i> My Orders</a>
        </li>
        <li>
            <a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
            <ul>
                <li>
                    <a href="{{route('loginpage')}}">Login</a>
                </li>
                <li>
                    <a href="{{route('signup')}}">Register</a>
                </li>
                <li>
                    <a href="{{route('forgot_password')}}">Forgot Password</a>
                </li>
                <li>
                    <a href="{{route('verification')}}">Verification</a>
                </li>
                <li>
                    <a href="{{route('location')}}">Location</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('favorites')}}"><i class="feather-heart mr-2"></i> Favorites</a>
        </li>
        <li>
            <a href="{{route('trending')}}"><i class="feather-trending-up mr-2"></i> Trending</a>
        </li>
        <li>
            <a href="{{route('most_popular')}}"><i class="feather-award mr-2"></i> Most Popular</a>
        </li>
        <li>
            <a href="{{route('restaurant')}}"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a>
        </li>
        <li>
            <a href="{{route('checkout')}}"><i class="feather-list mr-2"></i> Checkout</a>
        </li>
        <li>
            <a href="{{route('successful')}}"><i class="feather-check-circle mr-2"></i> Successful</a>
        </li>
        <li>
            <a href="{{route('map')}}"><i class="feather-map-pin mr-2"></i> Live Map</a>
        </li>
        <li>
            <a href="#"><i class="feather-user mr-2"></i> Profile</a>
            <ul>
                <li>
                    <a href="{{route('profile')}}">Profile</a>
                </li>
                <li>
                    <a href="{{route('favorites')}}">Delivery support</a>
                </li>
                <li>
                    <a href="{{route('contact_us')}}">Contact Us</a>
                </li>
                <li>
                    <a href="{{route('terms')}}">Terms of use</a>
                </li>
                <li>
                    <a href="{{route('privacy')}}">Privacy & Policy</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
            <ul>
                <li>
                    <a href="{{route('notfound')}}">Not Found</a>
                </li>
                <li>
                    <a href="{{route('maintenance')}}">Maintenance</a>
                </li>
                <li>
                    <a href="{{route('coming_soon')}}">Coming Soon</a>
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
            <a href="{{route('faq')}}">
            <p class="h5 m-0"><i class="feather-message-circle"></i></p>FAQ</a>
        </li>
        <li class="ko-fi">
            <a href="{{route('contact_us')}}">
            <p class="h5 m-0"><i class="feather-phone"></i></p>Help</a>
        </li>
    </ul>
</nav>