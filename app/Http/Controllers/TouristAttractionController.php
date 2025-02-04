<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    protected $wisataPlaces = [
        [
            'name' => 'Lawang Sewu',
            'description' => 'A historic building with rich cultural significance, famous for its architectural beauty and historical importance.',
            'image' => 'images/tourist-attractions/lawang-sewu.jpg',
            'address' => 'Jl. Pemuda No.160, Semarang',
            'rating' => 4.5,
            'opening_hours' => '9:00 - 16:00',
            'highlights' => [
                'Dutch Colonial Architecture',
                'Historical Guided Tours',
                'Photography Opportunities',
                'Museum Exhibits',
                'Night Tour Experience'
            ]
        ],
        [
            'name' => 'Tugu Muda Semarang',
            'description' => 'An iconic monument symbolizing the spirit of struggle during the Indonesian independence movement.',
            'image' => 'images/tourist-attractions/tugu-muda.jpg',
            'address' => 'Simpang Lima, Semarang',
            'rating' => 4.3,
            'opening_hours' => '24 Jam',
            'highlights' => [
                'Historical Significance',
                'City Landmark',
                'Public Park',
                'Photography Spot',
                'Cultural Symbol'
            ]
        ]
    ];

    public function index()
    {
        return view('tourist-attraction.index', [
            'wisataPlaces' => $this->wisataPlaces
        ]);
    }

    public function show($id)
    {
        // Validate the ID
        if ($id < 0 || $id >= count($this->wisataPlaces)) {
            abort(404, 'Tourist attraction not found');
        }

        $place = $this->wisataPlaces[$id];

        return view('tourist-attraction.show', [
            'place' => $place
        ]);
    }
}