<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Places_TagSeeder extends Seeder
{
   public function run()
   {
       $tags = [
           // Mengurutkan berdasarkan placeid (1-100)
           ['placeid' => 1, 'tagid' => 1],  // Hotel Tentrem
           ['placeid' => 2, 'tagid' => 1],  // Quest Hotel 
           ['placeid' => 3, 'tagid' => 1],  // Louis Kienne
           ['placeid' => 4, 'tagid' => 2],  // Mie Ayam Plombokan
           ['placeid' => 5, 'tagid' => 2],  // Tahu Gimbal
           ['placeid' => 6, 'tagid' => 2],  // Gudeg Koyor
           ['placeid' => 7, 'tagid' => 2],  // Lumpia
           ['placeid' => 8, 'tagid' => 2],  // Bandeng
           ['placeid' => 9, 'tagid' => 3],  // Dusun Semilir
           ['placeid' => 10, 'tagid' => 3], // Saloka
           ['placeid' => 11, 'tagid' => 3], // HW Tiger
           ['placeid' => 12, 'tagid' => 3], // Babyface
           ['placeid' => 13, 'tagid' => 4], // Lawang Sewu
           ['placeid' => 14, 'tagid' => 4], // Sam Poo Kong
           ['placeid' => 15, 'tagid' => 4], // Kota Lama
           ['placeid' => 16, 'tagid' => 4], // Tugu Muda
           ['placeid' => 17, 'tagid' => 4], // Grand Mosque
           ['placeid' => 18, 'tagid' => 3], // Wonderia Theme Park
           ['placeid' => 19, 'tagid' => 4], // Brown Canyon
           ['placeid' => 20, 'tagid' => 4], // Goa Kreo
           ['placeid' => 21, 'tagid' => 1], // Harris Hotel
           ['placeid' => 22, 'tagid' => 1], // Novotel
           ['placeid' => 23, 'tagid' => 2], // Waroeng Semawis
           ['placeid' => 24, 'tagid' => 3], // Contemporary Art Gallery  
           ['placeid' => 25, 'tagid' => 3], // Water Blaster
           ['placeid' => 26, 'tagid' => 4], // Puri Maerokoco
           ['placeid' => 27, 'tagid' => 4], // Zoo
           ['placeid' => 28, 'tagid' => 1], // Swiss-Belhotel
           ['placeid' => 29, 'tagid' => 2], // Semawis Food Court
           ['placeid' => 30, 'tagid' => 3], // Night Carnival
           ['placeid' => 31, 'tagid' => 1], // Star Hotel
           ['placeid' => 32, 'tagid' => 3], // Convention Center
           ['placeid' => 33, 'tagid' => 4], // Kampung Pelangi
           ['placeid' => 34, 'tagid' => 4], // Museum Ronggowarsito
           ['placeid' => 35, 'tagid' => 5], // Paragon Mall
           ['placeid' => 36, 'tagid' => 2], // Rasa Semarang
           ['placeid' => 37, 'tagid' => 4], // Gedong Songo
           ['placeid' => 38, 'tagid' => 4], // Marina Beach
           ['placeid' => 39, 'tagid' => 2], // ChiCha Tea
           ['placeid' => 40, 'tagid' => 4], // City Park
           ['placeid' => 41, 'tagid' => 2], // Cloud Kitchen
           ['placeid' => 42, 'tagid' => 4], // Heritage Museum
           ['placeid' => 43, 'tagid' => 2], // Sky Dining
           ['placeid' => 44, 'tagid' => 1], // Green Valley Resort
           ['placeid' => 45, 'tagid' => 5], // Art Deco Market
           ['placeid' => 46, 'tagid' => 3], // Digital Innovation Hub
           ['placeid' => 47, 'tagid' => 3], // Sport Center
           ['placeid' => 48, 'tagid' => 2], // Culinary Street
           ['placeid' => 49, 'tagid' => 4], // Eco Park
           ['placeid' => 50, 'tagid' => 2], // Heritage Coffee
           ['placeid' => 51, 'tagid' => 4], // Flower Garden 
           ['placeid' => 52, 'tagid' => 3], // Urban Gaming
           ['placeid' => 53, 'tagid' => 4], // Java Culture Center
           ['placeid' => 54, 'tagid' => 2], // Hill View Restaurant
           ['placeid' => 55, 'tagid' => 5], // Tech Mall
           ['placeid' => 56, 'tagid' => 3], // Harmony Spa
           ['placeid' => 57, 'tagid' => 4], // Street Art Gallery
           ['placeid' => 58, 'tagid' => 5], // Central Market
           ['placeid' => 59, 'tagid' => 4], // Adventure Park
           ['placeid' => 60, 'tagid' => 4], // Historic Train Station
           ['placeid' => 61, 'tagid' => 5], // Floating Market
           ['placeid' => 62, 'tagid' => 1], // Bamboo Resort
           ['placeid' => 63, 'tagid' => 3], // Digital Art Museum
           ['placeid' => 64, 'tagid' => 3], // Sunset Beach Club
           ['placeid' => 65, 'tagid' => 3], // Puppet Theater
           ['placeid' => 66, 'tagid' => 4], // Sky Bridge Park
           ['placeid' => 67, 'tagid' => 4], // Modern Art Center
           ['placeid' => 68, 'tagid' => 2], // Local Food Market
           ['placeid' => 69, 'tagid' => 4], // Science Discovery
           ['placeid' => 70, 'tagid' => 4], // Heritage Trail
           ['placeid' => 71, 'tagid' => 4], // Urban Farming
           ['placeid' => 72, 'tagid' => 3], // Crystal Convention
           ['placeid' => 73, 'tagid' => 4], // Historical Gallery
           ['placeid' => 74, 'tagid' => 2], // Riverside Food
           ['placeid' => 75, 'tagid' => 3], // VR Center
           ['placeid' => 76, 'tagid' => 4], // Batik Workshop
           ['placeid' => 77, 'tagid' => 1], // Mountain View Hotel
           ['placeid' => 78, 'tagid' => 3], // Sports Complex
           ['placeid' => 79, 'tagid' => 5], // Herbal Market
           ['placeid' => 80, 'tagid' => 4], // Lake View Park
           ['placeid' => 81, 'tagid' => 5], // Creative Hub
           ['placeid' => 82, 'tagid' => 3], // Dance Studio
           ['placeid' => 83, 'tagid' => 2], // Culinary Lab
           ['placeid' => 84, 'tagid' => 1], // Wellness Center
           ['placeid' => 85, 'tagid' => 3], // Music Studio
           ['placeid' => 86, 'tagid' => 4], // Science Park
           ['placeid' => 87, 'tagid' => 1], // Heritage Hotel
           ['placeid' => 88, 'tagid' => 5], // Library Complex
           ['placeid' => 89, 'tagid' => 3], // Youth Center
           ['placeid' => 90, 'tagid' => 3], // Pet Park
           ['placeid' => 91, 'tagid' => 5], // Craft Market
           ['placeid' => 92, 'tagid' => 3], // Skating Rink
           ['placeid' => 93, 'tagid' => 4], // Pottery Workshop
           ['placeid' => 94, 'tagid' => 5], // Business Center
           ['placeid' => 95, 'tagid' => 5], // Fashion House
           ['placeid' => 96, 'tagid' => 4], // Aquatic Center
           ['placeid' => 97, 'tagid' => 4], // Urban Forest
           ['placeid' => 98, 'tagid' => 3], // Film Studio
           ['placeid' => 99, 'tagid' => 5], // Innovation Center
           ['placeid' => 100, 'tagid' => 4], // Heritage Gallery
       ];

       DB::table('places_tags')->insert($tags);
   }
}