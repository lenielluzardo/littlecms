<?php

namespace App\Composers\Public;

use Illuminate\View\View;
use App\Domains\User\AdsDomain;

class AdsComposer
{

    protected $model;

    public function __construct(AdsDomain $domain)
    {
        $this->model = $domain->getAdsModel();
    }

    public function compose(View $view)
    {
        $view->with('model', $this->model);
    }
}
