
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
         Edit brand

          @include('backend.partials.message')
          
      </div>
      <div class="card-body">

         <form method="post" action="{{route('admin.brand.update',$brand->id)}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$brand->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description (optional)</label>
            <textarea name="description" rows="8" cols="80" class="form-control">{!! $brand->description !!}</textarea>
          </div>

          <div class="form-group">
            <label for="oldimage">brand old Image</label><br>
            <img src="{!! asset('images/brands/'.$brand->image) !!}" width="100"><br>
             <label for="image">brand New Image (optional)</label>
                <input type="file" class="form-control" name="image" id="image">
              </div>
            
          
         
          <button type="submit" class="btn btn-success">Update brand</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- partial -->
@endsection