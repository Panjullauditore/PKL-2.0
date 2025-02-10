<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    private function getHotels()
    {
        return [
            [
                'id' => 0,
                'name' => 'Hotel Tentrem Semarang',
                'image' => 'img/hotel/Tentrem.png',
                'description' => '5-star luxury hotel in downtown Semarang',
                'address' => 'Jl. Gajahmada No.123, Semarang',
                'rating' => 4.8,
                'price_range' => 'Rp 1.500.000 - Rp 5.000.000',
                'facilities' => [
                    'Swimming Pool',
                    'Spa',
                    'Restaurant',
                    'Gym',
                    'Meeting Rooms'
                ]
            ],
            [
                'id' => 1,
                'name' => 'Quest Hotel Semarang',
                'image' => 'img/hotel/QuestHotel.png',
                'description' => 'Modern business hotel in central location',
                'address' => 'Jl. Plampitan No.37-39, Semarang',
                'rating' => 4.5,
                'price_range' => 'Rp 600.000 - Rp 1.200.000',
                'facilities' => [
                    'Restaurant',
                    'Meeting Rooms',
                    'Free WiFi',
                    'Business Center'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Louis Kienne Pandanaran',
                'image' => 'img/hotel/LouisK.png',
                'description' => 'Serviced apartment style accommodation',
                'address' => 'Jl. Pandanaran No.18, Semarang',
                'rating' => 4.6,
                'price_range' => 'Rp 800.000 - Rp 1.500.000',
                'facilities' => [
                    'Kitchenette',
                    'Laundry Service',
                    'Fitness Center',
                    'Meeting Facilities'
                ]
            ],
        ];
    }

    private function getReviews()
    {
        return [
            0 => [
                ['rating' => 5, 'comment' => 'Excellent hotel with amazing service!', 'username' => 'John Doe', 'created_at' => now()->subDays(2)],
                ['rating' => 4, 'comment' => 'Comfortable rooms and great location.', 'username' => 'Jane Smith', 'created_at' => now()->subDays(5)],
                ['rating' => 4, 'comment' => 'Comfortable rooms and great location.', 'username' => 'Alice Brown', 'created_at' => now()->subDays(5)],
            ],
            1 => [
                ['rating' => 4, 'comment' => 'Good value for business travelers.', 'username' => 'Mark Lee', 'created_at' => now()->subDays(3)],
            ],
            2 => [
                ['rating' => 5, 'comment' => 'Perfect for long stays!', 'username' => 'Emma Davis', 'created_at' => now()->subDays(1)],
            ]
        ];
    }

    public function index()
    {
        $hotels = $this->getHotels();
        return view('hotel.index', compact('hotels'));
    }

    public function show($id)
    {
        $hotels = $this->getHotels();
        $hotel = $hotels[$id] ?? abort(404);
        $reviews = collect($this->getReviews()[$id] ?? [])->take(5);
        
        return view('hotel.show', compact('hotel', 'reviews'));
    }
}
