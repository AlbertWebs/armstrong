@extends('front.master-pages')

@section('content')
<main>
    @foreach ($Products as $Product)
    <!-- Breadcrumbs Start -->
    <div class="single-breadcrumbs">
        <div class="container-fluid custom-container">
            <ul class="single-breadcrumbs-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Catalogue</a></li>
                <?php
                    $Category = \App\Models\Category::find($Product->category_id)
                ?>
                <li><a href="{{url('/')}}/{{$Category->slung}}">{{$Category->title}} </a></li>
                <li><span>{{$Product->title}}</span></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Product Single Start -->
    <div class="product-single-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Product Single Wrapper Start -->
            <div class="product-single-wrapper">
                <div class="product-single-col-1">
                    <!-- Product Single image Start -->
                    <div class="product-single-image">
                        <div class="product-single-slide navigation-arrows-style-1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image}}" alt="Product single" width="694" height="728" />
                                    </div>
                                    {{-- <div class="product-single-slide-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-02.png')}}" alt="Product single" width="694" height="728" />
                                    </div>
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-03.png')}}" alt="Product single" width="694" height="728" />
                                    </div>
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-04.png')}}" alt="Product single" width="694" height="728" />
                                    </div> --}}
                                </div>

                                <div class="product-single-zoom">
                                    <div class="zoom">
                                        <a class="product-glightbox" href="{{url('/')}}/uploads/products/{{$Product->image}}" aria-label="zoom image"></a>
                                        {{-- <a class="product-glightbox" href="assets/images/products/wines/product-single-02.png')}}" aria-label="zoom image"></a>
                                        <a class="product-glightbox" href="assets/images/products/wines/product-single-03.png')}}" aria-label="zoom image"></a>
                                        <a class="product-glightbox" href="assets/images/products/wines/product-single-04.png')}}" aria-label="zoom image"></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="product-single-thumb">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-01.png')}}" alt="Product single" width="144" height="155" />
                                    </div>
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-02.png')}}" alt="Product single" width="144" height="155" />
                                    </div>
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-03.png')}}" alt="Product single" width="144" height="155" />
                                    </div>
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="{{asset('theme/assets/images/products/wines/product-single-04.png')}}" alt="Product single" width="144" height="155" />
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Product Single image End -->
                </div>

                <div class="product-single-col-2">
                    <!-- Product Single content Start -->
                    <div class="product-single-content">
                        <h2 class="product-single-content__title">
                            {{$Product->name}}
                        </h2>
                        <div class="product-single-content__price-stock">
                            <div class="product-single-content__price">
                                <ins> kes {{$Product->price}}</ins>
                            </div>
                            <div class="product-single-content__stock">
                                <span class="stock-icon">
                                        <i
                                            class="dlicon ui-1_check-circle-08"
                                        ></i>
                                    </span>
                                <span class="stock-text">
                                        Acl {{$Product->abv}}%
                                    </span>
                                    <span class="stock-text">
                                         {{$Product->origin}}
                                    </span>
                            </div>
                        </div>
                        <div class="product-single-content__short-description">
                            <p>
                                {!!html_entity_decode($Product->content)!!}
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
                                        <i
                                                class="lastudioicon-i-add-2"
                                            ></i>
                                    </button>
                                </div>
                                <form method="POST" action="{{route('add.to.cart.post')}}" class="ajax-request">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$Product->id}}">
                                    <button id="ajax-add-to-cart" class="product-single-content__add-to-cart btn">
                                        Add to cart
                                    </button>
                                </form>
                            </div>

                        </div>
                        <div class="product-single-content__meta">
                            <div class="product-single-content__meta--item">
                                <div class="label">SKU:</div>
                                <div class="content">REF. {{$Product->sku}}</div>
                            </div>
                            <div class="product-single-content__meta--item">
                                <div class="label">Categories:</div>
                                <div class="content">
                                    {{-- <a href="#">Armstrong Boissons Limited</a> --}}
                                    <a href="#">{{$Category->title}}</a>
                                </div>
                            </div>
                            <div class="product-single-content__meta--item">
                                <div class="label">Origin:</div>
                                <div class="content">
                                    <a href="#">{{$Product->origin}}</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="product-single-content__social">
                            <div class="label">Share</div>
                            <ul class="socail-icon">
                                <li>
                                    <a href="#" aria-label="facebook">
                                        <i
                                                class="lastudioicon-b-facebook"
                                            ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="twitter">
                                        <i
                                                class="lastudioicon-b-twitter"
                                            ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="linkedin">
                                        <i
                                                class="lastudioicon-b-linkedin"
                                            ></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <!-- Product Single content End -->
                </div>
            </div>
            <!-- Product Single Wrapper End -->
        </div>
    </div>
    <!-- Product Single End -->

    <!-- Product Single Tabs Start -->
    <div class="product-single-tabs-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Product Single Tabs Start -->
            <div class="product-single-tabs">
                <ul class="nav justify-content-center">
                    {{-- <li>
                        <button class="active" data-bs-toggle="pill" data-bs-target="#description" type="button">
                            Description
                        </button>
                    </li> --}}
                    <li>
                        <button class="active" data-bs-toggle="pill" data-bs-target="#additionalInformation " type="button">
                            Additional information
                        </button>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="description">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <!-- Product Single Tab Description Start -->
                                <div class="product-single-tab-description">
                                    <!-- Product Single Tab Description Item Start -->
                                    <div class="product-single-tab-description-item">
                                        <h4 class="product-single-tab-description-item__title">
                                            + USEFUL INFORMATION
                                        </h4>
                                        <p>
                                            {!!html_entity_decode($Product->content)!!}
                                        </p>
                                    </div>
                                    <!-- Product Single Tab Description Item End -->



                                </div>
                                <!-- Product Single Tab Description End -->
                            </div>
                            <div class="col-lg-5">
                                <!-- Product Single Tab Image Start -->
                                <div class="product-single-tab-image">
                                    <h5 class="product-single-tab-image__title">
                                        Video review product
                                    </h5>
                                    <div class="product-single-tab-image__image">
                                        <a class="glightbox" href="https://www.youtube.com/watch?v=exlcGoyy3ro" aria-label="Video"></a>
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image}}" alt="product-image" width="320" height="218" loading="lazy" />
                                    </div>
                                </div>
                                <!-- Product Single Tab Image End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="additionalInformation">
                        <!-- Product Single Table Start -->
                        <div class="product-single-table">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <tbody>
                                        <tr>
                                            <th>Origin</th>
                                            <td>
                                                <p>{{$Product->origin}}</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Alcohol Content</th>
                                            <td>
                                                <p>Alc {{$Product->abv}}%</p>
                                            </td>
                                        </tr>



                                        <tr>
                                            <th>Category</th>
                                            <td>
                                                <p>{{$Category->title}}</p>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                                <br><br>
                                <table class="table align-middle">
                                    <tbody>

                                        <?php
                                           $Variations = DB::table('variations')->where('product_id',$Product->id)->get();
                                        ?>
                                        @foreach ($Variations as $variant)
                                        <tr>
                                            <th>{{$variant->title}} - {{$variant->value}}ml</th>
                                            <td>
                                                <p style="font-weight: 900; color:#d68d67">kes {{$variant->price}}</p>
                                            </td>
                                            <td>
                                                <p>
                                                    <form method="POST" action="{{url('/')}}/add-to-cart-variant" class="ajax-requests">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$variant->id}}">
                                                        <button type="submit" id="ajax-add-to-cart" class="cart-empty__btn btn add-bg-color">
                                                            Add To Basket  <i class="lastudioicon-shopping-cart-3"></i>
                                                            <span class="loading-ajax" style="display: none;">
                                                                <img width="25" src="{{url('/')}}/uploads/icon/loading.gif">
                                                            </span>
                                                        </button>
                                                    </form>
                                                </p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Product Single Table End -->
                    </div>

                </div>
            </div>
            <!-- Product Single Tabs End -->
        </div>
    </div>
    @endforeach
</main>
@endsection
