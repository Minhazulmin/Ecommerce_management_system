@extends('frontend.pages.users.master')

@section('sub-content')

<div class="container margin-top-20 text-center">
    <h2>Welcome <span class="badge badge-info">{{ $user->first_name .''. $user->last_name }}</span></h2>

<p>You Can Change your Profile and  All kinds of Information</p>

<div class="row">
	<div class="col-md-4 ">
		<div class="card card-body mt-2 pointer btn btn-light" onclick="location.href='{{ route('user.my_orders') }}'">
			<h4>My Orders</h4>
	
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-body mt-2 pointer btn btn-success" onclick="location.href='{{ route('user.orders') }}'">
			<h4>Orders Status</h4>
	
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-body mt-2 pointer btn btn-danger" onclick="location.href='{{ route('user.profile') }}'">
			<h4>Update Profile</h4>
	
		</div>
	</div>
</div>


</div>



@endsection