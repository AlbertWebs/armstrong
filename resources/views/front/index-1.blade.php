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
                                THE WINE
                            </h2>
                            <p class="home-2-slider-content-style-1__description">
                                Quam pellentesque nec nam aliquam sem
                                et. Enim diam vulputate ut
                            </p>
                            <a class="home-2-slider-content-style-1__btn" href="shop-fullwidth.html">
                                Discover more
                            </a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>
                <!-- Slider Item End -->

                <!-- Slider Item Start -->
                <div class="slider-item home-2-slider-style d-flex align-items-center swiper-slide home-2-slider-animation" style="
                            background-image: url({{asset('theme/assets/images/slider-2/slider-2.jpg')}});
                        ">
                    <div class="container-fluid custom-container">
                        <!-- Slider Content Start -->
                        <div class="home-2-slider-content-style-1 mx-auto text-center">
                            <h3 class="home-2-slider-content-style-1__sub-title">
                                FROM FRANCE
                            </h3>
                            <h2 class="home-2-slider-content-style-1__title text-white">
                                RED WINE
                            </h2>
                            <p class="home-2-slider-content-style-1__description text-white">
                                Quam pellentesque nec nam aliquam sem
                                et. Enim diam vulputate ut
                            </p>
                            <a class="home-2-slider-content-style-1__btn" href="shop-fullwidth.html">
                                Discover more
                            </a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>
                <!-- Slider Item End -->

                <!-- Slider Item Start -->
                <div class="slider-item home-2-slider-style d-flex align-items-center swiper-slide home-2-slider-animation" style="
                            background-image: url({{asset('theme/assets/images/slider-2/slider-3.jpg')}});
                        ">
                    <div class="container-fluid custom-container">
                        <!-- Slider Content Start -->
                        <div class="home-2-slider-content-style-1">
                            <h3 class="home-2-slider-content-style-1__sub-title">
                                FROM FRANCE
                            </h3>
                            <h2 class="home-2-slider-content-style-1__title text-white">
                                Great wines tell a story
                            </h2>
                            <a class="home-2-slider-content-style-1__btn" href="shop-fullwidth.html">
                                Discover more
                            </a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>
                <!-- Slider Item End -->
            </div>
            <div class="swiper-button-next">
                <i class="lastudioicon-arrow-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="lastudioicon-arrow-left"></i>
            </div>
        </div>
    </div>
    <!-- Slider End -->

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
                <h2 class="about-content__title">OUR WINERY</h2>
                <a class="about-content__btn" href="#">Discover More</a>
            </div>
            <!-- About Content End -->
        </div>

        <div class="about-section__year js-scroll ShortFadeInUp scrolled">
            Since 1928
        </div>
    </div>
    <!-- About End -->

    <!-- Category Start -->
    <div class="category-section section-padding-02-1">
        <div class="container-fluid home-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">
                    Discover your New Favorite
                </h2>
                <div class="section-title-2__shape">
                    <img src="{{asset('theme/assets/images/section-shape-2.png')}}" alt="shape" width="129" height="136" loading="lazy" />
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Category Wrapper Start -->
            <div class="category-wrapper category-active navigation-arrows-style-2 js-scroll ShortFadeInUp scrolled">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Category Item Start -->
                        <div class="swiper-slide category-item text-center">
                            <div class="category-item__image">
                                <a href="#">
                                    <img src="{{asset('theme/assets/images/category/category-1.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                                </a>
                            </div>
                            <div class="category-item__content">
                                <h3 class="category-item__title">
                                    <a href="#">Classic</a>
                                </h3>
                            </div>
                        </div>
                        <!-- Category Item End -->
                        <!-- Category Item Start -->
                        <div class="swiper-slide category-item text-center">
                            <div class="category-item__image">
                                <a href="#">
                                    <img src="{{asset('theme/assets/images/category/category-2.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                                </a>
                            </div>
                            <div class="category-item__content">
                                <h3 class="category-item__title">
                                    <a href="#">Latitdue</a>
                                </h3>
                            </div>
                        </div>
                        <!-- Category Item End -->
                        <!-- Category Item Start -->
                        <div class="swiper-slide category-item text-center">
                            <div class="category-item__image">
                                <a href="#">
                                    <img src="{{asset('theme/assets/images/category/category-3.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                                </a>
                            </div>
                            <div class="category-item__content">
                                <h3 class="category-item__title">
                                    <a href="#">Lighter</a>
                                </h3>
                            </div>
                        </div>
                        <!-- Category Item End -->
                        <!-- Category Item Start -->
                        <div class="swiper-slide category-item text-center">
                            <div class="category-item__image">
                                <a href="#">
                                    <img src="{{asset('theme/assets/images/category/category-4.png')}}" alt="Category" width="300" height="340" loading="lazy" />
                                </a>
                            </div>
                            <div class="category-item__content">
                                <h3 class="category-item__title">
                                    <a href="#">Organic</a>
                                </h3>
                            </div>
                        </div>
                        <!-- Category Item End -->
                    </div>
                </div>

                <div class="category-arrow">
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Category Wrapper End -->
        </div>
    </div>
    <!-- Category End -->

    <!-- Product Start -->
    <div class="product-section section-padding-02-1">
        <div class="container-fluid custom-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">
                    Most Popular Wines
                </h2>
            </div>
            <!-- Section Title End -->

            <!-- Product Popular Start -->
            <div class="product-popular popular-style-01">
                <!-- Product Popular Start -->
                <div class="product-popular-image popular-image-style-01 js-scroll ShortFadeInUp scrolled">
                    <div class="product-popular-image__bg">
                        <img src="{{asset('theme/assets/images/products/wines/popular-bg-1.jpg')}}" alt="product" width="600" height="570" loading="lazy" />
                    </div>
                    <div class="product-popular-image__item">
                        <img src="{{asset('theme/assets/images/products/wines/popular-item-1.png')}}" alt="popular" width="370" height="634" loading="lazy" />
                    </div>
                </div>
                <!-- Product Popular End -->

                <!-- Product Popular Start -->
                <div class="product-popular-content js-scroll ShortFadeInUp scrolled">
                    <h3 class="product-popular-content__title">
                        Joseph Phelps Insignia 2024
                    </h3>
                    <div class="product-popular-content__description">
                        <p>
                            Quam pellentesque nec nam aliquam sem et.
                            Enim diam vulputate ut
                        </p>
                    </div>
                    <a class="product-popular-content__btn" href="#">
                        Discover more
                    </a>
                </div>
                <!-- Product Popular End -->
            </div>
            <!-- Product Popular End -->

            <!-- Product Popular Start -->
            <div class="product-popular popular-style-02 flex-row-reverse">
                <!-- Product Popular Start -->
                <div class="product-popular-image popular-image-style-02 js-scroll ShortFadeInUp scrolled">
                    <div class="product-popular-image__bg">
                        <img src="{{asset('theme/assets/images/products/wines/popular-bg-2.jpg')}}" alt="product" width="506" height="489" loading="lazy" />
                    </div>
                    <div class="product-popular-image__item">
                        <img src="{{asset('theme/assets/images/products/wines/popular-item-2.png')}}" alt="popular" width="370" height="616" loading="lazy" />
                    </div>
                </div>
                <!-- Product Popular End -->

                <!-- Product Popular Start -->
                <div class="product-popular-content js-scroll ShortFadeInUp scrolled">
                    <h3 class="product-popular-content__title">
                        El Sancho Escudero, Tinto, 750mL
                    </h3>
                    <div class="product-popular-content__description">
                        <p>
                            Quam pellentesque nec nam aliquam sem et.
                            Enim diam vulputate ut
                        </p>
                    </div>
                    <a class="product-popular-content__btn" href="#">
                        Discover more
                    </a>
                </div>
                <!-- Product Popular End -->
            </div>
            <!-- Product Popular End -->

            <!-- Product Popular Start -->
            <div class="product-popular popular-style-03">
                <!-- Product Popular Start -->
                <div class="product-popular-image popular-image-style-03 js-scroll ShortFadeInUp scrolled">
                    <div class="product-popular-image__bg">
                        <img src="{{asset('theme/assets/images/products/wines/popular-bg-3.jpg')}}" alt="product" width="604" height="489" loading="lazy" />
                    </div>
                    <div class="product-popular-image__item">
                        <img src="{{asset('theme/assets/images/products/wines/popular-item-3.png')}}" alt="popular" width="370" height="506" loading="lazy" />
                    </div>
                </div>
                <!-- Product Popular End -->

                <!-- Product Popular Start -->
                <div class="product-popular-content js-scroll ShortFadeInUp scrolled">
                    <h3 class="product-popular-content__title">
                        Thirty Bench Winemaker’s Blend Cabernet Franc
                        2024 VQA 750mL
                    </h3>
                    <div class="product-popular-content__description">
                        <p>
                            Quam pellentesque nec nam aliquam sem et.
                            Enim diam vulputate ut
                        </p>
                    </div>
                    <a class="product-popular-content__btn" href="#">
                        Discover more
                    </a>
                </div>
                <!-- Product Popular End -->
            </div>
            <!-- Product Popular End -->
        </div>
    </div>
    <!-- Product End -->

    <!-- Product New Arrival Start -->
    <div class="product-section section-padding-02">
        <div class="container-fluid home-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">New Arrival</h2>
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
                                    <ins>$10.00 - $16.00</ins>
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
                                    <ins>$19.99</ins>
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
                                    <del>$19.99</del>
                                    <ins>$29.99</ins>
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
                                    <del>$29.99</del>
                                    <ins>$19.99</ins>
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
                                    <ins>$25.99</ins>
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
                                    <ins>$16.99</ins>
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
                                    <ins>$35.99</ins>
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
                                    <del>$40.99</del>
                                    <ins>$28.99</ins>
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

    <!-- Gallery Start -->
    <div class="gallery-section section-padding-02 overflow-hidden" style="background-image: url({{asset('theme/assets/images/background-1.jpg')}})">
        <div class="container-fluid custom-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">Our Gallery</h2>
            </div>
            <!-- Section Title End -->

            <!-- Gallery Wrapper Start -->
            <div class="gallery-wrapper gallery-active navigation-arrows-style-1 js-scroll ShortFadeInUp scrolled">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Gallery Item Start -->
                        <div class="swiper-slide gallery-item">
                            <img src="{{asset('theme/assets/images/gallery/gallery-01.jpg')}}" alt="gallery" width="918" height="550" loading="lazy" />
                        </div>
                        <!-- Gallery Item End -->
                        <!-- Gallery Item Start -->
                        <div class="swiper-slide gallery-item">
                            <img src="{{asset('theme/assets/images/gallery/gallery-02.jpg')}}" alt="gallery" width="918" height="550" loading="lazy" />
                        </div>
                        <!-- Gallery Item End -->
                        <!-- Gallery Item Start -->
                        <div class="swiper-slide gallery-item">
                            <img src="{{asset('theme/assets/images/gallery/gallery-03.jpg')}}" alt="gallery" width="918" height="550" loading="lazy" />
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                    <div class="swiper-button-next">
                        <i class="lastudioicon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="lastudioicon-left-arrow"></i>
                    </div>
                </div>
            </div>
            <!-- Gallery Wrapper End -->
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Booking Start -->
    <div class="booking-section d-flex align-items-center" style="background-image: url({{asset('theme/assets/images/background-2.png')}})">
        <div class="container-fluid custom-container">
            <!-- Booking Content Start -->
            <div class="booking-content js-scroll ShortFadeInUp scrolled">
                <div class="booking-content__box">
                    <div class="booking-content__image">
                        <img src="{{asset('theme/assets/images/booking.png')}}" alt="Call to Action" width="289" height="268" loading="lazy" />
                    </div>
                    <div class="booking-content__text">
                        <div class="booking-content__title">
                            Book a Tour
                        </div>
                        <div class="booking-content__description">
                            Discover Our
                        </div>
                    </div>
                </div>
                <a class="booking-content__btn" href="#">
                    Book tour now
                </a>
            </div>
            <!-- Booking Content End -->
        </div>
    </div>
    <!-- Booking End -->

    <!-- Brand Start -->
    <div class="brand-section section-padding-02">
        <div class="container-fluid custom-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">
                    Featured Producers
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
                                <img src="{{asset('theme/assets/images/brand/brand-2-1.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('theme/assets/images/brand/brand-2-2.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('theme/assets/images/brand/brand-2-3.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
                            </div>
                            <!-- Brand Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Brand Item Start -->
                            <div class="brand-item-2">
                                <img src="{{asset('theme/assets/images/brand/brand-2-4.png')}}" alt="Brand" width="308" height="210" loading="lazy" />
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

    <!-- Client Start -->
    <div class="client-section section-padding-02">
        <div class="container-fluid home-container">
            <!-- Section Title Start -->
            <div class="section-title-2 text-center js-scroll ShortFadeInUp scrolled">
                <h2 class="section-title-2__title">Client Reviews</h2>
            </div>
            <!-- Section Title End -->

            <!-- Client Wrapper Start -->
            <div class="client-wrapper client-active swiper-dot-style-2 js-scroll ShortFadeInUp scrolled">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Client Item Start -->
                        <div class="client-item swiper-slide">
                            <div class="client-item__image">
                                <img src="{{asset('theme/assets/images/user/user-1.jpg')}}" alt="user" width="60" height="60" loading="lazy" />
                            </div>
                            <div class="client-item__content">
                                <p class="client-item__description">
                                    The best customer support I have
                                    ever had with themeforest templates.
                                    Thank you so much for your support,
                                    I will buy other themes by you!
                                </p>
                                <div class="client-item__rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                                <h3 class="client-item__name">
                                    Doris Roberts
                                </h3>
                            </div>
                        </div>
                        <!-- Client Item End -->
                        <!-- Client Item Start -->
                        <div class="client-item swiper-slide">
                            <div class="client-item__image">
                                <img src="{{asset('theme/assets/images/user/user-2.jpg')}}" alt="user" width="60" height="60" loading="lazy" />
                            </div>
                            <div class="client-item__content">
                                <p class="client-item__description">
                                    Out of all themes I purchased this
                                    had the best document included about
                                    installing and editing the theme.
                                    Beginners friendly.
                                </p>
                                <div class="client-item__rating">
                                    <span class="star-rating">
                                            <span style="width: 100%">
                                            </span>
                                    </span>
                                </div>
                                <h3 class="client-item__name">
                                    Brandon Guerrero
                                </h3>
                            </div>
                        </div>
                        <!-- Client Item End -->
                        <!-- Client Item Start -->
                        <div class="client-item swiper-slide">
                            <div class="client-item__image">
                                <img src="{{asset('theme/assets/images/user/user-3.jpg')}}" alt="user" width="60" height="60" loading="lazy" />
                            </div>
                            <div class="client-item__content">
                                <p class="client-item__description">
                                    Great theme! bought it 3 years ago
                                    and still current on design and
                                    helping us to sell online our
                                    products. Also had a problem and
                                    they solved it very well,
                                </p>
                                <div class="client-item__rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div>
                                <h3 class="client-item__name">
                                    Tom Mendez
                                </h3>
                            </div>
                        </div>
                        <!-- Client Item End -->
                        <!-- Client Item Start -->
                        <div class="client-item swiper-slide">
                            <div class="client-item__image">
                                <img src="{{asset('theme/assets/images/user/user-4.jpg')}}" alt="user" width="60" height="60" loading="lazy" />
                            </div>
                            <div class="client-item__content">
                                <p class="client-item__description">
                                    Guys, you don’t just buy the theme,
                                    you also buy excellent support from
                                    the devs, so be sure that whatever
                                    problem you face, they will help you
                                    with it 😉 5 stars!
                                </p>
                                <div class="client-item__rating">
                                    <span class="star-rating">
                                            <span style="width: 100%">
                                            </span>
                                    </span>
                                </div>
                                <h3 class="client-item__name">
                                    Dorothy Griffin
                                </h3>
                            </div>
                        </div>
                        <!-- Client Item End -->
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Client Wrapper End -->
        </div>
    </div>
    <!-- Client End -->

    <!-- Call to Action Start -->
    <div class="call-to-action-section d-flex align-items-cente">
        <div class="container-fluid custom-container">
            <!-- Call to Action Wrapper Start -->
            <div class="call-to-action-wrapper d-md-flex justify-content-between align-items-center">
                <!-- Call to Action Image Start -->
                <div class="call-to-action-image-01 js-scroll ShortFadeInUp scrolled">
                    <img src="{{asset('theme/assets/images/cta-1.png')}}" alt="Cal to Action" width="231" height="212" loading="lazy" />
                </div>
                <!-- Call to Action Image End -->
                <!-- Call to Action Image Start -->
                <div class="call-to-action-image-02 js-scroll ShortFadeInUp scrolled">
                    <img src="{{asset('theme/assets/images/cta-2.png')}}" alt="Cal to Action" width="893" height="305" loading="lazy" />
                </div>
                <!-- Call to Action Image End -->
                <!-- Call to Action Content Start -->
                <div class="call-to-action-content text-center js-scroll ShortFadeInUp scrolled">
                    <h3 class="call-to-action-content__title">
                        Wine Festival Italy
                    </h3>
                    <p class="call-to-action-content__description">
                        Quam pellentesque nec nam
                    </p>
                    <a class="call-to-action-content__btn" href="#">
                        Join now
                    </a>
                </div>
                <!-- Call to Action Content End -->
            </div>
            <!-- Call to Action Wrapper End -->
        </div>
    </div>
    <!-- Call to Action End -->
</main>
@endsection
