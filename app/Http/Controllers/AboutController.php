<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AboutController extends Controller
{
    public function getIndex(User $userModel)
    {
        $user = $userModel->find(env('AUTHOR_ID'));
        return view('about.index', ['author' => $user]);
    }
}
