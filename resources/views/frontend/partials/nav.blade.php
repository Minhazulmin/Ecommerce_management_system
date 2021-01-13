
@include('frontend.partials.styles')
<!--  navigration -->
<nav class="navbar navbar-expand-lg navbar-light bg-light-own ">
	<div class="container ">


		<a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('images/logo_medium.png') }}" style="height: 75px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse bottom" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto menu_top_below">

       <li class="nav-item  ml-2 ">
          <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
            <div class="input-group mb-3 menu_search">
              <input type="text" class="form-control" name="search" placeholder="Search...." aria-label="Recipient's username" aria-describedby="basic-addon2">
              
            </div>
          </form>
        </li>


				<li class="nav-item active menu_font mt-1">
					<a class="nav-link" href="{{route('index')}}"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item menu_font mt-1">
					<a class="nav-link" href="{{route('products')}}"><i class="fab fa-product-hunt"></i>Products</a>
				</li>
				<li class="nav-item menu_font mt-1">
					<a class="nav-link" href="{{route('contact')}}"><i class="fa fa-address-book"></i>Contact</a>
				</li>

				
			</ul>





<div class="dropdown-menu-right mshadow" style="top:40%;position: fixed;">
        <li class="nav-item">
            <div class="cart">
               <a class="" href="{{ route('carts') }}">
                
                    <img src="{{asset('images\cart_icon\cart.jpg')}}" class="user_image_size_cart">
              
              <hr style="padding: 0px!important;margin:0px!important;">
                    <span class="badge badge-danger" id="totalItems" style="background-color:black; ">
                     {{ App\models\Cart::totalItems() }} - Items
                    </span>
                     <hr style="padding: 0px!important;margin:0px!important;">
                     <span class="badge badge-danger" id="" style="background-color:black; ">

                        @php
                          $total_price = 0;
                        @endphp

                         @foreach(App\models\Cart::totalCarts() as $cart)
                      @php
                       $total_price += $cart->product->price * $cart->product_quantity;
                      
                       @endphp
                           
                       @endforeach
                    ৳ - {{ $total_price }}
                      
                    </span>
                  

                 </a>
            </div>
        </li>
      
    </div>


			<ul class="navbar-nav ml-auto">
				
				 @guest
                        <li class="nav-item mt-2 menu_font">
                  <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i>{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item mt-2 menu_font">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-users"></i>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <img src="" {{ Auth::user()->avatar }}>
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    {{ Auth::user()->username }}  <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle user_image_size" > <span class="caret"></span>
                                </a>
                            

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">



                              	  <a class="dropdown-item" href="{{ route('user.dashboard') }}">
                                        {{ __('My Dashboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

			</ul>

		</div>
	</div>
</nav>


   <div class="socal_bar" style="top:67%;position: fixed;">
        <a href="https://www.facebook.com/minit61"><img src="{{asset('images/socal_icon/fb.png')}}" class="socal"></a>
        <a href="https://twitter.com/minit61"><img src="{{asset('images/socal_icon/tw.png')}}" class="socal"></a>
        <a href="https://www.youtube.com/channel/UCR4ZWct9Rwe8KkHQznLtb_w"><img src="{{asset('images/socal_icon/yt.png')}}" class="socal"></a>
        <a href="https://www.linkedin.com/in/minit61"><img src="{{asset('images/socal_icon/ld.png')}}" class="socal"></a>
    </div>
   
