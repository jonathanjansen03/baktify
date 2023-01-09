@extends('layouts.app')

@section('title', 'Transactions')

@section('main-content')
    {{-- kalo cart empty --}}
    {{-- <h5 id="empty_cart_message" class="text-black">Your cart is empty.</h5> --}}

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
        
                    <tbody>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                                <p class="text-black">Come on Over</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR 85000</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR 340000</td>
                        </tr>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                                <p class="text-black">Come on Over</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR 85000</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR 340000</td>
                        </tr>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                                <p class="text-black">Come on Over</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR 85000</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR 340000</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="transaction-details-wrapper">
            <h5 class="text-black">Transaction Date: 2022-05-29 15:56:43</h5>
            <h5 class="text-black">Total: IDR 1540000</h5>
            <h5 class="text-black">Shipped to: address</h5>
        </div>
    </div>

    <hr class="gradient-hr mx-auto my-4">

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
        
                    <tbody>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                                <p class="text-black">Come on Over</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR 85000</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR 340000</td>
                        </tr>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                                <p class="text-black">Come on Over</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR 85000</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR 340000</td>
                        </tr>
                        <tr class="gray-shadow">
                            <td class="d-flex align-items-center border-0 align-middle">
                                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                                <p class="text-black">Come on Over</p>
                            </td>
                            <td class="text-black border-0 align-middle">IDR 85000</td>
                            <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                            <td class="text-black border-0 align-middle">IDR 340000</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="transaction-details-wrapper">
            <h5 class="text-black">Transaction Date: 2022-05-29 15:56:43</h5>
            <h5 class="text-black">Total: IDR 1540000</h5>
            <h5 class="text-black">Shipped to: address</h5>
        </div>
    </div>
@endsection