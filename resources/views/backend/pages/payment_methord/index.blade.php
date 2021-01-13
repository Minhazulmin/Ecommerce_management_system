@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header text-center head_color_pay">
          MANAGE PAYMENT METHORD
        </div>
        <div class="card-body ">
            @include('backend.partials.message')

            <a href="#addSliderModal" data-toggle="modal" class="btn btn-info float-right mb-2">
              <i class="fa fa-plus"></i> Add New payment methord
            </a>
            <div class="clearfix"></div>
            
            <!-- Add Modal -->
            <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Payment methord</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form action="{!! route('admin.payment_methord.store') !!}"  method="post" enctype="multipart/form-data">

                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Name<small class="text-danger">(required)</small></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
                      </div>

                      <div class="form-group">
                        <label for="image">Payment methord Image <small class="text-danger">(required)</small></label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="payment Image" required>
                      </div>


                      <div class="form-group">
                        <label for="priority">Payment Priority <small class="text-info">(required)</small></label>
                        <input type="number" class="form-control" name="priority" id="priority" placeholder=" Priority; e.g: 10"  >
                      </div>

                      <div class="form-group">
                        <label for="short_name">Payment Short name<small class="text-info">(required)</small></label>
                        <input type="text" class="form-control" name="short_name" id="short_name" placeholder="short_name" >
                      </div>

                      <div class="form-group">
                        <label for="no">Payment number <small class="text-info">()</small></label>
                        <input type="text" class="form-control" name="no" id="no" placeholder="Number">
                      </div>


                       <div class="form-group">
                        <label for="type">payment type <small class="text-info">()</small></label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="account type">
                      </div>

                      

                      <button type="submit" class="btn btn-success">Add payment Methord</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </form>

                  </div>
                </div>
              </div>
            </div>


          <table class="table table-hover table-striped mshadow">
            <tr>
          
              <th>Name</th>
              <th>Image</th>
              <th> Priority</th>
              <th> short name</th>
              <th>Payment number</th>
              <th>Account type</th>
              <th>Action</th>
            </tr>

            @foreach ($payments as $payment)
              <tr>
                <td>{{ $payment->name }}</td>
                <td>
                  <img src="{{ asset('images/Transaction/'.$payment->image) }}" width="40">
                </td>
                <td>{{ $payment->priority }}</td>
                <td>{{ $payment->short_name }}</td>
                <td>{{ $payment->no }}</td>
                <td>{{ $payment->type }}</td>

                <td>
                  <a href="#editModal{{ $payment->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $payment->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-o mr-0 text-white"></i></a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.payment_methord.delete', $payment->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Edit Modal -->
                  <div class="modal fade" id="editModal{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to Edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.payment_methord.update', $payment->id) !!}"  method="post" enctype="multipart/form-data">

                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="name">name <small class="text-danger">(required)</small></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder=" name" required value="{{ $payment->name }}">
                          </div>

                          <div class="form-group">
                            <label for="image"> Image 
                              <a href="{{ asset('images/Transaction/'.$payment->image) }}" target="_blank">
                                Previous Image
                              </a>

                              <small class="text-danger">(required)</small></label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=" Image">
                          </div>



                           <div class="form-group">
                            <label for="priority"> Priority <small class="text-info">(required)</small></label>
                            <input type="number" class="form-control" name="priority" id="priority"    value="{{ $payment->priority }}">
                          </div>

                          <div class="form-group">
                            <label for="short_name">Short name <small class="text-info">(optional)</small></label>
                            <input type="text" class="form-control" name="short_name" id="short_name"  value="{{ $payment->short_name }}">
                          </div>

                          <div class="form-group">
                            <label for="no">number <small class="text-info">(optional)</small></label>
                            <input type="text" class="form-control" name="no" id="no"  value="{{ $payment->no }}">
                          </div>
                          <div class="form-group">
                            <label for="type">type <small class="text-info">(optional)</small></label>
                            <input type="text" class="form-control" name="type" id="type"  value="{{ $payment->type }}">
                          </div>

                         

                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </form>
                        </div>
                      </div>
                    </div>
                  </div>


                </td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
