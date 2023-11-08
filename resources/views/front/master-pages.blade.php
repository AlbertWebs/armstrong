<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Your One Stop Liquor Store - Armstrong Boissons Limited</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Your One Stop Liquor Store - Armstrong Boissons Limited" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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


<body>
    <!-- Header Start -->
    <header class="header bg-white header-height">
        <!-- Header Top Start -->
        <div class="header__top">
            <div class="container-fluid custom-container">
                <div class="header__top--wrapper justify-content-between">
                    <div class="header__top--left d-none d-md-block">
                        <ul class="header__top--items">
                            <li>
                                <a href="mailto:info@armstrong.ke" aria-label="mail">
                                    <i class="lastudioicon-mail-2"></i>
                                    <span>info@armstrong.ke</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+(254)723014032" aria-label="Phone">
                                    <i class="lastudioicon-phone-call"></i>
                                    <span>(254)723014032</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Map">
                                    <i class="lastudioicon-pin-3-1"></i>
                                    <span>3571 Riverside Downs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__top--right">
                        <ul class="header__top--items">
                            @if(Auth::User())
                            <li>
                                <a href="{{url('/')}}/" aria-label="login">
                                    <i class="lastudioicon-single-01-1"></i>
                                    <span>{{Auth::User()->name}}</span>
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="{{url('/')}}/login" aria-label="login">
                                    <i class="lastudioicon-single-01-1"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="{{url('/')}}/contact-us" aria-label="help">
                                    <i class="lastudioicon-b-meeting-2"></i>
                                    <span>Help Center</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Main Start -->
        <div class="header__main header__main-dark header-shadow d-flex align-items-center">
            <div class="container-fluid custom-container">
                <div class="row align-items-center position-relative">
                    <div class="col-md-4 col-3 d-xl-none">
                        <button class="header__main--toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="menu">
                            <i class="lastudioicon-menu-8-1"></i>
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <div class="header__main--logo text-center text-xl-start">
                            <a href="{{url('/')}}">
                                <img src="{{asset('theme/assets/images/logo.png')}}" alt="Logo"  />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <nav class="header__main--menu position-static">
                            <!-- Menu Item List Start -->
                            @include('front.menu-page')
                            <!-- Menu Item List End -->
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <div class="header__main--meta d-flex justify-content-end align-items-center">
                            <!-- Meta Item List Start -->
                            <ul class="meta-items-list meta-items-list--dark d-flex justify-content-end align-items-center">
                                <li class="search d-none d-lg-block">
                                    <form action="#">
                                        <div class="meta-search meta-search--dark">
                                            <input type="text" placeholder="Search products…" />
                                            <button aria-label="search">
                                                <i class="lastudioicon-zoom-1"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>

                                <li id="cart-number" class="cart">
                                    <button class="open-cart" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="Cart">
                                        <i class="lastudioicon-shopping-cart-1"></i><span class="badge">0{{ Cart::count()}}</span>
                                    </button>
                                </li>
                            </ul>
                            <button class="toggle-icon d-none d-xl-block" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="menu">
                                <span class="bar-icon"
                                ><i class="lastudioicon-menu-8-1"></i
                            ></span>
                            </button>
                            <!-- Meta Item List Start -->
                        </div>
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
        <?php $Cart = Cart::content(); ?>
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
                <?php
                    $Product = \App\Models\Product::find($cart->id);
                 ?>
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
                    <form action="#">
                        <input type="text" placeholder="Search product…" />
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
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Payment Refund</a></li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Menu End -->


            <!-- Off Canvas Sidebar Info Start -->
            <div class="offcanvas-sidebar__info">
                <ul class="offcanvas-info-list">
                    <li><a href="tel:+254723014032">(+254) 23014032</a></li>
                    <li><a href="mailto:info@armstrong.ke">info@armstrong.ke</a></li>
                    <li>
                        <span>
                            4517 Riverside Downs. Gitaru Road, Wangige
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
                    ©
                    <span class="current-year">2023</span>
                    <span> Armstrong Boissons Limited - All RIghts Reserved</span> | Powered By


                    <a href="https://designekta.com/">Designekta Studio</a>
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
