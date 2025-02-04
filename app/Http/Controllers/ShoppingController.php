<?php
namespace App\Http\Controllers;

class ShoppingController extends Controller
{
    public function index()
{
   $shoppingPlaces = [
       [
           'name' => 'Pasar Johar',
           'image' => 'images/shopping/johar.jpg', 
           'description' => 'Pusat oleh-oleh khas Semarang',
           'address' => 'Jl. Pasar Johar',
           'rating' => 4.3,
           'category' => 'Traditional Market',
           'opening_hours' => '06:00 - 17:00'
       ],
       [
           'name' => 'Pasar Bulu',
           'image' => 'images/shopping/bulu.jpg',
           'description' => 'Pasar tradisional dengan beragam kebutuhan sehari-hari',
           'address' => 'Jl. Mgr Sugiyopranoto',
           'rating' => 4.0,
           'category' => 'Traditional Market',
           'opening_hours' => '05:00 - 17:00'
       ],
       [
           'name' => 'Central City Mall',
           'image' => 'images/shopping/central.jpg',
           'description' => 'Mall modern dengan berbagai brand ternama',
           'address' => 'Jl. Brigjend Sudiarto No.30',
           'rating' => 4.5,
           'category' => 'Mall',
           'opening_hours' => '10:00 - 22:00'
       ],
       [
           'name' => 'Paragon City Mall',
           'image' => 'images/shopping/paragon.jpg',
           'description' => 'Mall premium dengan konsep lifestyle center',
           'address' => 'Jl. Pemuda No.118',
           'rating' => 4.6,
           'category' => 'Mall',
           'opening_hours' => '10:00 - 22:00'
       ],
       [
           'name' => 'DP Mall',
           'image' => 'images/shopping/dpmall.jpg',
           'description' => 'Mall dengan beragam outlet fashion dan kuliner',
           'address' => 'Jl. Pemuda No.150',
           'rating' => 4.4,
           'category' => 'Mall',
           'opening_hours' => '10:00 - 21:00'
       ]
   ];

   return view('shopping.index', compact('shoppingPlaces'));
}
}