<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\EntryService;
use App\Models\Entry;

class EntriesController extends Controller
{
    public function __construct(EntryService $domain)
    {
        $this->_domain = $domain;
    }

    public function Index()
    {
        $model = $this->_domain->getEntryManagementModel();

        return view('admin.modules.entries.entries', [ 'model' => Entry::all()]);
    }

}
