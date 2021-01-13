
<nav class="sidebar sidebar-offcanvas admin_sidebar_menu admin_sidebar_menu_shadw" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{asset('images/min.jpg')}}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">MINHAZ</p>
            <div>
              <small class="designation text-muted">ADMIN</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.index')}}">
       <img src="{{asset('images/menu_logo/desktop.png')}}" class="menu-icon-admin">
        <span class="menu-title">Dashboard</span>
      </a>
    </li>



  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#payment-pages" aria-expanded="false" aria-controls="auth7">
       <img src="{{asset('images/menu_logo/customer.png')}}" class="menu-icon-admin">
       <span class="menu-title">Manage Customer</span>
     </a>
     <div class="collapse" id="payment-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.customers')}}">See Customer</a>
         
        </li>
      </ul>
    </div>
  </li>



    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <img src="{{asset('images/menu_logo/manage_product.png')}}" class="menu-icon-admin">
        <span class="menu-title">Manage Products</span>
         
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.products')}}">Manage Products </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.product.create')}}">Create Products </a>
          </li>
        </ul>
      </div>
     
    </li>


    <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#Order_pages" aria-expanded="false" aria-controls="Order_pages">
        <img src="{{asset('images/menu_logo/orders.png')}}" class="menu-icon-admin">
        <span class="menu-title">Manage Orders</span>
         
      </a>
      <div class="collapse" id="Order_pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.orders')}}">Manage Order </a>
          </li>
          
        </ul>
      </div>
     
    </li>



    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="auth2">
       <img src="{{asset('images/menu_logo/manage_category.jpg')}}" class="menu-icon-admin">
        <span class="menu-title">Manage Categories</span>
        
      </a>
      <div class="collapse" id="category-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories')}}">Manage Category </a>
            <a class="nav-link" href="{{route('admin.category.create')}}">Add Category </a>
          </li>
        </ul>
      </div>
     
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="auth3">
       <img src="{{asset('images/menu_logo/brand.png')}}" class="menu-icon-admin">
       <span class="menu-title">Manage Brand</span>
     </a>
     <div class="collapse" id="brand-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.brands')}}">Manage Brand </a>
          <a class="nav-link" href="{{route('admin.brand.create')}}">Add Brand </a>
        </li>
      </ul>
    </div>
  </li>


<li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="auth4">
       <img src="{{asset('images/menu_logo/division.png')}}" class="menu-icon-admin">
       <span class="menu-title">Manage Division</span>
     </a>
     <div class="collapse" id="division-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.divisions')}}">Manage Division </a>
          <a class="nav-link" href="{{route('admin.division.create')}}">Add Division </a>
        </li>
      </ul>
    </div>
  </li>


  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="auth5">
       <img src="{{asset('images/menu_logo/district.png')}}" class="menu-icon-admin">
       <span class="menu-title">Manage District</span>
     </a>
     <div class="collapse" id="district-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.districts')}}">Manage District </a>
          <a class="nav-link" href="{{route('admin.district.create')}}">Add District </a>
        </li>
      </ul>
    </div>
  </li>





  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sliders-pages" aria-expanded="false" aria-controls="auth5">
       <img src="{{asset('images/menu_logo/slider.png')}}" class="menu-icon-admin">
       <span class="menu-title">Manage Slider</span>
     </a>
     <div class="collapse" id="sliders-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.sliders')}}">Manage Slider </a>
         
        </li>
      </ul>
    </div>
  </li>




  <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#payment-pages" aria-expanded="false" aria-controls="auth7">
       <img src="{{asset('images/menu_logo/payment_methord.png')}}" class="menu-icon-admin">
       <span class="menu-title">payment methord</span>
     </a>
     <div class="collapse" id="payment-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.payment')}}">Manage pay methord </a>
         
        </li>
      </ul>
    </div>
  </li>


 <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#report-pages" aria-expanded="false" aria-controls="auth7">
       <img src="{{asset('images/menu_logo/payment_methord.png')}}" class="menu-icon-admin">
       <span class="menu-title">Report</span>
     </a>
     <div class="collapse" id="report-pages">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.order.all_invoice')}}">Report by ALL order </a>
         
        </li>
      </ul>
    </div>
  </li>


 <li class="nav-item text-center">
  <a href="{{route('admin.login')}}">
  <form class="form-control" method="post" action="{{ route('admin.logout') }}">
    @csrf
  <input type="submit" name="" value="Logout Now" class="btn btn-danger">
  </form>
  </a>
 </li>


  </ul>
</nav>