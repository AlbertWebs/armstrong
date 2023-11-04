@extends('front.master-pages')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Checkout</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Checkout</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Start -->
    <div class="checkout-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Checkout Start -->
            <div class="checkout-wrapper">
                <div class="row gy-3">
                    <div class="col-lg-4" style="margin:0 auto">
                        <!-- Checkout Info Start -->
                        <div class="checkout-info">
                            <div class="checkout-info__title">
                                <img src="{{asset('theme/assets/images/icon/coupon.svg')}}" alt="Coupon" />
                                Have a coupon?
                                <button type="button" data-bs-toggle="collapse" data-bs-target="#coupon">
                                    Click here to enter your code
                                </button>
                            </div>
                            <div class="collapse" id="coupon">
                                <div class="checkout-info__body">
                                    <p>
                                        If you have a coupon code,
                                        please apply it below.
                                    </p>
                                    <form action="#">
                                        <div class="checkout-coupon-form single-form">
                                            <input class="single-form__input" type="text" placeholder="Coupon code" />
                                            <button class="single-form__btn btn" class="single">
                                                Apply coupon
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Info End -->
                    </div>

                </div>

                <div class="checkout-row">

                    <div class="checkout-col-2" style="margin:0 auto">
                        <!-- Checkout Details Start -->
                        <div class="checkout-details">
                            <h3 class="checkout-details__title">
                                Your order
                            </h3>

                            <div class="checkout-details__order-review">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">
                                                Product
                                            </th>
                                            <th class="product-total">
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
                                            <td class="product-name">
                                                {{$cart->name}}
                                                <strong
                                                        >×&nbsp; {{$cart->qty}}</strong>
                                            </td>
                                            <td class="product-total">
                                                <span> kes {{$cart->price}} </span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                                <span>kes {{Cart::subtotal()}} </span>
                                            </td>
                                        </tr>
                                        <?php $Subtotal = Cart::total(); $Shipping = 250 ?>
                                        <tr class="cart-shipping">
                                            <th>Shipping</th>
                                            <td data-title="Shipping">
                                                <form action="#">
                                                    <ul class="shipping-methods">
                                                        <li class="single-form">
                                                            <input type="radio" name="shippingMethod" id="flat-rate" />
                                                            <label for="flat-rate" class="single-form__label radio-label">
                                                                <span></span>
                                                                Flat
                                                                rate:
                                                                <strong
                                                                        class="price"
                                                                    >
                                                                        kes {{$Shipping}}
                                                                    </strong>
                                                            </label>
                                                        </li>

                                                    </ul>
                                                </form>
                                            </td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong>
                                                        <span>
                                                            kes {{$Subtotal+$Shipping}}
                                                        </span>
                                                    </strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="checkout-details__payment-method">
                                    <div class="accordion" id="payment-method">
                                        <form action="#">
                                            <div class="accordion-item">
                                                <div class="single-form" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                    <input type="radio" checked name="payment-method" id="bank-transfer" />
                                                    <label for="bank-transfer" class="single-form__label radio-label">
                                                        <span></span>
                                                        M-Pesa & M-Pesa Express
                                                    </label>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#payment-method">
                                                    <div class="payment-method-body">
                                                        <p>
                                                            {{-- Make your
                                                            payment
                                                            directly
                                                            into our
                                                            bank
                                                            account.
                                                            Please use
                                                            your Order
                                                            ID as the
                                                            payment
                                                            reference.
                                                            Your order
                                                            will not be
                                                            shipped
                                                            until the
                                                            funds have
                                                            cleared in
                                                            our account. --}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>

                                <div class="checkout-details__privacy-policy">
                                    <p>
                                        Your personal data will be used
                                        to process your order, support
                                        your experience throughout this
                                        website, and for other purposes
                                        described in our privacy policy.
                                    </p>
                                </div>

                                <div class="checkout-details__btn">
                                    <a href="{{route('make-paymens')}}" class="btn">
                                        Place Order
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Details End -->
                    </div>
                </div>
            </div>
            <!-- Checkout End -->
        </div>
    </div>
    <!-- Checkout End -->

</main>
@endsection
