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
            ['placeid' => 69, 'tagid' => 2],  // Sate 29 Original
            ['placeid' => 70, 'tagid' => 2],  // RM Mbah Jingkrak
            ['placeid' => 71, 'tagid' => 2],  // Bebek Goreng H. Slamet
            ['placeid' => 72, 'tagid' => 2],  // Nasi Goreng Babat Pak Karmin
            ['placeid' => 73, 'tagid' => 2],  // Mie Jowo Pak Gareng
            ['placeid' => 74, 'tagid' => 2],  // Ayam Goreng Suharti
            ['placeid' => 75, 'tagid' => 2],  // Bakmi Jawa Pak Harjo
            ['placeid' => 76, 'tagid' => 2],  // Nasi Pindang Kudus
            ['placeid' => 77, 'tagid' => 2],  // Soto Selan
            ['placeid' => 78, 'tagid' => 2],  // Lunpia Express
            ['placeid' => 79, 'tagid' => 2],  // RM Sederhana
            ['placeid' => 80, 'tagid' => 2],  // Bakso Pak Sudi
            ['placeid' => 81, 'tagid' => 2],  // Warung Makan Bu Umi
            ['placeid' => 82, 'tagid' => 2],  // Mie Khoyer
            ['placeid' => 83, 'tagid' => 2],  // Ronde Jago
            ['placeid' => 84, 'tagid' => 2],  // Es Marem
            ['placeid' => 85, 'tagid' => 2],  // Warung Steak Tersanjung
            ['placeid' => 86, 'tagid' => 2],  // Angkringan Simpang Lima
            ['placeid' => 87, 'tagid' => 2],  // Mie Jawa Pak Min
            ['placeid' => 88, 'tagid' => 2],  // Warung Penyet Bu Sri
            ['placeid' => 89, 'tagid' => 2],  // Bakso Malang Pak No
            ['placeid' => 90, 'tagid' => 2],  // Sate Kambing 29
            ['placeid' => 91, 'tagid' => 2],  // Warung Seafood Pak Gun
            ['placeid' => 92, 'tagid' => 2],  // Kedai Beringin
            ['placeid' => 93, 'tagid' => 2],  // Nasi Goreng Kebon Sirih
            ['placeid' => 94, 'tagid' => 2],  // Warung Tahu Petis
            ['placeid' => 95, 'tagid' => 2],  // Mie Ayam Pak Nano
            ['placeid' => 96, 'tagid' => 2],  // Bakmi Jawa Pak Mul
            ['placeid' => 97, 'tagid' => 2],  // Sop Ayam Pak Min
            ['placeid' => 98, 'tagid' => 2],  // Pecel Yu Sri
            ['placeid' => 99, 'tagid' => 2],  // Soto Ayam Kudus Pak Supar
            ['placeid' => 100, 'tagid' => 2], // Nasi Pecel Bu Supi
            ['placeid' => 101, 'tagid' => 3], // Dusun Semilir
            ['placeid' => 102, 'tagid' => 3], // Saloka Theme Park
            ['placeid' => 103, 'tagid' => 3], // HW Tiger Club
            ['placeid' => 104, 'tagid' => 3], // Babyface Karaoke
            ['placeid' => 105, 'tagid' => 3], // Water Blaster Semarang
            ['placeid' => 106, 'tagid' => 3], // NAV Karaoke
            ['placeid' => 107, 'tagid' => 3], // Happy Puppy Karaoke
            ['placeid' => 108, 'tagid' => 3], // Cinema XXI Paragon
            ['placeid' => 109, 'tagid' => 3], // CGV Cinemas DP Mall
            ['placeid' => 110, 'tagid' => 3], // Semarang Town Square
            ['placeid' => 111, 'tagid' => 3], // Wonder Park
            ['placeid' => 112, 'tagid' => 3], // Club M2
            ['placeid' => 113, 'tagid' => 3], // E-Plaza
            ['placeid' => 114, 'tagid' => 3], // Avatar Club
            ['placeid' => 115, 'tagid' => 3], // The Room Gaming Center
            ['placeid' => 116, 'tagid' => 3], // Timezone Mall Ciputra
            ['placeid' => 117, 'tagid' => 3], // Amazon Futsal
            ['placeid' => 118, 'tagid' => 3], // Semarang Olympic Bowling
            ['placeid' => 119, 'tagid' => 3], // Victory Billiard
            ['placeid' => 120, 'tagid' => 3], // 3D Trick Art Museum
            ['placeid' => 121, 'tagid' => 3], // Semarang Contemporary Art Gallery
            ['placeid' => 122, 'tagid' => 3], // Old City 3D Museum
            ['placeid' => 123, 'tagid' => 3], // D'Project Dance Studio
            ['placeid' => 124, 'tagid' => 3], // Arena VR Gaming
            ['placeid' => 125, 'tagid' => 3], // Movie Box Cinema
            ['placeid' => 126, 'tagid' => 3], // Inul Vista Karaoke
            ['placeid' => 127, 'tagid' => 3], // Sports Hall Jatidiri
            ['placeid' => 128, 'tagid' => 3], // Q-Time Family KTV
            ['placeid' => 129, 'tagid' => 3], // Galaxy Billiard
            ['placeid' => 130, 'tagid' => 3], // Semarang Night Market
            ['placeid' => 131, 'tagid' => 3], // Fun World Mall Ciputra
            ['placeid' => 132, 'tagid' => 3], // Game Master Arena
            ['placeid' => 133, 'tagid' => 3], // Energy Entertainment
            ['placeid' => 134, 'tagid' => 3], // Laga Bola Futsal
            ['placeid' => 135, 'tagid' => 3], // Taman Hiburan Rakyat
            ['placeid' => 136, 'tagid' => 3], // Music Studio 27
            ['placeid' => 137, 'tagid' => 3], // Bounce Street Asia
            ['placeid' => 138, 'tagid' => 3], // Kid's Castle
            ['placeid' => 139, 'tagid' => 3], // Grand Studio Photo
            ['placeid' => 140, 'tagid' => 3], // Semarang Extreme Park
            ['placeid' => 141, 'tagid' => 3], // Art Performance Center
            ['placeid' => 142, 'tagid' => 3], // Digital Park
            ['placeid' => 143, 'tagid' => 3], // Adventure Zone
            ['placeid' => 144, 'tagid' => 3], // Ice Skating Rink
            ['placeid' => 145, 'tagid' => 3], // Royal Cinema
            ['placeid' => 146, 'tagid' => 3], // Ultimate Gaming Hub
            ['placeid' => 147, 'tagid' => 3], // Sky Adventure Park
            ['placeid' => 148, 'tagid' => 3], // Race Kart Arena
            ['placeid' => 149, 'tagid' => 3], // Live Music Cafe
            ['placeid' => 150, 'tagid' => 3], // Fantasy World
            ['placeid' => 151, 'tagid' => 4], // Lawang Sewu
            ['placeid' => 152, 'tagid' => 4], // Sam Poo Kong Temple
            ['placeid' => 153, 'tagid' => 4], // Kota Lama
            ['placeid' => 154, 'tagid' => 4], // Tugu Muda
            ['placeid' => 155, 'tagid' => 4], // Masjid Agung Jawa Tengah
            ['placeid' => 156, 'tagid' => 4], // Brown Canyon
            ['placeid' => 157, 'tagid' => 4], // Goa Kreo
            ['placeid' => 158, 'tagid' => 4], // Kampung Pelangi
            ['placeid' => 159, 'tagid' => 4], // Museum Ronggowarsito
            ['placeid' => 160, 'tagid' => 4], // Pantai Marina
            ['placeid' => 161, 'tagid' => 4], // Kelenteng Tay Kak Sie
            ['placeid' => 162, 'tagid' => 4], // Puri Maerokoco
            ['placeid' => 163, 'tagid' => 4], // Gereja Blenduk
            ['placeid' => 164, 'tagid' => 4], // Candi Gedong Songo
            ['placeid' => 165, 'tagid' => 4], // Museum Mandala Bhakti
            ['placeid' => 166, 'tagid' => 4], // Taman Budaya Raden Saleh
            ['placeid' => 167, 'tagid' => 4], // Pagoda Avalokitesvara
            ['placeid' => 168, 'tagid' => 4], // Kampung Wisata Taman Lele
            ['placeid' => 169, 'tagid' => 4], // Museum Kereta Api Ambarawa
            ['placeid' => 170, 'tagid' => 4], // Taman Indonesia Kaya
            ['placeid' => 171, 'tagid' => 4], // Vihara Buddhagaya
            ['placeid' => 172, 'tagid' => 4], // Kampoeng Batik Semarang
            ['placeid' => 173, 'tagid' => 4], // Taman Margasatwa
            ['placeid' => 174, 'tagid' => 4], // Museum Old City 3D
            ['placeid' => 175, 'tagid' => 4], // Bukit Cinta
            ['placeid' => 176, 'tagid' => 4], // Waduk Jatibarang
            ['placeid' => 177, 'tagid' => 4], // Taman Wilis
            ['placeid' => 178, 'tagid' => 4], // Hutan Wisata Tinjomoyo
            ['placeid' => 179, 'tagid' => 4], // Masjid Besar Kauman
            ['placeid' => 180, 'tagid' => 4], // Museum Jamu Jago
            ['placeid' => 181, 'tagid' => 4], // Taman Tabanas Gombel
            ['placeid' => 182, 'tagid' => 4], // Wisata Alam Semirang
            ['placeid' => 183, 'tagid' => 4], // Benteng Pendem
            ['placeid' => 184, 'tagid' => 4], // Pantai Maron
            ['placeid' => 185, 'tagid' => 4], // Taman Pandanaran
            ['placeid' => 186, 'tagid' => 4], // Wisata Umbul Sidomukti
            ['placeid' => 187, 'tagid' => 4], // Taman Tirto Agung
            ['placeid' => 188, 'tagid' => 4], // Curug Benowo
            ['placeid' => 189, 'tagid' => 4], // Kampung Bustaman
            ['placeid' => 190, 'tagid' => 4], // Taman Miniatur
            ['placeid' => 191, 'tagid' => 4], // Museum Rekor Indonesia
            ['placeid' => 192, 'tagid' => 4], // Air Terjun Semirang
            ['placeid' => 193, 'tagid' => 4], // Taman Unyil
            ['placeid' => 194, 'tagid' => 4], // Gua Maria Kerep
            ['placeid' => 195, 'tagid' => 4], // Kampung Tematik
            ['placeid' => 196, 'tagid' => 4], // Taman Sri Gunting
            ['placeid' => 197, 'tagid' => 4], // Museum Nyonya Meneer
            ['placeid' => 198, 'tagid' => 4], // Wisata Alam Ngesrep
            ['placeid' => 199, 'tagid' => 4], // Taman Bekas Pabrik
            ['placeid' => 200, 'tagid' => 4], // Monumen Tugu Soeharto
           ['placeid' => 201, 'tagid' => 5], // Paragon Mall
           ['placeid' => 202, 'tagid' => 5], // Mall Ciputra
           ['placeid' => 203, 'tagid' => 5], // DP Mall
           ['placeid' => 204, 'tagid' => 5], // Java Mall
           ['placeid' => 205, 'tagid' => 5], // Transmart Setiabudi
           ['placeid' => 206, 'tagid' => 5], // Pasar Johar
           ['placeid' => 207, 'tagid' => 5], // Central City Mall
           ['placeid' => 208, 'tagid' => 5], // Ada Swalayan
           ['placeid' => 209, 'tagid' => 5], // Dargo Plaza
           ['placeid' => 210, 'tagid' => 5], // Simpang Lima Plaza
           ['placeid' => 211, 'tagid' => 5], // Sri Ratu Mall
           ['placeid' => 212, 'tagid' => 5], // Mataram Mall
           ['placeid' => 213, 'tagid' => 5], // Giant Hypermarket
           ['placeid' => 214, 'tagid' => 5], // Toko Buku Gramedia
           ['placeid' => 215, 'tagid' => 5], // Pasar Bulu
           ['placeid' => 216, 'tagid' => 5], // Plaza Simpang Lima
           ['placeid' => 217, 'tagid' => 5], // Kanjengan Market
           ['placeid' => 218, 'tagid' => 5], // Semarang Creative Gallery
           ['placeid' => 219, 'tagid' => 5], // Rita Pasaraya
           ['placeid' => 220, 'tagid' => 5], // Pasar Peterongan
           ['placeid' => 221, 'tagid' => 5], // Ace Hardware
           ['placeid' => 222, 'tagid' => 5], // Matahari Department Store
           ['placeid' => 223, 'tagid' => 5], // Superindo
           ['placeid' => 224, 'tagid' => 5], // Indomaret Point
           ['placeid' => 225, 'tagid' => 5], // Pasar Karangayu
           ['placeid' => 226, 'tagid' => 5], // Mall Pemuda
           ['placeid' => 227, 'tagid' => 5], // Semarang Art Market
           ['placeid' => 228, 'tagid' => 5], // Metro Plaza
           ['placeid' => 229, 'tagid' => 5], // Lottemart
           ['placeid' => 230, 'tagid' => 5], // Pasar Gang Baru
           ['placeid' => 231, 'tagid' => 5], // Pasar Banyumanik
           ['placeid' => 232, 'tagid' => 5], // The Marketplace
           ['placeid' => 233, 'tagid' => 5], // Uniqlo Store
           ['placeid' => 234, 'tagid' => 5], // Pasar Rejomulyo
           ['placeid' => 235, 'tagid' => 5], // Electronic City
           ['placeid' => 236, 'tagid' => 5], // H&M Store
           ['placeid' => 237, 'tagid' => 5], // Pasar Ngaliyan
           ['placeid' => 238, 'tagid' => 5], // Sport Station
           ['placeid' => 239, 'tagid' => 5], // Pasar Pedurungan
           ['placeid' => 240, 'tagid' => 5], // Guardian
           ['placeid' => 241, 'tagid' => 5], // Zara Store
           ['placeid' => 242, 'tagid' => 5], // Pasar Langgar
           ['placeid' => 243, 'tagid' => 5], // Centro Department Store
           ['placeid' => 244, 'tagid' => 5], // Planet Ban
           ['placeid' => 245, 'tagid' => 5], // Pasar Waru
           ['placeid' => 246, 'tagid' => 5], // Courts Store
           ['placeid' => 247, 'tagid' => 5], // Pasar Tlogosari
           ['placeid' => 248, 'tagid' => 5], // Miniso
           ['placeid' => 249, 'tagid' => 5], // Pasar Sampangan
           ['placeid' => 250, 'tagid' => 5], // Erafone Megastore
       ];

       DB::table('places_tags')->insert($tags);
   }
}