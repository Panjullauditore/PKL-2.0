<?php

namespace App\Http\Controllers;

class TourGuideController extends Controller
{
    public function index()
{
   $guides = [
       [
           'name' => 'John Doe',
           'image' => 'images/guides/john.jpg',
           'description' => 'Pemandu wisata berpengalaman',
           'languages' => ['Indonesia', 'English'],
           'rating' => 4.9,
           'price_range' => 'Rp 300.000 - Rp 500.000',
           'phone' => '081234567890'
       ],
       [
           'name' => 'Jane Smith',
           'image' => 'images/guides/jane.jpg',
           'description' => 'Spesialis wisata sejarah dan budaya',
           'languages' => ['Indonesia', 'English', 'Mandarin'],
           'rating' => 4.8,
           'price_range' => 'Rp 350.000 - Rp 600.000',
           'phone' => '082345678901'
       ],
       [
           'name' => 'Ahmad Yani',
           'image' => 'images/guides/ahmad.jpg',
           'description' => 'Ahli wisata kuliner lokal',
           'languages' => ['Indonesia', 'English', 'Japanese'],
           'rating' => 4.7,
           'price_range' => 'Rp 250.000 - Rp 450.000',
           'phone' => '083456789012'
       ]
   ];

   return view('tour-guide.index', compact('guides')); 
}
}