<?php

namespace App\Mappers;

use App\DTO\CategoryDTO;
use App\DTO\EntryDTO;
use App\Models\Category;

class CategoryMapper
{
    public static function MapEntriesByCategory($categories)
    {   
        $categoriesDto = collect([]);

        foreach($categories as $category)
        {
            $categoryDto = CategoryMapper::MapToCategoryDTO($category);
            $categoryDto->entries = collect([]);
            
            $entries = $category->entries()->orderBy('published_at', 'desc')->paginate(4);

            foreach($entries as $entry)
            {
                $entryDto = EntryMapper::MapToEntryDTO($entry);
                $categoryDto->entries->add($entryDto);
            }

            $categoriesDto->add($categoryDto);
        }
        return $categoriesDto;
    }
    
    public static function MapToCategoryDTO($category)
    {
        $categoryDto = new CategoryDTO();
        $categoryDto->name = $category->name;
        $categoryDto->icon = $category->icon;
        $categoryDto->description = $category->description;

        return $categoryDto;
    }
}