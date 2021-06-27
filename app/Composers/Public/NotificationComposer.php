<?php

namespace App\Composers\Public;

use Illuminate\View\View;
use App\Models\Notification;



class NotificationComposer
{

    protected $notification;

    public function __construct()
    {
        $this->notification = Notification::latest()->first();
    }

    public function compose(View $view)
    {
        $view->with('notification', $this->notification);
    }
}
