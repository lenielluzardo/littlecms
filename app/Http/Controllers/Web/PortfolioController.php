<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PortfolioService;


class PortfolioController extends Controller
{
    private $_domain;

    public function __construct(PortfolioService $domain)
    {
        $this->_domain = $domain;
    }

    public function Index()
    {
        // $model = $this->_domain->getPortfolioModel();

        // return view('user.content.blog.blog', ['model' => $model]);

        return "Hello World";
    }
}
