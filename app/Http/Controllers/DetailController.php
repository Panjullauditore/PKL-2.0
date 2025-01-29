<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show()
    {
        // Sample data - in real application, you would fetch this from database
        $hotel = [
            'name' => 'Quest Hotel Simpang Lima Semarang',
            'address' => 'Jl. Plampitan No.37-39, Bangunharjo, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50138',
            'phone' => '(024) 3520808',
            'rating' => 4.5,
            'reviews_count' => 104,
            'gallery' => [
                'room.jpg',
                'lobby.jpg',
                'pool.jpg',
                'exterior.jpg',
                'restaurant.jpg',
                'spa.jpg'
            ]
        ];

        return view('hotel.detail', compact('hotel'));
    }
}