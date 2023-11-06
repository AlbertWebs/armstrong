@extends('front.master-pages')

@section('content')
<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Contact Us</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us Start -->
    <div class="contact-us-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Contact Us Wrapper Start -->
            <div class="contact-us-wrapper">
                <div class="row gy-5">
                    <div class="col-md-8">
                        <!-- Contact Us Start -->
                        <div class="contact-us">
                            <h2 class="contact-us__title">
                                Contact us for any questions
                            </h2>

                            <!-- Contact Us Form Start -->
                            <div class="contact-us-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">First name*</label>
                                                <input class="single-form__input" type="text" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Last name*</label>
                                                <input class="single-form__input" type="text" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                    </div>
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Email*</label>
                                        <input class="single-form__input" type="email" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Phone Number*</label>
                                        <input class="single-form__input" type="text" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">How can we help?</label>
                                        <textarea class="single-form__input"></textarea>
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="single-form__btn btn" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                </form>
                            </div>
                            <!-- Contact Us Form End -->
                        </div>
                        <!-- Contact Us End -->
                    </div>
                    <div class="col-md-4">
                        <!-- Contact Us Start -->
                        <div class="contact-us">
                            <h2 class="contact-us__title">
                                Contact info
                            </h2>

                            <!-- Contact Us Info Start -->
                            <div class="contact-us-info">
                                <!-- Contact Us Info Start -->
                                <div class="contact-info-item">
                                    <h4 class="contact-info-item__title">
                                        Call to Us:
                                    </h4>
                                    <p>
                                        We’re available from 10 am – 10
                                        pm EST, 7 days a week.
                                    </p>

                                    <div class="contact-info-item__service">
                                        <h4 class="contact-info-item__service--title">
                                            Customer Service
                                        </h4>
                                        <p>
                                            <a href="tel:(254)723014032">(254)723014032</a>
                                            <a href="tel:(254)723014032">(254)723014032</a>
                                        </p>
                                    </div>
                                    <div class="contact-info-item__service">
                                        <h4 class="contact-info-item__service--title">
                                            Technical Service
                                        </h4>
                                        <p>
                                            <a href="tel:(254)723014032">(254)723014032</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Contact Us Info End -->
                                <!-- Contact Us Info Start -->
                                <div class="contact-info-item">
                                    <h4 class="contact-info-item__title">
                                        Email to Us
                                    </h4>
                                    <p>
                                        <a href="mailto:info@armstrong.ke">info@armstrong.ke</a>
                                    </p>
                                </div>
                                <!-- Contact Us Info End -->
                                <!-- Contact Us Info Start -->
                                <div class="contact-info-item">
                                    <h4 class="contact-info-item__title">
                                        Find Us
                                    </h4>
                                    <p>
                                        Mirage Towers, Tower 2, 1st Floor, Suite 9, Westlands, Nairobi, Kenya
                                    </p>
                                    <a href="https://maps.app.goo.gl/HQeqVPdBDWwTEw5W8" class="contact-info-item__direction">Get Direction</a>
                                </div>
                                <!-- Contact Us Info End -->
                            </div>
                            <!-- Contact Us Info End -->
                        </div>
                        <!-- Contact Us End -->
                    </div>
                </div>
            </div>
            <!-- Contact Us Wrapper End -->
        </div>
    </div>
    <!-- Contact Us End -->


</main>
@endsection
