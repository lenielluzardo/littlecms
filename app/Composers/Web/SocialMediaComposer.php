<?php

namespace App\Composers\Web;

use Illuminate\View\View;
use App\Models\Menu;

class SocialMediaComposer
{

    protected $links = [];

    public function __construct(Menu $menu)
    {
        $this->links = $menu->getSocialMediaMenu();
    }

    public function compose(View $view)
    {
        $view->with('links', $this->links);
    }
}
