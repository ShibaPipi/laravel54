<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    //  默认是posts表,不是的话 看下面
    //  protected $table = 'posts222';
    protected $guarded = []; //  不可以注入的字段
//    protected $fillable = ['title', 'content'];    //  可以注入的字段
}
