<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    private function getKulinerPlaces()
    {
        return [
            [
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