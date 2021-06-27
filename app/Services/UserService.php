<?php

namespace App\Services;

use App\Models\User;
use App\ViewModels\Admin\UserManagementViewModel;

class UserService
{
    public function __construct() {}

    public function getUserManagementModel()
    {
        // dd("# Breakpoint # UserService > getUserManagementModel");
        $viewModel = new UserManagementViewModel();
        $user = new User();

        // dd("admin user controller");


        $viewModel->items = $user->where('email', config('app.admin.primary_email'))->first();

        $viewModel->title = 'User Management';
        $viewModel->path = 'Blog / posts';
        $viewModel->module = 'User';

        return $viewModel;
    }

    public function SaveUser($newState)
    {
        // dd($newState);
        $userOld = User::where('email', config('app.admin.primary_email'))->first();

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
