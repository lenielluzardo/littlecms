<?php

namespace App\Mappers;

use App\ViewModels\Admin\EntryViewModel;

class EntryMapper
{
    static function MapToViewModel($model)
    {   
        $viewModel = new EntryViewModel();
        
        $viewModel->id = $model->id;
        $viewModel->title = $model->title;
        $viewModel->thumbnail = $model->thumbnail;
        $viewModel->content = $model->content;
        $viewModel->module = $model->module;
        $viewModel->category = $model->category;
        // $viewModel->tags = $model->tags;
        
        return $viewModel;
    }
    static function MapToModel($viewModel)
    {

    }
}