<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Models\User;

class AboutComposer{

    protected $author;

    public function __construct(User $userModel){
        $this->author = $userModel->find(1);
    }

    public function compose(View $view){
        $view->with('author', $this->author);
    }
}
