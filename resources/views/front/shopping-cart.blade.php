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
                                @if($cart->options->has('product_id'))
                                    <?php
                                        $Product = \App\Models\Product::find($cart->options->product_id);
                                    ?>
                                @else
                                    <?php
                                        $Product = \App\Models\Product::find($cart->id);
                                    ?>
                                @endif

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


                                {{-- <tr class="">
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
                                </tr> --}}
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

</main>
@endif
@endsection
