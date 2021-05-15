<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.content.main');
    }
}
