<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Models\Section;

class HeaderComposer{

    protected $sections = [];

    public function __construct(Section $sectionModel){
        $this->sections = $sectionModel->all();
    }

    public function compose(View $view){
        $view->with('sections', $this->sections);
    }
}
