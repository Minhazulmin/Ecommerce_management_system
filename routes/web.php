<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', 'Frontend\pagesController@index')->name('index');
Route::get('/contact', 'Frontend\pagesController@contact')->name('contact');

Route::group(['prefix' => 'categories'], function(){
	//category route...............
Route::get('/', 'Frontend\CategoriesController@index')->name('categories');
Route::get('/category/{id}', 'Frontend\CategoriesController@show')->name('categories.show');
});
/*product  routes */

Route::group(['prefix' => 'products'], function(){
Route::get('/', 'Frontend\ProductsController@index')->name('products');
Route::get('/{slug}', 'Frontend\ProductsController@show')->name('products.show');
/* Search function*/
Route::get('/new/search', 'Frontend\pagesController@search')->name('search');
//end search.........

});

//user route
Route::group(['prefix' => 'user'], function(){
Route::get('/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');
Route::get('/dashboard', 'Frontend\UsersController@dashboard')->name('user.dashboard');
Route::get('/profile', 'Frontend\UsersController@profile')->name('user.profile');
Route::post('/profile/update', 'Frontend\UsersController@profileUpdate')->name('user.profile.update');
Route::get('/All_order', 'Frontend\UsersController@index')->name('user.orders');
Route::get('/order', 'Frontend\UsersController@order')->name('user.my_orders');
Route::get('/My_order/{id}', 'Frontend\UsersController@show')->name('user.order.show');
Route::get('/invoice/{id}', 'Frontend\UsersController@generateInvoice')->name('user.order.invoice');
});


//carts route
Route::group(['prefix' => 'carts'], function(){
Route::get('/', 'Frontend\CartsController@index')->name('carts');
Route::post('/store', 'Frontend\CartsController@store')->name('carts.store');
Route::post('/update/{id}', 'Frontend\CartsController@update')->name('carts.update');
Route::post('/delete/{id}', 'Frontend\CartsController@destroy')->name('carts.delete');

});


//checkouts route
Route::group(['prefix' => 'checkout'], function(){
Route::get('/', 'Frontend\CheckoutsController@index')->name('checkouts');
Route::post('/store', 'Frontend\CheckoutsController@store')->name('checkouts.store');

});

//admin route...............................
Route::group(['prefix' => 'admin'], function(){

Route::get('/', 'Backend\PagesController@index')->name('admin.index');
Route::get('/customer_Details', 'Backend\PagesController@customer')->name('admin.customers');
Route::post('/customer/delete/{id}', 'Backend\PagesController@delete')->name('admin.customer.delete');
//admin login route....
Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
Route::post('/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

//password. email send.........
Route::get('/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

//reset password..........
Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');

//product routes .....................

Route::group(['prefix' => '/product'], function(){


	Route::get('/', 'Backend\ProductsController@index')->name('admin.products');
	Route::get('/create', 'Backend\ProductsController@create')->name('admin.product.create');
	Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('admin.product.edit');
	Route::post('/store', 'Backend\ProductsController@store')->name('admin.Product.store');
	Route::post('/product/edit/{id}', 'Backend\ProductsController@update')->name('admin.Product.update');
	Route::post('/product/delete/{id}', 'Backend\ProductsController@delete')->name('admin.Product.delete');


});
//order manage routes .....................

Route::group(['prefix' => '/orders'], function(){


	Route::get('/', 'Backend\OrdersController@index')->name('admin.orders');
	Route::get('/view/{id}', 'Backend\OrdersController@show')->name('admin.order.show');
	Route::post('/delete/{id}', 'Backend\OrdersController@delete')->name('admin.order.delete');
	Route::post('/completed/{id}', 'Backend\OrdersController@completed')->name('admin.order.completed');
	Route::post('/paid/{id}', 'Backend\OrdersController@paid')->name('admin.order.paid');
	Route::post('/charge-update/{id}', 'Backend\OrdersController@chargeUpdate')->name('admin.order.charge');
	Route::get('/invoice/{id}', 'Backend\OrdersController@generateInvoice')->name('admin.order.invoice');
	Route::get('/All_invoice/', 'Backend\OrdersController@allgenerateInvoice')->name('admin.order.all_invoice');
});

//Category routes .....................

Route::group(['prefix' => '/categories'], function(){


	Route::get('/', 'Backend\CategoriesController@index')->name('admin.categories');
	Route::get('/create', 'Backend\CategoriesController@create')->name('admin.category.create');
	Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('admin.category.edit');
	Route::post('/store', 'Backend\CategoriesController@store')->name('admin.category.store');
	Route::post('/categoty/edit/{id}', 'Backend\CategoriesController@update')->name('admin.category.update');
	Route::post('/categoty/delete/{id}', 'Backend\CategoriesController@delete')->name('admin.category.delete');
});


//Brand  routes .....................

Route::group(['prefix' => '/brands'], function(){


	Route::get('/', 'Backend\BrandsController@index')->name('admin.brands');
	Route::get('/create', 'Backend\BrandsController@create')->name('admin.brand.create');
	Route::get('/edit/{id}', 'Backend\BrandsController@edit')->name('admin.brand.edit');
	Route::post('/store', 'Backend\BrandsController@store')->name('admin.brand.store');
	Route::post('/brand/edit/{id}', 'Backend\BrandsController@update')->name('admin.brand.update');
	Route::post('/brand/delete/{id}', 'Backend\BrandsController@delete')->name('admin.brand.delete');
});


//divisions  routes .....................

Route::group(['prefix' => '/divisions'], function(){


	Route::get('/', 'Backend\divisionsController@index')->name('admin.divisions');
	Route::get('/create', 'Backend\divisionsController@create')->name('admin.division.create');
	Route::get('/edit/{id}', 'Backend\divisionsController@edit')->name('admin.division.edit');
	Route::post('/store', 'Backend\divisionsController@store')->name('admin.division.store');
	Route::post('/division/edit/{id}', 'Backend\divisionsController@update')->name('admin.division.update');
	Route::post('/division/delete/{id}', 'Backend\divisionsController@delete')->name('admin.division.delete');
});



//districts  routes .....................

Route::group(['prefix' => '/districts'], function(){


	Route::get('/', 'Backend\districtsController@index')->name('admin.districts');
	Route::get('/create', 'Backend\districtsController@create')->name('admin.district.create');
	Route::get('/edit/{id}', 'Backend\districtsController@edit')->name('admin.district.edit');
	Route::post('/store', 'Backend\districtsController@store')->name('admin.district.store');
	Route::post('/district/edit/{id}', 'Backend\districtsController@update')->name('admin.district.update');
	Route::post('/district/delete/{id}', 'Backend\districtsController@delete')->name('admin.district.delete');
});



//Slider  routes .....................

Route::group(['prefix' => '/sliders'], function(){


	Route::get('/', 'Backend\slidersController@index')->name('admin.sliders');
	Route::post('/store', 'Backend\slidersController@store')->name('admin.slider.store');
	Route::post('/slider/edit/{id}', 'Backend\slidersController@update')->name('admin.slider.update');
	Route::post('/slider/delete/{id}', 'Backend\slidersController@delete')->name('admin.slider.delete');
});


//Payment method  routes .....................

Route::group(['prefix' => '/payment'], function(){

	Route::get('/', 'Backend\Payment_methordController@index')->name('admin.payment');
	Route::post('/payment_methord', 'Backend\Payment_methordController@store')->name('admin.payment_methord.store');
	Route::post('/payment_methord/edit/{id}', 'Backend\Payment_methordController@update')->name('admin.payment_methord.update');
	Route::post('/payment_methord/delete/{id}', 'Backend\Payment_methordController@delete')->name('admin.payment_methord.delete');

});



});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//api route..........

Route::get('get-districts/{id}', function ($id)
{
	return json_encode(App\models\District::where('division_id',$id)->get());
});