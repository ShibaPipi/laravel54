<?php

namespace App\Models;

class Fan extends Model
{
    /*
     * 粉丝用户
     */
    public function fuser()
    {
        return $this->hasOne(User::class, 'id', 'fan_id');
    }

    /*
     * 明星用户
     */
    public function suser()
    {
        return $this->hasOne(User::class, 'id', 'star_id');
    }
}
