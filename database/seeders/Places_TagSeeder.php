<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Places_TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            ['placeid' => 1, 'tagid' => 1],   // Hotel Tentrem 
            ['placeid' => 2, 'tagid' => 1],   // Quest Hotel
            ['placeid' => 3, 'tagid' => 1],   // Louis Kienne
            ['placeid' => 4, 'tagid' => 1],   // Gumaya Tower Hotel
            ['placeid' => 5, 'tagid' => 1],   // Oakwood Hotel
            ['placeid' => 6, 'tagid' => 1],   // Grand Edge Hotel
            ['placeid' => 7, 'tagid' => 1],   // Dafam Hotel
            ['placeid' => 8, 'tagid' => 1],   // Star Hotel
            ['placeid' => 9, 'tagid' => 1],   // Amaris Hotel
            ['placeid' => 10, 'tagid' => 1],  // Ibis Budget
            ['placeid' => 11, 'tagid' => 1],  // Santika Hotel
            ['placeid' => 12, 'tagid' => 1],  // Whiz Hotel
            ['placeid' => 13, 'tagid' => 1],  // Novotel Semarang
            ['placeid' => 14, 'tagid' => 1],  // Swiss-Belhotel
            ['placeid' => 15, 'tagid' => 1],  // Harris Hotel
            ['placeid' => 16, 'tagid' => 1],  // Aston Hotel
            ['placeid' => 17, 'tagid' => 1],  // Horison Hotel
            ['placeid' => 18, 'tagid' => 1],  // Grand Candi Hotel
            ['placeid' => 19, 'tagid' => 1],  // Citradream Hotel
            ['placeid' => 20, 'tagid' => 1],  // Favehotel
            ['placeid' => 21, 'tagid' => 1],  // Patra Jasa Hotel
            ['placeid' => 22, 'tagid' => 1],  // @HOM Hotel
            ['placeid' => 23, 'tagid' => 1],  // Grasia Hotel
            ['placeid' => 24, 'tagid' => 1],  // Crown Hotel
            ['placeid' => 25, 'tagid' => 1],  // Plaza Hotel
            ['placeid' => 26, 'tagid' => 1],  // Neo Hotel
            ['placeid' => 27, 'tagid' => 1],  // Pandanaran Hotel
            ['placeid' => 28, 'tagid' => 1],  // MG Suites Hotel
            ['placeid' => 29, 'tagid' => 1],  // Hotel Ciputra
            ['placeid' => 30, 'tagid' => 1],  // Hotel Olympic
            ['placeid' => 31, 'tagid' => 1],  // Grand Arkenso
            ['placeid' => 32, 'tagid' => 1],  // Srondol Hotel
            ['placeid' => 33, 'tagid' => 1],  // Yellow Star Hotel
            ['placeid' => 34, 'tagid' => 1],  // MaxOne Hotel
            ['placeid' => 35, 'tagid' => 1],  // Garden Palace Hotel
            ['placeid' => 36, 'tagid' => 1],  // Ayola Hotel
            ['placeid' => 37, 'tagid' => 1],  // Hotel Indah Palace
            ['placeid' => 38, 'tagid' => 1],  // Hotel Semesta
            ['placeid' => 39, 'tagid' => 1],  // Hotel Dalu
            ['placeid' => 40, 'tagid' => 1],  // Hotel Merbabu
            ['placeid' => 41, 'tagid' => 1],  // Hotel Quirin
            ['placeid' => 42, 'tagid' => 1],  // Hotel Simpang
            ['placeid' => 43, 'tagid' => 1],  // Hotel Siliwangi
            ['placeid' => 44, 'tagid' => 1],  // Hotel Kesambi
            ['placeid' => 45, 'tagid' => 1],  // Hotel Bali
            ['placeid' => 46, 'tagid' => 1],  // Hotel Candi Baru
            ['placeid' => 47, 'tagid' => 1],  // Hotel Elizabeth
            ['placeid' => 48, 'tagid' => 1],  // Hotel Marina
            ['placeid' => 49, 'tagid' => 1],  // Hotel Metro
            ['placeid' => 50, 'tagid' => 1],  // Hotel Permata
            ['placeid' => 51, 'tagid' => 2],  // Spiegel Bar & Bistro
            ['placeid' => 52, 'tagid' => 2],  // Toko Oen
            ['placeid' => 53, 'tagid' => 2],  // Mie Ayam Plombokan
            ['placeid' => 54, 'tagid' => 2],  // Tahu Gimbal Pak Edy
            ['placeid' => 55, 'tagid' => 2],  // Gudeg Koyor Mbak Tum
            ['placeid' => 56, 'tagid' => 2],  // Lumpia Gang Lombok
            ['placeid' => 57, 'tagid' => 2],  // Bandeng Juwana
            ['placeid' => 58, 'tagid' => 2],  // Waroeng Semawis
            ['placeid' => 59, 'tagid' => 2],  // RM Lombok Ijo
            ['placeid' => 60, 'tagid' => 2],  // Wingko Babat Cap Kereta Api
            ['placeid' => 61, 'tagid' => 2],  // Tahu Pong Karanggayu
            ['placeid' => 62, 'tagid' => 2],  // Mie Kopyok Pak Dhuwur
            ['placeid' => 63, 'tagid' => 2],  // Soto Bangkong
            ['placeid' => 64, 'tagid' => 2],  // Sate Sapi Pak Kempleng
            ['placeid' => 65, 'tagid' => 2],  // Angkringan Blenduk
            ['placeid' => 66, 'tagid' => 2],  // Rice Bowl Grand Edge
            ['placeid' => 67, 'tagid' => 2],  // Kolam Susu Restaurant
            ['placeid' => 68, 'tagid' => 2],  // Kong Hu Restaurant
           
       ];

       DB::table('places_tags')->insert($tags);
   }
}