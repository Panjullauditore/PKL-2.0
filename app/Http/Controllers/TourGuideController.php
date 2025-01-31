<?php

namespace App\Http\Controllers;

class TourGuideController extends Controller
{
    public function index()
    {
        $guides = [
            [
                'name' => 'John Doe',
                'image' => 'images/guides/john.jpg',
                'description' => 'Pemandu wisata berpengalaman',
                'languages' => ['Indonesia', 'English'],
                'rating' => 4.9
            ],
            // Add more guides...
        ];

        return view('tour-guide.index', compact('guides'));
    }
}