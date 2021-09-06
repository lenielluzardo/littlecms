<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\ModuleService;

class HomeController extends Controller
{
    private $_service;

    public function __construct(ModuleService $service)
    {
        $this->_service = $service;
    }

    public function Index()
    {
        $viewModel = $this->_service->GetIndexModel('Home');

        return view('admin.home', ['viewModel' => $viewModel]);
    }

    public function Save(Request $request)
    {
        // dd(' *** Entries Controller / Post Edit()  *** ');

        $model = $this->_service->SaveModel($request, 'Home');
       
        if(!$model->success)
        {
          return $model->error;
        }

        return redirect()->route('admin.home.index');
    }
}
