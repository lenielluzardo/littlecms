<?php

namespace App\Services\Web;

use App\Models\Category;
use App\ViewModels\User\PortfolioViewModel;

class PortfolioService
{
    public function __construct(){}

    public function getPortfolioModel($category)
    {
        $viewModel = new PortfolioViewModel();
        $_category = new Category();

        $viewModel->items = $_category->getPortfolioEntries($category);
        $viewModel->title = 'Portfolio';
        $viewModel->path = 'Portfolio / '.$category;

        return $viewModel;
    }

}
