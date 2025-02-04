<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    protected $guides = [
        [
            'name' => 'Budi Setiawan',
            'description' => 'Experienced local guide with extensive knowledge of Semarang\'s history and culture.',
            'image' => 'images/tour-guides/budi-setiawan.jpg',
            'languages' => ['Indonesia', 'English', 'Javanese'],
            'rating' => 4.7,
            'price_range' => 'Rp 300.000 - Rp 500.000 per day',
            'phone' => '+62 812-3456-7890',
            'specialties' => [
                'Historical Tours',
                'Cultural Experiences',
                'Local Food Tours',
                'Photography Tours'
            ]
        ],
        [
            'name' => 'Maria Susanti',
            'description' => 'Multilingual tour guide specializing in architectural and heritage tours.',
            'image' => 'images/tour-guides/maria-susanti.jpg',
            'languages' => ['Indonesia', 'English', 'Dutch'],
            'rating' => 4.5,
            'price_range' => 'Rp 250.000 - Rp 450.000 per day',
            'phone' => '+62 821-9876-5432',
            'specialties' => [
                'Colonial Architecture',
                'Museum Tours',
                'Historical Walks',
                'Batik and Craft Workshops'
            ]
        ]
    ];

    public function index()
    {
        return view('tour-guide.index', [
            'guides' => $this->guides
        ]);
    }

    public function show($id)
    {
        // Validate the ID
        if ($id < 0 || $id >= count($this->guides)) {
            abort(404, 'Tour guide not found');
        }

        $guide = $this->guides[$id];

        return view('tour-guide.show', [
            'guide' => $guide
        ]);
    }
}