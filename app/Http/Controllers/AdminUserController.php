<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user');
    }

    public function create()
    {
        return view('admin.user');
    }

    public function edit($id)
    {
        return view('admin.user', compact('id'));
    }
}