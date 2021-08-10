<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Services\Web\AboutService;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    private $service;
    
    public function __construct(AboutService $service)
    {
        $this->service = $service;
    }

    public function Index()
    {
        $viewModel = $this->service->GetIndexModel('about');
        
        if(!$viewModel->success)
        {
            return redirect()->back();
        }

        return view('web.about.about', ['viewModel' => $viewModel ]);
    }
}
