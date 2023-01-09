@extends('layouts.app')

@section('title', 'Checkout')

@section('main-content')
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
                        
                    @endforeach
                    <tr class="gray-shadow">
                        <td class="d-flex align-items-center border-0 align-middle">
                            <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                            <p class="text-black mb-0 ml-3">{{$cart->product_name}}</p>
                        </td>
                        <td class="text-black border-0 align-middle">IDR {{$cart->product_price}}</td>
                        <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="{{$cart->product_qty}}" class="text-black"></td>
                        <td class="text-black border-0 align-middle">IDR {{$cart->product_subtotal}}</td>
                       
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </form>

    <div id="transaction_details" class="d-flex justify-content-between">
        <p class="text-black">Ship to: address</p>
        <p><b class="text-black">Total: IDR 1540000</b></p>
    </div>
    <form action="{{Route('checkout-cart')}}" id="checkout_form" class="d-flex flex-column align-items-end" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="checkout_code" class="text-black">Please enter the following passcode to checkout: {{$transaction->checkout_token}}</label>
            <input type="text" name="checkout_token" id="checkout_code" class="form-control" placeholder="XXXXXX">
        </div>
        @if(session()->has('error'))
            <p id="product_not_found_message" class="text-danger">{{ session()->get('error') }}</p>
        @endif
        <button type="submit" class="btn purple-btn">Confirm</button>
    </form>
@endsection