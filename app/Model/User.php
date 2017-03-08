<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

/**
 * App\Model\User
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $email
 * @property string $nickname
 * @property string $password
 * @property string $avatar
 * @property bool $isActive
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereUpdatedAt($value)
 */
class User extends Model
{
    const ACTIVE = 1;
    const NOT_ACTIVE = 0;

    protected $table = 'user';
    protected $dateFormat = 'Y-m-d H:i:s';

    protected $hidden = [
        'password'
    ];

    function register()
    {
        $this->isActive = User::NOT_ACTIVE;
        $this->_encryptPassword();
        $this->saveOrFail();
    }

    function login()
    {
        $users = self::where('email', $this->email)->get(['email', 'nickname', 'avatar', 'isActive']);
        session('user', $users);
    }

    private function _encryptPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }
}
