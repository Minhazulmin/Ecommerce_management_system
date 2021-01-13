@if ($errors->any())
    <div class="alert alert-danger">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('product_create_success'))
<div class="alert alert-success">
	
	<p>{{ Session::get('product_create_success') }}</p>

</div>

@endif


@if (Session::has('success'))
<div class="container">
    <div class="row justify-content-center">
        
<div class="alert alert-success">
	
	<p>{{ Session::get('success') }}</p>


</div>
</div>
</div>

@endif


@if (Session::has('my_errors'))
<div class="container">
    <div class="row justify-content-center">
        
<div class="alert alert-danger">
    
    <p>{{ Session::get('my_errors') }}</p>

</div>

</div>
</div>

@endif