<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function Index()
    {
        $model = User::where('email', config('app.admin.primary_email'))->first();

        return view('user.content.about.about', ['model' => $model ]);
    }
}
