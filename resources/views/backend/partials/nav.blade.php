  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row admin_sidebar_menu_shadw_top">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <!-- <a class="navbar-brand  logo_size" href="{{route('admin.index')}}">
          <img src="{{asset('images/min.jpg')}}" alt="logo" />
        </a> -->
        <a class="navbar-brand brand-logo-mini" href="{{route('admin.index')}}">
          <img src="{{asset('images/logo-mini.svg')}}" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{route('admin.orders')}}" class="nav-link">Total Orders</a>
          </li>
          <li class="nav-item active">
            <a href="{{route('admin.categories')}}" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Total Categories</a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.brands')}}" class="nav-link">
                <i class="mdi mdi-bookmark-plus-outline"></i>Total Brand</a>
              </li>


              <li class="nav-item">
              <a href="{{route('admin.products')}}" class="nav-link">
                <i class="mdi mdi-bookmark-plus-outline"></i>Total Product</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
            
             
              <li class="nav-item dropdown d-none d-xl-inline-block">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <span class="profile-text">MINHAZ</span>
                  <img class="img-xs rounded-circle" src="{{asset('images/min.jpg')}}" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <a class="dropdown-item p-0">
                    <div class="d-flex border-bottom">
                      <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                      </div>
                      <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                        <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                      </div>
                      <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item mt-2">
                    Manage Accounts
                  </a>
                  <a class="dropdown-item">
                    Change Password
                  </a>
                  <a class="dropdown-item">
                    Check Inbox
                  </a>
                  <a class="dropdown-item" href="">
                    Sign Out
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>