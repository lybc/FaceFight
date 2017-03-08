<?php
namespace App\Services;


use App\Mail\ActiveUser;
use App\Model\User;
use Illuminate\Support\Facades\Mail;

class Auth
{
    static function register(User $user)
    {
        $user->isActive = User::NOT_ACTIVE;
        $user->password = password_hash($user->password, PASSWORD_DEFAULT);
        $user->saveOrFail();
        Mail::to($user->email)->queue(new ActiveUser($user));
    }

    static function login($email, $password, $rememberMe = false)
    {
        $user = User::where('email', $email)->first();
        if (password_verify($password, $user->password)) {
            self::saveSession($user);
            return true;
        }
        return false;
    }

    static function saveSession(User $user)
    {
        $userArr = $user->toArray();
        unset($userArr['password']);
        session(['user' => $userArr]);
    }


}