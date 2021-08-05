<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function Index(Request $request)
    {
        $model = User::where('email', config('app.admin.primary_email'))->first();

        return view('web.about.about', ['model' => $model ]);
    }
}
