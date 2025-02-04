<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    private function getKulinerPlaces()
    {
        return [
            [
                'name' => 'Lunpia Gang Lombok',
                'image' => 'images/lunpia-gang-lombok.jpg',
                'description' => 'Iconic Semarang spring rolls since 1950',
                'address' => 'Gang Lombok No. 11, Semarang',
                'rating' => 4.7,
                'price_range' => 'Rp 15.000 - Rp 50.000',
                'opening_hours' => '08:00 - 17:00',
                'menu' => [
                    'Lunpia Original',
                    'Lunpia Ayam',
                    'Lunpia Udang',
                    'Lunpia Telur'
                ]
            ],
            [
                'name' => 'Tahu Gimbal Pak Edy',
                'image' => 'images/tahu-gimbal.jpg',
                'description' => 'Famous street food with unique peanut sauce',
                'address' => 'Jl. Pemuda No. 50, Semarang',
                'rating' => 4.5,
                'price_range' => 'Rp 10.000 - Rp 25.000',
                'opening_hours' => '16:00 - 22:00',
                'menu' => [
                    'Tahu Gimbal Komplit',
                    'Tahu Gimbal Biasa',
                    'Es Degan'
                ]
            ],
            [
                'name' => 'Bandeng Juwana',
                'image' => 'images/bandeng-juwana.jpg',
                'description' => 'Premium milkfish dishes and souvenirs',
                'address' => 'Jl. Pandanaran No. 57, Semarang',
                'rating' => 4.8,
                'price_range' => 'Rp 25.000 - Rp 100.000',
                'opening_hours' => '07:00 - 21:00',
                'menu' => [
                    'Bandeng Presto',
                    'Bandeng Asap',
                    'Otak-otak Bandeng',
                    'Bandeng Teriyaki'
                ]
            ],
        ];
    }

    public function index()
    {
        $kulinerPlaces = $this->getKulinerPlaces();
        return view('culinary.index', compact('kulinerPlaces'));
    }

    public function show($id)
    {
        $kulinerPlaces = $this->getKulinerPlaces();
        $place = $kulinerPlaces[$id] ?? abort(404);
        return view('culinary.show', compact('place'));
    }
}