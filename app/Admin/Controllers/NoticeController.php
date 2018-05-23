<?php

namespace App\Admin\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice.index', compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
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
            'title' => 'required|min:2',
            'content' => 'required|min:3'
        ]);

        $notice = Notice::create(request(['title', 'content']));

        dispatch(new \App\Jobs\SendMessage($notice));

        return redirect('/admin/notices');
    }

}