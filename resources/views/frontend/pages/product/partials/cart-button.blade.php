<form class="form-inline" action="{{ route('carts.store') }}" method="post" >
	
@csrf

<input type="hidden" name="product_id" value="{{ $product->id }}">
<button type="button" class="btn btn-warning button_cart " onclick="AddToCart({{ $product->id }})"><i class="fa fa-shopping-cart" style="color: red;"></i>Add to Cart</button>
</form>