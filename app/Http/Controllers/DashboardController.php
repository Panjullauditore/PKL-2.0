<?php

namespace App\Http\Controllers;
use App\Models\places;

class DashboardController extends Controller
{
   public function index()
   {
    //    $popularPlaces = array_filter(TouristAttractionController::$wisataPlaces, function($place) {
    //        return $place['is_popular'] ?? false;
    //    });
        $popular_places = places::where('ispopular', 1)->get();

        return view('dashboard', [
           'popularPlaces' => $popular_places,
       ]);
   }

   private function getCategories()
   {
       return [
           [
               'name' => 'Hotel', 
               'icon' => 'icons/hotel.png',
               'description' => 'Find comfortable accommodations',
               'route' => 'hotel.index'
           ],
           [
               'name' => 'Culinary',
               'icon' => 'icons/culinary.png', 
               'description' => 'Explore local cuisines',
               'route' => 'culinary.index'
           ],
           [
               'name' => 'Shopping',
               'icon' => 'icons/shopping.png',
               'description' => 'Shop local specialties',
               'route' => 'shopping.index'
           ],
           [
               'name' => 'Entertainment',
               'icon' => 'icons/entertainment.png',
               'description' => 'Fun activities and events',
               'route' => 'entertainment.index'
           ],
           [
               'name' => 'Tourist Attractions',
               'icon' => 'icons/tourist.png',
               'description' => 'Discover tourist spots',
               'route' => 'tourist-attraction.index'
           ],
           [
               'name' => 'Tour Guide',
               'icon' => 'icons/guide.png',
               'description' => 'Professional tour guides',
               'route' => 'tour-guide.index'
           ]
       ];
   }
}