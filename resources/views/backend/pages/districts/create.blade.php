
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
         ADD District

          @include('backend.partials.message')
          
      </div>
      <div class="card-body">

        <form method="post" action="{{route('admin.district.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="District name">
          </div>


          <div class="form-group">
            <label for="division_id">Select a Devision for District</label>
            <select class="form-control" name="division_id">
            <option value="">Select a Devision for District</option>

            @foreach($divisions as $division)
              <option value="{{ $division->id }}">{{ $division->name }}</option>

            @endforeach
           </select>
          </div>
         
            
          
         
          <button type="submit" class="btn btn-primary">Add District</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- partial -->
@endsection