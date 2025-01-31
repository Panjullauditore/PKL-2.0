<?php
namespace App\Http\Controllers;

class EntertainmentController extends Controller
{
    public function index()
    {
        $entertainmentPlaces = [
            [
                'name' => 'Dusun Semilir',
                'image' => 'images/entertainment/dusun-semilir.jpg',
                'description' => 'Tempat rekreasi modern dengan konsep alam',
                'address' => 'Jl. Soekarno-Hatta',
                'rating' => 4.6
            ],
            // Add more places...
        ];

        return view('entertainment.index', compact('entertainmentPlaces'));
    }
}
