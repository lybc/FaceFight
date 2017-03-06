<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Images
 *
 * @mixin \Eloquent
 */
class Images extends Model
{
    protected $table = 'images';

    protected $dateFormat = 'Y-m-d H:i:s';
}
