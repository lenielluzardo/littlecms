<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Index()
    {
        // dd("admin");
        return view('admin.home', ['menu' => ['module' => 'user']]);
    }
}
