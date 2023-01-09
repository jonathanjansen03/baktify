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
                    <tr class="gray-shadow">
                        <td class="d-flex align-items-center border-0 align-middle">
                            <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                            <p class="text-black mb-0 ml-3">Come on Over</p>
                        </td>
                        <td class="text-black border-0 align-middle">IDR 85000</td>
                        <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                        <td class="text-black border-0 align-middle">IDR 340000</td>
                    </tr>
                    <tr class="gray-shadow">
                        <td class="d-flex align-items-center border-0 align-middle">
                            <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                            <p class="text-black mb-0 ml-3">Come on Over</p>
                        </td>
                        <td class="text-black border-0 align-middle">IDR 85000</td>
                        <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                        <td class="text-black border-0 align-middle">IDR 340000</td>
                    </tr>
                    <tr class="gray-shadow">
                        <td class="d-flex align-items-center border-0 align-middle">
                            <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                            <p class="text-black mb-0 ml-3">Come on Over</p>
                        </td>
                        <td class="text-black border-0 align-middle">IDR 85000</td>
                        <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                        <td class="text-black border-0 align-middle">IDR 340000</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </form>

    <form action="" id="checkout_form">
        <p><b class="text-black">Total: IDR 1540000</b></p>
        <p class="text-black">Ship to: address</p>
        <div class="form-group">
            <label for="checkout_code" class="text-black">Please enter the following passcode to checkout: 5Q9EN9</label>
            <input type="text" name="checkout_code" id="checkout_code" class="form-control" placeholder="XXXXXX">
        </div>
        <button type="submit" class="btn purple-btn">Confirm</button>
    </form>
@endsection