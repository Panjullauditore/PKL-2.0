<?php
// app/Http/Controllers/WisataController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $wisataPlaces = [
            [
                'name' => 'Lawang Sewu',
                'image' => 'img/lawang-sewu.png',
                'description' => 'Historic Dutch colonial era building',
                'address' => 'Jl. Pemuda, Sekayu, Semarang Tengah',
                'rating' => 4.5,
                'opening_hours' => '08:00 - 17:00'
            ],
            [
                'name' => 'Sam Poo Kong',
                'image' => 'img/sampokong.png',
                'description' => 'Chinese temple with cultural significance',
                'address' => 'Jl. Simongan No.129, Bongsari, Semarang Barat',
                'rating' => 4.6,
                'opening_hours' => '07:00 - 18:00'
            ],
            [
                'name' => 'Kota Lama',
                'image' => 'img/kota-lama.png',
                'description' => 'Old City district with Dutch architecture',
                'address' => 'Jl. Letjen Suprapto, Tanjung Mas, Semarang Utara',
                'rating' => 4.7,
                'opening_hours' => '24 hours'
            ],
        ];

        return view('wisata.index', compact('wisataPlaces'));
    }
}