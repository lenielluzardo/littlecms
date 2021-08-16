<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\WebContact;
use App\Http\Controllers\Controller;
use App\Services\Web\ContactService;

class ContactController extends Controller
{
    private $domain;

    function __construct(ContactService $contactDomain)
    {
        $this->domain = $contactDomain;
    }

    public function Index(Request $request)
    {
        $viewModel = $this->domain->GetIndexModel();
        
        if(!$viewModel->success)
        {
            return redirect()->back();
        }
        
        $cookie = $request->cookie('first_time_user_contact');
        if($cookie == null)
        {
            Cookie::queue(Cookie::make('first_time_user_contact', true, 30));
        }

        return view('web.contact.contact', ['viewModel' => $viewModel]);
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
