@extends('layouts.app')

@section('title', 'Cart')

@section('main-content')
    {{-- kalo cart empty --}}
    {{-- <h5 id="empty_cart_message" class="text-black">Your cart is empty.</h5> --}}
    
    <form action="" id="cart_form" class="">
        <table id="user_cart" class="table mx-auto">
            <caption><h5 class="text-black">Your Cart</h5></caption>
            <tr>
                <th class="text-black">PRODUCT</th>
                <th class="text-black">PRICE</th>
                <th class="text-black">QTY</th>
                <th colspan="2" class="text-black">SUBTOTAL</th>
            </tr>
            <tr class="grey-shadow">
                <td>
                    <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image">
                    <p class="text-black">Come on Over</p>
                </td>
                <td class="text-black">IDR 85000</td>
                <td><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                <td class="text-black">IDR 340000</td>
                {{-- kalo abis update nanti qty nya 0, otomatis delete product dari cart --}}
                <td class="text-black"><button type="submit" class="btn purple-btn">Update Cart</button></td>
            </tr>
            <tr class="grey-shadow">
                <td>
                    <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image">
                    <p class="text-black">Come on Over</p>
                </td>
                <td class="text-black">IDR 85000</td>
                <td><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                <td class="text-black">IDR 340000</td>
                <td class="text-black"><button type="submit" class="btn purple-btn">Update Cart</button></td>
            </tr>
            <tr class="grey-shadow">
                <td>
                    <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product image">
                    <p class="text-black">Come on Over</p>
                </td>
                <td class="text-black">IDR 85000</td>
                <td><input type="text" name="product_qty" id="product_qty" value="1" class="text-black"></td>
                <td class="text-black">IDR 340000</td>
                <td class="text-black"><button type="submit" class="btn purple-btn">Update Cart</button></td>
            </tr>
        </table>
    </form>

    {{-- kalo ga butuh form nanti dikeluarin aja --}}
    <form action="" id="checkout_form">
        <p><b class="text-black">Total: IDR 1540000</b></p>
        <button type="submit" class="btn purple-btn">Checkout</button>
    </form>
@endsection