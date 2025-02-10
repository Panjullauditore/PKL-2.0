<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntertainmentController extends Controller
{
    private function getEntertainmentPlaces()
    {
        return [
            [
                'id' => 0,
                'name' => 'Dusun Semilir',
                'image' => 'img/entertainment/DusunSemilir.png',
                'description' => 'Dusun Semilir Semarang is a tourist attraction with an eco-friendly concept that offers parks, cafes, fun rides, and interesting photo spots at the foot of Mount Ungaran, perfect for relaxing and enjoying nature.',
                'address' => 'Jl. Soekarno-Hatta No.49, Bawen',
                'rating' => 4.6,
                'price_range' => 'Rp 30.000 - Rp 120.000',
                'opening_hours' => '08:00 - 21:00',
                'facilities' => [
                    'Photo Spots',
                    'Food Court',
                    'Children Playground',
                    'Souvenir Shop'
                ]
            ],
            [
                'id' => 1,
                'name' => 'Saloka Theme Park',
                'image' => 'img/entertainment/SalokaThemePark.png',
                'description' => 'Saloka Theme Park is the largest amusement park in Central Java, offering a variety of exciting rides and attractions for all ages, from roller coasters to educational zones. Located in Semarang, this place is perfect for families who want to enjoy time together.',
                'address' => 'Jl. Fatmawati No. 154, Tuntang',
                'rating' => 4.5,
                'price_range' => 'Rp 120.000 - Rp 200.000',
                'opening_hours' => '09:00 - 18:00',
                'facilities' => [
                    'Rides',
                    'Water Park',
                    'Food Court',
                    'Parking Area'
                ]
            ],
            [
                'id' => 2,
                'name' => 'HW Tiget Club',
                'image' => 'img/entertainment/HWTigerClub.png',
                'description' => 'HW Tiger Club Semarang is a famous nightlife venue in Semarang, with an energetic atmosphere and various exciting events. The club offers DJ music, drinks and a comfortable space to enjoy time with friends or celebrate special moments.',
                'address' => 'Jl. Cendrawasih No.24, Tj. Mas, Semarang',
                'rating' => 4.7,
                'price_range' => 'Rp 200.000 - Rp 500.000+',
                'opening_hours' => '20:00 - 04:00',
                'facilities' => [
                    'Live Music',
                    'Party',
                    'Cocktail Bar',
                    'Karaoke',
                    'VIP Room'
                ]
            ],
            [
                'id' => 3,
                'name' => 'Babyface Karaoke',
                'image' => 'img/entertainment/BabyfaceKaraoke.png',
                'description' => 'Babyface Karaoke Semarang is a popular karaoke venue in Semarang, offering a wide selection of songs, comfortable rooms, and a cozy atmosphere. This place is perfect for those who want to sing their hearts out and have fun with friends.',
                'address' => 'Blok E1/8, Jl. Anjasmoro Raya No.8, Tawangsari, Semarang',
                'rating' => 4.6,
                'price_range' => 'Rp 100.000 - Rp 500.000+',
                'opening_hours' => '14:00 - 03:00',
                'facilities' => [
                    'Live Music',
                    'Party',
                    'Cocktail Bar',
                    'Karaoke',
                    'VIP Room'
                ]
            ],
        ];
    }

    private function getReviews()
    {
        // Contoh data review dengan username
        return [
            0 => [
                ['rating' => 5, 'comment' => 'Awesome place for family time!', 'username' => 'John Doe', 'created_at' => now()->subDays(1)],
                ['rating' => 4, 'comment' => 'Great attractions and fun rides!', 'username' => 'Jane Smith', 'created_at' => now()->subDays(3)],
            ],
            1 => [
                ['rating' => 5, 'comment' => 'Amazing theme park!', 'username' => 'David Miller', 'created_at' => now()->subDays(2)],
            ],
            2 => [
                ['rating' => 4, 'comment' => 'Perfect for nightlife!', 'username' => 'Sarah Johnson', 'created_at' => now()->subDays(4)],
            ],
            3 => [
                ['rating' => 5, 'comment' => 'Great karaoke experience!', 'username' => 'Michael Brown', 'created_at' => now()->subDays(5)],
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
        $reviews = collect($this->getReviews()[$id] ?? [])->take(5);
        
        return view('entertainment.show', compact('place', 'reviews'));
    }

}
