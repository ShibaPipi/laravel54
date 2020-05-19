<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    // 文章列表
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    /*
     * 我的粉丝
     */
    public function fans()
    {
        return $this->hasMany(Fan::class, 'star_id', 'id');
    }

    /*
     * 我粉的人
     */
    public function stars()
    {
        return $this->hasMany(Fan::class, 'fan_id', 'id');
    }

    // 关注某人
    public function doFan($uid)
    {
        $fan = new Fan();
        $fan->star_id = $uid;

        return $this->stars()->save($fan);
    }

    // 取消关注
    public function doUnFan($uid)
    {
        $fan = new Fan();
        $fan->star_id = $uid;

        return $this->stars()->delete($fan);
    }

    /*
     * 当前这个人是否被uid粉了
     */
    public function hasFan($uid)
    {
        return $this->fans()->where('fan_id', $uid)->count();
    }

    /*
     * 当前这个人是否关注uid了
     */
    public function hasStar($uid)
    {
        return $this->stars()->where('star_id', $uid)->count();
    }

    /*
     * 我收到的通知
     */
    public function notices()
    {
        return $this->belongsToMany(Notice::class, 'user_notice', 'user_id', 'notice_id')->withPivot(['user_id', 'notice_id']);
    }

    /*
     * 增加通知
     */
    public function addNotice($notice)
    {
        return $this->notices()->save($notice);
    }

    /*
     * 减少通知
     */
    public function deleteNotice($notice)
    {
        return $this->notices()->detach($notice);
    }

}
