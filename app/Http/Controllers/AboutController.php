<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AboutController extends Controller
{
    public function getIndex()
    {
        return view('about.index');
    }
}
