<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function signin(Request $request)
    {
        // dd('Our own auth');

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
            ],$request->has('remember')))
        {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('fail', 'Authentication Failed');
    }
}
