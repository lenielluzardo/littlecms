<?php

namespace App\Http\Controllers;

use App\Domains\EntryDomain;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    private $_entryDomain;

    public function __construct(EntryDomain $entryDomain)
    {
        $this->_entryDomain = $entryDomain;
    }

    public function Index($category)
    {
        $viewModel = $this->_entryDomain->getEntryViewModel($category);

        return view('user.content.entries.entries', ['items' => $viewModel, 'path' => 'entry']);
    }
}
