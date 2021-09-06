<?php

namespace App\Mappers;

use App\DTO\CategoryDTO;

class CategoryMapper
{
    public static function MapToCategoryDTO($category)
    {
        $categoryDto = new CategoryDTO();
        $categoryDto->name = $category->name;
        $categoryDto->icon = $category->icon;
        $categoryDto->thumbnail = $category->thumbnail;
        $categoryDto->description = $category->description;
        $categoryDto->entries = collect([]);

        return $categoryDto;
    }
}