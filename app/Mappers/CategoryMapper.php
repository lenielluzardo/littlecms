<?php

namespace App\Mappers;

use App\DTO\CategoryDTO;
use App\DTO\EntryDTO;
use App\Models\Category;

class CategoryMapper
{
    public static function MapToCategoryDTO($category)
    {
        $categoryDto = new CategoryDTO();
        $categoryDto->name = $category->name;
        $categoryDto->icon = $category->icon;
        $categoryDto->description = $category->description;
        $categoryDto->entries = collect([]);

        return $categoryDto;
    }
}