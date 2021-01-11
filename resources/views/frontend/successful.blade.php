<x-guest-layout>

    <x-slot name="slot">
        <div class="d-none">
            <div class="bg-primary p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Thanks :)</h4>
            </div>
        </div>
        <div class="py-5 osahan-coming-soon d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="text-center pb-3">
                    <h1 class="font-weight-bold">Osahan, Your order has been successful</h1>
                    <p>Check your order status in <a class="font-weight-bold text-decoration-none text-primary" href="{{route('my_order')}}">My Orders</a> about next steps information.</p>
                </div>
                <div class="bg-white rounded text-center p-4 shadow-sm">
                    <h1 class="display-1 mb-4">🎉</h1>
                    <h6 class="font-weight-bold mb-2">Preparing your order</h6>
                    <p class="small text-muted">Your order will be prepared and will come soon</p><a class="btn rounded btn-primary btn-lg btn-block" href="{{route('status_onprocess')}}">Track My Order</a>
                </div>
            </div>
        </div>
    </x-slot>

</x-guest-layout>