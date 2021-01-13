<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\VerifyRegistration;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
           'password' => 'required',
        ]);

        $user = User::where('email',$request->email)->first();

        if ($user->status == 1) {
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
                return redirect()->intended(route('index'));
            }else{
                 session()->flash('my_errors','Invalid Login Please Registration First');
                return redirect()->route('login');
            }
        }else{

            if (!is_null($user)) {
                 $user->notify(new VerifyRegistration($user));
                session()->flash('success','A new conformation Email Send to You .Please Check your Email Address');
                return redirect('/');
            }else{
                 session()->flash('my_errors','Please login first');
                return redirect()->route('login');
            }
        }
    }
}
