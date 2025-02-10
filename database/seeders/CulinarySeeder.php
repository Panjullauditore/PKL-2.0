<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CulinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $culinaryData = [
            // Mie Ayam Menu
            [   
                'id' => 1,
                'name' => 'Mie Ayam',
                'description' => 'Hidangan mie ayam klasik dengan tambahan bumbu spesial.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 2,
                'name' => 'Mie Ayam Pangsit',
                'description' => 'Mie ayam dengan pangsit tambahan yang renyah dan lezat.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 3,
                'name' => 'Mie Ayam Bakso',
                'description' => 'Mie ayam yang disajikan dengan bakso segar dan bergizi.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 4,
                'name' => 'Mie Ayam Jamur',
                'description' => 'Mie ayam dengan campuran jamur pilihan yang menambah cita rasa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 5,
                'name' => 'Mie Ayam Pangsit Bakso',
                'description' => 'Kombinasi sempurna mie ayam dengan pangsit dan bakso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 6,
                'name' => 'Mie Ayam Telor',
                'description' => 'Mie ayam dengan tambahan telur segar yang melengkapi cita rasa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 7,
                'name' => 'Mie Ayam Chasu',
                'description' => 'Mie ayam dengan potongan chasu (daging babi panggang) yang lembut.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 8,
                'name' => 'Mie Ayam Lada Hitam',
                'description' => 'Mie ayam dengan saus lada hitam yang pedas dan menggugah selera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 9,
                'name' => 'Mie Ayam Siomay',
                'description' => 'Mie ayam disajikan dengan siomay tambahan yang gurih.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 10,
                'name' => 'Mie Ayam Bakso Goreng',
                'description' => 'Mie ayam dengan bakso goreng renyah sebagai tambahan istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 11,
                'name' => 'Mie Ayam Lengkap Spesial',
                'description' => 'Paket lengkap mie ayam dengan berbagai tambahan pilihan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Yamie Ayam Menu
            [   
                'id' => 12,
                'name' => 'Yamie Ayam',
                'description' => 'Hidangan yamie ayam klasik dengan cita rasa istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 13,
                'name' => 'Yamie Ayam Pangsit',
                'description' => 'Yamie ayam dengan pangsit renyah sebagai pelengkap.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 14,
                'name' => 'Yamie Ayam Bakso',
                'description' => 'Yamie ayam disajikan dengan bakso segar pilihan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 15,
                'name' => 'Yamie Ayam Jamur',
                'description' => 'Yamie ayam dengan tambahan jamur yang lezat.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 16,
                'name' => 'Yamie Ayam Pangsit Bakso',
                'description' => 'Kombinasi yamie ayam dengan pangsit dan bakso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 17,
                'name' => 'Yamie Ayam Telor',
                'description' => 'Yamie ayam dengan tambahan telur segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 18,
                'name' => 'Yamie Ayam Chasu',
                'description' => 'Yamie ayam dengan potongan chasu lembut.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 19,
                'name' => 'Yamie Ayam Siomay',
                'description' => 'Yamie ayam disajikan dengan siomay gurih.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 20,
                'name' => 'Yamie Ayam Bakso Goreng',
                'description' => 'Yamie ayam dengan bakso goreng renyah.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 21,
                'name' => 'Yamie Ayam Lengkap Spesial',
                'description' => 'Paket lengkap yamie ayam dengan berbagai tambahan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Lamie Ayam Menu
            [   
                'id' => 22,
                'name' => 'Lamie Ayam',
                'description' => 'Hidangan lamie ayam klasik dengan cita rasa khas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 23,
                'name' => 'Lamie Ayam Pangsit',
                'description' => 'Lamie ayam dengan pangsit renyah yang memanjakan lidah.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 24,
                'name' => 'Lamie Ayam Bakso',
                'description' => 'Lamie ayam disajikan dengan bakso segar berkualitas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 25,
                'name' => 'Lamie Ayam Jamur',
                'description' => 'Lamie ayam dengan tambahan jamur pilihan yang gurih.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 26,
                'name' => 'Lamie Ayam Pangsit Bakso',
                'description' => 'Kombinasi sempurna lamie ayam dengan pangsit dan bakso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 27,
                'name' => 'Lamie Ayam Telor',
                'description' => 'Lamie ayam dengan tambahan telur segar yang melimpah.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 28,
                'name' => 'Lamie Ayam Chasu',
                'description' => 'Lamie ayam dengan potongan chasu yang empuk.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 29,
                'name' => 'Lamie Ayam Siomay',
                'description' => 'Lamie ayam disajikan dengan siomay sebagai pendamping.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 30,
                'name' => 'Lamie Ayam Bakso Goreng',
                'description' => 'Lamie ayam dengan bakso goreng renyah istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 31,
                'name' => 'Lamie Ayam Lengkap Spesial',
                'description' => 'Paket lengkap lamie ayam dengan berbagai tambahan pilihan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 32,
                'name' => 'Bakso Campur',
                'description' => 'Campuran bakso segar dengan berbagai pilihan isian.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 33,
                'name' => 'Bakso Sapi (Isi 6 Biji)',
                'description' => 'Bakso sapi berkualitas dengan 6 biji per porsi.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Nasi Goreng Menu
            [   
                'id' => 34,
                'name' => 'Nasi Goreng Hongkong',
                'description' => 'Nasi goreng dengan cita rasa khas Hongkong.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 35,
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng spesial dengan tambahan istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 36,
                'name' => 'Nasi Ayam Lada Hitam',
                'description' => 'Nasi dengan ayam berlada hitam yang pedas menggugah selera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 37,
                'name' => 'Nasi Ayam Saos Teur Asin',
                'description' => 'Nasi ayam dengan saus tahu asin yang unik.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Pangsit Menu
            [   
                'id' => 38,
                'name' => 'Pangsit Rebus (Isi 8)',
                'description' => 'Pangsit rebus lembut dengan isian berkualitas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 39,
                'name' => 'Pangsit Goreng (Isi 8)',
                'description' => 'Pangsit goreng renyah dengan isian istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 40,
                'name' => 'Siomay Udang Ayam (Isi 3)',
                'description' => 'Siomay dengan campuran udang dan ayam.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 41,
                'name' => 'Bakso Goreng Udang Ayam (Isi 3)',
                'description' => 'Bakso goreng dengan campuran udang dan ayam.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Dimsum Menu
            [   
                'id' => 42,
                'name' => 'Hakau Udang',
                'description' => 'Dimsum hakau dengan isian udang segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 43,
                'name' => 'Lunpia Kulit Tahu',
                'description' => 'Lunpia dengan kulit tahu renyah.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 44,
                'name' => 'Ceker Ayam',
                'description' => 'Ceker ayam empuk dengan bumbu spesial.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 45,
                'name' => 'Bakpao Chasiu',
                'description' => 'Bakpao dengan isian chasiu lezat.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Tahu Menu
            [   
                'id' => 46,
                'name' => 'Tahu Tek',
                'description' => 'Hidangan tahu dengan bumbu khas yang lezat.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 47,
                'name' => 'Tahu Tek + Telur',
                'description' => 'Tahu tek dengan tambahan telur segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 48,
                'name' => 'Tahu Gimbal',
                'description' => 'Tahu gimbal dengan campuran bahan berkualitas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 49,
                'name' => 'Tahu Gimbal + Telur',
                'description' => 'Tahu gimbal dengan tambahan telur istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Mbak Tum
            [   
                'id' => 50,
                'name' => 'Nasi Gudeg',
                'description' => 'Nasi dengan hidangan gudeg khas tradisional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 51,
                'name' => 'Lontong Opor',
                'description' => 'Lontong disajikan dengan opor yang lezat.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 52,
                'name' => 'Koyor',
                'description' => 'Hidangan spesial berbahan dasar koyor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 53,
                'name' => 'Ayam Goreng',
                'description' => 'Ayam goreng renyah dengan bumbu rahasia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 54,
                'name' => 'Babat Goreng',
                'description' => 'Babat goreng garing dengan cita rasa istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 55,
                'name' => 'Sambal Pete',
                'description' => 'Sambal pedas dengan tambahan pete segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Lumpia Cik Me Me Menu
            [
                'id' => 56,
                'name' => 'Lumpia Cik Me Me Raja Nusantara',
                'description' => 'Lumpia istimewa dengan cita rasa nusantara.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 57,
                'name' => 'Lumpia Cik Me Me Ikan Kakap',
                'description' => 'Lumpia dengan isian ikan kakap segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 58,
                'name' => 'Lumpia Cik Me Me Kepiting',
                'description' => 'Lumpia dengan isian daging kepiting pilihan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 59,
                'name' => 'Lumpia Cik Me Me KaJaMu',
                'description' => 'Lumpia dengan campuran bahan khas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 60,
                'name' => 'Lumpia Cik Me Me Original',
                'description' => 'Lumpia klasik dengan resep asli.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 61,
                'name' => 'Keripik Lumpia',
                'description' => 'Keripik lumpia renyah dan gurih.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Bandeng Juwana
            [   
                'id' => 62,
                'name' => 'Tahu Bakso',
                'description' => 'Tahu dengan campuran bakso yang lezat.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 63,
                'name' => 'Bandeng Duri Lunak',
                'description' => 'Ikan bandeng dengan duri yang telah dilunahkan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 64,
                'name' => 'Otak-otak Bandeng',
                'description' => 'Otak-otak yang terbuat dari ikan bandeng segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 65,
                'name' => 'Tahu Bakso',
                'description' => 'Variasi lain dari tahu bakso dengan cita rasa istimewa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Minuman Menu
            [
                'id' => 66,
                'name' => 'Teh Tawar',
                'description' => 'Teh hangat tanpa tambahan gula.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 67,
                'name' => 'Teh Manis',
                'description' => 'Teh segar dengan tambahan gula.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 68,
                'name' => 'Lemon Tea',
                'description' => 'Teh segar dengan perasan jeruk lemon.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 69,
                'name' => 'Jeruk',
                'description' => 'Air jeruk segar asli.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 70,
                'name' => 'Es Lychee Tea',
                'description' => 'Teh dingin dengan rasa lychee segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 71,
                'name' => 'Es Strawberry Tea',
                'description' => 'Teh dingin dengan rasa strawberry manis.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 72,
                'name' => 'Es Soda Gembira',
                'description' => 'Minuman soda yang menyegarkan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 73,
                'name' => 'Es Lychee Soda',
                'description' => 'Soda dingin dengan rasa lychee.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 74,
                'name' => 'Es Strawberry Soda',
                'description' => 'Soda dingin dengan rasa strawberry.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 75,
                'name' => 'Air Mineral',
                'description' => 'Air mineral dalam kemasan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   
                'id' => 76,
                'name' => 'Es Batu',
                'description' => 'Es batu segar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('culinary')->insert($culinaryData);
    }
}