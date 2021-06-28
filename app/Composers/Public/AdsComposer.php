<?php

namespace App\Composers\Public;

use Illuminate\View\View;
use App\Services\AdService;

class AdsComposer
{

    protected $model;

    public function __construct(AdService $domain)
    {
        $this->model = $domain->getAdsModel();
    }

    public function compose(View $view)
    {
        $view->with('model', $this->model);
    }
}
