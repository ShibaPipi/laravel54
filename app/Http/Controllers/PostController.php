<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Zan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //  文章列表页面
    public function index()
    {
//        dd(\Request::all());
//        $user = Auth::user();
        $posts = Post::orderBy('created_at', 'desc')->withCount(['comments', 'zans'])->paginate(6);
        return view("post/index", compact('posts', 'user'));
    }

    //  文章详情
    public function show(Post $post)
    {
        $post->load('comments');
        return view('post/show', compact('post'));
    }

    //  创建文章
    public function create()
    {
        return view('post/create');
    }

    //  创建逻辑
    public function store()
    {
        //  验证
        $this->validate(request(), [
            'title' => 'required|max:255|min:4',
            'content' => 'required|min:10',
        ]);

        $params = array_merge(request(['title', 'content']), ['user_id' => \Auth::id()]);

        //  逻辑
        Post::create($params);

        //  渲染
        return redirect('/posts');
    }

    //  编辑逻辑
    public function edit(Post $post)
    {
        return view("post/edit", compact('post'));
    }

    public function update(Post $post)
    {
        //  验证
        $this->validate(request(), [
            'title' => 'required|max:255|min:4',
            'content' => 'required|min:20',
        ]);

        $this->authorize('update', $post);

        //  逻辑
        $post->title = request('title');
        $post->content = request('content');
        $post->save();

        //  渲染
        return redirect("/posts/{$post->id}");
    }

    //  删除逻辑
    public function delete(Post $post)
    {
        $this->authorize('delete', $post);

        $post->status = -1;
        $post->save();

        return redirect('posts');
    }

    public function imageUpload(Request $request)
    {
//        dd($request->all());
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/'. $path);
    }

    /*
     * 文章评论保存
     */
    public function comment(Post $post)
    {
        $this->validate(request(),[
//            'post_id' => 'required|exists:posts,id',
            'content' => 'required|min:2',
        ]);

        $comment = new Comment();
        $comment->user_id = \Auth::id();
        $comment->content = request('content');
        $post->comments()->save($comment);

        return back();
    }

    public function zan(Post $post)
    {
        $param = [
            'user_id' => \Auth::id(),
            'post_id' => $post->id,
        ];

        Zan::firstOrCreate($param);
        return back();
    }

    public function unzan(Post $post)
    {
        $post->zan(\Auth::id())->delete();
        return back();
    }

    /*
     * 搜索页面
     */
    public function search()
    {
        $this->validate(request(),[
            'query' => 'required'
        ]);

        $query = request('query');

        $posts = Post::search($query)->paginate(5);
        return view('post/search', compact('posts', 'query'));
    }

}