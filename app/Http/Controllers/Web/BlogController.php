<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Web\EntryService;

class BlogController extends Controller
{
    private $service;

    public function __construct(EntryService $service)
    {
        $this->service = $service;
    }

    public function Index(Request $request)
    {
        $viewModel = $this->service->GetBlogIndexModel('blog');

        return view('web.blog.blog', ['viewModel' => $viewModel]);
    }
}
