
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
       View Order <strong>{{ $order->id }}</strong>

     </div>
     <div class="card-body">
      <h2 class="text-center">Order Information</h2>
      <hr>
      @include('backend.partials.message')

      <div class="row">
        <div class="col-md-6 border-right">
          <p><strong>Order Name : </strong>{{ $order->name }}</p>
          <p><strong>Order Phone : </strong>{{ $order->phone_no }}</p>
          <p><strong>Order Email : </strong>{{ $order->email }}</p>
          <p><strong>Order Shipping Address : </strong>{{ $order->shipping_address }}</p>
        </div>
        <div class="col-md-6">
          <p><strong>Order Payment Methord : </strong>{{ $order->payment->name}}</p>
          <p><strong>Order Payment Transaction ID : </strong>{{ $order->transaction_id}}</p>
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
         <th>Delete</th>
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
         <button type="submit" class="btn btn-success ml-2">Update</button>
       </form>
     </td>
     <td>{{ $cart->product->price }} Taka</td>
     @php
     $total_price += $cart->product->price * $cart->product_quantity;
     @endphp
     <td>{{ $cart->product->price * $cart->product_quantity }}</td>

     <td>
      <form class="form-inline" action="{{route('carts.delete',$cart->id)}}" method="post">
       @csrf

       <input type="hidden" name="cart_id" >
       <button type="submit" class="btn btn-danger">Delete</button>
     </form>
   </td>
 </tr>
 @endforeach
 <tr>
   <td colspan="4"></td>
   <td >Total Amount</td>
   <td colspan="2"><strong>= {{ $total_price }} (TK Only)</strong></td>

 </tr>
</tbody>

</table>


<hr>
<form method="post" action="{{route('admin.order.charge',$order->id)}}" class="form-horizontal" >
  @csrf
  <h3 class="text-center">Discount and Shipping Cost</h3>
  <hr>
  <div class="form-group">
   
    <label for="shipping_charge">Shipping Charge</label>
     <input type="number" class="form-control" name="shipping_charge" id="shipping_charge" value="{{ $order->shipping_charge }}">
     <br>
  </div>
  <div class="form-group">
     <label for="custom_discount">Custom Discount</label>
     <input type="number" class="form-control" name="custom_discount" id="custom_discount" value="{{ $order->custom_discount }}">
     <br>
   </div>

  <input type="submit" name="" class="btn btn-success" value="Update">
  <a href="{{ route('admin.order.invoice', $order->id) }}" class="ml-2 btn  btn-info">Generate Invoice</a>
  

</form>

<hr>


<form method="post" action="{{route('admin.order.completed',$order->id)}}" style="display: inline-block!important;">
  @csrf

  @if($order->is_completed)
  <input type="submit" name="" class="btn btn-danger" value="cancel Order">
  @else
  <input type="submit" name="" class="btn btn-success" value="Complete Order">
  @endif

</form>


<form method="post" action="{{route('admin.order.paid',$order->id)}}" style="display: inline-block!important;">
  @csrf

  @if($order->is_paid)
  <input type="submit" name="" class="btn btn-danger" value="cancel payment">
  @else
  <input type="submit" name="" class="btn btn-success" value="Paid Order">
  @endif

</form>



</div>

</div>
</div>
</div>
<!-- partial -->
@endsection