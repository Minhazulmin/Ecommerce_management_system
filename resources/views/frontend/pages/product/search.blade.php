

@extends('frontend.layouts.master')

@section('content')
<!-- start side bar + containt -->

<div class="container-fluid margin-top-20">
	<div class="row">
		<div class="col-md-3">
			@include('frontend.partials.product-sidebar')
		</div>

		<div class="col-md-9">
			<div class="widget">
				<hr>
				<h3>Search Products For- <span class="badge badge-primary">{{$search}}</span></h3>

				<hr>

				@include('frontend.pages.product.partials.all_products')

			</div>
		</div>
	</div>

</div>
@endsection