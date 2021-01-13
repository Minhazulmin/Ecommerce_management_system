
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header head_color_b text-center">
      ALL CUSTOMER

     </div>
     <div class="card-body">

       @include('backend.partials.message')

       <table class="table table-hover table-striped mshadow" id="dataTable">
        <thead>
          <tr>

            <th>ID</th>
            <th>User Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Street </th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <td>{{($customer->id)}}</td>
            <td>{{($customer->username)}}</td>
            <td>{{($customer->phone_no)}}</td>
            <td>{{($customer->email)}}</td>
            <td>{{($customer->street_address)}}</td>
            <td>{{($customer->shipping_address)}}</td>
            <td>
              <a href="#deleteModal{{$customer->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

              <!-- delete Modal -->
              <div class="modal fade" id="deleteModal{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are you sure to Delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{!! route('admin.customer.delete',$customer->id) !!}" method="post" >
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-danger">Parmanent Delete</button>
                      </form>



                    </div>
                    <div class="modal-footer">

                      <button type="button" class="btn btn-primary">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach  
        </tbody>
      </table>
    </div>

  </div>
</div>
</div>
<!-- partial -->
@endsection