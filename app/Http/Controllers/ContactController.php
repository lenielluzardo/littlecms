<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\WebContact;

class ContactController extends Controller
{
    public function Index()
    {
        $modal = [
            'id' => 'home-modal',
            'class' => 'contact-modal',
            'title' => '<h2>! Info !<h2>',
            'content' => " Hello there!, if you want to contact me, please send me a message with one of the pre-selected subjects. I'll reply to you as soon as possible.
            <br><br> Don't forget to take a look to my projects or posts, I know that you'll find some fun stuff there. Thank you for your interest, have a great day.
            <br><br><span style=\" display:block; text-align:center;\"> Byeee! :) <span>"
        ];

        return view('user.content.contact.contact', ['modal' => $modal]);
    }

    public function contactFromWeb(Request $request)
    {
        //TODO: Implement newsletter feature

        $messages = [
            'g-recaptcha-response.required' => env('NOCAPTCHA_RESPONSE_REQUIRED'),
            'g-recaptacha-response.captcha' => env('NOCAPTCHA_RESPONSE_CAPTCHA')
        ];

        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'discipline' => 'required',
            'g-recaptcha-response' => 'required | captcha'
        ], $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //TODO: Implement Abstraction for Request Mapper
        //---

        $data = array(
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'discipline' => $request->input('discipline'),
            'message' => $request->input('comments'),
        );

        Mail::to(env('MAIL_TO'))->send(new WebContact($data));

        return redirect()->back()->with('success', env('NOTIFICATION_SUCCESS'));
    }
}
