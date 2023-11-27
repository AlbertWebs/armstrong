@extends('front.master-pages')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Guest Checkout</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Guest Checkout</span></li>
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


                <div class="checkout-row">

                    <div class="checkout-col-3" style="margin:0 auto">
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
                                                        Card Payment,M-Pesa & M-Pesa Express , Airtel Money
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


                                <form action="#">
                                    <div class="single-form">
                                        <label class="single-form__label">Your Name</label>
                                        <input required class="single-form__input" type="text" placeholder="Found in your order confirmation email." />
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Email</label>
                                        <input class="single-form__input" type="text" placeholder="Email you used during checkout." />
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Phone Number</label>
                                        <input class="single-form__input" type="text" placeholder="Email you used during checkout." />
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Delivery Address</label>
                                        <input class="single-form__input" type="text" placeholder="Email you used during checkout." />
                                    </div>
                                    <br><br>
                                    <div class="checkout-details__btn">
                                        <button class="single-form__btn btn">
                                            Procced to Checkout
                                        </button>
                                    </div>
                                </form>
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
