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
                                    <p class="text-muted m-0 small"><span class="__cf_email__" data-cfemail="c9a0a8a4a6baa8a1a8a789aea4a8a0a5e7aaa6a4">[email&#160;protected]</span></p>
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
                        <div class="rounded shadow-sm">
                            <div class="osahan-privacy bg-white rounded shadow-sm p-4">
                                <div class="mb-4" id="intro">
                                    <div class="mb-3">
                                        <h2 class="h5">Welcome to Swiggiweb</h2>
                                    </div>
                                    <p>Thanks for using our products and services ("Services"). The Services are provided by Pixeel Ltd. ("Swiggiweb"), located at 153 Williamson Plaza, Maggieberg, MT 09514, England, United Kingdom.</p>
                                    <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>
                                </div>
                                <div class="mb-4" id="services">
                                    <div class="mb-3">
                                        <h3 class="h5">1. Using our services</h3>
                                    </div>
                                    <p>You must follow any policies made available to you within the Services.</p>
                                    <p>Don't misuse our Services. For example, don't interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.</p>
                                    <div class="mb-3 active" id="personal-data">
                                        <h4 class="h6">A. Personal Data that we collect about you.</h4>
                                    </div>
                                    <p>Personal Data is any information that relates to an identified or identifiable individual. The Personal Data that you provide directly to us through our Sites will be apparent from the context in which you provide the data. In particular:</p>
                                    <ul class="text-secondary">
                                        <li class="pb-2">When you register for a Swiggiweb account we collect your full name, email address, and account log-in credentials.</li>
                                        <li class="pb-2">When you fill-in our online form to contact our sales team, we collect your full name, work email, country, and anything else you tell us about your project, needs and timeline.</li>
                                        <li class="pb-2">When you use the "Remember Me" feature of Swiggiweb Checkout, we collect your email address, payment card number, CVC code and expiration date.</li>
                                    </ul>
                                    <p>When you respond to Swiggiweb emails or surveys we collect your email address, name and any other information you choose to include in the body of your email or responses. If you contact us by phone, we will collect the phone number you use to call Swiggiweb. If you contact us by phone as a Swiggiweb User, we may collect additional information in order to verify your identity.</p>
                                    <div class="mb-3 active" id="information">
                                        <h4 class="h6">B. Information that we collect automatically on our Sites.</h4>
                                    </div>
                                    <p>We also may collect information about your online activities on websites and connected devices over time and across third-party websites, devices, apps and other online features and services. We use Google Analytics on our Sites to help us analyze Your use of our Sites and diagnose technical issues.</p>
                                    <p>To learn more about the cookies that may be served through our Sites and how You can control our use of cookies and third-party analytics, please see our Cookie Policy.</p>
                                </div>
                                <div class="mb-4" id="privacy">
                                    <div class="mb-3">
                                        <h3 class="h5">2. Privacy and copyright protection</h3>
                                    </div>
                                    <p>Swiggiweb's privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Swiggiweb - Online Food Ordering Website Template can use such data in accordance with our privacy policies.</p>
                                    <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>
                                    <p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and Swiggiweb's policy about responding to notices in <a href="https://askbootstrap.com/">our Help Center</a>.</p>
                                </div>
                                <div class="active" id="yourContent">
                                    <div class="mb-3">
                                        <h3 class="h5">3. Your content in our services</h3>
                                    </div>
                                    <p>Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.</p>
                                    <p>When you upload, submit, store, send or receive content to or through our Services, you give Swiggiweb (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content.</p>
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