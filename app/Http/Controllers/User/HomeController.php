<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function Index()
    {
        $modal = [
            'id' => 'contact-modal',
            'class' => 'contact-modal',
            'title' => 'Welcome',
            'content' => "<p>
                                Hello there, I'm Leniel. I'm a software developer and designer,
                                and I love to mix these disciplines to create apps and to bring awsome ideas to life!
                                If you're a curious person, take a look around to my projects and posts.
                                Make sure to have fun, and get in contact with me to create something espectacular,
                                ¡wish you a good day!
                            </p>",
            'button' => '<button id="modal-close-button">Close</button>'

        ];


        return view('user.content.home', ['modal' => $modal]);
    }
}
