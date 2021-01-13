<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Payment;
use Image;
use File;


class Payment_methordController extends Controller
{

     public function __construct()
  {
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('priority', 'asc')->get();
    return view('backend.pages.payment_methord.index', compact('payments'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      'name'  => 'required',
      'image'  => 'required|image',
      'priority'  => 'required',
      'short_name'  => 'required'
     
    ],
    [
      'name.required'  => 'Please provide Payment name',
      'priority.required'  => 'Please provide  priority',
      'image.required'  => 'Please provide payment image',
      'image.image'  => 'Please provide a valid  image',
      'short_name.required'  => 'Please provide a valid short name'
  
    ]);

    $payment = new Payment();
    $payment->name = $request->name;
    $payment->priority = $request->priority;
    $payment->short_name = $request->short_name;
     $payment->no = $request->no;
    $payment->type = $request->type;

    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/Transaction/' .$img);
        Image::make($image)->save($location);
        $payment->image = $img;
    }
    $payment->save();

    session()->flash('success', 'A new Payment Methord has added successfully !!');
    return redirect()->route('admin.payment');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
      'name'  => 'required',
      'image'  => 'image',
      'priority'  => 'required',
      'short_name'  => 'required'
    
    ],
    [
      'name.required'  => 'Please provide Payment name',
      'priority.required'  => 'Please provide  priority',
      'image.image'  => 'Please provide a valid  image',
      'short_name.required'  => 'Please provide a valid short name'
     
    ]);

    $payment = Payment::find($id);
    $payment->name = $request->name;
    $payment->priority = $request->priority;
    $payment->short_name = $request->short_name;
     $payment->no = $request->no;
    $payment->type = $request->type;

    if ($request->image > 0) {
        if (File::exists('images/Transaction/'.$payment->image)) {
                File::delete('images/Transaction/'.$payment->image);
              }
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/Transaction/' .$img);
        Image::make($image)->save($location);
        $payment->image = $img;
    }
    $payment->save();

    session()->flash('success', 'A  Payment Methord has updated successfully !!');
    return redirect()->route('admin.payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $payment = Payment::find($id);
      if (!is_null($payment)) {
        //Delete Image
        if (File::exists('images/Transaction/'.$payment->image)) {
            File::delete('images/Transaction/'.$payment->image);
          }
        $payment->delete();
      }
      session()->flash('success', 'payment methord has deleted successfully !!');
      return back();

    }
    
}
