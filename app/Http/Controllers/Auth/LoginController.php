<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request){

        $credentials = $request->only('email', 'password');

        if(Auth::atttempt($credentials)){
            return redirect()->intended('home');
        }
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $isValid = Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password')],$request->has('remember'));

        // dd($request->input('email'), $request->input('password'));
        // dd($isValid);
        // dd($isValid);

        if($isValid)
        {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('fail', 'Authentication Failed');
    }
}
