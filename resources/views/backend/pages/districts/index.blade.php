
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header head_color_dis text-center">
       MANAGE District

     </div>
     <div class="card-body">
        
       @include('backend.partials.message')

      <table class="table table-striped table-hover mshadow" id="dataTable">
        <thead>
           <tr>
              <th>ID</th>
              <th>District Name</th>
              <th>Division Name</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
         
            @foreach($districts as $district)
            <tr>
              <td>{{ $district->id }}</td>
               <td>{{ $district->name }}</td>
               <td>{{ $district->division->name }}</td>
              
              <td>
                <a href="{{route('admin.district.edit', $district->id) }}" class="btn btn-success">Edit</a>
                <a href="#deleteModal{{$district->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-o mr-0 text-white"></i></a>

                <!-- delete Modal -->
                <div class="modal fade" id="deleteModal{{ $district->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure to Delete ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{!! route('admin.district.delete',$district->id) !!}" method="post" >
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