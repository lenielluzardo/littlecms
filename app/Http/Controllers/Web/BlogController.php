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

        if(!$viewModel->success)
        {
            return redirect()->back();
        }

        return view('web.blog.index', ['viewModel' => $viewModel]);
    }

    public function GetByName($articleName)
    {
        $viewModel = $this->service->GetModelByName($articleName, 'blog');

        if(!$viewModel->success)
        {
            return redirect()->back()->withErrors($viewModel->errors);
        }

        return view('web.blog.article', ['viewModel' => $viewModel]);
    }

}
