<?php

namespace App\Services\Web;

use App\Services\Service;
use App\Models\Module;
use App\ViewModels\Web\ContactViewModel;

class ContactService extends Service
{
    public function __construct(ContactViewModel $contactViewModel)
    {
       parent::__construct($contactViewModel);
    }

    public function GetIndexModel()
    {

        $module = Module::where('name', 'contact')->first();
        
        if(!$module->active)
        {
            $this->viewModel->success = false;
            $this->viewModel->errors = "The Module is not active";

            return $this->viewModel->SetViewModelProperties($module);
        }


        $this->viewModel->viewPath = collect([
            [
             'path_name' => "Contact" ,
             'route_name' => "web.contact.index", 
             'route_values' => [ 'module' => '']
            ]
         ]);


        $this->viewModel->modal =  $this->GetModal();

        return $this->viewModel;
    }

    private function GetModal()
    {
        return [
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
