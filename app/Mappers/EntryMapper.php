<?php

namespace App\Mappers;

use App\ViewModels\Admin\EntryViewModel;
use App\DTO\EntryDTO;
use App\Models\UserField;

class EntryMapper
{
    static function MapToViewModel($model)
    {   
        $viewModel = new EntryViewModel();
        
        $viewModel->id = $model->id;
        $viewModel->title = $model->title;
        $viewModel->thumbnail = $model->thumbnail;
        $viewModel->content = $model->content;
        $viewModel->module = $model->module()->name;
        $viewModel->category = $model->category()->name;
        // $viewModel->tags = $model->tags;
        
        return $viewModel;
    }
    public static function MapToEntryDTO($entry)
    {
        $entryDto = new EntryDto();
        $entryDto->thumbnail = $entry->thumbnail;
        $entryDto->published_at = $entry->published_at;
        $entryDto->title = $entry->title;
        $entryDto->content = $entry->content;
        $entryDto->author = UserField::find($entry->user->id)->name;
        $entryDto->category = $entry->category->name;
        $entryDto->module = $entry->module->name;

        return $entryDto;
    }
}