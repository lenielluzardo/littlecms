<?php

namespace App\Domains\User;

use App\Models\Advertisement;
use App\ViewModels\User\AdsViewModel;

class AdsDomain
{
    public function __construct() {}

    public function getAdsModel()
    {
        $viewModel = new AdsViewModel();
        $advertisement = new Advertisement();

        $viewModel->items = $advertisement->getAdds();

        return $viewModel;
    }

}
