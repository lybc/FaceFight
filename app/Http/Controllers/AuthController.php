<?php

namespace App\Http\Controllers;

use App\Mail\ActiveUser;
use App\Model\User;
use App\Services\Auth;
use App\Utils;
use Identicon\Identicon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    private $_req;

    function __construct(Request $request)
    {
        $this->_req = $request;
    }

    public function login()
    {
        $this->validate($this->_req, config('validate.auth.login.rule'), config('validate.auth.login.msg'));
        $remember = false;
        if ($this->_req->has('remember')) $remember = true;
        if (Auth::login($this->_req->get('email'), $this->_req->get('password'), $remember)) {
            return redirect()->route('index');
        }
        return redirect()->route('error');
    }

    public function register()
    {
        $this->validate($this->_req, config('validate.auth.register.rule'), config('validate.auth.register.msg'));
        try {
            $user = Utils::createModel($this->_req->all(), User::class, ['repeatPassword']);
            Auth::register($user);
            redirect()->route('index');
        } catch (\Exception $e) {
            redirect()->route('error')->with('exception', $e);
        }

    }

    public function active()
    {
        $email = $this->_req->get('email');
        User::where('email', decrypt($email))->update(['isActive' => User::ACTIVE]);
    }

}
