<?php
/**
 * Created by PhpStorm.
 * User: sunyaopeng
 * Date: 2018/7/30
 * Time: 17:52
 */

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'desc')->withCount(['comments', 'zans'])->limit(3)->get();

        return view('index/index', compact('posts'));
    }
}