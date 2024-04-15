@extends('layouts.client.master')
@section('content')
<div class="container-fluid py-5">
    <div class="container-fluid py-5">
      
            {{-- <div class="container mt-5">
                <h2 class="text-center mb-4">OnDoor Services Order Form</h2>
                <form>
                    <!-- Service Selection -->
                    <div class="form-group">
                        <label for="serviceSelect">Select Service:</label>
                        <div class="service-options">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="plumbing" name="service[]" value="Plumbing">
                                <label class="form-check-label" for="plumbing">Plumbing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="electrical" name="service[]" value="Electrical Repairs">
                                <label class="form-check-label" for="electrical">Electrical Repairs</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cleaning" name="service[]" value="Cleaning Services">
                                <label class="form-check-label" for="cleaning">Cleaning Services</label>
                            </div>
                            <!-- Add more service options -->
                        </div>
                    </div>
        
                    <!-- Personal Information -->
                    <div class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
        
                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
        
                    <!-- Date and Time Preferences -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="serviceDate">Preferred Date:</label>
                            <input type="date" class="form-control" id="serviceDate" name="serviceDate" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="serviceTime">Preferred Time:</label>
                            <input type="time" class="form-control" id="serviceTime" name="serviceTime" required>
                        </div>
                    </div>
        
                    <!-- Payment Details -->
                    <div class="form-group">
                        <label for="cardNumber">Card Number:</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="expiryDate">Expiry Date:</label>
                            <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvv">CVV:</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" required>
                        </div>
                    </div>
        
                    <!-- Additional Comments -->
                    <div class="form-group">
                        <label for="comments">Additional Comments:</label>
                        <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                    </div>
        
                    <button type="submit" class="btn btn-primary btn-block">Submit Order</button>
                </form>
            </div>
         --}}

         <div class="untree_co-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border p-4 rounded" role="alert">
                            Returning customer? <a href="#">Click here</a> to login
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="col-md-6 mb-5 mb-md-0" method="post" action="{{route('address.create')}}">
                        @csrf
                        <h2 class="h3 mb-3 text-black">Billing Details</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            
                            <div class="form-group">
                                <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name">
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="street" class="text-black">Street Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="street" placeholder="Street address">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_state_country" class="text-black">Country <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="country">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_state_country" class="text-black">State <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="state">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_state_country" class="text-black">City <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_postal_zip" class="text-black">Pincode <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pincode">
                                </div>
                            </div>
    
                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_phone" class="text-black">Alternate Phone</label>
                                    <input type="text" class="form-control" name="alt_phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Add Address</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6">
    
                        {{-- <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                                <div class="p-3 p-lg-5 border bg-white">
    
                                    <label for="c_code" class="text-black mb-3">Enter your coupon code if you have
                                        one</label>
                                    <div class="input-group w-75 couponcode-wrap">
                                        <input type="text" class="form-control me-2" id="c_code"
                                            placeholder="Coupon Code" aria-label="Coupon Code"
                                            aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-black btn-sm" type="button"
                                                id="button-addon2">Apply</button>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div> --}}
    
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Shipping Address</h2>
                                <div class="p-3 p-lg-5 border bg-white">
                                    @if($address)
                                        <label class="text-black"><strong>{{$address->name}}</strong></label><br>
                                        <label class="text-black">{{$address->street}}</label><br>
                                        <label class="text-black">{{$address->city}}, {{$address->state}}, {{$address->country}} - {{$address->pincode}}</label><br>
                                        <label class="text-black"><strong>Contact: </strong>{{$address->phone}}</label><br>
                                    @endif
                                </div>
                            </div>
                        </div>
    
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border bg-white">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            @php
                                                $subTotal = 0;
                                            @endphp
                                            @foreach ($carts as $item)
                                                <tr>
                                                    <td>{{$item->title}} <strong class="mx-2">x</strong> {{$item->quantity}}</td>
                                                    <td>{{$item->price}}</td>
                                                </tr>
                                                @php
                                                    $subTotal += $item->price * $item->quantity
                                                @endphp
                                            @endforeach
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                                <td class="text-black">{{$subTotal}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                                <td class="text-black font-weight-bold"><strong>{{$subTotal}}</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
    
                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                                href="#collapsebank" role="button" aria-expanded="false"
                                                aria-controls="collapsebank">Direct Bank Transfer</a></h3>
    
                                        <div class="collapse" id="collapsebank">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                                    your Order ID as the payment reference. Your order won’t be shipped
                                                    until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                                href="#collapsecheque" role="button" aria-expanded="false"
                                                aria-controls="collapsecheque">Cheque Payment</a></h3>
    
                                        <div class="collapse" id="collapsecheque">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                                    your Order ID as the payment reference. Your order won’t be shipped
                                                    until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="border p-3 mb-5">
                                        <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                                href="#collapsepaypal" role="button" aria-expanded="false"
                                                aria-controls="collapsepaypal">Paypal</a></h3>
    
                                        <div class="collapse" id="collapsepaypal">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                                    your Order ID as the payment reference. Your order won’t be shipped
                                                    until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <a href="{{route('razorpay.payment', $subTotal)}}" class="btn btn-primary btn-lg py-3 btn-block">Make Payment</a>
                                        <button class="btn btn-primary btn-lg py-3 btn-block">Place Order</button>
                                    </div>
    
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
     
    </div>
</div>
@endsection