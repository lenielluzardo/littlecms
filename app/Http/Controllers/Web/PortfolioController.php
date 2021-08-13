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

        if(!$viewModel->success)
        {
            return redirect()->back();
        }

        return view('web.portfolio.index', ['viewModel' => $viewModel]);
    }

    public function GetByName($projectName)
    {
        $viewModel = $this->service->GetModelByName($projectName, 'portfolio');

        if(!$viewModel->success)
        {
            return redirect()->back()->withErrors($viewModel->errors);
        }
        return view('web.portfolio.project', ['viewModel' => $viewModel]);
    }

    
}
