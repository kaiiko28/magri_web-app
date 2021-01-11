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
                                    <p class="text-muted m-0 small"><span class="__cf_email__" data-cfemail="c1a8a0acaeb2a0a9a0af81a6aca0a8adefa2aeac">[email&#160;protected]</span></p>
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
                        <div class="rounded shadow-sm p-4 bg-white">
                            <h5 class="mb-4">My account</h5>
                            <div id="edit_profile">
                                <div>
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="exampleInputName1">First Name</label> <input class="form-control" id="exampleInputName1d" type="text" value="Gurdeep">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Last Name</label> <input class="form-control" id="exampleInputName1" type="text" value="Singh">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNumber1">Mobile Number</label> <input class="form-control" id="exampleInputNumber1" type="number" value="1234567890">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label> <input class="form-control" id="exampleInputEmail1" type="email" value="iamosahan@gmail.com">
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary btn-block" type="submit">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="additional">
                                    <div class="change_password my-3">
                                        <a class="p-3 border rounded bg-white btn d-flex align-items-center" href="{{route('forgot_password')}}">Change Password <i class="feather-arrow-right ml-auto"></i></a>
                                    </div>
                                    <div class="deactivate_account">
                                        <a class="p-3 border rounded bg-white btn d-flex align-items-center" href="{{route('forgot_password')}}">Deactivate Account <i class="feather-arrow-right ml-auto"></i></a>
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