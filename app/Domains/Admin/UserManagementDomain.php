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
        $viewModel->module = 'User';

        return $viewModel;
    }

    public function SaveUser($newState)
    {

        // dd($newState);
       $userOld = User::find(config('app.admin.email'));

        $userOld->name = $newState['name'];
        $userOld->nickname =$newState['nickname'];
        $userOld->email = $newState['email'];
        $userOld->password = $newState['password'];
        $userOld->description =$newState['description'];
        $userOld->about = $newState['about'];
        $userOld->profile_img = $newState['profile_img'];
        $userOld->recovery_email = $newState['recovery_email'];
        $userOld->save();

        return true;
    }

}
