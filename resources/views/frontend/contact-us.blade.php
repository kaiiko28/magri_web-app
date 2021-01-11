<x-guest-layout>

    <x-slot name="slot">
        <div class="osahan-profile">
            <div class="d-none">
                <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                    <a class="toggle togglew toggle-2" href="#"><span></span></a>
                    <h4 class="font-weight-bold m-0 text-white">Profile</h4>
                </div>
            </div>
            <div class="container position-relative">
                <div class="py-5 osahan-profile row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                            <a class="" href="{{route('profile')}}">
                            <div class="d-flex align-items-center p-3">
                                <div class="left mr-3"><img alt="#" class="rounded-circle" src="{{asset('frontend')}}/img/user1.jpg"></div>
                                <div class="right">
                                    <h6 class="mb-1 font-weight-bold">Gurdeep Singh <i class="feather-check-circle text-success"></i></h6>
                                    <p class="text-muted m-0 small"><span class="__cf_email__" data-cfemail="066f676b6975676e676846616b676f6a2865696b">[email&#160;protected]</span></p>
                                </div>
                            </div></a>
                            <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                                <p class="m-0">Accounts Credits</p>
                                <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                            </div>
                            <div class="bg-white profile-details">
                                
                                    <a class="d-flex w-100 align-items-center border-bottom p-3" data-target="#paycard" data-toggle="modal">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                    <p class="small text-muted m-0">Add a credit or debit card</p>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> 
                                    <a class="d-flex w-100 align-items-center border-bottom p-3" data-target="#exampleModal" data-toggle="modal">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                    <p class="small text-muted m-0">Add or remove a delivery address</p>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> <a class="d-flex align-items-center border-bottom p-3" data-target="#inviteModal" data-toggle="modal">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                    <p class="small text-primary m-0">Get $10.00 FREE</p>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> 
                                    <a class="d-flex w-100 align-items-center border-bottom px-3 py-4" href="{{route('faq')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Delivery Support</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> 
                                    <a class="d-flex w-100 align-items-center border-bottom px-3 py-4" href="{{route('contact_us')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Contact</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> 
                                    <a class="d-flex w-100 align-items-center border-bottom px-3 py-4" href="{{route('terms')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term of use</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> 
                                    <a class="d-flex w-100 align-items-center px-3 py-4" href="{{route('privacy')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i> Privacy policy</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="rounded shadow-sm">
                            <div class="osahan-cart-item-profile bg-white rounded shadow-sm p-4">
                                <div class="flex-column">
                                    <h6 class="font-weight-bold">Tell us about yourself</h6>
                                    <p class="text-muted">Whether you have questions or you would just like to say hello, contact us.</p>
                                    <form>
                                        <div class="form-group">
                                            <label class="small font-weight-bold" for="exampleFormControlInput1">Your Name</label> <input class="form-control" id="exampleFormControlInput1" placeholder="Gurdeep Osahan" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="small font-weight-bold" for="exampleFormControlInput2">Email Address</label> <input class="form-control" id="exampleFormControlInput2" placeholder="iamosahan@gmail.com" type="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="small font-weight-bold" for="exampleFormControlInput3">Phone Number</label> <input class="form-control" id="exampleFormControlInput3" placeholder="1-800-643-4500" type="number">
                                        </div>
                                        <div class="form-group">
                                            <label class="small font-weight-bold" for="exampleFormControlTextarea1">HOW CAN WE HELP YOU?</label> 
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Hi there, I would like to ..." rows="3"></textarea>
                                        </div><a class="btn btn-primary btn-block" href="#">SUBMIT</a>
                                    </form>
                                    <div class="mapouter pt-3">
                                        <div class="gmap_canvas">
                                            <iframe frameborder="0" height="100%" id="gmap_canvas" marginheight="0" marginwidth="0" name="gmap_canvas" scrolling="no" src="{{asset('frontend')}}/https://maps.google.com/maps?q=dugri%20ludhiana&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.includes.form-main_nav')
        </div>
    </x-slot>
</x-guest-layout>