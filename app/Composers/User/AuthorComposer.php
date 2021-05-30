<?php

namespace App\Composers\User;

use Illuminate\View\View;
use App\Models\User;

class AuthorComposer
{

    protected $author;

    public function __construct(User $userModel)
    {
        $this->author = $userModel->find(config('app.admin.email'));
    }

    public function compose(View $view)
    {
        $view->with('author', $this->author);
    }
}
