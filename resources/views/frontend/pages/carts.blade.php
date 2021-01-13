@extends('frontend.layouts.master')

@section('content')

<div class="container margin-top-20 mb-2">
  <div class="card product_cart mshadow mb-3">
    <h2 class="text-center">YOUR ALL CART PRODUCT </h2>
  </div>
    
  
        <table class="table table-bordered mshadow">
           <thead>
              <tr>
                 <th>No</th>
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
          @foreach(App\models\Cart::totalCarts() as $cart)
          <tr>
             <td>{{$loop->index+1}}</td>

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
            <tr>
               <td colspan="5"></td>
             <td > 
              <a href="{{ route('products') }}" class="btn btn-success">Continue Shopping..</a></td>
             <td colspan="1">
              <a href="{{ route('checkouts') }}" class="btn btn-primary">Pay Bill</a>
            </td>
             
            </tr>
            </tbody>

            
            <div class="float-right">
             
             
            </div>
            </table>
     
</div>

@endsection