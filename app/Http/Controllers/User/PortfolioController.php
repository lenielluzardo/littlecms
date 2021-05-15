<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\PortfolioDomain;


class PortfolioController extends Controller
{
    private $_domain;

    public function __construct(PortfolioDomain $domain)
    {
        $this->_domain = $domain;
    }

    public function Index($category)
    {
        $model = $this->_domain->getPortfolioModel($category);

        return view('user.content.blog.blog', ['model' => $model]);
    }
}
