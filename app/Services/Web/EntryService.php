<?php

namespace App\Services\Web;

use App\Mappers\CategoryMapper;
use App\Mappers\EntryMapper;
use App\Models\Module;
use App\Models\Category;
use App\Models\Entry;
use App\ViewModels\ViewModel;
// use App\ViewModels\Web\AboutViewModel;

class EntryService
{
    public $viewModel;

    public function __construct() 
    {
        // $this->viewModel = $viewModel;
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


        $categories = $module->categories()->with('entries')->where('active', true)->get();
       
        $categoriesDto = collect([]);

        foreach($categories as $category)
        {
            $categoryDto = CategoryMapper::MapToCategoryDTO($category);
            $entries = $category->entries()->orderBy('published_at', 'desc')->paginate(4);

            foreach($entries as $entry)
            {
                $entryDto = EntryMapper::MapToEntryDTO($entry);
                $categoryDto->entries->add($entryDto);
            }

            $categoriesDto->add($categoryDto);
        }

        $this->viewModel->model = $categoriesDto;
        $this->viewModel->title = 'Blog';
        $this->viewModel->path = 'Blog / posts';

        $module = strtolower($module->name);

        $this->viewModel->viewPath = collect([
            [
             'path_name' => $module ,
             'route_name' => "web.$module.index", 
             'route_values' => [ 'model' => '']
            ]
         ]);

        return $this->viewModel->SetViewModelProperties($module);
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
       
        $module = strtolower($module->name);

        $this->viewModel->viewPath = collect([
            [
             'path_name' => $module ,
             'route_name' => "web.$module.index", 
             'route_values' => [ 'model' => '']
            ]
         ]);

        return $this->viewModel->SetViewModelProperties($module);
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

        $entryDto = EntryMapper::MapToEntryDTO($entry);
        
        $this->viewModel->model = $entryDto;

        $this->viewModel->viewPath = collect([
            [
             'path_name' => "$module" ,
             'route_name' => "web.$module.index", 
             'route_values' => [ 'module' => "$module"]
            ],
            [
                'path_name' => "$entryDto->category" ,
                'route_name' => "web.$module.category", 
                'route_values' => [ 'category' =>  $entryDto->category]
            ],
            [
                'path_name' => "$entryDto->title" ,
                'route_name' => "web.$module.entry", 
                'route_values' => [ 'category' => $entryDto->category, 'entry' => $entryDto->title]
            ]
         ]);

        return $this->viewModel->SetViewModelProperties($module);

    }

    public function GetModelByCategory($category, $module)
    {
        $name = ucwords(str_replace('_', ' ', $category));
        $category = Category::where('name', $category)->first();

        if($category == null)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = 'There was a problem with the item you are trying to get.
            Try again later. If the problem persists get in contact with the website administrator.
            Item: '.$name;

            return $this->viewModel;
        }

        $entries = $category->entries()->get();

        $categoryDto = CategoryMapper::MapToCategoryDTO($category);
        
        foreach($entries as $entry)
        {
            $entryDto = EntryMapper::MapToEntryDTO($entry);
            $categoryDto->entries->add($entryDto);
        }
        // $entries = $category->entries()->get();

        $this->viewModel->model = $categoryDto;

        $this->viewModel->viewPath = collect([
            [
             'path_name' => "$module" ,
             'route_name' => "web.$module.index", 
             'route_values' => [ 'module' => "$module"]
            ],
            [
                'path_name' => "$entryDto->category" ,
                'route_name' => "web.$module.category", 
                'route_values' => [ 'category' =>  $entryDto->category]
            ],
         ]);


        // $this->viewModel->model = $entries;
        return $this->viewModel->SetViewModelProperties($module);

    }

    public function GetAboutIndexModel($module)
    {
        $entries = Module::where('name', $module)->first()->entries;
        $entriesDto = collect();

        foreach($entries as $entry)
        {
            $entryDto = EntryMapper::MapToEntryDTO($entry);
            $entriesDto->add($entryDto);
        }

        // $this->viewModel->author = 
        // dd($this->viewModel->author);
        $this->viewModel->model = $entriesDto;

        return $this->viewModel->SetViewModelProperties($module);
    }
}
