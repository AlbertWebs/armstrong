@extends('front.master-products')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">
                    <?php
                        $Category = \App\Models\Category::find($category);
                    ?>
                    {{$Category->title}}
                </h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Products</span></li>
                    <li><span>{{$Category->title}}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="shop-section section-padding-2">
        <div class="container-fluid custom-container">
            <br><br><br>
            <!-- Shop Filter Start -->
            {{-- <div class="shop-filter align-items-center">
                <!-- Shop Filter Default Start -->
                <div class="shop-filter-default justify-content-between align-items-center">
                    <!-- Shop Filter Count Start -->
                    <div class="shop-filter-count d-none d-sm-block">
                        Showing 1–12 of 90 results
                    </div>
                    <!-- Shop Filter Count End -->

                    <!-- Shop Filter Sort By Start -->
                    <div class="shop-filter-sort-by">
                        <div class="shop-filter-sort-by__label">
                            <span>Sort by Default</span>
                            <i class="lastudioicon-down-arrow"></i>
                        </div>
                        <ul class="shop-filter-sort-by__dropdown">
                            <li class="active">
                                <a href="#">Sort by Default</a>
                            </li>
                            <li>
                                <a href="#">Sort by Popularity</a>
                            </li>
                            <li>
                                <a href="#">Sort by Rated</a>
                            </li>
                            <li>
                                <a href="#">Sort by Latest</a>
                            </li>
                            <li>
                                <a href="#">Sort by Price:
                                    <i class="lastudioicon-arrow-up"></i></a>
                            </li>
                            <li>
                                <a href="#">Sort by Price:
                                    <i
                                            class="lastudioicon-arrow-down"
                                        ></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Shop Filter Sort By End -->
                </div>
                <!-- Shop Filter Default End -->

                <!-- Shop Filter Button Start -->
                <div class="shop-filter-button">
                    <button class="shop-filter-button__btn shop-filter-toggle">
                        <span>Filter</span>
                        <i class="lastudioicon-menu-4-2"></i>
                    </button>
                </div>
                <!-- Shop Filter Button End -->

                <!-- Shop Filter widget Start -->
                <div class="shop-filter-widget">
                    <div class="filter-widget-row">
                        <div class="filter-widget-col">
                            <!-- widget Item Start -->
                            <div class="widget-item">
                                <h4 class="widget-item__title">
                                    Category
                                </h4>
                                <div class="widget-item__filter category-filter">
                                    <ul class="widget-item__list category" id="accordionCategory">



                                        <li>
                                            <input type="checkbox" id="category-13" />
                                            <label for="category-13">
                                                <span></span>
                                                Extras
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="category-14" />
                                            <label for="category-14">
                                                <span></span>
                                                Snacks
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="category-15" />
                                            <label for="category-15">
                                                <span></span>
                                                Beer
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="category-16" />
                                            <label for="category-16">
                                                <span></span>
                                                Wines
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="category-17" />
                                            <label for="category-17">
                                                <span></span>
                                                Spirit
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                        <div class="filter-widget-col">
                            <!-- widget Item Start -->
                            <div class="widget-item">
                                <h4 class="widget-item__title">
                                    Price
                                </h4>
                                <div class="widget-item__filter">
                                    <ul class="widget-item__list price">
                                        <li>
                                            <input type="checkbox" id="price-1" />
                                            <label for="price-1">
                                                <span></span>
                                                kes 1000.00 - kes3000.00
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="price-2" />
                                            <label for="price-2">
                                                <span></span>
                                                kes 3000.00 - kes5000.00
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="price-3" />
                                            <label for="price-3">
                                                <span></span>
                                                kes 5000.00 - kes7000.00
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="price-4" />
                                            <label for="price-4">
                                                <span></span>
                                                kes 7000.00 - kes10000.00
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                        <div class="filter-widget-col">
                            <!-- widget Item Start -->
                            <div class="widget-item">
                                <h4 class="widget-item__title">
                                    Flavours
                                </h4>
                                <div class="widget-item__filter">
                                    <ul class="widget-item__color">
                                        <li>
                                            <input type="checkbox" id="blue" />
                                            <label for="blue">
                                                <span
                                                        class="blue"
                                                    ></span>
                                                Vanilla
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bronze" />
                                            <label for="bronze">
                                                <span
                                                        class="bronze"
                                                    ></span>
                                                Strawbery
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="green" />
                                            <label for="green">
                                                <span
                                                        class="green"
                                                    ></span>
                                                Dry
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="pink" />
                                            <label for="pink">
                                                <span
                                                        class="pink"
                                                    ></span>
                                                Lemon
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>

                        <div class="filter-widget-col">
                            <!-- widget Item Start -->
                            <div class="widget-item">
                                <h4 class="widget-item__title">
                                    Brand
                                </h4>
                                <div class="widget-item__filter">
                                    <ul class="widget-item__list-2">
                                        <li>
                                            <a href="#">Tusker</a>
                                        </li>
                                        <li><a href="#">Cider</a></li>
                                        <li><a href="#">Dry</a></li>
                                        <li><a href="#">Zara</a></li>
                                        <li>
                                            <a href="#">Plant</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                    </div>
                </div>
                <!-- Shop Filter widget End -->
            </div> --}}
            <!-- Shop Filter End -->

            <!-- Shop Wrapper Start -->
            <div class="shop-wrapper">
                <div class="row">

                    @foreach ($Products as $Product)
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <!-- Single product Start -->
                        <div class="single-product single-product-02 js-scroll ShortFadeInUp scrolled">
                            <div class="single-product__thumbnail">
                                <div class="single-product__thumbnail--holder">
                                    <a href="{{url('/')}}/product/{{$Product->slung}}">
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image}}" alt="Product" width="392" height="400" loading="lazy" />
                                    </a>
                                </div>
                            </div>
                            <div class="single-product__info text-center">
                                <div class="single-product__info--tags">
                                    <?php
                                        $Category = \App\Models\Category::find($Product->category_id)
                                    ?>
                                    {{-- <a href="{{url('/')}}/{{$Category->slung}}">{{$Category->title}}</a>  --}}
                                    Alc. {{$Product->abv}}%  {{$Product->origin}}
                                </div>
                                <h3 class="single-product__info--title">
                                    <a href="{{url('/')}}/product/{{$Product->slung}}">
                                        {{$Product->title}}
                                    </a>
                                </h3>
                                <div class="single-product__info--price">
                                    <ins>kes {{$Product->price}}</ins>
                                </div>
                                {{-- <div class="single-product__info--rating">
                                    <span class="star-rating">
                                            <span style="width: 80%">
                                            </span>
                                    </span>
                                </div> --}}
                                <form method="POST" action="{{route('add.to.cart.post')}}" class="ajax-request">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$Product->id}}">
                                <button type="submit" id="ajax-add-to-cart" class="cart-empty__btn btn add-bg-color">
                                    Add To Basket <i class="lastudioicon-shopping-cart-3"></i>
                                    <span class="loading-ajax">
                                        <img width="25" src="{{url('/')}}/uploads/icon/loading.gif" >
                                    </span>
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Single product End -->
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Shop Wrapper End -->

            <!-- Pagination Start -->
            {{-- <div class="paginations">
                <ul class="paginations-list">
                    <li>
                        <a href="#">
                            <i class="lastudioicon-arrow-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a class="active" href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <li>
                        <a href="#">10</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="lastudioicon-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div> --}}
            <!-- Pagination End -->
        </div>
    </div>
    <!-- Shop End -->
</main>
@endsection
