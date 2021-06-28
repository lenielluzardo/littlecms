<?php

namespace App\Services;

use App\ViewModels\ViewModel;

class Service
{
    public $viewModel;

    public function __construct(ViewModel $viewModel)
    {
        $this->viewModel = $viewModel;
    }

    public function getViewModel()
    {
        return $this->viewModel;
    }

}
