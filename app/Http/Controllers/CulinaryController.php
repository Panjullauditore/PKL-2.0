<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CulinaryController extends Controller
{
    private function getKulinerPlaces()
    {
        return [
            [
                'id' => 0,
                'name' => 'Mie Ayam Plombokan',
                'image' => 'img/culinary/MieAyamPlombokan.png',
                'description' => 'Mie Ayam Plombokan is a typical chicken noodle dish served with chewy noodles, savory shredded chicken, and a rich broth. Added with toppings such as fried dumplings and sliced ​​spring onions, giving a delicious and tasty taste.',
                'address' => 'Jl. Raya Semarang - Gubug Km. 13, Bandungrejo, Mranggen, Demak Regency',
                'rating' => 4.7,
                'price_range' => 'Rp 25.000 - Rp 50.000',
                'opening_hours' => '05:00 - 22:00',
                'menu' => [
                    'MIE = Asin',
                    'YAMIE = Asin Manis',
                    'LAMIE = Asin Pedas',
                    'Bakso',
                    'Nasi Goreng',
                    'Pangsit',
                    'Dimsum'
                ]
            ],
            [
                'id' => 1,
                'name' => 'Tahu Gimbal Pak Edy',
                'image' => 'img/culinary/TahuGimbalPakEdy.png',
                'description' => 'Famous street food with unique peanut sauce',
                'address' => 'Jl. Pandanaran No.2, Mugassari, Semarang',
                'rating' => 4.5,
                'price_range' => 'Rp 25.000 - Rp 50.000',
                'opening_hours' => '12:00 - 22:00',
                'menu' => [
                    'Tahu Gimbal Komplit',
                    'Tahu Gimbal Biasa',
                    'Es Degan'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Gudeg Koyor Mbak Tum',
                'image' => 'img/culinary/GudegKoyor.png',
                'description' => 'Snug, simple eatery offering a cash-only menu of classic Javanese fare served till late.',
                'address' => 'Jl. MT. Haryono, Wonodri, Semarang',
                'rating' => 4.8,
                'price_range' => 'Rp 25.000 - Rp 50.000',
                'opening_hours' => '24 Hours',
                'menu' => [
                    'Nasi Gudeg',
                    'Lontong Opor',
                    'Ayam Goreng',
                    'Babat Goreng',
                    'Sambel Pete',
                    'Koyor'
                ]
            ],
        ];
    }

    private function getReviews()
    {
        // Example reviews with username
        return [
            0 => [
                ['rating' => 5, 'comment' => 'The chicken noodles are amazing!', 'username' => 'John Doe', 'created_at' => now()->subDays(1)],
                ['rating' => 4, 'comment' => 'Really tasty and flavorful.', 'username' => 'Jane Smith', 'created_at' => now()->subDays(3)],
            ],
            1 => [
                ['rating' => 5, 'comment' => 'Best street food in town!', 'username' => 'David Miller', 'created_at' => now()->subDays(2)],
            ],
            2 => [
                ['rating' => 5, 'comment' => 'Best street food in town!', 'username' => 'Cristiano Ronaldo', 'created_at' => now()->subDays(2)],
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
        $reviews = collect($this->getReviews()[$id] ?? [])->take(5); // Retrieve reviews

        return view('culinary.show', compact('place', 'reviews'));
    }

    public function storeReview(Request $request, $placeId)
    {
        // Validasi inputan review
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        // Create the review
        $review = [
            'rating' => $validatedData['rating'],
            'comment' => $validatedData['comment'],
            'username' => Auth::user() ? Auth::user()->name : 'Guest', // Get username from authenticated user
            'created_at' => now(),
        ];

        // Retrieve existing reviews
        $reviews = $this->getReviews();

        // Add the new review to the selected place
        if (!isset($reviews[$placeId])) {
            $reviews[$placeId] = [];
        }

        array_unshift($reviews[$placeId], $review); // Add new review at the top

        return response()->json([
            'rating' => $review['rating'],
            'comment' => $review['comment'],
            'username' => $review['username'],
            'created_at' => $review['created_at']->diffForHumans(),
        ]);
    }
}
