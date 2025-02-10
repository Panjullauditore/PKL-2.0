<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    // Define the tourist attractions data
    private function getTouristAttractions()
    {
        return [
            [
                'id' => 0,
                'name' => 'Lawang Sewu',
                'description' => 'A historic building with rich cultural significance, famous for its architectural beauty and historical importance.',
                'image' => 'img/touristattraction/LawangSewu.png',
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
                'is_popular' => true,
            ],
            [
                'id' => 1,
                'name' => 'Sam Poo Kong Temple',
                'description' => 'A historic Chinese temple complex showcasing beautiful traditional architecture and cultural heritage.',
                'image' => 'img/touristattraction/SamPooKong.png',
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
                'is_popular' => true,
            ],
            [
                'id' => 2,
                'name' => 'Old Town (Kota Lama)',
                'description' => 'A beautiful colonial building in the historic Old Town district, representing Dutch architectural heritage.',
                'image' => 'img/touristattraction/KotaLama.png',
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
                'is_popular' => true,
            ],
            [
                'id' => 3,
                'name' => 'Tugu Muda Monument',
                'description' => 'An iconic monument symbolizing the spirit of struggle during the Indonesian independence movement.',
                'image' => 'img/touristattraction/TuguMuda.png',
                'address' => 'Simpang Lima, Semarang',
                'rating' => 4.3,
                'opening_hours' => '24 Hours',
                'highlights' => [
                    'Historical Significance',
                    'City Landmark',
                    'Public Park',
                    'Photography Spot',
                    'Cultural Symbol'
                ]
            ]
        ];
    }

    // Fetch tourist attractions and pass to view
    public function index()
    {
        // Get all tourist attractions data
        $wisataPlaces = $this->getTouristAttractions();  // Fetch tourist attractions data

        return view('tourist-attraction.index', [
            'wisataPlaces' => $wisataPlaces,  // Pass the variable to the view
        ]);
    }

    // Display a specific tourist attraction along with reviews
    public function show($id)
    {
        $touristAttractions = $this->getTouristAttractions();
        $place = $touristAttractions[$id] ?? abort(404);
        $reviews = collect($this->getReviews()[$id] ?? [])->take(5);

        return view('tourist-attraction.show', compact('place', 'reviews')); // Passing 'reviews' correctly
    }

    // Example of reviews data for each tourist attraction
    private function getReviews()
    {
        return [
            0 => [
                ['rating' => 5, 'comment' => 'A fantastic place with historical significance!', 'username' => 'John Doe', 'created_at' => now()->subDays(1)],
                ['rating' => 4, 'comment' => 'Very interesting and informative. Great for history buffs!', 'username' => 'Jane Smith', 'created_at' => now()->subDays(3)],
            ],
            1 => [
                ['rating' => 5, 'comment' => 'Great spot for photography and learning about Chinese culture!', 'username' => 'David Miller', 'created_at' => now()->subDays(2)],
            ],
            2 => [
                ['rating' => 4, 'comment' => 'A perfect spot for a walk and photography!', 'username' => 'Sarah Johnson', 'created_at' => now()->subDays(4)],
            ],
            3 => [
                ['rating' => 5, 'comment' => 'An iconic landmark that symbolizes the country’s history.', 'username' => 'Michael Brown', 'created_at' => now()->subDays(5)],
            ],
        ];
    }
}
