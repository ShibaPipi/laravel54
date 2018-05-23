<?php

namespace App\Admin\Controllers;

use App\AdminRole;
use App\AdminUser;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('admin.topic.index', compact('topics'));
    }

    public function create()
    {
        return view('admin.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:1'
        ]);

        Topic::create(request(['name']));

        return redirect('/admin/topics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();

        return [
            'error' => 0,
            'msg' => '',
        ];
    }
}