@extends('front.master')

@section('content')
<main>
    <!-- Slider Start -->
    <div class="slider-section slider-active navigation-arrows-style-1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slider Item Start -->
                <div class="slider-item home-2-slider-style d-flex align-items-center swiper-slide home-2-slider-animation" style="
                            background-image: url({{asset('theme/assets/images/slider-2/slider-1.jpg')}});
                        ">
                    <div class="container-fluid custom-container">
                        <!-- Slider Content Start -->
                        <div class="home-2-slider-content-style-1 mx-auto text-center">
                            <h3 class="home-2-slider-content-style-1__sub-title">
                                FROM ITALY
                            </h3>
                            <h2 class="home-2-slider-content-style-1__title">
                                Balbi Soprani Barolo
                            </h2>
                            <p class="home-2-slider-content-style-1__description">
                                We are your premier beverage delivery partner, renowned for its swift and reliable delivery service
                            </p>
                            <a class="home-2-slider-content-style-1__btn" href="{{url('/')}}/order">
                                Discover more
                            </a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>
                <!-- Slider Item End -->
            </div>
            {{-- <div class="swiper-button-next">
                <i class="lastudioicon-arrow-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="lastudioicon-arrow-left"></i>
            </div> --}}
        </div>
    </div>
    <!-- Slider End -->



    <!-- Category Start -->
    <div class="category-section section-padding-02-1">
        <div class="container-fluid home-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">
                    Discover Our Collection
                </h2>
                <div class="section-title-2__shape">
                    <img src="{{asset('theme/assets/images/section-shape-2.png')}}" alt="shape" width="129" height="136" loading="lazy" />
                </div>
            </div>
            <!-- Section Title End -->

            <div class="row gy-xxl-3 gx-xxl-5">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-2.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Wine</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-1.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Whisky</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-3.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Gin</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-4.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Vodka</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-2.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Beer</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-1.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Brandy</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <br><br>
                {{--  --}}
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-4.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Tequila</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-1.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Rum</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-3.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Sparkling</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-4.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Liqueur</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-2.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Mixers</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="swiper-slide category-item text-center">
                        <div class="category-item__image">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/category/category-1.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                            </a>
                        </div>
                        <div class="category-item__content">
                            <h3 class="category-item__title">
                                <a href="#">Snack</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->



    <!-- Product New Arrival Start -->
    <div class="product-section section-padding-02">
        <div class="container-fluid home-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">Trending Refreshments</h2>
            </div>
            <!-- Section Title End -->

            <!-- Product Wrapper Start -->
            <div class="product-wrapper">
                <div class="row gy-xxl-3 gx-xxl-5">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-05.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                        <img class="product-hover" src="{{asset('theme/assets/images/products/wines/product-03.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>

                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Sauv Block
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3010.00 - kes 3016.00</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-06.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>

                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Chard
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3019.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-07.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                                <div class="single-product__thumbnail--badge onsale">
                                    Sale
                                </div>
                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes The Uprising
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <del>kes 3019.99</del>
                                    <ins>kes 3029.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-04.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                                <div class="single-product__thumbnail--badge onsale">
                                    Sale
                                </div>
                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Revolutionary Rosé
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <del>kes 3029.99</del>
                                    <ins>kes 3019.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-09.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>

                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes The Banished
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3025.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-10.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>

                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Red Wine
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3016.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-11.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        2023 Margerum M5 Red Rhône Blend
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3035.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-12.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                                <div class="single-product__thumbnail--badge onsale">
                                    Sale
                                </div>
                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        2021 clare valley watervale
                                        riesling
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <del>kes 3040.99</del>
                                    <ins>kes 3028.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-05.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                        <img class="product-hover" src="{{asset('theme/assets/images/products/wines/product-03.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>

                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Sauv Block
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3010.00 - kes 3016.00</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-06.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>

                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Chard
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes 3019.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-07.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                                <div class="single-product__thumbnail--badge onsale">
                                    Sale
                                </div>
                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes The Uprising
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <del>kes 3019.99</del>
                                    <ins>kes 3029.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="product-single.html">
                                        <img src="{{asset('theme/assets/images/products/wines/product-04.png')}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                                <div class="single-product__thumbnail--badge onsale">
                                    Sale
                                </div>
                                <div class="single-product__thumbnail--meta-2">
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart">
                                        <i
                                                class="lastudioicon-shopping-cart-3"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist">
                                        <i
                                                class="lastudioicon-heart-2"
                                            ></i>
                                    </a>
                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare">
                                        <i
                                                class="lastudioicon-ic_compare_arrows_24px"
                                            ></i>
                                    </a>
                                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="quickView">
                                        <i
                                                class="lastudioicon-search-zoom-in"
                                            ></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <a href="#">Wines</a>
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="product-single.html">
                                        19 Crimes Revolutionary Rosé
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <del>kes 3029.99</del>
                                    <ins>kes 3019.99</ins>
                                </div>
                                <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                </div>
            </div>
            <!-- Product Wrapper End -->

            <!-- Product More Start -->
            <div class="text-center js-scroll ShortFadeInUp scrolled">
                <a class="view-more-btn view-more-btn-2" href="#">
                    VIEW MORE PRODUCTS
                </a>
            </div>
            <!-- Product More End -->
        </div>
    </div>
    <!-- Product New Arrival End -->


    <!-- Brand Start -->
    <div class="brand-section section-padding-02">
        <div class="container-fluid custom-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">
                    Featured Partners
                </h2>
            </div>
            <!-- Section Title End -->

            <!-- Brand Wrapper Start -->
            <div class="brand-wrapper brand-2-active js-scroll ShortFadeInUp scrolled">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('uploads/partners/keroche.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('uploads/partners/254.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('uploads/partners/eabl.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('uploads/partners/italy-wines.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('uploads/partners/sab.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand Wrapper End -->
        </div>
    </div>
    <!-- Brand End -->


    <!-- About Start -->
    <div class="about-section about-height d-flex align-items-center" style="
            background-image: url({{asset('theme/assets/images/about/about-bg-1.jpg')}});
        ">
        <div class="container-fluid custom-container">
        <!-- About Content Start -->
        <div class="about-content js-scroll ShortFadeInUp scrolled">
            <h3 class="about-content__sub-title">
                THE STORY BEHIND
            </h3>
            <h2 class="about-content__title">OUR COMPANY</h2>
            <a class="about-content__btn" href="#">Discover More</a>
        </div>
        <!-- About Content End -->
        </div>

        <div class="about-section__year js-scroll ShortFadeInUp scrolled">
        Since 2018
        </div>
    </div>
    <!-- About End -->
</main>
@endsection
