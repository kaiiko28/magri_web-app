<x-guest-layout>

    <x-slot name="slot">
        <div class="osahan-checkout">
            <div class="d-none">
                <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                    <a class="toggle togglew toggle-2" href="#"><span></span></a>
                    <h4 class="font-weight-bold m-0 text-white">Checkout</h4>
                </div>
            </div>
            <div class="container position-relative">
                <div class="py-5 row">
                    <div class="col-md-8 mb-3">
                        <div>
                            <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                                <div class="osahan-cart-item-profile bg-white p-3">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 font-weight-bold">Delivery Address</h6>
                                        <div class="row">
                                            <div class="custom-control col-lg-6 custom-radio mb-3 position-relative border-custom-radio">
                                                <input checked class="custom-control-input" id="customRadioInline1" name="customRadioInline1" type="radio"> <label class="custom-control-label w-100" for="customRadioInline1"></label>
                                                <div>
                                                    <label class="custom-control-label w-100" for="customRadioInline1"></label>
                                                    <div class="p-3 bg-white rounded shadow-sm w-100">
                                                        <label class="custom-control-label w-100" for="customRadioInline1"></label>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <label class="custom-control-label w-100" for="customRadioInline1"></label>
                                                            <h6 class="mb-0"><label class="custom-control-label w-100" for="customRadioInline1">Home</label></h6>
                                                            <p class="mb-0 badge badge-success ml-auto"><label class="custom-control-label w-100" for="customRadioInline1"><i class="icofont-check-circled"></i> Default</label></p>
                                                        </div>
                                                        <p class="small text-muted m-0"><label class="custom-control-label w-100" for="customRadioInline1">1001 Veterans Blvd</label></p>
                                                        <p class="small text-muted m-0"><label class="custom-control-label w-100" for="customRadioInline1">Redwood City, CA 94063</label></p>
                                                    </div><label class="custom-control-label w-100" for="customRadioInline1"><a class="btn btn-block btn-light border-top" data-target="#exampleModal" data-toggle="modal" href="#">Edit</a></label>
                                                </div><label class="custom-control-label w-100" for="customRadioInline1"></label>
                                            </div>
                                            <div class="custom-control col-lg-6 custom-radio position-relative border-custom-radio">
                                                <input class="custom-control-input" id="customRadioInline2" name="customRadioInline1" type="radio"> <label class="custom-control-label w-100" for="customRadioInline2"></label>
                                                <div>
                                                    <label class="custom-control-label w-100" for="customRadioInline2"></label>
                                                    <div class="p-3 rounded bg-white shadow-sm w-100">
                                                        <label class="custom-control-label w-100" for="customRadioInline2"></label>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <label class="custom-control-label w-100" for="customRadioInline2"></label>
                                                            <h6 class="mb-0"><label class="custom-control-label w-100" for="customRadioInline2">Work</label></h6>
                                                            <p class="mb-0 badge badge-light ml-auto"><label class="custom-control-label w-100" for="customRadioInline2"><i class="icofont-check-circled"></i> Select</label></p>
                                                        </div>
                                                        <p class="small text-muted m-0"><label class="custom-control-label w-100" for="customRadioInline2">Model Town, Ludhiana</label></p>
                                                        <p class="small text-muted m-0"><label class="custom-control-label w-100" for="customRadioInline2">Punjab 141002, India</label></p>
                                                    </div><label class="custom-control-label w-100" for="customRadioInline2"><a class="btn btn-block btn-light border-top" data-target="#exampleModal" data-toggle="modal" href="#">Edit</a></label>
                                                </div><label class="custom-control-label w-100" for="customRadioInline2"></label>
                                            </div>
                                        </div><a class="btn btn-primary" data-target="#exampleModal" data-toggle="modal" href="#">ADD NEW ADDRESS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                                <div class="osahan-card bg-white border-bottom overflow-hidden">
                                    <div class="osahan-card-header" id="headingOne">
                                        <h2 class="mb-0"><button aria-controls="collapseOne" aria-expanded="true" class="d-flex p-3 align-items-center btn btn-link w-100" data-target="#collapseOne" data-toggle="collapse" type="button"><i class="feather-credit-card mr-3"></i> Credit/Debit Card <i class="feather-chevron-down ml-auto"></i></button></h2>
                                    </div>
                                    <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
                                        <div class="osahan-card-body border-top p-3">
                                            <h6 class="m-0">Add new card</h6>
                                            <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa Card / Rupay )</span></p>
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-12 form-group">
                                                        <label class="form-label font-weight-bold small">Card number</label>
                                                        <div class="input-group">
                                                            <input class="form-control" placeholder="Card number" type="number">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="button"><i class="feather-credit-card"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <label class="form-label font-weight-bold small">Valid through(MM/YY)</label><input class="form-control" placeholder="Enter Valid through(MM/YY)" type="number">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label class="form-label font-weight-bold small">CVV</label><input class="form-control" placeholder="Enter CVV Number" type="number">
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label class="form-label font-weight-bold small">Name on card</label><input class="form-control" placeholder="Enter Card number" type="text">
                                                    </div>
                                                    <div class="col-md-12 form-group mb-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" id="custom-checkbox1" type="checkbox"><label class="custom-control-label small pt-1" for="custom-checkbox1" title="">Securely save this card for a faster checkout next time.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="osahan-card bg-white border-bottom overflow-hidden">
                                    <div class="osahan-card-header" id="headingTwo">
                                        <h2 class="mb-0"><button aria-controls="collapseTwo" aria-expanded="false" class="d-flex p-3 align-items-center btn btn-link w-100" data-target="#collapseTwo" data-toggle="collapse" type="button"><i class="feather-globe mr-3"></i> Net Banking <i class="feather-chevron-down ml-auto"></i></button></h2>
                                    </div>
                                    <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample" id="collapseTwo">
                                        <div class="osahan-card-body border-top p-3">
                                            <form>
                                                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                    <label class="btn btn-outline-secondary active"><input checked id="option1" name="options" type="radio"> HDFC</label> <label class="btn btn-outline-secondary"><input id="option2" name="options" type="radio"> ICICI</label> <label class="btn btn-outline-secondary"><input id="option3" name="options" type="radio"> AXIS</label>
                                                </div>
                                                <hr>
                                                <div class="form-row">
                                                    <div class="col-md-12 form-group mb-0">
                                                        <label class="form-label small font-weight-bold">Select Bank</label><br>
                                                        <select class="custom-select form-control">
                                                            <option>
                                                                Bank
                                                            </option>
                                                            <option>
                                                                KOTAK
                                                            </option>
                                                            <option>
                                                                SBI
                                                            </option>
                                                            <option>
                                                                UCO
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="osahan-card bg-white overflow-hidden">
                                    <div class="osahan-card-header" id="headingThree">
                                        <h2 class="mb-0"><button aria-controls="collapseThree" aria-expanded="false" class="d-flex p-3 align-items-center btn btn-link w-100" data-target="#collapseThree" data-toggle="collapse" type="button"><i class="feather-dollar-sign mr-3"></i> Cash on Delivery <i class="feather-chevron-down ml-auto"></i></button></h2>
                                    </div>
                                    <div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample" id="collapseThree">
                                        <div class="card-body border-top">
                                            <h6 class="mb-3 mt-0 mb-3 font-weight-bold">Cash</h6>
                                            <p class="m-0">Please keep exact change handy to help us serve you better</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                            <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                                {{-- <img alt="osahan" class="mr-3 rounded-circle img-fluid" src="{{asset('fontend/img/starter1.jpg')}}"> --}}

                                <img alt="osahan" class="mr-3 rounded-circle img-fluid" src="{{asset('frontend')}}/img/starter1.jpg">
                                
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 font-weight-bold">Spice Hut Indian Restaurant</h6>
                                    <p class="mb-0 small text-muted"><i class="feather-map-pin"></i> 2036 2ND AVE, NEW YORK, NY 10029</p>
                                </div>
                            </div>
                            <div class="bg-white border-bottom py-2">
                                <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-danger">
                                            &middot;
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Chicken Tikka Sub</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right"><button class="btn-sm left dec btn btn-outline-secondary" type="button"><span class="count-number float-right"><i class="feather-minus"></i></span> <input class="count-number-input" readonly type="text" value="2"> <button class="btn-sm right inc btn btn-outline-secondary" type="button"><i class="feather-plus"></i></button></button></span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$628</p>
                                    </div>
                                </div>
                                <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-danger">
                                            &middot;
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Methi Chicken Dry</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right"><button class="btn-sm left dec btn btn-outline-secondary" type="button"><span class="count-number float-right"><i class="feather-minus"></i></span> <input class="count-number-input" readonly type="text" value="2"> <button class="btn-sm right inc btn btn-outline-secondary" type="button"><i class="feather-plus"></i></button></button></span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$628</p>
                                    </div>
                                </div>
                                <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-danger">
                                            &middot;
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Reshmi Kebab</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right"><button class="btn-sm left dec btn btn-outline-secondary" type="button"><span class="count-number float-right"><i class="feather-minus"></i></span> <input class="count-number-input" readonly type="text" value="2"> <button class="btn-sm right inc btn btn-outline-secondary" type="button"><i class="feather-plus"></i></button></button></span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$628</p>
                                    </div>
                                </div>
                                <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-success">
                                            &middot;
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Lemon Cheese Dry</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right"><button class="btn-sm left dec btn btn-outline-secondary" type="button"><span class="count-number float-right"><i class="feather-minus"></i></span> <input class="count-number-input" readonly type="text" value="2"> <button class="btn-sm right inc btn btn-outline-secondary" type="button"><i class="feather-plus"></i></button></button></span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$628</p>
                                    </div>
                                </div>
                                <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-success">
                                            &middot;
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Rara Paneer</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right"><button class="btn-sm left dec btn btn-outline-secondary" type="button"><span class="count-number float-right"><i class="feather-minus"></i></span> <input class="count-number-input" readonly type="text" value="2"> <button class="btn-sm right inc btn btn-outline-secondary" type="button"><i class="feather-plus"></i></button></button></span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small">$628</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-3 py-3 border-bottom clearfix">
                                <div class="input-group-sm mb-2 input-group">
                                    <input class="form-control" placeholder="Enter promo code" type="text">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="feather-percent"></i> APPLY</button>
                                    </div>
                                </div>
                                <div class="mb-0 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather-message-square"></i></span>
                                    </div>
                                    <textarea aria-label="With textarea" class="form-control" placeholder="Any suggestions? We will pass it on..."></textarea>
                                </div>
                            </div>
                            <div class="bg-white p-3 clearfix border-bottom">
                                <p class="mb-1">Item Total <span class="float-right text-dark">$3140</span></p>
                                <p class="mb-1">Restaurant Charges <span class="float-right text-dark">$62.8</span></p>
                                <p class="mb-1">Delivery Fee<span class="text-info ml-1"><i class="feather-info"></i></span><span class="float-right text-dark">$10</span></p>
                                <p class="mb-1 text-success">Total Discount<span class="float-right text-success">$1884</span></p>
                                <hr>
                                <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">$1329</span></h6>
                            </div>
                            <div class="p-3">
                                <a class="btn btn-success btn-block btn-lg" href="{{route('successful')}}">PAY $1329<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>