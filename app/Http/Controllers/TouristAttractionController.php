<?php

namespace App\Http\Controllers;

class TouristAttractionController extends Controller
{
    public static $wisataPlaces = [
        [
            'name' => 'Lawang Sewu',
            'description' => 'A historic building with rich cultural significance, famous for its architectural beauty and historical importance.',
            'image' => 'img/lawang-sewu.png',
            'address' => 'Jl. Pemuda No.160, Semarang',
            'rating' => 4.5,
            'opening_hours' => '9:00 - 16:00',
            'highlights' => [
                'Dutch Colonial Architecture',
                'Historical Guided Tours',
                'Photography Opportunities',
                'Museum Exhibits',
                'Night Tour Experience'
            ],
            'is_popular' => true
        ],
        [
            'name' => 'Sam Poo Kong Temple',
            'description' => 'A historic Chinese temple complex showcasing beautiful traditional architecture and cultural heritage.',
            'image' => 'img/sampookong.png',
            'address' => 'Jl. Simongan No.129, Semarang',
            'rating' => 4.6,
            'opening_hours' => '7:00 - 20:00',
            'highlights' => [
                'Chinese Architecture',
                'Cultural Heritage',
                'Religious Site',
                'Photography Spot',
                'Historical Tours'
            ],
            'is_popular' => true
        ],
        [
            'name' => 'Old Town (Kota Lama)',
            'description' => 'A beautiful colonial building in the historic Old Town district, representing Dutch architectural heritage.',
            'image' => 'img/kota-lama.png',
            'address' => 'Jl. Letjen Suprapto No.4, Semarang',
            'rating' => 4.4,
            'opening_hours' => '8:00 - 17:00',
            'highlights' => [
                'Colonial Architecture',
                'Historic District',
                'Cultural Heritage',
                'Photography Spot',
                'Walking Tours'
            ],
            'is_popular' => true
        ],
        [
            'name' => 'Tugu Muda Monument',
            'description' => 'An iconic monument symbolizing the spirit of struggle during the Indonesian independence movement.',
            'image' => 'images/tourist-attractions/tugu-muda.jpg',
            'address' => 'Simpang Lima, Semarang',
            'rating' => 4.3,
            'opening_hours' => '24 Hours',
            'highlights' => [
                'Historical Significance',
                'City Landmark',
                'Public Park',
                'Photography Spot',
                'Cultural Symbol'
            ],
            'is_popular' => false
        ]
    ];

    public function index()
    {
        return view('tourist-attraction.index', [
            'wisataPlaces' => self::$wisataPlaces,
            'popularPlaces' => array_filter(self::$wisataPlaces, fn($place) => $place['is_popular'] ?? false)
        ]);
    }

    public function show($id)
    {
        if ($id < 0 || $id >= count(self::$wisataPlaces)) {
            abort(404, 'Tourist attraction not found');
        }
        return view('tourist-attraction.show', ['place' => self::$wisataPlaces[$id]]);
    }
}