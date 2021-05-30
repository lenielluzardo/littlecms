<?php

namespace App\Domains\User;

use App\Domains\Domain;
use App\ViewModels\User\ContactViewModel;

class ContactDomain extends Domain
{
    public function __construct(ContactViewModel $contactViewModel)
    {
       parent::__construct($contactViewModel);
    }

    public function getModal()
    {
        return $this->viewModel->modal = [
            'id' => 'home-modal',
            'class' => 'contact-modal',
            'title' => '<h2>! Info !<h2>',
            'content' => "<p>Hello there!, if you want to contact me, please send me a message with one of the pre-selected subjects. I'll reply to you as soon as possible.</p>
            <br><p> Don't forget to take a look to my projects or posts, I know that you'll find some fun stuff there. Thank you for your interest, have a great day.</p>
            <br><span style=\" display:block; text-align:center;\"> Byeee! :)</span>",
            'button' => '<button id="modal-close-button"> Close </button>'
        ];
    }

}
