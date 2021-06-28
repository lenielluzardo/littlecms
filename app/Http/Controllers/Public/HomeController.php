<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Services\HomeService;


class HomeController extends Controller
{
    private $domain;

    function __construct(HomeService $HomeService)
    {
        $this->domain = $HomeService;
    }

    public function Index(Request $request)
    {
        $model = $this->domain->getViewModel();
        $cookie = $request->cookie('first_time_user_home');

        if($cookie == null)
        {
            Cookie::queue(Cookie::make('first_time_user_home', true, 30));
            $model->modal = $this->domain->getModal();
        }

        return view('user.content.home', ['model' => $model]);
    }
}
