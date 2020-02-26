@extends('layouts.ecommerce') @section('title')
<title>Purposestuff</title>
@endsection @section('content')

<!--================Home Banner Area =================-->
@extends('layouts.ecommerce.module.menu')
<div
    class="hero-wrap js-fullheight"
    style="background-image: url('assets/ecommerce/images/bg_1.jpg');"
>
    <div class="overlay"></div>
    <div class="container">
        <div
            class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        >
            <h3 class="v">Purposestuff - Time to get T-shirt</h3>
            <div class="col-md-11 ftco-animate text-center">
                <h1>Le Stylist</h1>
                <h2><span>Wear Your T-shirt</span></h2>
            </div>
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel">
                        <span class="ion-ios-arrow-down"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-product">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big">Trending</h1>
                    <h2 class="mb-4">Trending</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-slider owl-carousel ftco-animate">
                        @forelse($products as $row)
                        <div class="item">
                            <div class="product">
                                <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}"
                                        alt="{{ $row->name }}">
                                    </a>
                                <div class="text pt-3 px-3">
                                    <h3><a href="#">{{ $row->name }}</a></h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price"><span class="price">Rp {{ number_format($row->price) }}</span></p>
                                        </div>
                                        <div class="rating">
                                            <p class="text-right">
                                                <span class="ion-ios-star-outline"></span>
                                                <span class="ion-ios-star-outline"></span>
                                                <span class="ion-ios-star-outline"></span>
                                                <span class="ion-ios-star-outline"></span>
                                                <span class="ion-ios-star-outline"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
@empty
          @endforelse

                            </div>
                    </div>
                    <div class="row">
					{{ $products->links() }}
                </div>


            </div>
            @endsection
    </section>



