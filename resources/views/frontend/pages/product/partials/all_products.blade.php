


<div class="row">
	<!-- 1st image -->

	@foreach($products as $product)
	<div class="col-md-3">
		<div class="card content ">

			@php

			$i = 1;
			@endphp
			@foreach($product->images as $image)
			@if( $i > 0)
			<a href="{!!route('products.show',$product->slug) !!}"><img class="card-img-top feature-img responsive product_img_size " src="{{asset('images/products/'.$image->image)}}" alt="{{$product->title}}"></a>
			@endif

			@php
			$i--; 
			@endphp
			@endforeach
			<div class="card-body">
				<h4 class="card-title">
					<a href="{!!route('products.show',$product->slug) !!}">	{{$product->title}}</a>
				</h4>
				<p class="card-text">৳ -{{$product->price}}</p>
				@include('frontend.pages.product.partials.cart-button')
			</div>
		</div>

	</div>
	<!-- end 1st image -->
	@endforeach
</div>


<div class="mt-4 pagination">
	
	{{ $products->links() }}

</div>