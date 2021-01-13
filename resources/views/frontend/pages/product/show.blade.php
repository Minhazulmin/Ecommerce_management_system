

@extends('frontend.layouts.master')


@section('title')
		{{ $product->title }} | Minhaz Project
@endsection

@section('content')
<!-- start side bar + containt -->

<div class="container margin-top-20">
	<div class="row">
		<div class="col-md-4">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@php
						$i = 1;
					@endphp
					@foreach($product->images as $image)
					<div class="carousel-item {{ $i==1 ? 'active':'' }}">
						<img class="d-block w-100" src="{!! asset('images/products/'.$image->image) !!}">
					</div>
					
					@php
						$i++;
					@endphp
					@endforeach
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="mt-3">
				<p>Category <span class="badge badge-info">{{ $product->category->name }} </span></p>
				<p>Brand <span class="badge badge-info">{{ $product->brand->name }} </span></p>
			</div>
		</div> 

		<div class="col-md-8">
			<div class="widget">
				<h3>Name-{{$product->title}}</h3>
				<h3>TK-{{$product->price}}</h3>
				<h3>Stock Avalable:<span class="badge badge-warning">
						{{$product->quantity < 1 ? 'No Item is Avalable' : $product->quantity.' - Item is stock' }}
					</span>

				</h3>
				<hr>
				<h3>Description</h3>
				<hr>
				<div class="product-description">
					{!! $product->description !!}
				</div>

				

			</div>
		</div>
	</div>

</div>
@endsection