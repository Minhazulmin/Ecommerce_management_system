<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Brand;
use App\models\ProductImage;
use Image;
use File;

class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$brands = Brand::orderby('id','desc')->get();
    	return view('backend.pages.brands.index', compact('brands'));
    }


    public function create()
    {
    	return view('backend.pages.brands.create');
    }

    public function store(Request $request)
    {
    	 $this->validate($request,[

    		'name' 	=> 'required',
    		'image' => 'nullable|image'],
    		
    		[

    			'name.required'  => 'Please Provide the brand Name',
    			'image.image'	 => 'Please Provide the valid Image',
    		]);


    	$brand = new Brand();

    	$brand->name = $request->name;
    	$brand->description = $request->description;

        //
         if ($request->hasFile('image')) {
         // image that inserted
         $image = $request->file('image');
         $img = time(). '.'.$image->getClientOriginalExtension();
         $location = public_path('images/brands/' . $img);
         Image::make($image)->save($location);
         $brand->image = $img;
         

        }
        //
        $brand->save();


    	session()->flash('success','A New brand Has Added Successfully');
    	return redirect()->route('admin.brands');
    }


    public function edit($id)
    {
        $brand = Brand::find($id);
        if (!is_null($brand)) {
           return view('backend.pages.brands.edit',compact('brand'));
        }else{
            return redirect()->route('admin.brands');
        }
    }

     public function update(Request $request,$id)
    {
         $this->validate($request,[

            'name'  => 'required',
            'image' => 'nullable|image'],
            
            [

                'name.required'  => 'Please Provide the brand Name',
                'image.image'    => 'Please Provide the valid Image',
            ]);


        $brand = Brand::find($id);

        $brand->name = $request->name;
        $brand->description = $request->description;

        //
        if ($request->hasFile('image')) 
         {
            //delete old immage
            if (File::exists('images/brands/'.$brand->image)) {
                File::delete('images/brands/'.$brand->image);
            }
            // image that inserted

             $image = $request->file('image');
             $img = time(). '.'.$image->getClientOriginalExtension();
             $location = public_path('images/brands/' . $img);
             Image::make($image)->save($location);
             $brand->image = $img;
             

        }
        //
        $brand->save();


        session()->flash('success','Brand Has Updated Successfully');
        return redirect()->route('admin.brands');
    }


    public function delete($id)
    {
        $brand = Brand::find($id);

        if (! is_null($brand)) {
            //if it is parent brand then delete all sub brand...
          
            //delete brand image
            if (File::exists('images/brands/'.$brand->image)) {
                File::delete('images/brands/'.$brand->image);
            }
            $brand->delete();
        }
        session()->flash('success','Brand Has Delete Successfully');
        return back();
    }
}
