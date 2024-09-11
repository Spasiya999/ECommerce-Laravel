@extends('store.layouts.app')


@section('content')



<section id="page-content" class="page-wrapper section" style="margin-top:150px;">


    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80 section">
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">Shopping Cart</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home</a></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- BREADCRUMBS SETCTION END -->


    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- shopping-cart start -->
                        <div class="tab-pane active" id="shopping-cart">
                            <div class="shopping-cart-content">
                                <form action="#">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">product</th>
                                                    <th class="product-price">price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">total</th>
                                                    <th class="product-remove">remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('store-assets/img/cart/1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div> 
                                                    </td>
                                                    <td class="product-subtotal">$1020.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('store-assets/img/cart/2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div> 
                                                    </td>
                                                    <td class="product-subtotal">$1020.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- tr -->
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <div class="pro-thumbnail-img">
                                                            <img src="{{ asset('store-assets/img/cart/3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="pro-thumbnail-info text-start">
                                                            <h6 class="product-title-2">
                                                                <a href="#">dummy product name</a>
                                                            </h6>
                                                            <p>Brand: Brand Name</p>
                                                            <p>Model: Grand s2</p>
                                                            <p> Color: Black, White</p>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">$560.00</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus f-left">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div> 
                                                    </td>
                                                    <td class="product-subtotal">$1020.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="coupon-discount box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">coupon discount</h6>
                                                <p>Enter your coupon code if you have one!</p>
                                                <input type="text" name="name" placeholder="Enter your code here.">
                                                <button class="submit-btn-1 black-bg btn-hover-2" type="submit">apply coupon</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-details box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">payment details</h6>
                                                <table>
                                                    <tr>
                                                        <td class="td-title-1">Cart Subtotal</td>
                                                        <td class="td-title-2">$155.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Shipping and Handing</td>
                                                        <td class="td-title-2">$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Vat</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Order Total</td>
                                                        <td class="order-total-price">$170.00</td>
                                                    </tr>

                                                </table>

                                                <div>
                                                    <button class="submit-btn-1 black-bg btn-hover-2 mt-4">Proceed to Checkout</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->             

</section>



@endsection