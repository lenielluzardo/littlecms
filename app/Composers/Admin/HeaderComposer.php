<?php

namespace App\Composers\Admin;

use Illuminate\View\View;
use App\Models\Menu;

class HeaderComposer{

    protected $modules = [];

    public function __construct(Menu $menu){
        $this->modules = $menu->getAdminHeaderMenu();
        // dd($this->modules);
    }

    public function compose(View $view){
        $view->with('modules', $this->modules);
    }
}
