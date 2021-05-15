<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Models\Menu;
use App\Models\MenuItem;

class UserNavigationComposer{

    protected $menuItems = [];

    public function __construct(Menu $menu)
    {
        $this->menuItems = $menu->find('user')->items;
    }

    public function compose(View $view)
    {
        $view->with('items', $this->menuItems);
    }
}
