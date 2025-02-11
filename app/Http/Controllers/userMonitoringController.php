<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class userMonitoringController extends Controller
{
    public function index()
    {
        // Add your logic to fetch user data here
        return view('admin.userMonitoring');
    }

    public function show($id)
    {
        // Add your logic to fetch specific user data here
        return view('user-monitoring.show', compact('id'));
    }

    public function create()
    {
        return view('user-monitoring.create');
    }

    public function edit($id)
    {
        // Add your logic to fetch user data for editing
        return view('user-monitoring.edit', compact('id'));
    }
}