@extends('layouts.app')

@section('title', 'Checkout')

@section('main-content')
@if(count($transaction->carts)==0)
    <caption><h5 class="text-black mb-0 ml-5">You don't have any cart to checkout</h5></caption>
@else
    <form action="" id="cart_form">
        <fieldset disabled>
            <table id="user_cart" class="table table-borderless mx-auto mb-0">
              
                <caption><h5 class="text-black mb-0">Your Cart</h5></caption>
                <thead>
                    <tr>
                        <th class="text-black border-0 py-4">PRODUCT</th>
                        <th class="text-black border-0 py-4">PRICE</th>
                        <th class="text-black border-0 py-4">QTY</th>
                        <th class="text-black border-0 py-4">SUBTOTAL</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($transaction->carts as $cart)
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="{{ asset('storage/image/'.$cart->product_img) }}" alt="Product image" class="rounded-circle">
                                <p class="text-black mb-0 ml-3">{{$cart->product_name}}</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR {{$cart->product_price}}</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="{{$cart->product_qty}}" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR {{$cart->product_subtotal}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
    </form>

    <div id="transaction_details" class="d-flex justify-content-between">
        <p class="text-black">Ship to: {{Auth::user()->address}}</p>
        <p><b class="text-black">Total: IDR {{$transaction->total_price}}</b></p>
    </div>
    <form action="{{Route('checkout-cart')}}" id="checkout_form" class="d-flex flex-column align-items-end" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="checkout_code" class="text-black">Please enter the following passcode to checkout: {{$transaction->checkout_token}}</label>
            <input type="text" name="checkout_token" id="checkout_code" class="form-control" placeholder="XXXXXX">
            @if(session()->has('error'))
            <label for="error_message" class="text-danger">Passcode does not match</label>
            @endif
        </div>
      
        <button type="submit" class="btn purple-btn">Confirm</button>
    </form>
@endif
@endsection