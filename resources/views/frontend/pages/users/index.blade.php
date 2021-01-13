
@extends('frontend.pages.users.master')

@section('sub-content')
 


<div class="main-panel">
  <div class="content-wrapper">
   @include('Frontend.partials.message')

   <table class="table table-striped table-hover " id="dataTable" >
    <thead>
      <tr>
        <th>NO</th>
        <th>Order ID</th>
        <th>Orderer Name</th>
        <th>Orderer Pnone No</th>
        <th>Order Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td>{{ $order->id }}</td>
        <td>{{ $order->name }}</td>
        <td>{{ $order->phone_no }}</td>
        <td>
         <p>
          @if($order->is_seen_by_admin)
          <button type="button" class="btn btn-success btn-sm">Admin Seen</button>
          @else
          <button type="button" class="btn btn-warning btn-sm">Admin UnSeen</button>
          @endif
        </p>
        <p>
          @if($order->is_completed)
          <button type="button" class="btn btn-success btn-sm">Completed order</button>
          @else
          <button type="button" class="btn btn-warning btn-sm">Not Completed</button>
          @endif
        </p> 
        <p>
          @if($order->is_paid)
          <button type="button" class="btn btn-success btn-sm">Completed Payment</button>
          @else
          <button type="button" class="btn btn-danger btn-sm">Not Completed Payment</button>
          @endif
        </p>
      </td>
    
    </tr>
    @endforeach
  </tbody>

</table>
</div>
</div>
<!-- partial -->
@endsection

