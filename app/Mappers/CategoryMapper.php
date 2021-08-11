<?php

namespace App\Mappers;

use App\DTO\CategoryDTO;
use App\DTO\EntryDTO;
use App\Models\Category;

class CategoryMapper
{
    static function MapEntriesByCategory($categories)
    {   
        $categoriesDto = collect([]);

        foreach($categories as $category)
        {
            $categoryDto = new CategoryDTO();
            $categoryDto->name = $category->name;
            $categoryDto->entries = collect([]);

            $entries = $category->entries()->orderBy('published_at', 'desc')->paginate(4);
            foreach($entries as $entry)
            {
                $entryDto = new EntryDto();
                $entryDto->thumbnail = $entry->thumbnail;
                $entryDto->title = $entry->title;
                $entryDto->content = $entry->content;
                $entryDto->author = $entry->author;
                $entryDto->category = $entry->category;
                
                $categoryDto->entries->add($entryDto);
            }

            $categoriesDto->add($categoryDto);
        }
        return $categoriesDto;
    }
    
    static function MapToModel($dto)
    {

    }
}