<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Division;
use App\models\District;
use App\models\ProductImage;
use Image;
use File;

class DistrictsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$districts = District::orderby('name','asc')->get();
    	return view('backend.pages.districts.index', compact('districts'));
    }


    public function create()
    {
        $divisions = Division::orderby('priority','asc')->get();
    	return view('backend.pages.districts.create', compact('divisions'));
    }

    public function store(Request $request)
    {
    	 $this->validate($request,[

    		'name' 	=> 'required',
    		'division_id' => 'required'],
    		
    		[

    			'name.required'  => 'Please Provide the Name',
    			'division_id.required'	 => 'Please Provide the  Division for Districts',
    		]);


    	$district = new District();

    	$district->name = $request->name;
    	$district->division_id = $request->division_id;

        //
         /*if ($request->hasFile('image')) {
         // image that inserted
         $image = $request->file('image');
         $img = time(). '.'.$image->getClientOriginalExtension();
         $location = public_path('images/brands/' . $img);
         Image::make($image)->save($location);
         $brand->image = $img;
         

        }*/
        //
        $district->save();


    	session()->flash('success','A New District Has Added Successfully');
    	return redirect()->route('admin.districts');
    }


    public function edit($id)
    {
        $divisions = Division::orderby('priority','asc')->get();
        $district = District::find($id);
        if (!is_null($district)) {
           return view('backend.pages.districts.edit',compact('district','divisions'));
        }else{
            return redirect()->route('admin.districts');
        }
    }

     public function update(Request $request,$id)
    {
         $this->validate($request,[

            'name'  => 'required',
            'division_id' => 'required'],
            
            [

                'name.required'  => 'Please Provide the Division Name',
                'division_id.required'    => 'Please Provide the  Division for District',
            ]);


        $district = District::find($id);

        $district->name = $request->name;
        $district->division_id = $request->division_id;

        //
      /*  if ($request->hasFile('image')) 
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
             

        }*/
        //
        $district->save();


        session()->flash('success','Division Has Updated Successfully');
        return redirect()->route('admin.districts');
    }


    public function delete($id)
    {
        $district = District::find($id);

        if (! is_null($district)) {
            //if it is parent brand then delete all sub brand...
            $district->delete();
        }
        session()->flash('success','District Has Delete Successfully');
        return back();
    }
}
