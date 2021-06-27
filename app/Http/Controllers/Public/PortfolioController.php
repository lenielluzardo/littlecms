<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\User\PortfolioDomain;


class PortfolioController extends Controller
{
    private $_domain;

    public function __construct(PortfolioDomain $domain)
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
