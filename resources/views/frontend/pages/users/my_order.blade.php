
@extends('frontend.pages.users.master')

@section('sub-content')
 


<div class="main-panel">
  <div class="content-wrapper">
   @include('Frontend.partials.message')

   <table class="table table-striped table-hover " id="dataTable" >
    <thead>
      <tr>
        <th>NO</th>
        <th>Orderer Name</th>
        <th>Orderer Pnone No</th>
        <th>Check Order</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td>{{ $order->name }}</td>
        <td>{{ $order->phone_no }}</td>
        <td> <a href="{{route( 'user.order.show',$order->id )}}" class=" btn btn-success btn-sm">View Order - {{ $order->id }}</a></td>

    
    </tr>
    @endforeach
  </tbody>

</table>
</div>
</div>
<!-- partial -->
@endsection

