<?php

namespace App\Services\Web;

use App\Mappers\CategoryMapper;
use App\Models\Module;
use App\Models\Category;
use App\Models\Entry;
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

            return $this->viewModel->SetViewModelProperties($module);
        }

        $categories = $module->categories()->with('entries')->get();
       
        $categoriesDto = CategoryMapper::MapEntriesByCategory($categories);
       
        $this->viewModel->model = $categoriesDto;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Blog / posts';

        return $this->viewModel->SetViewModelProperties($module->name);
    }

    public function GetPortfolioIndexModel($module)
    {
        $module = Module::where('name', $module)->first();
         
        if(!$module->active)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = "The Module is not active";

            return $this->viewModel->SetViewModelProperties($module);
        }

        $entries = $module->entries()->paginate(8);
        $this->viewModel->model = $entries;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Portfolio / posts';

        return $this->viewModel->SetViewModelProperties($module->name);
    }

    public function GetModelByName($name, $module)
    {
        $name = ucwords(str_replace('_', ' ', $name));
        $entry = Entry::where('title', $name)->first();

        if($entry == null)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = 'There was a problem with the item you are trying to get.
            Try again later. If the problem persists get in contact with the website administrator.
            Item: '.$name;

            return $this->viewModel;
        }
        $this->viewModel->model = $entry;
        return $this->viewModel->SetViewModelProperties($module);

    }

}
