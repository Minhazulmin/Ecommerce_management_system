@extends('frontend.layouts.master')

@section('content')

<div class="container margin-top-20">

	<div class="card card-body mshadow">
		
		<h3 class="text-center">CONFORM--ITEMS</h3>
		<hr>
		<div class="row">
			<div class="col-md-6 border-right">
				
				@foreach(App\models\Cart::totalCarts() as $cart)

				<p>
					{{ $cart->product->title }} -
					<strong>{{ $cart->product->price }} TK </strong>
					<strong class="badge badge-warning">{{ $cart->product_quantity }} Items</strong>
				</p>

				@endforeach
			</div>
			<div class="col-md-6 ">
				
				@php
				$total_price = 0;
				@endphp

				@foreach(App\models\Cart::totalCarts() as $cart)
				@php
				$total_price += $cart->product->price * $cart->product_quantity;
				@endphp

				@endforeach
				
				<p>Total Price = <strong>{{ $total_price }} TK</strong></p>
				<p>Total Price With Shipping Cost = <strong>{{ $total_price + App\models\setting::first()->shipping_cost }} TK</strong></p>
			</div>
		</div>
		<p class="text-center">
			<button class="btn btn-warning white"><a href="{{ route('carts') }}" class="white">Change Cart Items</a></button>
		</p>
	</div>


	<!-- shippin address -->


	<div class="card card-body mt-5 mshadow">
		<h2>Shipping Address</h2>
		<hr>
		<form method="POST" action="{{ route('checkouts.store') }}">
			@csrf

			<div class="form-group row">
				<label for="name" class="col-md-4 col-form-label text-md-right">Receiver Name</label>

				<div class="col-md-6">
					<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::check() ? Auth::user()->first_name.' '.Auth::user()->last_name : '' }}" required autofocus>

					@if ($errors->has('name'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>
			</div>


			<div class="form-group row">
				<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}" required>

					@if ($errors->has('email'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone No</label>

				<div class="col-md-6">
					<input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ Auth::check() ? Auth::user()->phone_no : '' }}" required>

					@if ($errors->has('phone_no'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('phone_no') }}</strong>
					</span>
					@endif
				</div>
			</div>




			<div class="form-group row">
				<label for="phone_no" class="col-md-4 col-form-label text-md-right">Total Price With Shipping Cost</label>

				<div class="col-md-6">
					<input id="total_price" type="text" class="form-control{{ $errors->has('total_price') ? ' is-invalid' : '' }}" name="total_price" value="{{ $total_price + App\models\setting::first()->shipping_cost }}" required>

					@if ($errors->has('total_price'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('total_price') }}</strong>
					</span>
					@endif
				</div>
			</div>
			
			<div class="form-group row">
				<label for="message" class="col-md-4 col-form-label text-md-right">Message(optional)</label>

				<div class="col-md-6">
					<textarea id="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="2" name="message" ></textarea>

					@if ($errors->has('message'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('message') }}</strong>
					</span>
					@endif
				</div>
			</div>



			<div class="form-group row">
				<label for="shipping_address" class="col-md-4 col-form-label text-md-right">Shipping Address(*)</label>

				<div class="col-md-6">
					<textarea id="shipping_address" class="form-control{{ $errors->has('shipping_address') ? ' is-invalid' : '' }}" rows="2" name="shipping_address" required>{{ Auth::check() ? Auth::user()->shipping_address : '' }}</textarea>

					@if ($errors->has('shipping_address'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('shipping_address') }}</strong>
					</span>
					@endif
				</div>
			</div>



			<div class="form-group row">
				<label for="payment_methord" class="col-md-4 col-form-label text-md-right">Payment Methord</label>

				<div class="col-md-6">

					<select class="form-control" name="payment_methord_id" id="payments" required>
						<option class="" value="">Select your Payment Methord</option>

						@foreach($payments as $payment)
						<option value="{{ $payment->short_name }}">{{ $payment->name }}</option>
						@endforeach
					</select>


					@foreach($payments as $payment)
					

					@if($payment->short_name == "cash_in")

					<div class="hidden" id="payment_{{ $payment->short_name }}" >
						<div class="card card-body text-center mshadow">
							<h3>
								<hr>
								Just click Order for Finish your Shopping.
								<hr>
								<img src="{{ asset('images/Transaction/'.$payment->image) }}" width="400"class="payment_img">
								<hr>
								<small>you will get your product very soon...</small>
								<hr>
							</h3>
						</div>
					</div>
					@else

					<div class="hidden" id="payment_{{ $payment->short_name }}" >
					<div class="card card-body text-center mshadow">

						<h3>{{ $payment->name}} Payment</h3>
						<p>
							<strong>{{ $payment->name}} NO -  {{ $payment->no}}</strong>
							<br>
							<strong>Account Type - {{ $payment->type}}</strong>
							<hr>
							
								<img src="{{ asset('images/Transaction/'.$payment->image) }}" width="400" class="payment_img">
								<hr>
						
						</p>



						<div class="alert alert-success">
							Please send the money to this number and Write Your Transection code below there.
						</div>

					</div>
				</div>
					@endif
					@endforeach	
					
					<input type="text" class="hidden" name="transaction_id" id="transaction_"  placeholder="Transection ID">
				</div>
			</div>

			<div class="form-group row mb-5">
				<div class="col-md-6 offset-md-4">
					<button type="submit" class=" text-center btn btn-primary">
						Order Now
					</button>
				</div>
			</div>
		</form>
	</div>

</div>


@endsection


@section('scripts')

<script type="text/javascript">

	
	

	$("#payments").change(function () {
		$payment_methord = $("#payments").val();
		if ($payment_methord == "cash_in") {
			$("#payment_cash_in").removeClass('hidden');
			$("#payment_rockect").addClass('hidden');
			$("#payment_bkash").addClass('hidden');
			$("#payment_ucash").addClass('hidden');
		}else if ($payment_methord == "bkash") {
			$("#payment_bkash").removeClass('hidden');
			$("#payment_rockect").addClass('hidden');
			$("#payment_cash_in").addClass('hidden');
			$("#payment_ucash").addClass('hidden');
			$("#transaction_").removeClass('hidden');
		}else if ($payment_methord == "rockect") {
			$("#payment_rockect").removeClass('hidden');
			$("#payment_bkash").addClass('hidden');
			$("#payment_cash_in").addClass('hidden');
			$("#payment_ucash").addClass('hidden');
			$("#transaction_").removeClass('hidden');
		}
		else if ($payment_methord == "ucash") {
			$("#payment_ucash").removeClass('hidden');
			$("#payment_rockect").addClass('hidden');
			$("#payment_bkash").addClass('hidden');
			$("#payment_cash_in").addClass('hidden');
			$("#transaction_").removeClass('hidden');
		}
		
	})
</script>


@endsection