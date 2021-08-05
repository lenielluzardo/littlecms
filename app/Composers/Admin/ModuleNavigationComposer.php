<?php

namespace App\Composers\Admin;

use Illuminate\View\View;
use App\Models\Menu;

class ModuleNavigationComposer
{
    protected $modules = [];

    public function __construct(Menu $menu)
    {
        $this->modules = $menu->GetAllModules();
    }

    public function compose(View $view)
    {
        $view->with('modules', $this->modules);
    }
}
