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
                                    <p class="text-muted m-0 small"><span class="__cf_email__" data-cfemail="cea7afa3a1bdafa6afa08ea9a3afa7a2e0ada1a3">[email&#160;protected]</span></p>
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
                                </div></a> <a class="d-flex w-100 align-items-center border-bottom p-3" data-target="#exampleModal" data-toggle="modal">
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
                                </div></a> <a class="d-flex w-100 align-items-center border-bottom px-3 py-4" href="{{route('faq')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Delivery Support</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> <a class="d-flex w-100 align-items-center border-bottom px-3 py-4" href="{{route('contact_us')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Contact</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> <a class="d-flex w-100 align-items-center border-bottom px-3 py-4" href="{{route('terms')}}">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term of use</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div></a> <a class="d-flex w-100 align-items-center px-3 py-4" href="{{route('privacy')}}">
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
                        <div class="osahan-cart-item-profile">
                            <div class="box bg-white mb-3 shadow-sm rounded">
                                <div class="p-3 d-flex align-items-center">
                                    <i class="feather-message-circle display-4"></i>
                                    <div class="ml-3">
                                        <h6 class="text-dark mb-2 mt-0">Help Forum</h6>
                                        <p class="mb-0 text-muted">Find the answer to any question, from the basics ...</p>
                                    </div>
                                </div>
                                <div class="overflow-hidden border-top d-flex align-items-center p-3">
                                    <a class="font-weight-bold d-block" href="#">Swiggiweb Help Forum.</a> <i class="feather-arrow-right-circle ml-auto text-primary"></i>
                                </div>
                            </div>
                            <div class="box bg-white mb-3 shadow-sm rounded">
                                <div class="p-3 d-flex align-items-center">
                                    <i class="feather-lock display-4"></i>
                                    <div class="ml-3">
                                        <h6 class="text-dark mb-2 mt-0">Safety Center</h6>
                                        <p class="mb-0 text-muted">Want to learn more about setting up and managing ...</p>
                                    </div>
                                </div>
                                <div class="overflow-hidden border-top d-flex align-items-center p-3">
                                    <a class="font-weight-bold d-block" href="#">Swiggiweb Safety Center.</a> <i class="feather-arrow-right-circle ml-auto text-primary"></i>
                                </div>
                            </div>
                            <div id="basics">
                                <div class="mb-2 mt-3">
                                    <h5 class="font-weight-semi-bold mb-0">Basics</h5>
                                </div>
                                <div id="basicsAccordion">
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="basicsHeadingOne">
                                            <h5 class="mb-0"><button aria-controls="basicsCollapseOne" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-target="#basicsCollapseOne" data-toggle="collapse">Do you have any built-in caching? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="basicsHeadingOne" class="collapse show" data-parent="#basicsAccordion" id="basicsCollapseOne" style="">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="basicsHeadingTwo">
                                            <h5 class="mb-0"><button aria-controls="basicsCollapseTwo" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-target="#basicsCollapseTwo" data-toggle="collapse">Can I add/upgrade my plan at any time? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="basicsHeadingTwo" class="collapse" data-parent="#basicsAccordion" id="basicsCollapseTwo" style="">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="basicsHeadingThree">
                                            <h5 class="mb-0"><button aria-controls="basicsCollapseThree" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-target="#basicsCollapseThree" data-toggle="collapse">What access comes with hosting plan? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="basicsHeadingThree" class="collapse" data-parent="#basicsAccordion" id="basicsCollapseThree" style="">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="basicsHeadingFour">
                                            <h5 class="mb-0"><button aria-controls="basicsCollapseFour" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-target="#basicsCollapseFour" data-toggle="collapse">How do I change my password? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="basicsHeadingFour" class="collapse" data-parent="#basicsAccordion" id="basicsCollapseFour">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="account">
                                <div class="mb-2 mt-3">
                                    <h5 class="font-weight-semi-bold mb-0">Account</h5>
                                </div>
                                <div id="accountAccordion">
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="accountHeadingOne">
                                            <h5 class="mb-0"><button aria-controls="accountCollapseOne" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3" data-target="#accountCollapseOne" data-toggle="collapse">How do I change my password? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="accountHeadingOne" class="collapse show" data-parent="#accountAccordion" id="accountCollapseOne">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="accountHeadingTwo">
                                            <h5 class="mb-0"><button aria-controls="accountCollapseTwo" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-target="#accountCollapseTwo" data-toggle="collapse">How do I delete my account? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="accountHeadingTwo" class="collapse" data-parent="#accountAccordion" id="accountCollapseTwo">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="accountHeadingThree">
                                            <h5 class="mb-0"><button aria-controls="accountCollapseThree" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-target="#accountCollapseThree" data-toggle="collapse">How do I change my account settings? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="accountHeadingThree" class="collapse" data-parent="#accountAccordion" id="accountCollapseThree">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                        <div id="accountHeadingFour">
                                            <h5 class="mb-0"><button aria-controls="accountCollapseFour" aria-expanded="false" class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3" data-target="#accountCollapseFour" data-toggle="collapse">I forgot my password. How do I reset it? <span class="card-btn-arrow"><span class="feather-chevron-down"></span></span></button></h5>
                                        </div>
                                        <div aria-labelledby="accountHeadingFour" class="collapse" data-parent="#accountAccordion" id="accountCollapseFour">
                                            <div class="card-body border-top p-3 text-muted">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid ...
                                            </div>
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