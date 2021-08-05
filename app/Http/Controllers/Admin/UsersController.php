<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\UserService;

class UsersController extends Controller
{
    private $_service;

    public function __construct(UserService $service)
    {
        $this->_service = $service;
    }

    public function Index()
    {
        // dd(" *** get_class($this) / Index Create()  *** ");

        $viewModel = $this->_service->GetIndexModel('Users');

        return view('admin.users.users', [ 'viewModel' => $viewModel]);
    }

    public function Create()
    {
        // dd(' *** Entries Controller / Get Create()  *** ');
        $viewModel = $this->_service->GetCreateModel('Users');
        
        // if(!$model->success)
        // {
        //   return $model->error;
        // }

        return view('admin.users.user', ['viewModel' => $viewModel]);
    }

    public function Edit($id)
    {
        // dd(' *** Entries Controller / Get Edit()  *** ');

        $viewModel = $this->_service->GetEditModel($id, 'Users');
        return view('admin.users.user', ['viewModel'=> $viewModel]);
    }

    public function Save(Request $request)
    {
        // dd(' *** Entries Controller / Post Edit()  *** ');

        $model = $this->_service->SaveModel($request, 'Users');
       
        // if(!$model->success)
        // {
        //   return $model->error;
        // }

        return redirect()->route('admin.module.index', ['module' => 'users']);
    }

    public function Delete($id)
    {
        // dd('*** '.get_class($this).'\Delete() ***');

        $viewModel = $this->_service->DeleteModel($id, 'Users');
        return redirect()->route('admin.module.index', ['module' => 'users']);
    }

}