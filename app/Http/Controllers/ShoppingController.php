<?php
namespace App\Http\Controllers;

class ShoppingController extends Controller
{
    public function index()
    {
        $shoppingPlaces = [
            [
                'name' => 'Pasar Johar',
                'image' => 'images/shopping/johar.jpg',
                'description' => 'Pusat oleh-oleh khas Semarang',
                'address' => 'Jl. Pasar Johar',
                'rating' => 4.3
            ],
            // Add more places...
        ];

        return view('shopping.index', compact('shoppingPlaces'));
    }
}