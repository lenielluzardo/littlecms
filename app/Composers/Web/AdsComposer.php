<?php

namespace App\Composers\Web;

use Illuminate\View\View;
use App\Services\Web\AdService;

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
