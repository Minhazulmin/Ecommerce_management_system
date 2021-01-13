<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\models\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    

    public function index()
    {
        $categories = Category::orderBy('id','desc')->paginate(4);
        return view('frontend.pages.categories.index')->with('categories',$categories);
    } 
     public function show($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            return view('frontend.pages.categories.show', compact('category'));
        }else{
            session()->flash('errors','Sorry There is no Category');
            return redirect('/');
        }
    }
}
