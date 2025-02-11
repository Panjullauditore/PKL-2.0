<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\places;
use \App\Models\tags;
use \App\Models\places_tags;
use \App\Models\review;
use \App\Models\menu;
use Illuminate\Support\Facades\DB;

class PlacesController extends Controller
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

    

    public function index($category)
    {
        $tag = $category;
        $placeIDs = places_tags::join('tags', 'places_tags.tagID', '=', 'tags.id')
            ->where('tags.name', $category)
            ->pluck('places_tags.placeID');
        $places = places::whereIn('id', $placeIDs)->get();
        // dd($places);
        return view('places.index', compact('places', 'tag'));
    }

    public function show($id)
    {
        $places = places::where('id', $id)->get();
        $place = $places[0] ?? abort(404);
        $tags = places_tags::where('placeID', $id)->join('tags', 'places_tags.tagID', '=', 'tags.id')->get();
        $menu = menu::where('placeID', $id)->join('culinaries', 'menu.culinaryID', '=', 'culinaries.id')->get();
        $reviews = review::where('placeID', $id)->join('users', 'review.userID', '=', 'users.id')->get();
        //dd($place);
        
        return view('places.show', compact('place', 'reviews', 'tags', 'menu'));
    }

    public function storeReview(Request $request, $placeId)
    {
        dd($request);
        // Validasi inputan review
        review::create([
            'userID' => Auth::id(),
            'placeID' => $placeId,
            'rating' => $request->rating,
            'desc' => $request->desc,
        ]);

        return redirect()->back();
    }
}
