<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getIndex()
    {
        return view('user.content.about.about');
    }
}
