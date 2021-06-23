<?php

namespace App\Domains\Admin;

use App\Models\User;
use App\ViewModels\Admin\UserManagementViewModel;

class UserManagementDomain
{
    public function __construct() {}

    public function getUserManagementModel()
    {
        $viewModel = new UserManagementViewModel();
        $user = new User();

        // dd("admin user controller");


        $viewModel->items = $user->find(config('app.admin.email'));

        $viewModel->title = 'User Management';
        $viewModel->path = 'Blog / posts';

        return $viewModel;
    }

}
