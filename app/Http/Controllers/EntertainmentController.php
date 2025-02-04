<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    private function getEntertainmentPlaces()
    {
        return [
            [
                'name' => 'Dusun Semilir',
                'image' => 'images/dusun-semilir.jpg',
                'description' => 'Modern cultural park with traditional architecture',
                'address' => 'Jl. Soekarno-Hatta No.49, Bawen',
                'rating' => 4.6,
                'price_range' => 'Rp 25.000 - Rp 50.000',
                'opening_hours' => '08:00 - 21:00',
                'facilities' => [
                    'Photo Spots',
                    'Food Court',
                    'Children Playground',
                    'Souvenir Shop'
                ]
            ],
            [
                'name' => 'Saloka Theme Park',
                'image' => 'images/saloka.jpg',
                'description' => 'Family-friendly theme park with various attractions',
                'address' => 'Jl. Fatmawati No. 154, Tuntang',
                'rating' => 4.5,
                'price_range' => 'Rp 100.000 - Rp 200.000',
                'opening_hours' => '09:00 - 18:00',
                'facilities' => [
                    'Rides',
                    'Water Park',
                    'Food Court',
                    'Parking Area'
                ]
            ],
            [
                'name' => 'Lawang Sewu',
                'image' => 'images/lawang-sewu.jpg',
                'description' => 'Historic Dutch colonial building turned museum',
                'address' => 'Jl. Pemuda, Sekayu, Semarang',
                'rating' => 4.7,
                'price_range' => 'Rp 10.000 - Rp 20.000',
                'opening_hours' => '07:00 - 17:00',
                'facilities' => [
                    'Museum',
                    'Photo Spots',
                    'Tour Guide',
                    'Gift Shop'
                ]
            ],
        ];
    }

    public function index()
    {
        $entertainmentPlaces = $this->getEntertainmentPlaces();
        return view('entertainment.index', compact('entertainmentPlaces'));
    }

    public function show($id)
    {
        $entertainmentPlaces = $this->getEntertainmentPlaces();
        $place = $entertainmentPlaces[$id] ?? abort(404);
        return view('entertainment.show', compact('place'));
    }
}