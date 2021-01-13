@extends('frontend.layouts.master')

@section('content')

<div class="container-fluid margin-top-20 ">
   
<div class="row">
	<div class="col-md-4 ">
		<div class="list-group mshadow">
			<a href="" class="list-group-item">
				<img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" width="100px">
			</a>
			<a href="{{ route('user.dashboard') }}" class="list-group-item {{ Route::is('user.dashboard') ? 'active':'' }}">Dashboard</a>
			
			<a href="{{ route('user.my_orders') }}" class="list-group-item {{ Route::is('user.my_orders') ? 'active':'' }}"> My Orders</a>

			<a href="{{ route('user.orders') }}" class="list-group-item {{ Route::is('user.orders') ? 'active':'' }}">Orders Status</a>

			<a href="{{ route('user.profile') }}" class="list-group-item {{ Route::is('user.profile') ? 'active':'' }}">Update Profile</a>
			
		</div>
		
	</div>

	<div class="col-md-8">
		<div class="card card-body mshadow">
		@yield('sub-content')
		
		</div>
	</div>

</div>

</div>



@endsection