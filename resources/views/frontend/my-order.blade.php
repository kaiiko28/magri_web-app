<x-guest-layout>

    <x-slot name="slot">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">My Order</h4>
            </div>
        </div>
        <section class="py-4 osahan-main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a aria-controls="completed" aria-selected="true" class="nav-link border-0 text-dark py-3 active" data-toggle="tab" href="#completed" id="completed-tab" role="tab"><i class="feather-check mr-2 text-success mb-0"></i> Completed</a>
                            </li>
                            <li class="nav-item border-top" role="presentation">
                                <a aria-controls="progress" aria-selected="false" class="nav-link border-0 text-dark py-3" data-toggle="tab" href="#progress" id="progress-tab" role="tab"><i class="feather-clock mr-2 text-warning mb-0"></i> On Progress</a>
                            </li>
                            <li class="nav-item border-top" role="presentation">
                                <a aria-controls="canceled" aria-selected="false" class="nav-link border-0 text-dark py-3" data-toggle="tab" href="#canceled" id="canceled-tab" role="tab"><i class="feather-x-circle mr-2 text-danger mb-0"></i> Canceled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content col-md-9" id="myTabContent">
                        <div aria-labelledby="completed-tab" class="tab-pane fade show active" id="completed" role="tabpanel">
                            <div class="order-body">
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular5.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_complete')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-primary px-3" href="{{route('checkout')}}">Reorder</a> <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular4.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_complete')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-success text-white py-1 px-2 rounded small mb-1">Delivered</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-primary px-3" href="{{route('checkout')}}">Reorder</a> <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="progress-tab" class="tab-pane fade" id="progress" role="tabpanel">
                            <div class="order-body">
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular1.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_onprocess')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-warning text-white py-1 px-2 rounded small mb-1">On Process</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-primary px-3" href="{{route('status_onprocess')}}">Track</a> <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular2.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_onprocess')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-warning text-white py-1 px-2 rounded small mb-1">On Process</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-primary px-3" href="{{route('status_onprocess')}}">Track</a> <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular3.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_onprocess')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-warning text-white py-1 px-2 rounded small mb-1">On Process</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-primary px-3" href="{{route('status_onprocess')}}">Track</a> <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="canceled-tab" class="tab-pane fade" id="canceled" role="tabpanel">
                            <div class="order-body">
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular6.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_canceled')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-danger text-white py-1 px-2 rounded small mb-1">Payment failed</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="text-muted mr-3"><img alt="#" class="img-fluid order_img rounded" src="{{asset('frontend')}}/img/popular6.png"></div>
                                            <div>
                                                <p class="mb-0 font-weight-bold"><a class="text-dark" href="{{route('restaurant')}}">Conrad Chicago Restaurant</a></p>
                                                <p class="mb-0">Punjab, India</p>
                                                <p>ORDER #321DERS</p>
                                                <p class="mb-0 small"><a href="{{route('status_canceled')}}">View Details</a></p>
                                            </div>
                                            <div class="ml-auto">
                                                <p class="bg-danger text-white py-1 px-2 rounded small mb-1">Canceled</p>
                                                <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-3">
                                            <div class="small">
                                                <p class="text- font-weight-bold mb-0">Kesar Sweet x 1</p>
                                                <p class="text- font-weight-bold mb-0">Gulab Jamun x 4</p>
                                            </div>
                                            <div class="text-muted m-0 ml-auto mr-3 small">
                                                Total Payment<br>
                                                <span class="text-dark font-weight-bold">$12.74</span>
                                            </div>
                                            <div class="text-right">
                                                <a class="btn btn-outline-primary px-3" href="{{route('contact_us')}}">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>

</x-guest-layout>