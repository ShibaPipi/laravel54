<?php
/**
 * Created by PhpStorm.
 * User: sunyaopeng
 * Date: 2018/7/30
 * Time: 17:52
 */

namespace App\Http\Controllers;


use App\Post;

class IndexController extends Controller
{
    public function index()
    {
//        dd(\Request::all());
//        $user = Auth::user();
//        $posts = Post::orderBy('created_at', 'desc')->withCount(['comments', 'zans'])->limit(3)->get();
//        dd($posts);
//        return view('index/index', compact('posts', 'user'));

        return view('index/index');
//        return view('welcome');
    }
}