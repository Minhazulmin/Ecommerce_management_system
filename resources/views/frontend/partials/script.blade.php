<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>




<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>



<script>

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	function AddToCart(product_id) {
		$.post( "http://localhost/Ecommarce/public/api/carts/store",
		 { 

		 	product_id: product_id

		  })
		  .done(function( data ) {
		  	data = JSON.parse(data);
		    if (data.status == 'success') {

		    	alertify.set('notifier','position', 'top-center');
 				alertify.success('Items Add To Cart Successfully.Total Items - '+data.totalItems+'<br/>Check Your Product <br/><hr><a href="{{ route('carts') }}">Product List</a>');
		    	$("#totalItems").html(data.totalItems);
		    }
  });
	}
</script>


<script src="{{asset('js/datatables.min.js')}}"></script>

 <script type="text/javascript">
    
    $(document).ready(function() {
    $('#dataTable').DataTable();
} );
  </script>