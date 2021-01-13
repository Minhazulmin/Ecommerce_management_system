

@extends('frontend.layouts.master')

@section('content')
<!-- start side bar + containt -->

<div class="container-fluid margin-top-20 ">
	<!-- slider part -->
	
	<!-- end sliderr part -->
	<div class="row">
		<div class="col-md-3 mt-2">
			@include('frontend.partials.product-sidebar')
		</div>

		<div class="col-md-9 mt-2 ">
			<div class="for_slider mshadow">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">


						@foreach($sliders as $slider)
						<li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index}}" class="{{ $loop->index == 0 ? 'active' :'' }}"></li>

						@endforeach
					</ol>
					<div class="carousel-inner">
						@foreach($sliders as $slider)


						<div class="carousel-item {{ $loop->index == 0 ? 'active' :'' }}">
							<img class="d-block w-100" src="{{ asset('images/slider/'.$slider->image) }}" alt="{{ $slider->title }}">

							<div class="carousel-caption d-none d-md-block">
								<h5>{{$slider->title}}</h5>
								@if($slider->button_text)
								<a href="{{ $slider->button_link }}" target="blank" class="btn btn-warning">{{ $slider->button_text }}</a>
								@endif
							</div>
						</div>

						@endforeach
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
<hr>
	<!-- all product list -->
			<div class="widget">
				<h4  class="text-center">ALL PRODUCTS</h4>
				<hr>
				@include('frontend.pages.product.partials.all_products')

			</div>
			<!-- end all product list -->


			<!-- for category -->
			<hr>

			<div class="widget ">	
				<h4 class="text-center">CATEGORY</h4>
				<hr>
				@include('frontend.pages.categories.partials.all_category')
				<hr>

			</div>

		
		</div>
	</div>

</div>
@endsection