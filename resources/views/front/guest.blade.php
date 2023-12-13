@extends('front.master-client')

@section('content')

<main>
    <!-- Checkout Start -->
    <div class="checkout-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Checkout Start -->
            <div class="checkout-wrapper">


                <div class="checkout-row">

                    <div class="checkout-col-3" style="margin:0 auto">
                        <!-- Checkout Details Start -->
                        <div class="checkout-details">


                            <div class="checkout-details__order-review">
                                <table class="table">


                                    <tfoot>

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


                                <form action="{{route('guest-checkout')}}" method="POST" id="registration">
                                    @csrf
                                    <div class="single-form">
                                        <label class="single-form__label">Your Name</label>
                                        <input required class="single-form__input" type="text" name="name" required placeholder="Your Full Name" />
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Email</label>
                                        <input class="single-form__input" id="email" type="email" name="email" required placeholder="Your Email" />
                                        <p class="d-none text-danger">
                                            Your email already exists as a user
                                        </p>
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Phone Number</label>
                                        <input class="single-form__input" type="text" name="mobile" required placeholder="Your Mobile Number" />
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Delivery Address</label>
                                        <input class="single-form__input" type="text" name="address" required placeholder="Add Delivery Address" />
                                    </div>
                                    <br><br>
                                    <div class="checkout-details__btn">
                                        <button type="submit" class="single-form__btn btn">
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
