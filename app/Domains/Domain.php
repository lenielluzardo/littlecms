<?php

namespace App\Domains;

use App\ViewModels\ViewModel;

class Domain
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
