
@extends('backend.layouts.master')


@section('content')


<div class="main-panel">
  <div class="content-wrapper text-center">

      <div class="card card-body">
        <h2>Welcome To Admin Panel</h2>
        <br>
        <br>
        <a href="{!! route('index') !!}" class="btn btn-primary btn-lg" target="_blank">Visitor Main Site</a>
      </div>

      <div class="card card-body mt-2">
          @include('backend.partials.all_record_details')  
      </div>
  </div>
  
  </div>
  <!-- partial -->
  @endsection