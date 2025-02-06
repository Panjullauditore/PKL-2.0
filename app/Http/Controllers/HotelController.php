<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    private function getHotels()
    {
        return [
            [
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

    public function index()
    {
        $hotels = $this->getHotels();
        return view('hotel.index', compact('hotels'));
    }

    public function show($id)
    {
        $hotels = $this->getHotels();
        $hotel = $hotels[$id] ?? abort(404);
        return view('hotel.show', compact('hotel'));
    }
}