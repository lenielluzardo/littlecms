<?php

namespace App\Services;

use App\Models\Category;
use App\ViewModels\Admin\EntryManagementViewModel;

class EntryService extends Service
{
    public function __construct() {}

    public function getEntryManagementModel()
    {
        $viewModel = new EntryManagementViewModel();
        $category = new Category();

        $viewModel->items = $category->getAllEntries();
        $viewModel->title = 'Blog';
        $viewModel->path = 'Blog / posts';

        return $viewModel;
    }

}
