<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\MenuService;

class MenusController extends Controller
{
    private $_service;

    public function __construct(MenuService $service)
    {
        $this->_service = $service;
    }

    public function Index()
    {
        // dd(" *** get_class($this) / Index Create()  *** ");

        $viewModel = $this->_service->GetIndexModel('Menus');

        return view('admin.menus.menus', [ 'viewModel' => $viewModel]);
    }

    public function Create()
    {
        // dd(' *** Entries Controller / Get Create()  *** ');
        $viewModel = $this->_service->GetCreateModel('Menus');
        
        // if(!$model->success)
        // {
        //   return $model->error;
        // }

        return redirect()->route('admin.module.index', ['module' => 'menus']);
    }

    public function Edit($id)
    {
        // dd(' *** Entries Controller / Get Edit()  *** ');

        $viewModel = $this->_service->GetEditModel($id, 'Menus');
        return view('admin.menus.menus', ['viewModel'=> $viewModel]);
    }

    public function Save(Request $request)
    {
        // dd(' *** Entries Controller / Post Edit()  *** ');

        $model = $this->_service->SaveModel($request, 'Menus');
       
        if(!$model->success)
        {
          return $model->error;
        }

        return redirect()->route('admin.module.index', ['module' => 'menus']);
    }

    public function Delete($id)
    {
        // dd('*** '.get_class($this).'\Delete() ***');

        $viewModel = $this->_service->DeleteModel($id, 'Menus');
        return redirect()->route('admin.module.index', ['module' => 'menus']);
    }

}