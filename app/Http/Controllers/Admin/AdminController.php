<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;

class AdminController extends Controller
{
    public function Index()
    {
        // dd("admin");
        Module::all();
        return view('admin.home', ['modules' => Module::all()]);
    }
}
