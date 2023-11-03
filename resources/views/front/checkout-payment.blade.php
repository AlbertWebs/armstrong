@extends('front.master-pages')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Make Payments</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Make Payments</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="checkout-section section-padding-2" style="min-height:500px">
        <div class="container-fluid custom-container">
            <!-- Checkout Start -->
            <div class="checkout-wrapper">
                <div class="row gy-3">
                    <div class="col-lg-8" style="margin:0 auto">
                         <!-- Checkout Start -->
                        <div class="panel-body">
                            {!!html_entity_decode($iframe)!!}
                        </div>
                        <!-- Checkout End -->
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
@endsection
