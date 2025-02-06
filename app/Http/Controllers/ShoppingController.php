<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    protected $shoppingPlaces = [
        [
            'name' => 'LumpiaCikMeMe',
            'image' => 'img/shopping/LumpiaCikMeMe.png',
            'description' => 'Unpretentious restaurant & shop specializing in rolls filled with crab, vegetables & fish.',
            'address' => 'Jl. Gajahmada No.107, Miroto',
            'rating' => 4.9,
            'price_range' => 'Rp 25.000 - Rp 50.000',
            'opening_hours' => '05:00 - 22:00',
            'menu' => [
                    'Lumpia Cik Me Me Raja Nusantara',
                    'Lumpia Cik Me Me Ikan Kakap',
                    'Lumpia Cik Me Me Kepiting',
                    'Lumpia Cik Me Me KaJaMu',
                    'Lumpia Cik Me Me Original',
                    'Keripik Lumpia'
                ]
        ],
        [
            'name' => 'Bandeng Juwana',
            'image' => 'img/shopping/BandengJuwana.png',
            'description' => 'Premium milkfish dishes and souvenirs',
            'address' => 'Jl. Gajahmada No.78-86, Kembangsari',
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

    public function index()
    {
        return view('shopping.index', [
            'shoppingPlaces' => $this->shoppingPlaces
        ]);
    }

    public function show($id)
    {
        // Validate the ID
        if ($id < 0 || $id >= count($this->shoppingPlaces)) {
            abort(404, 'Shopping place not found');
        }

        $place = $this->shoppingPlaces[$id];

        return view('shopping.show', [
            'place' => $place
        ]);
    }
}