
        <header class="section-header">
            <section class="header-main shadow-sm bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <a class="brand-wrap mb-0" href="{{route('home')}}"><img alt="#" class="img-fluid" src="{{asset('frontend')}}/img/logo_web.png"></a>
                        </div>
                        <div class="col-3 d-flex align-items-center m-none">
                            <div class="dropdown mr-3">
                                <a aria-expanded="false" aria-haspopup="true" class="text-dark dropdown-toggle d-flex align-items-center py-3" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
                                <div>
                                    <i class="feather-map-pin mr-2 bg-light rounded-pill p-2 icofont-size"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 small">Select Location</p>Jawaddi Ludhiana...
                                </div></a>
                                <div aria-labelledby="navbarDropdown" class="dropdown-menu p-0 drop-loc">
                                    <div class="osahan-country">
                                        <div class="search_location bg-primary p-3 text-right">
                                            <div class="input-group rounded shadow-sm overflow-hidden">
                                                <div class="input-group-prepend">
                                                    <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                                                </div><input class="shadow-none border-0 form-control" placeholder="Enter Your Location" type="text">
                                            </div>
                                        </div>
                                        <div class="p-3 border-bottom">
                                            <a class="text-decoration-none" href="{{route('home')}}">
                                            <p class="font-weight-bold text-primary m-0"><i class="feather-navigation"></i> New York, USA</p></a>
                                        </div>
                                        <div class="filter">
                                            <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">Choose your country</h6>
                                            <div class="custom-control border-bottom px-0 custom-radio">
                                                <input class="custom-control-input" id="customRadio1" name="location" type="radio"> <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Afghanistan</label>
                                            </div>
                                            <div class="custom-control border-bottom px-0 custom-radio">
                                                <input checked class="custom-control-input" id="customRadio2" name="location" type="radio"> <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">India</label>
                                            </div>
                                            <div class="custom-control border-bottom px-0 custom-radio">
                                                <input class="custom-control-input" id="customRadio3" name="location" type="radio"> <label class="custom-control-label py-3 w-100 px-3" for="customRadio3">USA</label>
                                            </div>
                                            <div class="custom-control border-bottom px-0 custom-radio">
                                                <input class="custom-control-input" id="customRadio4" name="location" type="radio"> <label class="custom-control-label py-3 w-100 px-3" for="customRadio4">Australia</label>
                                            </div>
                                            <div class="custom-control border-bottom px-0 custom-radio">
                                                <input class="custom-control-input" id="customRadio5" name="location" type="radio"> <label class="custom-control-label py-3 w-100 px-3" for="customRadio5">Japan</label>
                                            </div>
                                            <div class="custom-control px-0 custom-radio">
                                                <input class="custom-control-input" id="customRadio6" name="location" type="radio"> <label class="custom-control-label py-3 w-100 px-3" for="customRadio6">China</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="d-flex align-items-center justify-content-end pr-5">
                                <a class="widget-header mr-4 text-dark" href="{{route('searchpage')}}">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-search h6 mr-2 mb-0"></i> <span>Search</span>
                                </div></a> <a class="widget-header mr-4 text-white btn bg-primary m-none" href="{{route('offers')}}">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-disc h6 mr-2 mb-0"></i> <span>Offers</span>
                                </div></a> <a class="widget-header mr-4 text-dark m-none" href="{{route('loginpage')}}">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-user h6 mr-2 mb-0"></i> <span>Sign in</span>
                                </div></a>
                                <div class="dropdown mr-4 m-none">
                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle text-dark py-3 d-block" data-toggle="dropdown" href="#" id="dropdownMenuButton"><img alt="#" class="img-fluid rounded-circle header-user mr-2 header-user" src="{{asset('frontend')}}/img/user/1.jpg"> Hi Osahan</a>
                                    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('profile')}}">My account</a> <a class="dropdown-item" href="{{route('faq')}}">Delivery support</a> <a class="dropdown-item" href="{{route('contact_us')}}">Contant us</a> <a class="dropdown-item" href="{{route('terms')}}">Term of use</a> <a class="dropdown-item" href="{{route('privacy')}}">Privacy policy</a> <a class="dropdown-item" href="{{route('loginpage')}}">Logout</a>
                                    </div>
                                </div><a class="widget-header mr-4 text-dark" href="{{route('checkout')}}">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-shopping-cart h6 mr-2 mb-0"></i> <span>Cart</span>
                                </div></a> <a class="toggle" href="#"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>