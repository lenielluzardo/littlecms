<?php

namespace App\Services\Web;

use App\Models\Module;
use App\ViewModels\Web\EntryViewModel;

class EntryService
{
    public $viewModel;

    public function __construct(EntryViewModel $viewModel) 
    {
        $this->viewModel = $viewModel;
    }

    public function GetBlogIndexModel($module)
    {
        $entries = Module::where('name', $module)
                            ->first()
                            ->entries()
                            ->get();

        $this->viewModel->model = $entries;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Blog / posts';

        return $this->viewModel;
    }

    public function GetPortfolioIndexModel($module)
    {
        $entries = Module::where('name', $module)
                            ->first()
                            ->entries()
                            ->with('category')
                            ->get();

        $this->viewModel->model = $entries;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Portfolio / posts';

        return $this->viewModel;
    }

}
