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
           'rating' => 4.6,
           'price_range' => 'Rp 25.000 - Rp 50.000',
           'opening_hours' => '08:00 - 21:00'
       ],
       [
           'name' => 'Water Blaster',
           'image' => 'images/entertainment/water-blaster.jpg', 
           'description' => 'Wahana permainan air dengan berbagai fasilitas',
           'address' => 'Jl. Marina Raya',
           'rating' => 4.4,
           'price_range' => 'Rp 50.000 - Rp 100.000',
           'opening_hours' => '09:00 - 18:00'
       ],
       [
           'name' => 'Taman Wilis',
           'image' => 'images/entertainment/taman-wilis.jpg',
           'description' => 'Taman kota dengan fasilitas olahraga',
           'address' => 'Jl. Wilis',
           'rating' => 4.2,
           'price_range' => 'Gratis',
           'opening_hours' => '24 jam'
       ],
       [
           'name' => 'Old City 3D Trick Art Museum',
           'image' => 'images/entertainment/3d-museum.jpg',
           'description' => 'Museum seni 3D interaktif',
           'address' => 'Jl. Letjen Suprapto No.26',
           'rating' => 4.3,
           'price_range' => 'Rp 30.000 - Rp 50.000',
           'opening_hours' => '09:00 - 17:00'
       ]
   ];

   return view('entertainment.index', compact('entertainmentPlaces'));
}
}
