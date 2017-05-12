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


}