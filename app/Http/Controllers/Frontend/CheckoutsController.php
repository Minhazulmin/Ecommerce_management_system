<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Payment;
use App\models\Cart;
use App\models\Order;
use Auth;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('priority','asc')->get();
        return view('frontend.pages.checkouts', compact('payments'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone_no' => 'required',
            'shipping_address' => 'required',
            'payment_methord_id' => 'required'

        ]);

        $order = new Order();
        if ($request->payment_methord_id != 'cash_in') {
            if ($request->transaction_id == NULL || empty($request->transaction_id)) {
                session()->flash('my_errors','Please Give your Transaction ID');
                return back();
            }

        }

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone_no = $request->phone_no;
        $order->total_price = $request->total_price;
        $order->shipping_address = $request->shipping_address;
        $order->message = $request->message;
        $order->ip_address = request()->ip();
        $order->transaction_id = $request->transaction_id;
        if (Auth::check()) {
            $order->user_id = Auth::id();
        }
        $order->payment_id = Payment::where('short_name', $request->payment_methord_id)->first()->id;
        $order->save();


        foreach (Cart::totalCarts() as $cart) {
          $cart->order_id = $order->id;
          $cart->save();
      }

        session()->flash('success','Successfully Completed Your order.Please wait for Admin Conformation..');


        return redirect()->route('index');
    }



}
