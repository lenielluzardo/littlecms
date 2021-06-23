<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Domains\Admin\UserManagementDomain;

class UserManagementController extends Controller
{
    private $domain;

    public function __construct(UserManagementDomain $userManagementDomain)
    {
        $this->domain = $userManagementDomain;
    }

    public function Index()
    {
        // dd("admin user controller");

        $model = $this->domain->getUserManagementModel();

        return view('admin.modules.user.user', ['model' => $model]);
    }
}
