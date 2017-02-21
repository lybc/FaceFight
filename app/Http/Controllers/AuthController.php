<?php

namespace App\Http\Controllers;

use App\Mail\ActiveUser;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    private $_req;

    function __construct(Request $request)
    {
        $this->_req = $request;
    }

    public function register()
    {
//        $this->validate($this->_req, config('validate.auth.register.rule'), config('validate.auth.register.msg'));
//        $userId = User::insert([
//            'email' => $this->_req->get('email'),
//            'password' => password_hash($this->_req->get('password'), PASSWORD_DEFAULT),
//            'isActive' => User::NOT_ACTIVE,
//        ]);
        Mail::to($this->_req->get('email'))->send(new ActiveUser());

    }

    public function active()
    {

    }

}
