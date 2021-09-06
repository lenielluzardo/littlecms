<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\TagService;
use Illuminate\Http\Request;


class TagsController extends Controller
{
    private $_service;

    public function __construct(TagService $service)
    {
        $this->_service = $service;
    }

    public function Index()
    {
        // dd(" *** get_class($this) / Index Create()  *** ");

        $viewModel = $this->_service->GetIndexModel('Tags');

        return view('admin.tags.tags', [ 'viewModel' => $viewModel]);
    }

    public function Create()
    {
        // dd(' *** Entries Controller / Get Create()  *** ');
        $viewModel = $this->_service->GetCreateModel('Tags');
        
        // if(!$model->success)
        // {
        //   return $model->error;
        // }

        return redirect()->route('admin.module.index', ['module' => 'tags']);
    }

    public function Edit($id)
    {
        // dd(' *** Entries Controller / Get Edit()  *** ');

        $viewModel = $this->_service->GetEditModel($id, 'Tags');
        return view('admin.tags.tags', ['viewModel'=> $viewModel]);
    }

    public function Save(Request $request)
    {
        // dd(' *** Entries Controller / Post Edit()  *** ');

        $model = $this->_service->SaveModel($request, 'Tags');
       
        if(!$model->success)
        {
          return $model->error;
        }

        return redirect()->route('admin.module.index', ['module' => 'tags']);
    }

    public function Delete($id)
    {
        // dd('*** '.get_class($this).'\Delete() ***');

        $viewModel = $this->_service->DeleteModel($id, 'Tags');
        return redirect()->route('admin.module.index', ['module' => 'tags']);
    }

}