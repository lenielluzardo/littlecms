<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Web\EntryService;
use App\ViewModels\Web\EntryViewModel;

class BlogController extends Controller
{
    private $service;

    public function __construct(EntryService $service)
    {
        $service->viewModel = new EntryViewModel();
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

    public function GetByName($category, $article)
    {
        $viewModel = $this->service->GetModelByName($article, $category, 'blog');

        if(!$viewModel->success)
        {
            return redirect()->back()->withErrors($viewModel->errors);
        }

        return view('web.blog.article', ['viewModel' => $viewModel]);
    }

    public function GetByCategory($category)
    {
        $viewModel = $this->service->GetModelByCategory($category, 'blog');

        if(!$viewModel->success)
        {
            return redirect()->back()->withErrors($viewModel->errors);
        }

        return view('web.blog.category', ['viewModel' => $viewModel]);
    }

}
