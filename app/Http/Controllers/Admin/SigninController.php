<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SigninController extends Controller
{
    public function signin(Request $request)
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
