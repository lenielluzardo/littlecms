<?php

namespace App\Services;

use App\Models\Advertisement;
use App\ViewModels\User\AdsViewModel;

class AdService
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
