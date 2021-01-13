

@extends('frontend.layouts.master')

@section('content')
<!-- start side bar + containt -->

<div class="container-fluid margin-top-20">
	<div class="row">
		<div class="col-md-3 mt-2">
			@include('frontend.partials.product-sidebar')
		</div>

		<div class="col-md-9 mshadow">
			<hr>
			<!-- all product list -->
			<div class="widget">

				<h4  class="text-center">ALL PRODUCTS</h4>
				<hr>
				@include('frontend.pages.product.partials.all_products')

			</div>
			<!-- end all product list -->
		</div>
	</div>

</div>
@endsection