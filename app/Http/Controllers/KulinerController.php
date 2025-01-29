<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index()
    {
        $kulinerPlaces = [
            [
                'name' => 'Lunpia Gang Lombok',
                'image' => 'images/lunpia.jpg',
                'description' => 'Famous Semarang spring rolls',
                'address' => 'Gang Lombok No.11, Kranggan, Semarang Tengah',
                'rating' => 4.8,
                'price_range' => 'Rp 15.000 - Rp 25.000',
                'opening_hours' => '09:00 - 17:00'
            ],
            [
                'name' => 'Tahu Pong Semarang',
                'image' => 'images/tahu-pong.jpg',
                'description' => 'Traditional hollow tofu with special sauce',
                'address' => 'Jl. Gajah Mada, Semarang Tengah',
                'rating' => 4.5,
                'price_range' => 'Rp 10.000 - Rp 20.000',
                'opening_hours' => '10:00 - 21:00'
            ],
            [
                'name' => 'Wingko Babat Cap Kereta Api',
                'image' => 'images/wingko.jpg',
                'description' => 'Traditional coconut cake',
                'address' => 'Jl. Cendrawasih No.14, Semarang',
                'rating' => 4.7,
                'price_range' => 'Rp 25.000 - Rp 50.000',
                'opening_hours' => '07:00 - 19:00'
            ],
        ];

        return view('kuliner.index', compact('kulinerPlaces'));
    }
}