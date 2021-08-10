<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\AboutService;

class AboutController extends Controller
{
    private $_service;

    public function __construct(AboutService $service)
    {
        $this->_service = $service;
    }

    public function Index()
    {
        // dd(" *** get_class($this) / Index Create()  *** ");

        $viewModel = $this->_service->GetIndexModel('About');

        return view('admin.about.about', [ 'viewModel' => $viewModel]);
    }

    public function Create()
    {
        // dd(' *** Entries Controller / Get Create()  *** ');
        $viewModel = $this->_service->GetCreateModel('About');
        
        // if(!$model->success)
        // {
        //   return $model->error;
        // }

        return view('admin.about.about', ['viewModel' => $viewModel]);
    }

    public function Edit($id)
    {
        // dd(' *** Entries Controller / Get Edit()  *** ');

        $viewModel = $this->_service->GetEditModel($id, 'About');
        return view('admin.about.about', ['viewModel'=> $viewModel]);
    }

    public function Save(Request $request)
    {
        // dd(' *** Entries Controller / Post Edit()  *** ');
// dd($request->all());
        $model = $this->_service->SaveModel($request, 'About');
       
        if(!$model->success)
        {
          return $model->error;
        }

        return redirect()->route('admin.module.index', ['module' => 'about']);
    }

    public function Delete($id)
    {
        // dd('*** '.get_class($this).'\Delete() ***');

        $viewModel = $this->_service->DeleteModel($id, 'About');
        return redirect()->route('admin.module.index', ['module' => 'about']);
    }

}
