<?php

namespace App\Http\Controllers;

use App\Fan;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //个人设置页面
    public function setting()
    {
        return view('user/setting');
    }

    //个人设置行为
    public function settingStore()
    {

    }

    /*
     * 个人介绍页面
     */
    public function show(User $user)
    {
        // 这个人的关注／粉丝／文章
        $user = User::withCount(['stars', 'fans', 'posts'])->find($user->id);

        // 这个人的文章列表 10条
        $posts = $user->posts()->orderBy('created_at', 'desc')->take(10)->get();


        // 这个人粉了的人的关注／粉丝／文章
        $stars = $user->stars;
        $susers = User::whereIn('id', $stars->pluck('star_id'))->withCount(['stars', 'fans', 'posts'])->get();

        // 这个人的粉丝的关注／粉丝／文章
        $fans = $user->fans;
        $fusers = User::whereIn('id', $fans->pluck('fan_id'))->withCount(['stars', 'fans', 'posts'])->get();

        return view('user/show', compact('user', 'posts', 'fusers', 'susers'));
    }

    public function fan(User $user)
    {
        $me = \Auth::user();
        $me->doFan($user->id);

        return [
            'error' => 0,
            'msg' => ''
        ];
    }

    public function unfan(User $user)
    {
        $me = \Auth::user();
        $me->doUnFan($user->id);

        return [
            'error' => 0,
            'msg' => ''
        ];
    }

}
