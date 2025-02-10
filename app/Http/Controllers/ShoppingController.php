<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingController extends Controller
{
    // Mendefinisikan tempat belanja
    private function getShoppingPlaces()
    {
        return [
            [
                'id' => 0,
                'name' => 'Lumpia Cik Me Me',
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
                'id' => 1,
                'name' => 'Bandeng Juwana',
                'image' => 'img/shopping/BandengJuwana.png',
                'description' => 'Premium milkfish dishes and souvenirs',
                'address' => 'Jl. Pandanaran No.57, Randusari, Semarang',
                'rating' => 4.8,
                'price_range' => 'Rp 25.000 - Rp 100.000',
                'opening_hours' => '07:00 - 21:00',
                'menu' => [
                    'Tahu Bakso',
                    'Bandeng Duri Lunak',
                    'Otak-otak Bandeng',
                    'Tahu Bakso'
                ]
            ],
        ];
    }

    // Menyediakan data review
    private function getReviews()
    {
        // Contoh data review dengan username
        return [
            0 => [
                ['rating' => 5, 'comment' => 'Great lumpia, must try!', 'username' => 'John Doe', 'created_at' => now()->subDays(1)],
                ['rating' => 4, 'comment' => 'Delicious but a bit too oily.', 'username' => 'Jane Smith', 'created_at' => now()->subDays(2)],
            ],
            1 => [
                ['rating' => 5, 'comment' => 'Best bandeng ever!', 'username' => 'David Miller', 'created_at' => now()->subDays(1)],
            ],
        ];
    }

    // Menampilkan daftar tempat belanja
    public function index()
    {
        $shoppingPlaces = $this->getShoppingPlaces();
        return view('shopping.index', compact('shoppingPlaces'));
    }

    // Menampilkan detail tempat belanja beserta ulasan
    public function show($id)
    {
        $shoppingPlaces = $this->getShoppingPlaces();
        $place = $shoppingPlaces[$id] ?? abort(404);
        $reviews = collect($this->getReviews()[$id] ?? [])->take(5);

        // Mengirim data tempat belanja dan ulasan ke tampilan
        return view('shopping.show', compact('place', 'reviews'));
    }
}
