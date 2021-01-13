<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\Product;
use App\models\ProductImage;
use Image;
use File;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$categories = Category::orderby('id','desc')->get();
        $categoriesCount = Category::count();
    	return view('backend.pages.categories.index', compact('categories','categoriesCount'));
    }


    public function create()
    {
    	$main_categories = Category::orderby('name','desc')->where('parent_id', NULL)->get();
    	return view('backend.pages.categories.create', compact('main_categories'));
    }

    public function store(Request $request)
    {
    	 $this->validate($request,[

    		'name' 	=> 'required',
    		'image' => 'nullable|image'],
    		
    		[

    			'name.required'  => 'Please Provide the Category Name',
    			'image.image'	 => 'Please Provide the valid Image',
    		]);


    	$category = new Category();

    	$category->name = $request->name;
    	$category->description = $request->description;
    	$category->parent_id = $request->parent_id;

        //
         if ($request->hasFile('image')) {
         // image that inserted
         $image = $request->file('image');
         $img = time(). '.'.$image->getClientOriginalExtension();
         $location = public_path('images/categories/' . $img);
         Image::make($image)->save($location);
         $category->image = $img;
         

        }
        //
        $category->save();


    	session()->flash('success','A New Category Has Added Successfully');
    	return redirect()->route('admin.categories');
    }


    public function edit($id)
    {
        $main_categories = Category::orderby('name','desc')->where('parent_id', NULL)->get();
        $category = Category::find($id);
        if (!is_null($category)) {
           return view('backend.pages.categories.edit',compact('category','main_categories'));
        }else{
            return redirect()->route('admin.categories');
        }
    }

     public function update(Request $request,$id)
    {
         $this->validate($request,[

            'name'  => 'required',
            'image' => 'nullable|image'],
            
            [

                'name.required'  => 'Please Provide the Category Name',
                'image.image'    => 'Please Provide the valid Image',
            ]);


        $category = Category::find($id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;

        //
        if ($request->hasFile('image')) 
         {
            //delete old immage
            if (File::exists('images/categories/'.$category->image)) {
                File::delete('images/categories/'.$category->image);
            }
            // image that inserted

             $image = $request->file('image');
             $img = time(). '.'.$image->getClientOriginalExtension();
             $location = public_path('images/categories/' . $img);
             Image::make($image)->save($location);
             $category->image = $img;
             

        }
        //
        $category->save();


        session()->flash('success','Category Has Updated Successfully');
        return redirect()->route('admin.categories');
    }


    public function delete($id)
    {
        $category = Category::find($id);

        if (! is_null($category)) {
            //if it is parent category then delete all sub category...
            if ($category->parent_id == NULL) {
                #//delete sub category....
             $sub_categories = Category::orderby('name','desc')->where('parent_id', $category->id)->get();


             foreach ($sub_categories as $sub) {

                 if (File::exists('images/categories/'.$sub->image)) {
                File::delete('images/categories/'.$sub->image);
            }
                 $sub->delete();
             }
            }
            //delete category image
            if (File::exists('images/categories/'.$category->image)) {
                File::delete('images/categories/'.$category->image);
            }
            $category->delete();
        }
        session()->flash('success','Product Has Delete Successfully');
        return back();
    }
}
