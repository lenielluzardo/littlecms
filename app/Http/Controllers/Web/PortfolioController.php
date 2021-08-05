<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Web\EntryService;


class PortfolioController extends Controller
{
    private $service;

    public function __construct(EntryService $service)
    {
        $this->service = $service;
    }

    public function Index(Request $request)
    {
        $viewModel = $this->service->GetPortfolioIndexModel('portfolio');

        return view('web.blog.blog', ['viewModel' => $viewModel]);
    }
}
