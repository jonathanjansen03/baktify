@extends('layouts.app')

@section('title', 'Cart')

@section('main-content')
    {{-- kalo cart empty --}}
    {{-- <h5 id="empty_cart_message" class="text-black">Your cart is empty.</h5> --}}
    
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

            <tbody>
                <tr class="gray-shadow">
                    <td class="d-flex align-items-center border-0 align-middle">
                        <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                        <p class="text-black mb-0 ml-3">Come on Over</p>
                    </td>
                    <td class="text-black border-0 align-middle">IDR 85000</td>
                    <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black w-50"></td>
                    <td class="text-black border-0 align-middle">IDR 340000</td>
                    {{-- kalo abis update nanti qty nya 0, otomatis delete product dari cart --}}
                    <td class="text-black border-0 align-middle"><button type="submit" class="btn purple-btn">Update Cart</button></td>
                </tr>
                <tr class="gray-shadow">
                    <td class="d-flex align-items-center border-0 align-middle">
                        <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                        <p class="text-black mb-0 ml-3">Come on Over</p>
                    </td>
                    <td class="text-black border-0 align-middle">IDR 85000</td>
                    <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black w-50"></td>
                    <td class="text-black border-0 align-middle">IDR 340000</td>
                    {{-- kalo abis update nanti qty nya 0, otomatis delete product dari cart --}}
                    <td class="text-black border-0 align-middle"><button type="submit" class="btn purple-btn">Update Cart</button></td>
                </tr>
                <tr class="gray-shadow">
                    <td class="d-flex align-items-center border-0 align-middle">
                        <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image" class="rounded-circle">
                        <p class="text-black mb-0 ml-3">Come on Over</p>
                    </td>
                    <td class="text-black border-0 align-middle">IDR 85000</td>
                    <td class="border-0 align-middle"><input type="text" name="product_qty" id="product_qty" value="1" class="text-black w-50"></td>
                    <td class="text-black border-0 align-middle">IDR 340000</td>
                    {{-- kalo abis update nanti qty nya 0, otomatis delete product dari cart --}}
                    <td class="text-black border-0 align-middle"><button type="submit" class="btn purple-btn">Update Cart</button></td>
                </tr>
            </tbody>
        </table>
    </form>

    {{-- kalo ga butuh form nanti dikeluarin aja --}}
    <form action="{{Route('view-checkout')}}" id="checkout_form">
        <p><b class="text-black">Total: IDR 1540000</b></p>
        <button type="submit" class="btn purple-btn">Checkout</button>
    </form>
@endsection