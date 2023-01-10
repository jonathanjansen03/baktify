@extends('layouts.app')

@section('title', 'Cart')

@section('main-content')
    @if (count($transaction->carts) == 0)
        <caption><h5 class="text-black mb-0 ml-5">Your cart is empty</h5></caption>
    @else
    <form action="" id="cart_form">
        <table id="user_cart" class="table table-borderless mx-auto mb-0">
            <caption><h5 class="text-black mb-0">Your Cart</h5></caption>
            <thead>
                <tr>
                    <th class="text-black border-0 py-4">PRODUCT</th>
                    <th class="text-black border-0 py-4">PRICE</th>
                    <th class="text-black border-0 py-4">QTY</th>
                    <th colspan="2" class="text-black border-0 py-4">SUBTOTAL</th>
                </tr>
            </thead>
            @foreach ($transaction->carts as $cart)
                <form action="{{ route('update-cart', $cart->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <tbody>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="{{ asset('storage/image/'.$cart->product_img) }}" alt="Product image" class="rounded-circle">
                                <p class="text-black mb-0 ml-3">{{ $cart->product_name }}</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR {{ $cart->product_price }}</td>
                        
                            <td class="border-0 align-middle"><input type="text" name="qty" id="product_qty" value="{{ $cart->product_qty }}" class="text-black w-50"></td>
                            <td class="text-black border-0 align-middle">IDR {{ $cart->product_subtotal }}</td>
                            <td class="text-black border-0 align-middle">
                                <button type="submit" class="btn purple-btn">Update Cart</button>
                            </td>
                        </tr>
                    </tbody>
                </form>
            @endforeach
        </table>
    </form>

    <form action="{{ route('view-checkout') }}" id="checkout_form">
        <p><b class="text-black">Total: IDR {{$transaction->total_price}}</b></p>
        <button type="submit" class="btn purple-btn">Checkout</button>
    </form>
@endif
@endsection