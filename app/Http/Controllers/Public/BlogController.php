<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Domains\User\BlogDomain;

class BlogController extends Controller
{
    private $_domain;

    public function __construct(BlogDomain $domain)
    {
        $this->_domain = $domain;
    }

    public function Index()
    {
        $model = $this->_domain->getBlogModel();

        return view('user.content.blog.blog', ['model' => $model]);
    }
}
