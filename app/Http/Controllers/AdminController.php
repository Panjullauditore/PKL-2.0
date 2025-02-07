<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        $projects = [
            'Hotel' => 15,
            'Culinary' => 21,
            'Shopping' => 11,
            'Entertainment' => 17,
            'Tourist Attraction' => 13,
            'Tour Guide' => 19
        ];
        
        $projectTypes = array_keys($projects);
        
        return view('admin.dashboard', compact('projects', 'projectTypes'));
    }
}