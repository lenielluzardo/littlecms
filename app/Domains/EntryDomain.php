<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entry;
use App\Models\Category;
use App\ViewModels\EntryViewModel;

class EntryDomain
{
    private $_category;
    public function __construct(Category $category)
    {
        $this->_category = $category;
    }

    public function getEntryViewModel($module)
    {
        $entryViewModel = new EntryViewModel();
        $entries = $this->_category->find($module)->entries;

        return $entries;
    }

}
