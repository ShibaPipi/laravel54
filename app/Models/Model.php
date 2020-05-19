<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    /**
     * @var array 不可以注入的字段
     */
    protected $guarded = [];
}
