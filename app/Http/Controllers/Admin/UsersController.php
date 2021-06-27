<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class UsersController extends Controller
{
    private $domain;

    public function __construct(UserService $userService)
    {
        $this->domain = $userService;
    }

    public function Index()
    {
        // dd("# Breakpoint # Admin > UsersController > Index");

        $model = $this->domain->getUserManagementModel();

        return view('admin.modules.users.users', ['model' => $model]);
    }

    public function GetUser ()
    {

    }

    public function PostUser(Request $request)
    {
        // dd('before validation');
        $isValid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
                'nickname' => ['required', 'string', 'max:255'],
                // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        // $validator = Validator::make($request->all(), [
        //         'name' => ['required', 'string', 'max:255'],
        //         'nickname' => ['required', 'string', 'max:255'],
        //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //         'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     // 'g-recaptcha-response' => 'required | captcha'
        // ]);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // dd('passed validation');
        // dd($request->input());

        $this->domain->SaveUser($request->input());

        // dd("admin user controller");
        // $user = auth()->user();
        // dd($user);
        // dd($request->input());

        $model = $this->domain->getUserManagementModel();

        return view('admin.modules.user.user', ['model' => $model]);
    }
}
