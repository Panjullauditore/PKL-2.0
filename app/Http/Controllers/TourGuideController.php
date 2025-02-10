<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    private function getTourGuides()
    {
        return [
            [
                'id' => 0,
                'name' => 'Budi Setiawan',
                'image' => 'img/tourguide/Man.png',
                'description' => 'Experienced local guide with extensive knowledge of Semarang\'s history and culture.',
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
                'id' => 1,
                'name' => 'Maria Susanti',
                'image' => 'img/tourguide/Woman.png',
                'description' => 'Multilingual tour guide specializing in architectural and heritage tours.',
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
    }

    private function getReviews()
    {
        // Contoh data review dengan username
        return [
            0 => [
                ['rating' => 5, 'comment' => 'Budi is an excellent guide! Highly recommended.', 'username' => 'John Doe', 'created_at' => now()->subDays(1)],
                ['rating' => 4, 'comment' => 'Very informative and friendly. A great experience!', 'username' => 'Jane Smith', 'created_at' => now()->subDays(3)],
            ],
            1 => [
                ['rating' => 5, 'comment' => 'Maria was very knowledgeable about the colonial architecture. Loved the tour!', 'username' => 'David Miller', 'created_at' => now()->subDays(2)],
            ]
        ];
    }

    public function index()
    {
        $guides = $this->getTourGuides();  // Fetch guides data
        return view('tour-guide.index', compact('guides'));  // Pass guides data to view
    }

    public function show($id)
    {
        $tourGuides = $this->getTourGuides();
        $guide = $tourGuides[$id] ?? abort(404);
        $reviews = collect($this->getReviews()[$id] ?? [])->take(5);

        // Pass both $guide and $reviews to the view
        return view('tour-guide.show', compact('guide', 'reviews'));
    }

}
