
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
         ADD Division

          @include('backend.partials.message')
          
      </div>
      <div class="card-body">

        <form method="post" action="{{route('admin.division.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Division name">
          </div>

          <div class="form-group">
            <label for="priority">Priority</label>
            <input type="text" class="form-control" name="priority" id="priority" aria-describedby="emailHelp" placeholder="priority">
          </div>
          <button type="submit" class="btn btn-primary">Add Division</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- partial -->
@endsection