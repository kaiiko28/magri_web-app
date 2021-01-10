<x-guest-layout>

    <x-slot name="slot">
        <div class="osahan-home-page">
            <div class="bg-primary p-3 d-none">
                <div class="text-white">
                    <div class="title d-flex align-items-center">
                        <a class="toggle" href="#"><span></span></a>
                        <h4 class="font-weight-bold m-0 pl-5">Browse</h4><a class="text-white font-weight-bold ml-auto" data-target="#exampleModal" data-toggle="modal" href="#">Filter</a>
                    </div>
                </div>
                <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
                    <div class="input-group-prepend">
                        <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                    </div><input class="shadow-none border-0 form-control" placeholder="Search for restaurants or dishes" type="text">
                </div>
            </div>
            <div class="container">
                <div class="cat-slider">
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Fries.png">
                        <p class="m-0 small">Fries</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Pizza.png">
                        <p class="m-0 small">Pizza</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Burger.png">
                        <p class="m-0 small">Burger</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Sandwich.png">
                        <p class="m-0 small">Sandwich</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Coffee.png">
                        <p class="m-0 small">Coffee</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Steak.png">
                        <p class="m-0 small">Steak</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/ColaCan.png">
                        <p class="m-0 small">ColaCan</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Breakfast.png">
                        <p class="m-0 small">Breakfast</p></a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid mb-2" src="{{asset('frontend')}}/img/icons/Salad.png">
                        <p class="m-0 small">Salad</p></a>
                    </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="container">
                    <div class="offer-slider">
                        <div class="cat-item px-1 py-3">
                            <a class="d-block text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid rounded" src="{{asset('frontend')}}/img/pro1.jpg"></a>
                        </div>
                        <div class="cat-item px-1 py-3">
                            <a class="d-block text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid rounded" src="{{asset('frontend')}}/img/pro2.jpg"></a>
                        </div>
                        <div class="cat-item px-1 py-3">
                            <a class="d-block text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid rounded" src="{{asset('frontend')}}/img/pro3.jpg"></a>
                        </div>
                        <div class="cat-item px-1 py-3">
                            <a class="d-block text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid rounded" src="{{asset('frontend')}}/img/pro4.jpg"></a>
                        </div>
                        <div class="cat-item px-1 py-3">
                            <a class="d-block text-center shadow-sm" href="{{route('trending')}}"><img alt="#" class="img-fluid rounded" src="{{asset('frontend')}}/img/pro2.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pt-4 pb-2 title d-flex align-items-center">
                    <h5 class="m-0">Trending this week</h5><a class="font-weight-bold ml-auto" href="{{route('trending')}}">View all <i class="feather-chevrons-right"></i></a>
                </div>
                <div class="trending-slider">
                    <div class="osahan-slider-item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute">
                                    <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                </div>
                                <div class="favourite-heart text-danger position-absolute">
                                    <a href="#"><i class="feather-heart"></i></a>
                                </div>
                                <div class="member-plan position-absolute">
                                    <span class="badge badge-dark">Promoted</span>
                                </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/trending1.png"></a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Famous Dave's Bar-B-Que</a></h6>
                                    <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–30 min</span> <span class="float-right text-black-50">$350 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>Use Coupon OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="osahan-slider-item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute">
                                    <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                </div>
                                <div class="favourite-heart text-danger position-absolute">
                                    <a href="#"><i class="feather-heart"></i></a>
                                </div>
                                <div class="member-plan position-absolute">
                                    <span class="badge badge-dark">Promoted</span>
                                </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/trending2.png"></a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Thai Famous Cuisine</a></h6>
                                    <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-50">$250 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="osahan-slider-item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute">
                                    <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                </div>
                                <div class="favourite-heart text-danger position-absolute">
                                    <a href="#"><i class="feather-heart"></i></a>
                                </div>
                                <div class="member-plan position-absolute">
                                    <span class="badge badge-dark">Promoted</span>
                                </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/trending3.png"></a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                    <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50">$500 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="osahan-slider-item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute">
                                    <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                </div>
                                <div class="favourite-heart text-danger position-absolute">
                                    <a href="#"><i class="feather-heart"></i></a>
                                </div>
                                <div class="member-plan position-absolute">
                                    <span class="badge badge-dark">Promoted</span>
                                </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/trending2.png"></a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Thai Famous Cuisine</a></h6>
                                    <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-50">$250 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-3 title d-flex align-items-center">
                    <h5 class="m-0">Most popular</h5><a class="font-weight-bold ml-auto" href="most_popular.html">26 places <i class="feather-chevrons-right"></i></a>
                </div>
                <div class="most_popular">
                    <div class="row">
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular1.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                        <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular2.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Thai Famous Indian Cuisine</a></h6>
                                        <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular3.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                        <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular4.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Bite Me Now Sandwiches</a></h6>
                                        <p class="text-gray mb-1 small">American • Pure veg</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular5.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                        <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular6.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Thai Famous Indian Cuisine</a></h6>
                                        <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular7.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                        <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/popular8.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Bite Me Now Sandwiches</a></h6>
                                        <p class="text-gray mb-1 small">American • Pure veg</p>
                                        <p class="text-gray mb-1 rating"></p>
                                        <ul class="rating-stars list-unstyled">
                                            <li><i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star star_active"></i> <i class="feather-star"></i></li>
                                        </ul>
                                        <p></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2 pb-3 title d-flex align-items-center">
                    <h5 class="m-0">Most sales</h5><a class="font-weight-bold ml-auto" href="#">26 places <i class="feather-chevrons-right"></i></a>
                </div>
                <div class="most_sale">
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/sales1.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                        <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50">$500 FOR TWO</span></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/sales2.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">Thai Famous Cuisine</a></h6>
                                        <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-50">$250 FOR TWO</span></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="star position-absolute">
                                        <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                                    </div>
                                    <div class="favourite-heart text-danger position-absolute">
                                        <a href="#"><i class="feather-heart"></i></a>
                                    </div>
                                    <div class="member-plan position-absolute">
                                        <span class="badge badge-dark">Promoted</span>
                                    </div><a href="{{route('restaurant')}}"><img alt="#" class="img-fluid item-img w-100" src="{{asset('frontend')}}/img/sales3.png"></a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a class="text-black" href="{{route('restaurant')}}">The osahan Restaurant</a></h6>
                                        <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50">$500 FOR TWO</span></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
            <div class="row">
                <div class="col selected">
                    <a class="text-danger small font-weight-bold text-decoration-none" href="{{route('home')}}">
                    <p class="h4 m-0"><i class="feather-home text-danger"></i></p>Home</a>
                </div>
                <div class="col">
                    <a class="text-dark small font-weight-bold text-decoration-none" href="most_popular.html">
                    <p class="h4 m-0"><i class="feather-map-pin"></i></p>Trending</a>
                </div>
                <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                    <div class="bg-danger rounded-circle mt-n0 shadow">
                        <a class="text-white small font-weight-bold text-decoration-none" href="checkout.html"><i class="feather-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="col">
                    <a class="text-dark small font-weight-bold text-decoration-none" href="favorites.html">
                    <p class="h4 m-0"><i class="feather-heart"></i></p>Favorites</a>
                </div>
                <div class="col">
                    <a class="text-dark small font-weight-bold text-decoration-none" href="profile.html">
                    <p class="h4 m-0"><i class="feather-user"></i></p>Profile</a>
                </div>
            </div>
        </div>
    </x-slot>


</x-guest-layout>