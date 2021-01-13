<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\User;
use App\models\Order;
use App\models\Product;
use App\models\Category;
use App\models\Brand;
use App\models\ProductImage;
use Image;


class PagesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }
	public function index()
	{
        $users = User::count(['id']);
        $order = Order::count(['id']);
        $product = Product::count(['id']);
        $category = Category::count(['id']);
        $brand = Brand::count(['id']);
        /*$total_price = Order::Where('total_price')->get()->count('total_price');*/
       
		return view('backend.pages.index',compact('users','order','product','category','brand'));
	}
	public function customer()
	{
		 $customers = User::orderBy('id', 'desc')->get();
   		 return view('backend.pages.customers.index', compact('customers'));
		
	}
	 public function delete($id)
    {
        $customer = User::find($id);

        if (! is_null($customer)) {
            //if it is parent brand then delete all sub brand...
          
            //delete brand image
           
            $customer->delete();
        }
        session()->flash('success','customer Has Delete Successfully');
        return back();
    }
}
