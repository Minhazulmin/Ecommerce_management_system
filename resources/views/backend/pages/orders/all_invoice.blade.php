<!DOCTYPE html>
<html>
<head>
  <title>ALL ORDERS</title>
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
     
    
     <div class="">
      <h3 class="text-center">Products</h2>
      <!-- order item -->
 <table class="table table-striped " >
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Pnone No</th>
            <th>Amount</th>
            <th>Order Date</th>



          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
          <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->phone_no }}</td>
            <td>{{ $order->total_price }}</td>
            <td>{{ $order->created_at }}</td>
        
        </tr>
        @endforeach
        
      </tbody>
     
    </table>

     <hr>
</div>

<h3>Thank's For Buying Our Product.....</h3>
</div>
</body>
</html>