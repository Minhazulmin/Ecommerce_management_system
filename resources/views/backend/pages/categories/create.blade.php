
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header head_color_c text-center">
         ADD CATEGORY

          @include('backend.partials.message')
          
      </div>
      <div class="card-body mshadow">

        <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Category name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Parent Category (Optional)</label>
            <select class="form-control" name="parent_id">
              <option value="">Please select a Parent Category</option>
              @foreach($main_categories as $category)

                <option value="{{ $category->id}}">{{$category->name}}</option>

              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="image">Category Image (Optional)</label>
             
                <input type="file" class="form-control" name="image" id="image">
              </div>
            
          
         
          <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- partial -->
@endsection