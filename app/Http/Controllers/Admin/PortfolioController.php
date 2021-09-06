<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\EntryService;
use App\Models\Entry;

class PortfolioController extends Controller
{
    private $_service;

    public function __construct(EntryService $service)
    {
        $this->_service = $service;
    }

    public function Index()
    {
        // dd(" *** get_class($this) / Index Create()  *** ");

        $viewModel = $this->_service->GetIndexModel('portfolio');

        return view('admin.entries.entries', [ 'viewModel' => $viewModel]);
    }

    public function Create()
    {
        // dd(' *** Entries Controller / Get Create()  *** ');
        $viewModel = $this->_service->GetCreateModel('portfolio');
       
        // if(!$model->success)
        // {
        //   return $model->error;
        // }

        return view('admin.entries.entry', ['viewModel' => $viewModel]);
    }

    public function Edit($id)
    {
        // dd(' *** Entries Controller / Get Edit()  *** ');

        $viewModel = $this->_service->GetEditModel($id, 'portfolio');
        return view('admin.entries.entry', ['viewModel'=> $viewModel]);
    }

    public function Save(Request $request)
    {
        // dd(' *** Entries Controller / Post Edit()  *** ');

        $model = $this->_service->SaveModel($request, 'portfolio');
       
        if(!$model->success)
        {
          return $model->error;
        }

        return redirect()->route('admin.module.index', ['module' => 'portfolio']);
    }

    public function Delete($id)
    {
        // dd('*** '.get_class($this).'\Delete() ***');

        $viewModel = $this->_service->DeleteModel($id, 'portfolio');
        return redirect()->route('admin.module.index', ['module' => 'portfolio']);
    }

}