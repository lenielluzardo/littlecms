<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\ViewModels\Web\AboutViewModel;
use App\Services\Web\EntryService;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    private $service;
    
    public function __construct(EntryService $service)
    {
     
        $service->viewModel = new AboutViewModel();
        $this->service = $service;
    }

    public function Index()
    {
        // dd('NIVEL CONTROLADOR ABOUT');
        $viewModel = $this->service->GetAboutIndexModel('about');
        
        if(!$viewModel->success)
        {
            // dd('NIVEL 1 CONTROLLER NO REGRESA VISTA HTML');

            return redirect()->back();
        }

        return view('web.about.about', ['viewModel' => $viewModel ]);
    }
}
