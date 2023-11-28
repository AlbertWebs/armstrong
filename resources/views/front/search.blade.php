@extends('front.master-pages')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">
                    {{$Search}}
                </h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Products</span></li>
                    <li><span> {{$Search}}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="shop-section section-padding-2">
        <div class="container-fluid custom-container">
            <br><br><br>


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


        </div>
    </div>
    <!-- Shop End -->
</main>
@endsection
