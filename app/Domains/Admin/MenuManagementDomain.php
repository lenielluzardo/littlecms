<?php

namespace App\Domains\Admin;

use App\Models\Category;
use App\ViewModels\Admin\MenuManagementViewModel;

class MenuManagementDomain
{
    public function __construct()
    {
    }

    public function getMenuManagementModel()
    {
        $viewModel = new MenuManagementViewModel();
        $category = new Category();

        $viewModel->items = $category->getAllEntries();
        $viewModel->title = 'Blog';
        $viewModel->path = 'Blog / posts';

        return $viewModel;
    }

}
