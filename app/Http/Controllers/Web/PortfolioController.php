<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Web\EntryService;
use App\ViewModels\Web\EntryViewModel;


class PortfolioController extends Controller
{
    private $service;

    public function __construct(EntryService $service)
    {
        $service->viewModel = new EntryViewModel();
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

    public function GetByName($category, $project)
    {
        $viewModel = $this->service->GetModelByName('portfolio', $category, $project);

        if(!$viewModel->success)
        {
            return redirect()->back()->withErrors($viewModel->errors);
        }

        return view('web.portfolio.project', ['viewModel' => $viewModel]);
    }

    
}
