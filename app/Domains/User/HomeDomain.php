<?php

namespace App\Domains\User;

use App\ViewModels\User\HomeViewModel;
use App\Domains\Domain;

class HomeDomain extends Domain
{
    public function __construct(HomeViewModel $homeViewModel)
    {
        parent::__construct($homeViewModel);
    }

    public function getModal()
    {
        return $this->viewModel->modal = [
            'id' => 'contact-modal',
            'class' => 'contact-modal',
            'title' => 'Welcome',
            'content' => "<p>   Hello there, I'm Leniel. I'm a software developer and designer,
                                and I love to mix these disciplines to create apps and to bring awsome ideas to life!
                                If you're a curious person, take a look around to my projects and posts.
                                Make sure to have fun, and get in contact with me to create something espectacular,
                                ¡wish you a good day!
                            </p>",
            'button' => '<button id="modal-close-button">Close</button>'

        ];
    }

}
