@extends('layouts.client.master')

@section('title', 'Cart- WhaFood')

@section('content')
    <div class="untree_co-section before-footer-section">
        <div class="container mt-4 py-5">
            <div class="row mb-5">
                <form class="col-md-12" method="post" action="{{ route('shop.cart.update') }}" id="cart_form">
                    @csrf
                    <div class="site-blocks-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $cartIndex = 0;
                                    $subTotal = 0;
                                @endphp

                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="{{ asset('uploads/product/' . $cart->image) }}" alt="Image"
                                                class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $cart->title }}</h2>
                                        </td>
                                        <td>{{ $cart->price }}</td>
                                        <td>
                                            <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                                style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-black decrease"
                                                        type="button">&minus;</button>
                                                </div>
                                                <input type="text" name="{{'cartIndex'.$cartIndex}}" class="form-control text-center quantity-amount"
                                                    value="{{ $cart->quantity }}" placeholder=""
                                                    aria-label="Example text with button addon"
                                                    aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-black increase"
                                                        type="button">&plus;</button>
                                                </div>
                                            </div>

                                        </td>
                                        <td>{{ $cart->price * $cart->quantity }}</td>
                                        <td><a style="width:32px; height:32px; display:flex; align-items:center; justify-content:center; border-radius: 4px;background-color:red; color:white; font-size: 20px;" href="{{url('cart/delete/'.$cart->id)}}" >&times;</a></td>
                                    </tr>
                                    @php
                                        $cartIndex += 1;
                                        $subTotal += $cart->price * $cart->quantity;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <button class="btn btn-primary" href="{{ route('shop.cart.update') }}" onclick="document.getElementById('cart_form').submit()">Update Cart</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-black h4" for="coupon">Coupon</label>
                            <p>Enter your coupon code if you have one.</p>
                        </div>
                        <div class="col-md-7 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-5">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">{{$subTotal}}</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">{{$subTotal}}</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('cart.checkout')}}" class="btn btn-primary">Proceed To Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
