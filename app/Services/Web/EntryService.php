<?php

namespace App\Services\Web;

use App\Mappers\CategoryMapper;
use App\Models\Module;
use App\Models\Category;
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
        $module = Module::where('name', $module)->first();
        
        if(!$module->active)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = "The Module is not active";
            return $this->viewModel;
        }

        $categories = $module->categories()->with('entries')->get();
       
        $categoriesDto = CategoryMapper::MapEntriesByCategory($categories);
       
        $this->viewModel->model = $categoriesDto;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Blog / posts';

        return $this->viewModel;
    }

    public function GetPortfolioIndexModel($module)
    {
        $module = Module::where('name', $module)->first();
         
        if(!$module->active)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = "The Module is not active";
            return $this->viewModel;
        }

        $entries = $module->entries()->get();
        $this->viewModel->model = $entries;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Portfolio / posts';

        return $this->viewModel;
    }

}
