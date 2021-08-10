<?php

namespace App\Services\Web;

use App\ViewModels\Web\AboutViewModel;
use App\Models\User;
use App\Models\Module;
use App\Models\UserField;
use App\Mappers\UserMapper;

class AboutService
{
    public $viewModel;
    protected $userModel;

    public function __construct(AboutViewModel $viewModel, User $userModel)
    {
        $this->viewModel = $viewModel;
        $this->userModel = $userModel;
    }

   public function GetIndexModel($module)
   {    

        $module = Module::where('name', $module)->first();
        
        if(!$module->active)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = "The Module is not active";
            return $this->viewModel;
        }

        $user = $this->userModel->where('username', config('app.admin.username'))->first();
        $userFields = $user->fields()->first();

        $dto = UserMapper::MapToDTO($userFields);

        $this->viewModel->model = $dto;                               
        
        return $this->viewModel->SetViewModelProperties('About');
   }

}
