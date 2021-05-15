<?php

namespace App\Composers\User;

use Illuminate\View\View;
use App\Models\Menu;

class FooterSocialComposer{

    protected $links = [];

    public function __construct(Menu $menu)
    {
        $this->links = $menu->getUserSocialMenu();
    }

    public function compose(View $view)
    {
        $view->with('links', $this->links);
    }
}
