<?php

namespace App\Http\Controllers;

use App\Mail\ActiveUser;
use App\Model\User;
use App\Utils;
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

    public function register()
    {
//        dd(config('validate.auth.register.rule'));
        $this->validate($this->_req, config('validate.auth.register.rule'), config('validate.auth.register.msg'));
        try {
            $user = Utils::createModel($this->_req->all(), User::class);
            DB::beginTransaction();
            $user->saveOrFail();
            DB::commit();
            Mail::to($this->_req->get('email'))->queue(new ActiveUser($user));
            redirect()->to(url('/login'));
        } catch (\Exception $e) {
            DB::rollback();
        }

    }

    public function active()
    {
        $email = $this->_req->get('email');
        User::where('email', $email)->update(['isActive' => User::ACTIVE]);
    }

}
