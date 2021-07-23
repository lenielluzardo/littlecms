<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\BlogService;

class BlogController extends Controller
{
    private $_domain;

    public function __construct(BlogService $domain)
    {
        $this->_domain = $domain;
    }

    public function Index()
    {
        $model = $this->_domain->getBlogModel();

        return view('user.content.blog.blog', ['model' => $model]);
    }
}
