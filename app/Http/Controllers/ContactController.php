<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WebContact;

class ContactController extends Controller
{
    public function getIndex(){
        return view('contact.index');
    }
    public function contactFromWeb(Request $request){

        $data = array(
            'name' => $request->input('fullname'),
            'from' => $request->input('email'),
            'subject' => $request->input('subject'),
            'discipline' => $request->input('discipline'),
            'message' => $request->input('comments'),
        );

        Mail::to(env('MAIL_TO'))
        ->send(new WebContact($data));

        return redirect()->back()->with('success', env('NOTIFICATION_SUCCESS'));
    }
}
