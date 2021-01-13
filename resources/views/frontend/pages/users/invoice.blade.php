<!DOCTYPE html>
<html>
<head>
  <title>{{ $order->id }}</title>
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

  <style>
    .content-wrapper{
      background-color: #FFF;
    }
    .invoice-header{
      background-color:#F7F7F7;
      padding: 0px 20px 0px 20px;
      border-bottom: 5px solid #FFF;
      border-left: 6px solid  orangered;
     border-right: 6px solid  orangered;
    }
 .invoice-description{
    padding: 0px 20px 0px 20px;
    background-color: ghostwhite;
    color: darkslategray;
     border-left: 6px solid orange;
     border-right: 6px solid orange;
    }
    .h3, h3 {
    font-size: 1.56rem;
    color: darkorange;
}
.table.table-bordered thead {
    border: 1px solid #f2f2f2;
    border-bottom: none; 
    background-color: darkorange;
}

tr {
    border: 2px solid orange!important;
}
td{
    border: 2px solid orange!important;
}


  </style>

</head>
<body>
  <div class="content-wrapper">
    <div class="invoice-header">
      <div class="float-left site-logo">
        <img src="{{ asset('images/easyshop.png')}}">
      </div>
      <div class="float-right site-address">
        <h3>Easy Shop</h3>
        <p>House-54,Road-11,sector-10</p>
        <p>Phone:01751337061</p>
        <p><a href="minhazul234@gmail.com">easyshop@gmail.com</a></p>
      </div>
      <div class="clearfix"></div>
      </div>
      <div class="invoice-description">
        <div class="invoice-left-top float-left">
          <h3>Invoice to</h3>
          <h3>{{ $order->name }}</h3>
          <div class="address">
            <p><strong>Address - </strong>{{ $order->shipping_address }}</p>
            <p>Phone - {{ $order->phone_no }}</p>
            <p>Email - <a href="mailto:{{ $order->email }}">{{ $order->email }}</a></p>
          </div>
        </div>
        <div class="invoice-right-top float-right">
          <h3>Invoice - {{ $order->id }}</h3>
          <p>
            {{ $order->created_at }}
          </p>
        </div>
        <div class="clearfix"></div>
      </div>
    
     <div class="">
      <h3 class="text-center">Products</h2>
      <!-- order item -->
      <table class="table table-bordered">
       <thead>
        <tr>
          <th>No</th>
         <th>Product Title</th>
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
       <td>{{$loop->index+1}}</td>
       <td>{{$cart->product->title}}</td>
       <td>{{$cart->product_quantity}}</td>
       <td>{{ $cart->product->price }} Taka</td>
       @php
       $total_price += $cart->product->price * $cart->product_quantity;
       @endphp
       <td>{{ $cart->product->price * $cart->product_quantity }}</td>
   </tr>
   @endforeach
   
   <tr>
     <td colspan="3"></td>
     <td >Total Product Price</td>
     <td colspan="2"><strong>= {{ $total_price }} (TK Only)</strong></td>
   </tr>

   <tr>
     <td colspan="3"></td>
     <td >Discount</td>
     <td colspan="2"><strong>= {{ $order->custom_discount }} (TK Only)</strong></td>
   </tr>


   <tr>
     <td colspan="3"></td>
     <td >shipping Cost</td>
     <td colspan="2"><strong>= {{ $order->shipping_charge }} (TK Only)</strong></td>
   </tr>

   <tr>
     <td colspan="3"></td>
     <td >Total Amount</td>
     <td colspan="2"><strong>= {{ $total_price + $order->shipping_charge - $order->custom_discount }} (TK Only)</strong></td>
   </tr>
 </tbody>
</table>
<hr>
</div>

<h3>Thank's For Buying Our Product.....</h3>
</div>
</body>
</html>