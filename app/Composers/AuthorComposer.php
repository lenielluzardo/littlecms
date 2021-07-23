<?php

namespace App\Composers\Public;

use Illuminate\View\View;
use App\Models\User;

class AuthorComposer
{

    protected $author;

    public function __construct(User $userModel)
    {
        $this->author = $userModel->where('primary_email', config('app.admin.email'))->first()->get();
        dd($this->author);
    }

    public function compose(View $view)
    {
        dd($this->author);
        $view->with('author', $this->author);
    }
}
