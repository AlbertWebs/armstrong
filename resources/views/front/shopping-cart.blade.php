@extends('front.master-pages')

@section('content')
@if($Cart->isEmpty())
<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Cart Empty</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Cart Empty</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="cart-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Cart Empty Start -->
            <div class="cart-empty text-center">
                <img src="{{asset('theme/assets/images/cart-empty.svg')}}" alt="Cart Empty" width="230" height="230" />
                <p>Your cart is currently empty.</p>

                <a href="{{url('/')}}" class="cart-empty__btn btn">Return to shop</a>
            </div>
            <!-- Cart Empty End -->
        </div>
    </div>
    <!-- Cart End -->
</main>
@else
<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Cart</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Cart</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="cart-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Cart Wrapper Start-->
            <div class="cart-wrapper">
                <!-- Cart Form Start-->
                <div class="cart-form">
                    <!-- Free Shipping Goal Start-->
                    <div class="free-shipping-goal">
                        <div class="free-shipping-goal__label text-center">
                            Buy kes 10,000 more to enjoy
                            <strong>FREE Shipping</strong>
                        </div>
                        <div class="free-shipping-goal__loading-bar">
                            <div class="load-percent" style="width: 98.49%"></div>
                        </div>
                    </div>
                    <!-- Free Shipping Goal Start-->

                    <!-- Cart Table Start-->
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-remove">
                                        &nbsp;
                                    </th>
                                    <th class="cart-product-thumbnail">
                                        &nbsp;
                                    </th>
                                    <th class="cart-product-name">
                                        Product
                                    </th>
                                    <th class="cart-product-price text-center">
                                        Price
                                    </th>
                                    <th class="cart-product-quantity text-center">
                                        Quantity
                                    </th>
                                    <th class="cart-product-subtotal text-center">
                                        Subtotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Cart as $cart)
                                <?php
                                    $Product = \App\Models\Product::find($cart->id);
                                 ?>
                                <tr class="cart-item">
                                    <td class="cart-product-remove">
                                        <a href="{{url('/')}}/shopping-cart/remove/{{$cart->rowId}}" class="remove">×</a>
                                    </td>

                                    <td class="cart-product-thumbnail">
                                        <a href="product-single.html">
                                            <img src="{{url('/')}}/uploads/products/{{$Product->image}}" alt="{{$Product->title}}" width="70" height="89" />
                                        </a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="product-single.html">
                                            {{$cart->name}}
                                        </a>
                                    </td>

                                    <td class="cart-product-price text-md-center" data-title="Price">
                                        <span class="price-amount">
                                                <ins>kes {{$cart->price}}</ins>
                                            </span>
                                    </td>

                                    <td class="cart-product-quantity text-md-center" data-title="Quantity">
                                        <div class="cart-table__quantity product-quantity">
                                            <button type="button" class="decrease" aria-label="delete">
                                                <i
                                                        class="lastudioicon-i-delete-2"
                                                    ></i>
                                            </button>
                                            <input class="quantity-input" type="text" value="0{{$cart->qty}}" />
                                            <button type="button" class="increase" aria-label="add">
                                                <i
                                                        class="lastudioicon-i-add-2"
                                                    ></i>
                                            </button>
                                        </div>
                                    </td>

                                    <td class="cart-product-subtotal text-md-center" data-title="Subtotal">
                                        <span class="price-amount">
                                                kes {{$cart->subtotal}}
                                            </span>
                                    </td>
                                </tr>
                                @endforeach


                                <tr class="">
                                    <td colspan="6" class="actions">
                                        <div class="cart-coupon">
                                            <input class="cart-coupon__input" type="text" placeholder="Coupon code" />
                                            <button class="cart-coupon__btn">
                                                Apply coupon
                                            </button>
                                        </div>

                                        <button class="cart-update-btn" type="submit">
                                            Update cart
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Table Start-->
                </div>
                <!-- Cart Form End-->

                <!-- Cart Collaterals Start-->
                <div class="cart-collaterals">
                    <!-- Cart Totals Start-->
                    <div class="cart-totals">
                        <h3 class="cart-totals__title">Cart totals</h3>

                        <div class="cart-totals__table table-responsive">
                            <table class="table">
                                <tbody>
                                    <?php $Subtotal = Cart::total(); $Shipping = 250 ?>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>
                                            <span>kes {{$Subtotal}}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Shipping</th>
                                        <td>
                                            <span>kes {{$Shipping}}</span>
                                        </td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong>kes {{$Subtotal+$Shipping}}</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-totals__checkout">
                            <a href="{{route('proceed-cart')}}">Proceed to checkout</a>
                        </div>
                    </div>
                    <!-- Cart Totals End-->
                </div>
                <!-- Cart Collaterals End-->
            </div>
            <!-- Cart Wrapper End -->
        </div>
    </div>
    <!-- Cart End -->

    <!-- Newsletter Start -->
    <!-- Newsletter Start -->
    <div class="newsletter-section">
        <div class="newsletter-left" style="background-image: url(assets/images/newsletter-bg-1.jpg)">
            <!-- Newsletter Wrapper Start -->
            <div class="newsletter-wrapper text-center">
                <h4 class="newsletter-wrapper__title">Follow us on</h4>
                <p>
                    Proin volutpat vitae libero at tincidunt. Maecenas sapien
                    lectus, vehicula vel euismod sed, vulputate
                </p>

                <div class="newsletter-social">
                    <ul class="newsletter-social__list">
                        <li>
                            <a href="#" aria-label="facebook">
                                <i class="lastudioicon-b-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="twitter">
                                <i class="lastudioicon-b-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="instagram">
                                <i class="lastudioicon-b-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="vimeo">
                                <i class="lastudioicon-b-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="envato">
                                <i class="lastudioicon-envato"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Newsletter Wrapper End -->
        </div>
        <div class="newsletter-right" style="background-image: url(assets/images/newsletter-bg-2.jpg)">
            <!-- Newsletter Wrapper Start -->
            <div class="newsletter-wrapper text-center">
                <h4 class="newsletter-wrapper__title">10% off when you sign up</h4>
                <p>
                    Proin volutpat vitae libero at tincidunt. Maecenas sapien
                    lectus, vehicula vel euismod sed, vulputate
                </p>
                <form action="#">
                    <div class="newsletter-form-style-1">
                        <input type="text" placeholder="Enter your email address..." />
                        <button>Subscribe</button>
                    </div>
                </form>
            </div>
            <!-- Newsletter Wrapper End -->
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Newsletter End -->
</main>
@endif
@endsection
