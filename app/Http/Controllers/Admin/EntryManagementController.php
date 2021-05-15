<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Admin\EntryManagementDomain;

class EntryManagementController extends Controller
{
    public function __construct(EntryManagementDomain $domain)
    {
        $this->_domain = $domain;
    }

    public function Index()
    {
        $model = $this->_domain->getEntryManagementModel();

        return view('admin.content.management', ['model'=> $model]);
    }

}
