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
                            <li>
                                <a href="login-register.html" aria-label="login">
                                    <i class="lastudioicon-single-01-1"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="term-of-use.html" aria-label="help">
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
                            <ul class="menu-items-list menu-items-list--dark d-flex justify-content-center">
                                <li class="position-static">
                                    <a href="#">
                                        <span>Wines</span>
                                        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="{{asset('theme/assets/images/megamenu-fashion-01.jpg')}}" alt="Fashion Banner" width="470" height="475" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">New Arrival</h4>
                                                    <p class="caption-desc">Taste the Smoothness</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title"> 2023 Wine Collections</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li><a href="{{url('/')}}/wine/red-wine/" ><span>Red Wine</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/red-wine/red-sweet-wine/" ><span>Red Sweet Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/white-wine/" ><span>White Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/white-wine/sweet-white-wine/" ><span>Sweet White Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/rose-wine/" ><span>Rosé Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/sparkling-wine/" ><span>Sparkling Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/red-wine/port-sherry/" ><span>Port &amp; Sherry</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/flavoured-wine/" ><span>Flavoured Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/" ><span>All Wines</span></a></li>
                                                </ul>
                                                <ul class="mega-menu__content--list">
                                                    <li><a href="{{url('/')}}/wine/?_options=organic" ><span>Organic Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/?_alcohol=0.00%2C0.00" ><span>Non-Alcoholic Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/wine/?_options=sacramental" ><span>Sacramental Wine</span></a></li>
                                                    <li><a href="{{url('/')}}/product-tag/dessert-wine/" ><span>Dessert Wine</span></a></li>
                                                    {{-- <li ><a href="{{url('/')}}/wine/?_origin=south-africa" ><span> <strong>Country</strong> </span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=south-africa" ><span>South Africa</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=france" ><span>France</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=chile" ><span>Chile</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=italy" ><span>Italy</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=argentina" ><span>Argentina</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=australia" ><span>Australia</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=portugal" ><span>Portugal</span></a></li>
                                                    <li ><a href="{{url('/')}}/wine/?_origin=kenya" ><span>Kenya</span></a></li>
                                                    <li class="all-link menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('/')}}/countries/" ><span>All Countries</span></a></li> --}}

                                                </ul>

                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@armstrong.ke</a></li>
                                                    <li><a href="#">0723014032</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="position-static">
                                    <a href="#">
                                        <span>Spirits</span>
                                        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="{{asset('theme/assets/images/megamenu-fashion-01.jpg')}}" alt="Fashion Banner" width="470" height="475" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">New Arrival</h4>
                                                    <p class="caption-desc">Taste the Smoothness</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title">2023 Spirit Collection</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li id="nav-menu-item-48270" ><a href="{{url('/')}}/spirits/whisky/" ><span>Whisky</span></a></li>
                                                    <li id="nav-menu-item-48271" ><a href="{{url('/')}}/spirits/rum/" ><span>Rum</span></a></li>
                                                    <li id="nav-menu-item-48272" ><a href="{{url('/')}}/spirits/vodka/" ><span>Vodka</span></a></li>
                                                    <li id="nav-menu-item-48273" ><a href="{{url('/')}}/spirits/gin/" ><span>Gin</span></a></li>
                                                    <li id="nav-menu-item-55545" ><a href="{{url('/')}}/spirits/brandy/cognac/" ><span>Cognac</span></a></li>
                                                    <li id="nav-menu-item-55544" ><a href="{{url('/')}}/spirits/brandy/" ><span>Brandy</span></a></li>
                                                    <li id="nav-menu-item-55548" ><a href="{{url('/')}}/spirits/tequila/" ><span>Tequila</span></a></li>
                                                    <li id="nav-menu-item-55549" ><a href="{{url('/')}}/spirits/liqueur/" ><span>Liqueur</span></a></li>

                                                </ul>

                                                <ul class="mega-menu__content--list">


                                                    <li id="nav-menu-item-55550" ><a href="{{url('/')}}/mixers/syrups-bitters/" ><span>Syrups &amp; Bitters</span></a></li>
                                                    <li id="nav-menu-item-55551" ><a href="{{url('/')}}/spirits/liqueur/pastis/" ><span>Sambuca &amp; Pastis</span></a></li>
                                                    <li id="nav-menu-item-55553" ><a href="{{url('/')}}/spirits/local-spirits/" ><span>Local Spirits</span></a></li>
                                                    <li id="nav-menu-item-66136" ><a href="{{url('/')}}/spirits/coolers/" ><span>Breezers</span></a></li>
                                                    <li id="nav-menu-item-171701" class="all-link menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="{{url('/')}}/spirits/" ><span>All Spirits</span></a></li>

                                                </ul>

                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@armstrong.ke</a></li>
                                                    <li><a href="#">0723014032</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="position-static">
                                    <a href="#">
                                        <span>Beers</span>
                                        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="{{asset('theme/assets/images/megamenu-fashion-01.jpg')}}" alt="Fashion Banner" width="470" height="475" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">New Arrival</h4>
                                                    <p class="caption-desc">Non curabitur gravida</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title">Summer Collection 2023</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li id="nav-menu-item-17196"><a href="{{url('/')}}/beer/?_origin=kenya" c><span>Domestic</span></a></li>
                                                    <li id="nav-menu-item-17205"><a href="{{url('/')}}/product-tag/imported/" c><span>Imported</span></a></li>
                                                    <li id="nav-menu-item-66132"><a href="{{url('/')}}/beer/craft-beer/" c><span>Craft Beer</span></a></li>
                                                    <li id="nav-menu-item-66133"><a href="{{url('/')}}/beer/cider/" c><span>Cider</span></a></li>
                                                    <li id="nav-menu-item-66134"><a href="{{url('/')}}/beer/non-alcoholic-beer/" c><span>Non-alcoholic Beer</span></a></li>
                                                    <li id="nav-menu-item-48224"><a href="{{url('/')}}/beer/" c><span>All Beer</span></a></li>
                                                </ul>

                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@armstrong.ke</a></li>
                                                    <li><a href="#">0723014032</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="position-static">
                                    <a href="#">
                                        <span>Mixers</span>
                                        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="{{asset('theme/assets/images/megamenu-fashion-01.jpg')}}" alt="Fashion Banner" width="470" height="475" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">New Arrival</h4>
                                                    <p class="caption-desc">Drinks</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title">#</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li id="nav-menu-item-63765" ><a href="{{url('/')}}/mixers/sodas/" class="cg-menu-link sub-menu-link"><span>Sodas</span></a></li>
                                                    <li id="nav-menu-item-66131" ><a href="{{url('/')}}/mixers/sodas/tonic/" class="cg-menu-link sub-menu-link"><span>Tonic</span></a></li>
                                                    <li id="nav-menu-item-63764" ><a href="{{url('/')}}/mixers/juices/" class="cg-menu-link sub-menu-link"><span>Juices</span></a></li>
                                                    <li id="nav-menu-item-63826" ><a href="{{url('/')}}/mixers/water/" class="cg-menu-link sub-menu-link"><span>Water</span></a></li>
                                                    <li id="nav-menu-item-63761" ><a href="{{url('/')}}/mixers/syrups-bitters/" class="cg-menu-link sub-menu-link"><span>Syrups &amp; Bitters</span></a></li>
                                                    <li id="nav-menu-item-63762" ><a href="{{url('/')}}/mixers/energy-drinks/" class="cg-menu-link sub-menu-link"><span>Energy Drinks</span></a></li>
                                                    <li id="nav-menu-item-63838" ><a href="{{url('/')}}/mixers/coffee-tea/" class="cg-menu-link sub-menu-link"><span>Coffee &amp; Tea</span></a></li>
                                                    <li id="nav-menu-item-63763" ><a href="{{url('/')}}/mixers/kombucha/" class="cg-menu-link sub-menu-link"><span>Kombucha</span></a></li>
                                                </ul>

                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@armstrong.ke</a></li>
                                                    <li><a href="#">0723014032</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="position-static">
                                    <a href="#">
                                        <span>Snacks</span>
                                        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="{{asset('theme/assets/images/megamenu-fashion-01.jpg')}}" alt="Fashion Banner" width="470" height="475" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">Creamy INN</h4>
                                                    <p class="caption-desc">Drinks & Snacks</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title">#</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li id="nav-menu-item-76691" ><a href="{{url('/')}}/snacks/frozen/ice-cream/" class="cg-menu-link sub-menu-link"><span>Ice Cream</span></a></li>
                                                    <li id="nav-menu-item-76685" ><a href="{{url('/')}}/snacks/popcorn/" class="cg-menu-link sub-menu-link"><span>Popcorn</span></a></li>
                                                    <li id="nav-menu-item-76686" ><a href="{{url('/')}}/snacks/crisps/" class="cg-menu-link sub-menu-link"><span>Crisps</span></a></li>
                                                    <li id="nav-menu-item-76687" ><a href="{{url('/')}}/snacks/chocolate/" class="cg-menu-link sub-menu-link"><span>Chocolate</span></a></li>
                                                    <li id="nav-menu-item-76689" ><a href="{{url('/')}}/snacks/nuts/" class="cg-menu-link sub-menu-link"><span>Nuts</span></a></li>
                                                    <li id="nav-menu-item-76690" ><a href="{{url('/')}}/snacks/biscuits-waffles/" class="cg-menu-link sub-menu-link"><span>Biscuits &amp; Waffles</span></a></li>
                                                </ul>

                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@armstrong.ke</a></li>
                                                    <li><a href="#">0723014032</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="position-static">
                                    <a href="#">
                                        <span>Extras</span>
                                        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="{{asset('theme/assets/images/megamenu-fashion-01.jpg')}}" alt="Fashion Banner" width="470" height="475" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">New Arrival</h4>
                                                    <p class="caption-desc">Drinks & Snacks</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title">#</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li id="nav-menu-item-63765" ><a href="{{url('/')}}/mixers/sodas/" class="cg-menu-link sub-menu-link"><span>Sodas</span></a></li>
                                                    <li id="nav-menu-item-66131" ><a href="{{url('/')}}/mixers/sodas/tonic/" class="cg-menu-link sub-menu-link"><span>Tonic</span></a></li>
                                                    <li id="nav-menu-item-63764" ><a href="{{url('/')}}/mixers/juices/" class="cg-menu-link sub-menu-link"><span>Juices</span></a></li>
                                                    <li id="nav-menu-item-63826" ><a href="{{url('/')}}/mixers/water/" class="cg-menu-link sub-menu-link"><span>Water</span></a></li>
                                                    <li id="nav-menu-item-63761" ><a href="{{url('/')}}/mixers/syrups-bitters/" class="cg-menu-link sub-menu-link"><span>Syrups &amp; Bitters</span></a></li>
                                                    <li id="nav-menu-item-63762" ><a href="{{url('/')}}/mixers/energy-drinks/" class="cg-menu-link sub-menu-link"><span>Energy Drinks</span></a></li>
                                                    <li id="nav-menu-item-63838" ><a href="{{url('/')}}/mixers/coffee-tea/" class="cg-menu-link sub-menu-link"><span>Coffee &amp; Tea</span></a></li>
                                                    <li id="nav-menu-item-63763" ><a href="{{url('/')}}/mixers/kombucha/" class="cg-menu-link sub-menu-link"><span>Kombucha</span></a></li>
                                                </ul>

                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@armstrong.ke</a></li>
                                                    <li><a href="#">0723014032</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
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
                                <li class="wishlist">
                                    <a href="wishlist.html" aria-label="Wishlist">
                                        <i
                                        class="lastudioicon lastudioicon-heart-1"
                                    ></i>
                                        <span class="badge">03</span>
                                    </a>
                                </li>
                                <li class="cart">
                                    <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="Cart">
                                        <i class="lastudioicon-shopping-cart-1"></i><span class="badge">03</span>
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
        <div class="offcanvas-body">
            <ul class="offcanvas-cart-list">
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/products/wines/product-02.png')}}" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Princess set</a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × kes 3069.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/products/wines/product-04.png')}}" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Senecio stapeliiformis </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × kes 3089.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{asset('theme/assets/images/products/wines/product-05.png')}}" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Hoya burtoniae </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × kes 3035.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <!-- Free Shipping Goal Start-->
            <div class="free-shipping-goal">
                <div class="free-shipping-goal__label text-center">
                    Buy kes 363.03 more to enjoy
                    <strong>FREE Shipping</strong>
                </div>
                <div class="free-shipping-goal__loading-bar">
                    <div class="load-percent" style="width: 98.49%"></div>
                </div>
            </div>
            <!-- Free Shipping Goal End-->

            <!-- Cart Meta Start-->
            <ul class="cart-meta">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>
                            </g>
                        </svg>
                        <span>Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>
                                <path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>
                            </g>
                        </svg>
                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z"></path>
                            </g>
                        </svg>
                        <span>Coupon</span>
                    </a>
                </li>
            </ul>
            <!-- Cart Meta End-->

            <!-- Cart Totals Table Start-->
            <div class="cart-totals-table">
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span>kes 36195.97</span>
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
                                            <strong class="price">kes 3620.00</strong>
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
                                <strong><span>kes 36215.97</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Cart Totals Table End-->

            <!-- Cart Buttons End-->
            <div class="cart-buttons">
                <a href="#" class="cart-buttons__btn-1 btn">Checkout</a>
                <a href="{{url('/shopping-cart')}}" class="cart-buttons__btn-2 btn">View Cart</a>
            </div>
            <!-- Cart Buttons End-->
        </div>
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
                <ul class="mobile-menu-items">
                    <li>
                        <a href="#">
                            Wines
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{url('/')}}/wine/red-wine/" ><span>Red Wine</span></a></li>
                            <li ><a href="{{url('/')}}/wine/red-wine/red-sweet-wine/" ><span>Red Sweet Wine</span></a></li>
                            <li><a href="{{url('/')}}/wine/white-wine/" ><span>White Wine</span></a></li>
                            <li><a href="{{url('/')}}/wine/white-wine/sweet-white-wine/" ><span>Sweet White Wine</span></a></li>
                            <li><a href="{{url('/')}}/wine/rose-wine/" ><span>Rosé Wine</span></a></li>
                            <li><a href="{{url('/')}}/wine/sparkling-wine/" ><span>Sparkling Wine</span></a></li>
                            <li><a href="{{url('/')}}/wine/red-wine/port-sherry/" ><span>Port &amp; Sherry</span></a></li>
                            <li><a href="{{url('/')}}/wine/flavoured-wine/" ><span>Flavoured Wine</span></a></li>
                            <li><a href="{{url('/')}}/wine/" ><span>All Wines</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            Spirits
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li id="nav-menu-item-48270" ><a href="{{url('/')}}/spirits/whisky/" ><span>Whisky</span></a></li>
                            <li id="nav-menu-item-48271" ><a href="{{url('/')}}/spirits/rum/" ><span>Rum</span></a></li>
                            <li id="nav-menu-item-48272" ><a href="{{url('/')}}/spirits/vodka/" ><span>Vodka</span></a></li>
                            <li id="nav-menu-item-48273" ><a href="{{url('/')}}/spirits/gin/" ><span>Gin</span></a></li>
                            <li id="nav-menu-item-55545" ><a href="{{url('/')}}/spirits/brandy/cognac/" ><span>Cognac</span></a></li>
                            <li id="nav-menu-item-55544" ><a href="{{url('/')}}/spirits/brandy/" ><span>Brandy</span></a></li>
                            <li id="nav-menu-item-55548" ><a href="{{url('/')}}/spirits/tequila/" ><span>Tequila</span></a></li>
                            <li id="nav-menu-item-55549" ><a href="{{url('/')}}/spirits/liqueur/" ><span>Liqueur</span></a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            Beers
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li id="nav-menu-item-17196"><a href="{{url('/')}}/beer/?_origin=kenya" c><span>Domestic</span></a></li>
                            <li id="nav-menu-item-17205"><a href="{{url('/')}}/product-tag/imported/" c><span>Imported</span></a></li>
                            <li id="nav-menu-item-66132"><a href="{{url('/')}}/beer/craft-beer/" c><span>Craft Beer</span></a></li>
                            <li id="nav-menu-item-66133"><a href="{{url('/')}}/beer/cider/" c><span>Cider</span></a></li>
                            <li id="nav-menu-item-66134"><a href="{{url('/')}}/beer/non-alcoholic-beer/" c><span>Non-alcoholic Beer</span></a></li>
                            <li id="nav-menu-item-48224"><a href="{{url('/')}}/beer/" c><span>All Beer</span></a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            Mixers
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li id="nav-menu-item-63765" ><a href="{{url('/')}}/mixers/sodas/" class="cg-menu-link sub-menu-link"><span>Sodas</span></a></li>
                            <li id="nav-menu-item-66131" ><a href="{{url('/')}}/mixers/sodas/tonic/" class="cg-menu-link sub-menu-link"><span>Tonic</span></a></li>
                            <li id="nav-menu-item-63764" ><a href="{{url('/')}}/mixers/juices/" class="cg-menu-link sub-menu-link"><span>Juices</span></a></li>
                            <li id="nav-menu-item-63826" ><a href="{{url('/')}}/mixers/water/" class="cg-menu-link sub-menu-link"><span>Water</span></a></li>
                            <li id="nav-menu-item-63761" ><a href="{{url('/')}}/mixers/syrups-bitters/" class="cg-menu-link sub-menu-link"><span>Syrups &amp; Bitters</span></a></li>
                            <li id="nav-menu-item-63762" ><a href="{{url('/')}}/mixers/energy-drinks/" class="cg-menu-link sub-menu-link"><span>Energy Drinks</span></a></li>
                            <li id="nav-menu-item-63838" ><a href="{{url('/')}}/mixers/coffee-tea/" class="cg-menu-link sub-menu-link"><span>Coffee &amp; Tea</span></a></li>
                            <li id="nav-menu-item-63763" ><a href="{{url('/')}}/mixers/kombucha/" class="cg-menu-link sub-menu-link"><span>Kombucha</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            Snacks
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li id="nav-menu-item-76691" ><a href="{{url('/')}}/snacks/frozen/ice-cream/" class="cg-menu-link sub-menu-link"><span>Ice Cream</span></a></li>
                            <li id="nav-menu-item-76685" ><a href="{{url('/')}}/snacks/popcorn/" class="cg-menu-link sub-menu-link"><span>Popcorn</span></a></li>
                            <li id="nav-menu-item-76686" ><a href="{{url('/')}}/snacks/crisps/" class="cg-menu-link sub-menu-link"><span>Crisps</span></a></li>
                            <li id="nav-menu-item-76687" ><a href="{{url('/')}}/snacks/chocolate/" class="cg-menu-link sub-menu-link"><span>Chocolate</span></a></li>
                            <li id="nav-menu-item-76689" ><a href="{{url('/')}}/snacks/nuts/" class="cg-menu-link sub-menu-link"><span>Nuts</span></a></li>
                            <li id="nav-menu-item-76690" ><a href="{{url('/')}}/snacks/biscuits-waffles/" class="cg-menu-link sub-menu-link"><span>Biscuits &amp; Waffles</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            Extras
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li id="nav-menu-item-63765" ><a href="{{url('/')}}/mixers/sodas/" class="cg-menu-link sub-menu-link"><span>Sodas</span></a></li>
                            <li id="nav-menu-item-66131" ><a href="{{url('/')}}/mixers/sodas/tonic/" class="cg-menu-link sub-menu-link"><span>Tonic</span></a></li>
                            <li id="nav-menu-item-63764" ><a href="{{url('/')}}/mixers/juices/" class="cg-menu-link sub-menu-link"><span>Juices</span></a></li>
                            <li id="nav-menu-item-63826" ><a href="{{url('/')}}/mixers/water/" class="cg-menu-link sub-menu-link"><span>Water</span></a></li>
                            <li id="nav-menu-item-63761" ><a href="{{url('/')}}/mixers/syrups-bitters/" class="cg-menu-link sub-menu-link"><span>Syrups &amp; Bitters</span></a></li>
                            <li id="nav-menu-item-63762" ><a href="{{url('/')}}/mixers/energy-drinks/" class="cg-menu-link sub-menu-link"><span>Energy Drinks</span></a></li>
                            <li id="nav-menu-item-63838" ><a href="{{url('/')}}/mixers/coffee-tea/" class="cg-menu-link sub-menu-link"><span>Coffee &amp; Tea</span></a></li>
                            <li id="nav-menu-item-63763" ><a href="{{url('/')}}/mixers/kombucha/" class="cg-menu-link sub-menu-link"><span>Kombucha</span></a></li>
                        </ul>
                    </li>
                </ul>
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
                <a href="wishlist.html" aria-label="wishlist">
                    <i class="lastudioicon-heart-1"></i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <a href="compare.html" aria-label="compare">
                    <i class="lastudioicon-ic_compare_arrows_24px"> </i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="cart">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">03</span>
                </button>
            </li>
        </ul>
    </div>

    <!-- Mobile Meta End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container-fluid home-container">
            <!-- Footer Main Start -->
            <div class="footer-padding">
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-link__wrapper">
                                    <h4 class="footer-title-2">Connect with us</h4>

                                    <ul class="footer-link__list">
                                        <li>
                                            <span>
                                            4517 Riverside Downs. Gitaru Road,
                                            Wangige
                                        </span>
                                        </li>
                                        <li>
                                            <a href="mailto:info@armstrong.ke">
                                                info@armstrong.ke
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+254723014032">254723014032</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-link__wrapper">
                                    <h4 class="footer-title-2">Helpful Links</h4>

                                    <ul class="footer-link__list">
                                        <li>
                                            <a href="contact-us.html">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> Careers </a>
                                        </li>
                                        <li>
                                            <a href="#"> Find a Location </a>
                                        </li>
                                        <li>
                                            <a href="#"> Site Map </a>
                                        </li>
                                        <li>
                                            <a href="#"> Accessibility </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-link__wrapper">
                                    <h4 class="footer-title-2">My Account</h4>

                                    <ul class="footer-link__list">
                                        <li>
                                            <a href="login-register.html">
                                                Login or Register
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> Account Settings </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth.html">
                                                My Orders
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Gift Card Balance Check
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-link__wrapper">
                                    <h4 class="footer-title-2">Support</h4>

                                    <ul class="footer-link__list">
                                        <li>
                                            <a href="term-of-use.html">
                                                Terms & Conditions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="term-of-use.html">
                                                Privacy Policy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="term-of-use.html">
                                                Shipping & Return Policy
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <!-- Footer Newsletter Start -->
                        <div class="footer-newsletter">
                            <h2 class="footer-title-2">Stay with us</h2>

                            <div class="footer-newsletter__form">
                                <form action="#">
                                    <div class="footer-newsletter__input">
                                        <input type="email" placeholder="Email address..." />
                                        <button type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <p>
                                    This site is protected by reCAPTCHA and the
                                    Google Privacy Policy and Terms of Service
                                    apply.
                                </p>
                                <ul class="footer-newsletter__social">
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
                                            <i class="lastudioicon-b-linkedin 2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Newsletter End -->
                    </div>
                </div>
            </div>
            <!-- Footer Main End -->

            <!-- Footer CopyRight Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="text-center text-md-start">
                            <p>
                                &copy;
                                <span class="current-year">{{date('Y')}}</span>
                                <span> Armstrong Boissons Limited - All RIghts Reserved</span> | Powered By


                                <a href="https://designekta.com/">Designekta Studio</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="d-flex justify-content-center justify-content-md-end">
                            <li><a href="term-of-use.html">Term of user</a></li>
                            <li><a href="#">Payment refund</a></li>
                            <li><a href="#">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer CopyRight End -->
        </div>
    </footer>

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

</body>


</html>
