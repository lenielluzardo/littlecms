<?php

namespace App\Composers\Public;

use Illuminate\View\View;
use App\Models\Menu;

class HeaderModulesComposer
{

    protected $menuModules;

    public function __construct(Menu $menu)
    {
        $this->menuModules = $menu->getUserHeaderMenu();
    }

    public function compose(View $view)
    {
        $view->with('modules', $this->menuModules);
    }
}
