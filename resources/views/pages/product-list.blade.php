@extends('layouts.app')

@section('title', 'Our Products')

@section('main-content')
    <div id="product_list_header">
        <h3 class="text-black font-weight-bold">OUR PRODUCTS</h3>
        <form action="" class="form-inline">
            <input type="text" name="search_product" id="search_product" class="form-control" placeholder="Search product">
            <button type="submit" class="btn purple-btn">Search</button>
        </form>
    </div>

    <div id="product_list_container">
        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product">
                <div class="text-black font-weight-bold">Come on Over</div>
                <div>IDR 85000</div>
                <div class="product-category mx-auto">Country</div>
    
                <hr class="mx-auto">
    
                <div class="product-btns-container text-left">
                    <button type="button" class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product">
                <div class="text-black font-weight-bold">Come on Over</div>
                <div>IDR 85000</div>
                <div class="product-category mx-auto">Country</div>
    
                <hr class="mx-auto">
    
                <div class="product-btns-container text-left">
                    <button type="button" class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product">
                <div class="text-black font-weight-bold">Come on Over</div>
                <div>IDR 85000</div>
                <div class="product-category mx-auto">Country</div>
    
                <hr class="mx-auto">
    
                <div class="product-btns-container text-left">
                    <button type="button" class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product">
                <div class="text-black font-weight-bold">Come on Over</div>
                <div>IDR 85000</div>
                <div class="product-category mx-auto">Country</div>
    
                <hr class="mx-auto">
    
                <div class="product-btns-container text-left">
                    <button type="button" class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product">
                <div class="text-black font-weight-bold">Come on Over</div>
                <div>IDR 85000</div>
                <div class="product-category mx-auto">Country</div>
    
                <hr class="mx-auto">
    
                <div class="product-btns-container text-left">
                    <button type="button" class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="Product">
                <div class="text-black font-weight-bold">Come on Over</div>
                <div>IDR 85000</div>
                <div class="product-category mx-auto">Country</div>
    
                <hr class="mx-auto">
    
                <div class="product-btns-container text-left">
                    <button type="button" class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pagination-container">
        <div class="pagination-results">
            <p class="text-black">
                Showing <b class="text-black">1</b> to <b class="text-black">12</b> of <b class="text-black">13</b> results
            </p>
        </div>
        <div class="pages-btn">
            <button type="button" class="btn">&lt;</button>
            <button type="button" class="btn">1</button>
            <button type="button" class="btn">2</button>
            <button type="button" class="btn">&gt;</button>
        </div>
    </div>
@endsection