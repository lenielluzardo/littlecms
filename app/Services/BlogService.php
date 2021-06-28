<?php

namespace App\Services;

use App\Models\Category;
use App\ViewModels\User\BlogViewModel;

class BlogService
{
    public function __construct() {}

    public function getBlogModel()
    {
        $viewModel = new BlogViewModel();
        $category = new Category();

        $viewModel->items = $category->getBlogEntries();
        $viewModel->title = 'Blog';
        $viewModel->path = 'Blog / posts';

        return $viewModel;
    }

}
