<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class HomeController extends Controller
{
    public function getIndex(Section $sectionModel)
    {
        return view('welcome');
    }
}
