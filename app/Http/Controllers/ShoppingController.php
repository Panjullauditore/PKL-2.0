<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    protected $shoppingPlaces = [
        [
            'name' => 'Paragon Mall Semarang',
            'description' => 'A modern shopping destination in the heart of Semarang with a wide variety of stores and dining options.',
            'image' => 'images/shopping/paragon-mall.jpg',
            'address' => 'Jl. MT Haryono No.750-752, Semarang',
            'rating' => 4.5,
            'category' => 'Shopping Mall',
            'opening_hours' => '10:00 - 22:00',
            'brands' => [
                'Zara', 
                'H&M', 
                'Uniqlo', 
                'Nike', 
                'Adidas'
            ]
        ],
        [
            'name' => 'Java Mall Semarang',
            'description' => 'A popular shopping center offering a mix of retail, entertainment, and dining experiences.',
            'image' => 'images/shopping/java-mall.jpg',
            'address' => 'Jl. MT Haryono No.970, Semarang',
            'rating' => 4.2,
            'category' => 'Shopping Mall',
            'opening_hours' => '10:00 - 21:00',
            'brands' => [
                'Matahari', 
                'Sports Station', 
                'GOTO', 
                'Miniso'
            ]
        ]
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