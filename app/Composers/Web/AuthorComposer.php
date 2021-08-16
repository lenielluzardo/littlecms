<?php

namespace App\Composers\Web;

use Illuminate\View\View;
use App\Models\User;
use App\Mappers\UserMapper;

class AuthorComposer
{

    protected $userDto;

    public function __construct(User $model)
    {
        $user = $model->where('email', config('app.admin.email'))->first();
        $this->userDto = UserMapper::MapToDto($user);
    }

    public function compose(View $view)
    {
        $view->with('author', $this->userDto);
    }
}
