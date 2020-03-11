@extends('layouts.ecommerce') @section('title')
<title>Purposestuff</title>
@endsection @section('content')

<!--================Home Banner Area =================-->
@extends('layouts.ecommerce.module.menu')


 <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">New Shoes Arrival</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach ($products as $row)
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Lifestyle</span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href="{{ url('/product/' . $row->slug) }}">{{ $row->name }}</a></h3>
    						<div class="pricing">
	    						<p class="price"><span>Rp {{ number_format($row->price) }}</span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="{{ url('/product/' . $row->slug) }}" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="{{ url('/product/' . $row->slug) }}" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
                </div>
                @endforeach
            </div>
            <div class="row">
					{{ $products->links() }}
			</div>
    	</div>
    </section>
@endsection

