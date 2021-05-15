<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Admin\MenuManagementDomain;

class MenuManagementController extends Controller
{
    public function __construct(MenuManagementDomain $domain)
    {
        $this->_domain = $domain;
    }

    public function Index()
    {
        $model = $this->_domain->getMenuManagementModel();

        // return view('admin.management.management', ['model'=> $model]);
    }

}
