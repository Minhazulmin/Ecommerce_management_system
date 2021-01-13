<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;

class ProductsController extends Controller
{
     public function index()
    {
        $products = product::orderBy('id','desc')->paginate(4);
    	return view('frontend.pages.product.index')->with('products',$products);
    } 

     public function show($slug)
    {
       $product = Product::where('slug',$slug)->first();
       if (!is_null($product)) {
       	return view('frontend.pages.product.show',compact('product'));
       }else{
       	session()->flash('errors','sorry !! There is no product');
       	return redirect()->route('products');
       }
    }
}
