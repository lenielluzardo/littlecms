<?php

namespace App\Mappers;

use App\ViewModels\Admin\EntryViewModel;
use App\DTO\EntryDTO;

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
    public static function MapToEntryDTO($entry)
    {
        $entryDto = new EntryDto();
        $entryDto->thumbnail = $entry->thumbnail;
        $entryDto->title = $entry->title;
        $entryDto->content = $entry->content;
        $entryDto->author = $entry->author;
        $entryDto->category = $entry->category;

        return $entryDto;
    }
}