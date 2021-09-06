<?php

namespace App\Mappers;

use App\ViewModels\Admin\EntryViewModel;
use App\DTO\EntryDTO;
use App\Models\UserField;
use Carbon\Carbon;

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
        $entryDto->published_at = Carbon::parse($entry->published_at)->format('F j, Y');
        $entryDto->title = $entry->title;
        $entryDto->content = $entry->content;
        $entryDto->author = $entry->user->first_name.' '.$entry->user->last_name;
        $entryDto->category = $entry->category->name;
        $entryDto->module = $entry->module->name;
        $entryDto->icon = $entry->icon;

        return $entryDto;
    }
}