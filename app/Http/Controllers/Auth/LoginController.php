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

    public function authenticate(Request $request)
    {
        dd("Hello World");
        $credentials = $request->only('email', 'password');

        if(Auth::atttempt($credentials))
        {
            return redirect()->intended('home');
        }

        return view('auth.login');
    }

    public function aAuthenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $isValid = Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password')],$request->has('remember'));

        if($isValid)
        {
            return redirect('/admin');
        }

        return redirect()->back()->with('fail', 'Authentication Failed');
    }
}
