<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Your One Stop Liquor Store - Amstrong Boissons Limited</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Amstrong Boissons Limited is your one-stop liquor store for all your alcoholic beverage needs. We offer a wide selection of beer, wine, spirits, and more, all at competitive prices. Whether you're looking for a special occasion bottle or just stocking up for the weekend, we have something for everyone. Shop with us today and enjoy fast, reliable delivery." />

    {{-- SEO --}}
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->
    <meta name="subject" content="Your One Stop Liquor Store - Amstrong Boissons Limited">
    <meta name="rating" content="General">
    <meta name="referrer" content="no-referrer">
    <meta name="theme-color" content="#1c2c52">

    <link rel="canonical" href="{{url('/')}}"/>

    <meta property="og:description" content="Armstrong Boissons Limited is your one-stop liquor store for all your alcoholic beverage needs. We offer a wide selection of beer, wine, spirits, and more, all at competitive prices. Whether you're looking for a special occasion bottle or just stocking up for the weekend, we have something for everyone. Shop with us today and enjoy fast, reliable delivery." />
    <meta property="og:title" content="Your One Stop Liquor Store - Amstrong Boissons Limited" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{url('/')}}/uploads/johnnie-walker-blue-label.png" />
    <meta property="og:site_name" content="Amstrong Boissons Limited">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:title" content="Your One Stop Liquor Store - Amstrong Boissons Limited" />
    <meta name="twitter:site" content="@amstrongboissons" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@amstrongboissons">
    <meta name="twitter:url" content="{{url('/')}}">
    <meta name="twitter:description" content="Armstrong Boissons Limited is your one-stop liquor store for all your alcoholic beverage needs. We offer a wide selection of beer, wine, spirits, and more, all at competitive prices. Whether you're looking for a special occasion bottle or just stocking up for the weekend, we have something for everyone. Shop with us today and enjoy fast, reliable delivery.d">
    <meta name="twitter:image" content="{{url('/')}}/uploads/johnnie-walker-blue-label.png">
    {{-- SEO --}}

    <!-- Favicon -->
    @include('front.favicon')

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/css/lastudioicon.css')}}" />

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/css/nice-select2.css')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.min.css')}}" />
</head>


<body class="bg-home">
    <!-- Header Start -->
    <header class="header">

        <!-- Header Main Start -->
        <div class="header__main header-padding d-flex align-items-center">
            <div class="container-fluid custom-container">
                <div class="row align-items-center position-relative">
                    <div class="col-md-4 col-3 d-xl-none">
                        <!-- Header Main Toggle Start -->
                        <button class="header__main--toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="menu">
                            <i class="lastudioicon-menu-8-1"></i>
                        </button>
                        <!-- Header Main Toggle End -->
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <!-- Header Main Logo Start -->
                        <div class="header__main--logo change-logo text-center text-xl-start">
                            <a href="{{url('/')}}">
                                <img src="{{asset('theme/assets/images/logo.png')}}" alt="Amstrong Boissons Limited" width="150"  />
                            </a>
                        </div>
                        <!-- Header Main Logo End -->
                    </div>
                    <div class="col-xl-9 col-md-4 col-3">
                        <!-- Header Main Menu Start -->
                        <div class="d-flex justify-content-end align-items-center">
                            <nav class="header__main--menu position-static d-none d-xl-block me-4">
                                <!-- Menu Item List Start -->
                                @include('front.menu')
                                <!-- Menu Item List End -->
                            </nav>

                            <div class="header__main--meta">
                                <!-- Meta Item List Start -->
                                <ul class="meta-items-list d-flex justify-content-end align-items-center">

                                    <li id="cart-number" class="cart">
                                        <button class="open-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                                            <i class="lastudioicon-bag-3"></i>
                                            <span class="badge">0{{ Cart::count()}}</span>
                                        </button>
                                    </li>
                                    <li class="search">
                                        <button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="search">
                                            <i class="lastudioicon-zoom-1"></i>
                                        </button>
                                    </li>
                                </ul>
                                <!-- Meta Item List End -->
                            </div>
                        </div>
                        <!-- Header Main Menu End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Main End -->
    </header>

    <!-- Header End -->

    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
    <div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">My Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="remove">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <?php $Cart = Cart::content();  ?>
        @if($Cart->isEmpty())
            <div class="offcanvas-footer">
                <!-- Free Shipping Goal Start-->
                <div class="free-shipping-goal">

                </div>
                <!-- Free Shipping Goal End-->



                <!-- Cart Totals Table Start-->
                <div class="cart-totals-table">
                    <table class="table">
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td>
                                    <span>kes 0.0</span>
                                </td>
                            </tr>

                            <tr class="cart-shipping-totals">
                                <th>Shipping</th>
                                <td>
                                    <ul class="shipping-methods">
                                        <li class="single-form">
                                            <input type="radio" name="shipping" id="flat-rate" />
                                            <label for="flat-rate" class="single-form__label radio-label">
                                                <span></span>
                                                Flat rate:
                                                <strong class="price">kes 0.00</strong>
                                            </label>
                                        </li>
                                        <li class="single-form">
                                            <input type="radio" name="shipping" id="local-pickup" />
                                            <label for="local-pickup" class="single-form__label radio-label">
                                                <span></span>
                                                Local pickup
                                            </label>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Total">
                                    <strong><span>kes 0.00</span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Cart Totals Table End-->

                <!-- Cart Buttons End-->
                <div class="cart-buttons">
                    <a href="{{url('/')}}/shopping-cart/procced" class="cart-buttons__btn-1 btn">Checkout</a>
                    <a href="{{url('/shopping-cart')}}" class="cart-buttons__btn-2 btn">View Cart</a>
                </div>
                <!-- Cart Buttons End-->
            </div>
        @else
        <div class="offcanvas-body">
            <ul class="offcanvas-cart-list">
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
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{url('/')}}/uploads/products/{{$Product->image}}" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">{{$cart->name}}</a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                                {{$cart->qty}} × kes {{$cart->price}}
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="{{url('/')}}/shopping-cart/remove/{{$cart->rowId}}" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                @endforeach
            </ul>
        </div>
        <div class="offcanvas-footer">
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
            <!-- Free Shipping Goal End-->



            <!-- Cart Totals Table Start-->
            <div class="cart-totals-table">
                <table class="table">
                    <?php $Subtotal = Cart::total(); $Shipping = 250 ?>
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span>kes {{$Subtotal}}</span>
                            </td>
                        </tr>


                        <tr class="cart-shipping-totals">
                            <th>Shipping</th>
                            <td>
                                <ul class="shipping-methods">
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="flat-rate" />
                                        <label for="flat-rate" class="single-form__label radio-label">
                                            <span></span>
                                            Flat rate:
                                            <strong class="price">kes {{$Shipping}}</strong>
                                        </label>
                                    </li>
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="local-pickup" />
                                        <label for="local-pickup" class="single-form__label radio-label">
                                            <span></span>
                                            Local pickup
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total">
                                <strong><span>kes {{$Subtotal+$Shipping}}</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Cart Totals Table End-->

            <!-- Cart Buttons End-->
            <div class="cart-buttons">
                {{-- <a href="#" class="cart-buttons__btn-1 btn">Checkout</a> --}}
                <a href="{{url('/')}}/shopping-cart/procced" class="cart-buttons__btn-1 btn">Checkout</a>
                <a href="{{url('/shopping-cart')}}" class="cart-buttons__btn-2 btn">View Cart</a>
            </div>
            <!-- Cart Buttons End-->
        </div>
        @endif

    </div>
    <!-- Cart Offcanvas End -->

    <!-- Cart Sidebar End -->

    <!-- Search Start -->
    <div class="search-modal modal fade" id="SearchModal">
        <!-- Search Close Start -->
        <button class="search-modal__close" data-bs-dismiss="modal" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <!-- Search Close End  -->

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Search Form Start  -->
                <div class="search-modal__form">
                    <form action="{{route('search')}}" method="GET">
                        <input type="text" name="search" placeholder="Search product…" />
                        <button class="" aria-label="search">
                            <i class="lastudioicon-zoom-1"></i>
                        </button>
                    </form>
                </div>
                <!-- Search Form End  -->
            </div>
        </div>
    </div>

    <!-- Search End -->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
        <button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <div class="offcanvas-body">
            <!-- Off Canvas Sidebar Menu Start -->
            <div class="offcanvas-sidebar__menu">
                <ul class="offcanvas-menu-list">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="blog.html">News & Events</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Menu End -->

            <!-- Off Canvas Sidebar Banner Start -->
            <div class="offcanvas-sidebar__banner" style="
                background-image: url(assets/images/shop-sidebar-banner.jpg);
            ">
                <h3 class="banner-title">NEW NOW</h3>
                <h4 class="banner-sub-title">WARM WOOL PREMIUM COAT</h4>
                <a href="#" class="banner-btn">Discover</a>
            </div>
            <!-- Off Canvas Sidebar Banner End -->

            <!-- Off Canvas Sidebar Info Start -->
            <div class="offcanvas-sidebar__info">
                <ul class="offcanvas-info-list">
                    <li><a href="tel:(+254) 7230 14032">(+254) 7230 14032</a></li>
                    <li><a href="mailto:info@Amstrong.ke">info@Amstrong.ke</a></li>
                    <li>
                        <span>
                        Mirage Towers, Tower 2, 1st Floor, Suite 9, Westlands, Nairobi, Kenya, Gitaru Road, Western ByPass
                    </span>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Info End -->

            <!-- Off Canvas Sidebar Social Start -->
            <div class="offcanvas-sidebar__social">
                <ul class="offcanvas-social">
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
                        <a href="#" aria-label="linkedin">
                            <i class="lastudioicon-b-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Social End -->

            <!-- Off Canvas Sidebar Social End -->
            <div class="offcanvas-sidebar__copyright">
                <p>
                    &copy;
                    <span class="current-year">{{date('Y')}}</span>
                    <span> Amstrong Boissons Limited - All Rights Reserved </span> Powered By
                    <a href="https://designekta.com/">Designekta Studios</a>
                </p>
            </div>
            <!-- Off Canvas Sidebar Social End -->
        </div>
    </div>

    <!-- Offcanvas Menu End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <!-- offcanvas-header Start -->
        <div class="offcanvas-header">
            <button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <!-- offcanvas-header End -->

        <!-- offcanvas-body Start -->
        <div class="offcanvas-body">
            <nav class="navbar-mobile-menu">
                @include('front.mobile-menu')
            </nav>
        </div>
        <!-- offcanvas-body end -->
    </div>

    <!-- Mobile Menu End -->

    <!-- Mobile Meta Start -->
    <div class="mobile-meta d-md-none">
        <ul class="mobile-meta-items">
            <li>
                <button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="search">
                    <i class="lastudioicon-zoom-1"></i>
                </button>
            </li>

            <li>
                <a href="{{url('/')}}/shopping-cart" aria-label="compare">
                    <i class="lastudioicon-shopping-cart-3"> </i>
                    <span class="badge"></span>
                </a>
            </li>
            <li>
                <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="cart">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">0{{Cart::count()}}</span>
                </button>
            </li>
        </ul>
    </div>

    <!-- Mobile Meta End -->

    @yield('content')

    <!-- Footer Start -->
    @include('front.footer')

    <!-- Footer End -->

    <!-- Quick View Start -->
    <!-- Modal Start -->
    <div class="modal quickview-modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal Content Start -->
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="remove">
                    <i class="lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <!-- Product Single image Start -->
                            <div class="product-single-image">
                                <div class="quick-view-product-slide navigation-arrows-style-1">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="{{asset('theme/assets/images/products/wines/product-single-01.png')}}" alt="Product Single" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="{{asset('theme/assets/images/products/wines/product-single-02.png')}}" alt="Product Single" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="{{asset('theme/assets/images/products/wines/product-single-03.png')}}" alt="Product Single" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="{{asset('theme/assets/images/products/wines/product-single-04.png')}}" alt="Product Single" width="742" height="778" loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="swiper-button-next" aria-label="arrow-right">
                                            <i class="lastudioicon-arrow-right"></i>
                                        </div>
                                        <div class="swiper-button-prev" aria-label="arrow-left">
                                            <i class="lastudioicon-arrow-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Single image End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Product Single Content Start -->
                            <div class="product-single-content quick-view-product-content">
                                <h2 class="product-single-content__title">
                                    Pombe Noma Sana
                                </h2>
                                <div class="product-single-content__price-stock">
                                    <div class="product-single-content__price">
                                        <ins>kes 3630.99</ins>
                                    </div>
                                    <div class="product-single-content__stock">
                                        <span
                                        class="stock-icon"
                                        aria-label="check-circle"
                                    >
                                        <i
                                            class="dlicon ui-1_check-circle-08"
                                        ></i>
                                    </span>
                                        <span class="stock-text">97 in stock</span>
                                    </div>
                                </div>
                                <div class="product-single-content__short-description">
                                    <p>
                                        Proin volutpat vitae libero at tincidunt.
                                        Maecenas sapien lectus, vehicula vel euismod
                                        sed, vulputate a lorem. Integer at tristique
                                        libero. Nullam porta eleifend metus a
                                        interdum.
                                    </p>
                                </div>
                                <div class="product-single-content__add-to-cart-wrapper">
                                    <div class="product-single-content__quantity-add-to-cart">
                                        <div class="product-single-content__quantity product-quantity">
                                            <button type="button" class="decrease" aria-label="delete">
                                                <i
                                                class="lastudioicon-i-delete-2"
                                            ></i>
                                            </button>
                                            <input class="quantity-input" type="text" value="01" />
                                            <button type="button" class="increase" aria-label="add">
                                                <i class="lastudioicon-i-add-2"></i>
                                            </button>
                                        </div>
                                        <button class="product-single-content__add-to-cart btn">
                                            Add to cart
                                        </button>
                                    </div>

                                    <a href="#" class="product-add-compare">Add to Compare</a>
                                    <a href="#" class="product-add-wishlist">Add to Wishlist</a>
                                </div>
                                <div class="product-single-content__meta">
                                    <div class="product-single-content__meta--item">
                                        <div class="label">SKU:</div>
                                        <div class="content">REF. ABL-5732</div>
                                    </div>
                                    <div class="product-single-content__meta--item">
                                        <div class="label">Categories:</div>
                                        <div class="content">
                                            <a href="#">Liqueur</a>
                                            <a href="#">Spirit</a>
                                        </div>
                                    </div>
                                    <div class="product-single-content__meta--item">
                                        <div class="label">Tag:</div>
                                        <div class="content">
                                            <a href="#">Refreshments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Single Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->
        </div>
    </div>
    <!-- Modal End -->

    <!-- Quick View End -->

    <!-- Popup Modal Start -->

    <!-- Popup Modal End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Bootstrap JS -->
    <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('theme/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/glightbox.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/nice-select2.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{asset('theme/assets/js/main.js')}}"></script>
    @include('front.ajax')


</body>


</html>
