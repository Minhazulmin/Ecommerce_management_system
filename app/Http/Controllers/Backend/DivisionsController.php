<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Division;
use App\models\District;
use App\models\ProductImage;
use Image;
use File;

class DivisionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	$divisions = Division::orderby('priority','asc')->get();
    	return view('backend.pages.divisions.index', compact('divisions'));
    }


    public function create()
    {
    	return view('backend.pages.divisions.create');
    }

    public function store(Request $request)
    {
    	 $this->validate($request,[

    		'name' 	=> 'required',
    		'priority' => 'required'],
    		
    		[

    			'name.required'  => 'Please Provide the Name',
    			'priority.required'	 => 'Please Provide the valid Division priority',
    		]);


    	$division = new Division();

    	$division->name = $request->name;
    	$division->priority = $request->priority;

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
        $division->save();


    	session()->flash('success','A New Division Has Added Successfully');
    	return redirect()->route('admin.divisions');
    }


    public function edit($id)
    {
        $division = Division::find($id);
        if (!is_null($division)) {
           return view('backend.pages.divisions.edit',compact('division'));
        }else{
            return redirect()->route('admin.divisions');
        }
    }

     public function update(Request $request,$id)
    {
         $this->validate($request,[

            'name'  => 'required',
            'priority' => 'required'],
            
            [

                'name.required'  => 'Please Provide the Division Name',
                'priority.required'    => 'Please Provide the valid Division priority',
            ]);


        $division = Division::find($id);

        $division->name = $request->name;
        $division->priority = $request->priority;

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
        $division->save();


        session()->flash('success','Division Has Updated Successfully');
        return redirect()->route('admin.divisions');
    }


    public function delete($id)
    {
        $division = Division::find($id);

        if (! is_null($division)) {

            //delete all the district for division......

            $districts = District::where('division_id', $division->id)->get();
            foreach($districts as $district) {
                  $district->delete();
            }
            
            //if it is parent brand then delete all sub brand...
            $division->delete();
        }
        session()->flash('success','Division Has Delete Successfully');
        return back();
    }
}
