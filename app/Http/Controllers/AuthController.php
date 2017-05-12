<?php

namespace App\Http\Controllers;

use App\Mail\ActiveUser;
use App\Model\User;
use App\Services\Auth;
use App\Utils;
use Identicon\Identicon;
use Illuminate\Http\Request;

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
        $user = User::where([
            'email' => $this->_req->get('email'),
            'password' => password_verify($this->_req->get('password'), PASSWORD_DEFAULT)
        ]);
        if ($user->exists()) {
            session(['user' => User::first()->toArray()]);
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
            redirect()->route('login');
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
