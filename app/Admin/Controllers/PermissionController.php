<?php

namespace App\Admin\Controllers;

use App\AdminPermission;
use App\AdminUser;

class PermissionController extends Controller
{
    // 权限列表
    public function index()
    {
        $permissions = \App\AdminPermission::paginate(10);
        return view('admin/permission/index', compact('permissions'));
    }

    // 权限创建
    public function create()
    {
        return view('admin/permission/add');
    }

    // 角色权限实际行为
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

        AdminPermission::create(request(['name', 'description']));

        return redirect('/admin/permissions');
    }
}