
@extends('frontend.layouts.master')

@section('content')
<!-- start side bar + containt -->
<div class="clearfix"></div>
<div class="container-fluid margin-top-20 mt-5">
    <div class="row">
        <div class="col-md-4">
            @include('frontend.partials.product-sidebar')
        </div>

        <div class="col-md-8 ">
            <div class="widget mshadow">
                <h3>ALL CATEGORY</h3>
                <hr>
               @include('frontend.pages.categories.partials.all_category')

            </div>
        </div>
    </div>

</div>
@endsection