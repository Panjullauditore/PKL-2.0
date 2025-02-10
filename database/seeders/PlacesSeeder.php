<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $placesData = [
            // Previous entries (Hotels, Culinary, Shopping, Entertainment)
            [
                'id' => 1,
                'name' => 'Hotel Tentrem Semarang',
                'phonenum' => '+622486005555',
                'email' => 'info.semarang@hoteltentrem.com',
                'location' => 'Jl. Gajahmada No.123, Semarang',
                'desc' => '5-star luxury hotel in downtown Semarang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Quest Hotel Semarang',
                'phonenum' => '+62243520808',
                'email' => 'SimpangLimaInfo@Quest-Hotels.com',
                'location' => 'Jl. Plampitan No.37-39, Semarang',
                'desc' => 'Modern business hotel in central location',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Louis Kienne Pandanaran',
                'phonenum' => '(024) 86453888',
                'email' => 'Info@louisworldwide.com',
                'location' => 'Jl. Pandanaran No.18, Semarang',
                'desc' => 'Serviced apartment style accommodation',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'Mie Ayam Plombokan',
                'phonenum' => '+6288980516870',
                'email' => '',
                'location' => 'Jl. Raya Semarang - Gubug Km. 13, Bandungrejo, Mranggen, Demak Regency',
                'desc' => 'Mie Ayam Plombokan is a typical chicken noodle dish served with chewy noodles, savory shredded chicken, and a rich broth.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'name' => 'Tahu Gimbal Pak Edy',
                'phonenum' => '+6281329407509',
                'email' => '',
                'location' => 'Jl. Pandanaran No.2, Mugassari, Semarang',
                'desc' => 'Famous street food with unique peanut sauce',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'name' => 'Gudeg Koyor Mbak Tum',
                'phonenum' => '+6281222770047',
                'email' => '',
                'location' => 'Jl. MT. Haryono, Wonodri, Semarang',
                'desc' => 'Snug, simple eatery offering a cash-only menu of classic Javanese fare served till late.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'name' => 'Lumpia Cik Me Me',
                'phonenum' => '+6285100000727',
                'email' => '',
                'location' => 'Jl. Gajahmada No.107, Miroto',
                'desc' => 'Unpretentious restaurant & shop specializing in rolls filled with crab, vegetables & fish.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'name' => 'Bandeng Juwana',
                'phonenum' => '+62811277575',
                'email' => '',
                'location' => 'Jl. Pandanaran No.57, Randusari, Semarang',
                'desc' => 'Premium milkfish dishes and souvenirs',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'name' => 'Dusun Semilir',
                'phonenum' => '(024) 6789-0123',
                'email' => 'info@dusunsemilir.com',
                'location' => 'Jl. Soekarno-Hatta No.49, Bawen',
                'desc' => 'Eco-friendly tourist attraction with parks, cafes, fun rides, and interesting photo spots at the foot of Mount Ungaran.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'name' => 'Saloka Theme Park',
                'phonenum' => '(024) 5432-1098',
                'email' => 'booking@salokathemepark.com',
                'location' => 'Jl. Fatmawati No. 154, Tuntang',
                'desc' => 'Largest amusement park in Central Java, offering exciting rides and attractions for all ages.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 11,
                'name' => 'HW Tiget Club',
                'phonenum' => '(024) 7890-1234',
                'email' => 'reservations@hwtigerclub.com',
                'location' => 'Jl. Cendrawasih No.24, Tj. Mas, Semarang',
                'desc' => 'Famous nightlife venue with an energetic atmosphere, DJ music, and exciting events.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'name' => 'Babyface Karaoke',
                'phonenum' => '(024) 2345-6789',
                'email' => 'booking@babyfacekaraoke.com',
                'location' => 'Blok E1/8, Jl. Anjasmoro Raya No.8, Tawangsari, Semarang',
                'desc' => 'Popular karaoke venue offering a wide selection of songs and comfortable rooms.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Tourist Attractions
            [
                'id' => 13,
                'name' => 'Lawang Sewu',
                'phonenum' => '(024) 3456-7890',
                'email' => 'info@lawangsewu.com',
                'location' => 'Jl. Pemuda No.160, Semarang',
                'desc' => 'A historic building with rich cultural significance, famous for its architectural beauty and historical importance.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 14,
                'name' => 'Sam Poo Kong Temple',
                'phonenum' => '(024) 5678-9012',
                'email' => 'contact@sampoookong.com',
                'location' => 'Jl. Simongan No.129, Semarang',
                'desc' => 'A historic Chinese temple complex showcasing beautiful traditional architecture and cultural heritage.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 15,
                'name' => 'Old Town (Kota Lama)',
                'phonenum' => '(024) 7890-1234',
                'email' => 'tourism@kotalama.semarang.go.id',
                'location' => 'Jl. Letjen Suprapto No.4, Semarang',
                'desc' => 'A beautiful colonial building in the historic Old Town district, representing Dutch architectural heritage.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 16,
                'name' => 'Tugu Muda Monument',
                'phonenum' => '(024) 2345-6789',
                'email' => 'info@tugumuda.semarang.go.id',
                'location' => 'Simpang Lima, Semarang',
                'desc' => 'An iconic monument symbolizing the spirit of struggle during the Indonesian independence movement.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('places')->insert($placesData);
    }
}