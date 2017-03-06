<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\User
 *
 * @mixin \Eloquent
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
}
