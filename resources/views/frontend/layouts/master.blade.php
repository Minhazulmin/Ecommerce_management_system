<!DOCTYPE html>
<html>
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>
		@yield('title','Minhaz Project')
	</title>
	@include('frontend.partials.styles')
</head>
<body>

	<div class="wrapper">
		
		<!-- nav -->

		@include('frontend.partials.nav')
		@include('frontend.partials.message')
		<!-- end nav -->



		@yield('content')


		

		<!-- end side bar + containt -->

		@include('frontend.partials.footer')

	</div>


	@include('frontend.partials.script')
	@yield('scripts')
</body>
</html>