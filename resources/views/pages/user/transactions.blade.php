@extends('layouts.app')

@section('title', 'Transactions')

@section('main-content')
    @if (count($transactions) == 0)
        <caption><h5 class="text-black mb-0 ml-5">You don't have any transaction!</h5></caption>
    @else
    @foreach ($transactions as $tr)
        <div class="transaction-container">
            <form action="" id="cart_form">
                <fieldset disabled>
                    <table id="user_cart" class="table table-borderless mx-auto mb-0">
                        <thead>
                            <tr>
                                <th class="text-black border-0 py-4">PRODUCT</th>
                                <th class="text-black border-0 py-4">PRICE</th>
                                <th class="text-black border-0 py-4">QTY</th>
                                <th class="text-black border-0 py-4">SUBTOTAL</th>
                            </tr>
                        </thead>
                        @foreach ($tr->carts as $cart)
                            <tbody>
                                <tr class="gray-shadow">
                                    <td class="d-flex align-items-center border-0 align-middle">
                                        <img src="{{ asset('storage/image/'.$cart->product_img) }}" alt="Product image" class="rounded-circle">
                                        <p class="text-black mb-0 ml-3">{{$cart->product_name}}</p>
                                    </td>
                                    <td class="text-black border-0 align-middle">IDR {{$cart->product_price}}</td>
                                
                                    <td class="border-0 align-middle"><input type="text" name="qty" id="product_qty" value="{{$cart->product_qty}}" class="text-black w-50"></td>
                                    <td class="text-black border-0 align-middle">IDR {{$cart->product_subtotal}}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </fieldset>
            </form>

            <div class="transaction-details-wrapper text-right">
                <h5 class="text-black">Transaction Date: {{$tr->transaction_date}}</h5>
                <h5 class="text-black">Total: IDR {{$tr->total_price}}</h5>
                <h5 class="text-black">Shipped to: {{Auth::user()->address}}</h5>
            </div>
        </div>

        <hr class="gradient-hr mx-auto my-4">
    @endforeach

@endif
@endsection