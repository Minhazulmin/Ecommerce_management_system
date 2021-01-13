
@extends('frontend.pages.users.master')

@section('sub-content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
       View Order <strong>{{ $order->id }}</strong>
       <a href="{{ route('user.order.invoice', $order->id) }}" class="ml-2 btn  btn-info">Print Invoice</a>

     </div>
     <div class="card-body">
      <h2 class="text-center">Order Information</h2>
      <hr>
      @include('frontend.partials.message')

      <div class="row">
        <div class="col-md-6 border-right">
          <p><strong>Order Name : </strong>{{ $order->name }}</p>
          <p><strong>Order Phone : </strong>{{ $order->phone_no }}</p>
          <p><strong>Order Email : </strong>{{ $order->email }}</p>
          <p><strong>Order Shipping Address : </strong>{{ $order->shipping_address }}</p>
        </div>
        <div class="col-md-6">
          <p><strong>Order Payment Methord : </strong>{{ $order->payment->name}}</p>
          
        </div>

      </div>

      <hr>
      <h2>Order Items</h2>
      <hr>
      <!-- order item -->

      <table class="table table-bordered" id="dataTable">
       <thead>
        <tr>
         <th>Product Title</th>
         <th>Product Image</th>
         <th>Product Quantity</th>
         <th>unit Price</th>
         <th>Sub Total Price</th>
        
       </tr>
     </thead>
     <tbody>
      @php
      $total_price = 0;
      @endphp
      @foreach($order->carts as $cart)
      <tr>

       <td><a href="{{route('products.show', $cart->product->slug)}}">{{$cart->product->title}}</a></td>

       <td>
         @if($cart->product->images->count() > 0)

         <img src="{{asset('images/products/'.$cart->product->images->first()->image)}}" width="70px">

         @endif
       </td>

       <td>
        <form class="form-inline" action="{{route('carts.update',$cart->id)}}" method="post">
         @csrf

         <input type="number" name="product_quantity" class="form-control" value="{{ $cart->product_quantity }}">
        
       </form>
     </td>
     <td>{{ $cart->product->price }} Taka</td>
     @php
     $total_price += $cart->product->price * $cart->product_quantity;
     @endphp
     <td>{{ $cart->product->price * $cart->product_quantity }}</td>
 </tr>
 @endforeach
 <tr>
   <td colspan="3"></td>
   <td >Total Amount</td>
   <td colspan="2"><strong>= {{ $total_price }} (TK Only)</strong></td>

 </tr>
</tbody>

</table>

<hr>




</div>

</div>
</div>
</div>
<!-- partial -->


@endsection

<script type="text/javascript">
    
    $(document).ready(function() {
    $('#dataTable').DataTable();
} );
  </script>