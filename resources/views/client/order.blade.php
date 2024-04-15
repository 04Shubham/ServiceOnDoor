@extends('layouts.client.master')

@section('content')
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-5">
                <h1 style="font-size: 2.5rem !important;" class="pb-3">My Orders</h1>
                <hr>
            </div>

            @if ($orders->count() == 0)
            <div class="container shadow mb-3 p-5">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <i style="font-size: 40px;" class="fas fa-shopping-cart text-mute"></i>
                    <h3 style="font-size: 2.3rem">No Orders</h3>
                    <p style="font-size: 1.3rem">Go to Cart</p>
                </div>
            </div>
            @else
            @foreach ($orders as $order)
            <div class="container shadow-sm mb-3 p-2">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('uploads/product/' . $order->image) }}" alt="" width="150px">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <h1 style="font-size: 2.5rem !important;" class="mb-3">{{ $order->title }}</h1>
                        <div class="mb-2">
                            Quantity:
                            <span class="badge badge-dark">{{ $order->quantity }}</span>
                        </div>
                        <div class="mb-2">
                            Payment Status:
                            <span class="badge {{ $order->payment_status == "Paid" ? "badge-success" : "badge-danger" }} ">{{ $order->payment_status }}</span>
                        </div>
                        <div class="mb-3">
                            Delivery Status:
                            <span class="badge {{ $order->delivery_status == "Not Shipped" ? "badge-danger" : "badge-success" }} ">{{ $order->delivery_status }}</span>
                        </div>
                    </div>
                    <div class="col-md-2 p-2 col-sm-12">
                        <h2 class="text-danger price" style="font-size: 2rem !important;">₹ {{ $order->quantity * $order->price }}</h2>
                        <div class="mb-2">
                            <a class="btn btn-dark mb-2" href="{{ url('print_receipt', $order->id) }}">
                                Print Receipt
                            </a>
                            <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure want to cancel this order?')" href="{{ url('cancel_order', $order->id) }}">
                                Cancel Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>
    
@endsection


  