
<?php  use App\models\Product;  ?>


      <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card all_short_details2" >
              <div class="card card-statistics">
                <div class="card-body all_short_details">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="{{asset('images/Dashboard_icon/tk.png')}}" class="Dash-icon-admin">
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Revenue</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">৳-

                        127800</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card all_short_details2">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="{{asset('images/Dashboard_icon/order.jpg')}}" class="Dash-icon-admin">
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Orders</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$order}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card all_short_details2">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="{{asset('images/Dashboard_icon/customer.jpg')}}" class="Dash-icon-admin">
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Customer</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          {{$users}}
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> All Customer
                  </p>
                </div>
              </div>
            </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card all_short_details2">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="{{asset('images/Dashboard_icon/brands.png')}}" class="Dash-icon-admin">
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Brands</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$brand}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> All Brands
                  </p>
                </div>
              </div>
            </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card all_short_details2">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="{{asset('images/Dashboard_icon/category.webp')}}" class="Dash-icon-admin">
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Category</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"> {{ $category }}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product Category
                  </p>
                </div>
              </div>
            </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card all_short_details2">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="{{asset('images/Dashboard_icon/product.jpg')}}" class="Dash-icon-admin">
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Products</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$product}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product
                  </p>
                </div>
              </div>
            </div>
         
  
          </div>




