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
                'desc' => 'Hidangan mie ayam klasik dengan tambahan bumbu spesial.',
                
            ],
            [   
                'id' => 2,
                'name' => 'Mie Ayam Pangsit',
                'desc' => 'Mie ayam dengan pangsit tambahan yang renyah dan lezat.',
                
            ],
            [   
                'id' => 3,
                'name' => 'Mie Ayam Bakso',
                'desc' => 'Mie ayam yang disajikan dengan bakso segar dan bergizi.',
                
            ],
            [   
                'id' => 4,
                'name' => 'Mie Ayam Jamur',
                'desc' => 'Mie ayam dengan campuran jamur pilihan yang menambah cita rasa.',
                
            ],
            [   
                'id' => 5,
                'name' => 'Mie Ayam Pangsit Bakso',
                'desc' => 'Kombinasi sempurna mie ayam dengan pangsit dan bakso.',
                
            ],
            [   
                'id' => 6,
                'name' => 'Mie Ayam Telor',
                'desc' => 'Mie ayam dengan tambahan telur segar yang melengkapi cita rasa.',
                
            ],
            [   
                'id' => 7,
                'name' => 'Mie Ayam Chasu',
                'desc' => 'Mie ayam dengan potongan chasu (daging babi panggang) yang lembut.',
                
            ],
            [   
                'id' => 8,
                'name' => 'Mie Ayam Lada Hitam',
                'desc' => 'Mie ayam dengan saus lada hitam yang pedas dan menggugah selera.',
                
            ],
            [   
                'id' => 9,
                'name' => 'Mie Ayam Siomay',
                'desc' => 'Mie ayam disajikan dengan siomay tambahan yang gurih.',
                
            ],
            [   
                'id' => 10,
                'name' => 'Mie Ayam Bakso Goreng',
                'desc' => 'Mie ayam dengan bakso goreng renyah sebagai tambahan istimewa.',
                
            ],
            [   
                'id' => 11,
                'name' => 'Mie Ayam Lengkap Spesial',
                'desc' => 'Paket lengkap mie ayam dengan berbagai tambahan pilihan.',
                
            ],

            // Yamie Ayam Menu
            [   
                'id' => 12,
                'name' => 'Yamie Ayam',
                'desc' => 'Hidangan yamie ayam klasik dengan cita rasa istimewa.',
                
            ],
            [   
                'id' => 13,
                'name' => 'Yamie Ayam Pangsit',
                'desc' => 'Yamie ayam dengan pangsit renyah sebagai pelengkap.',
                
            ],
            [   
                'id' => 14,
                'name' => 'Yamie Ayam Bakso',
                'desc' => 'Yamie ayam disajikan dengan bakso segar pilihan.',
                
            ],
            [   
                'id' => 15,
                'name' => 'Yamie Ayam Jamur',
                'desc' => 'Yamie ayam dengan tambahan jamur yang lezat.',
                
            ],
            [   
                'id' => 16,
                'name' => 'Yamie Ayam Pangsit Bakso',
                'desc' => 'Kombinasi yamie ayam dengan pangsit dan bakso.',
                
            ],
            [   
                'id' => 17,
                'name' => 'Yamie Ayam Telor',
                'desc' => 'Yamie ayam dengan tambahan telur segar.',
                
            ],
            [   
                'id' => 18,
                'name' => 'Yamie Ayam Chasu',
                'desc' => 'Yamie ayam dengan potongan chasu lembut.',
                
            ],
            [   
                'id' => 19,
                'name' => 'Yamie Ayam Siomay',
                'desc' => 'Yamie ayam disajikan dengan siomay gurih.',
                
            ],
            [   
                'id' => 20,
                'name' => 'Yamie Ayam Bakso Goreng',
                'desc' => 'Yamie ayam dengan bakso goreng renyah.',
                
            ],
            [   
                'id' => 21,
                'name' => 'Yamie Ayam Lengkap Spesial',
                'desc' => 'Paket lengkap yamie ayam dengan berbagai tambahan.',
                
            ],

            // Lamie Ayam Menu
            [   
                'id' => 22,
                'name' => 'Lamie Ayam',
                'desc' => 'Hidangan lamie ayam klasik dengan cita rasa khas.',
                
            ],
            [   
                'id' => 23,
                'name' => 'Lamie Ayam Pangsit',
                'desc' => 'Lamie ayam dengan pangsit renyah yang memanjakan lidah.',
                
            ],
            [   
                'id' => 24,
                'name' => 'Lamie Ayam Bakso',
                'desc' => 'Lamie ayam disajikan dengan bakso segar berkualitas.',
                
            ],
            [   
                'id' => 25,
                'name' => 'Lamie Ayam Jamur',
                'desc' => 'Lamie ayam dengan tambahan jamur pilihan yang gurih.',
                
            ],
            [   
                'id' => 26,
                'name' => 'Lamie Ayam Pangsit Bakso',
                'desc' => 'Kombinasi sempurna lamie ayam dengan pangsit dan bakso.',
                
            ],
            [   
                'id' => 27,
                'name' => 'Lamie Ayam Telor',
                'desc' => 'Lamie ayam dengan tambahan telur segar yang melimpah.',
                
            ],
            [   
                'id' => 28,
                'name' => 'Lamie Ayam Chasu',
                'desc' => 'Lamie ayam dengan potongan chasu yang empuk.',
                
            ],
            [   
                'id' => 29,
                'name' => 'Lamie Ayam Siomay',
                'desc' => 'Lamie ayam disajikan dengan siomay sebagai pendamping.',
                
            ],
            [   
                'id' => 30,
                'name' => 'Lamie Ayam Bakso Goreng',
                'desc' => 'Lamie ayam dengan bakso goreng renyah istimewa.',
                
            ],
            [   
                'id' => 31,
                'name' => 'Lamie Ayam Lengkap Spesial',
                'desc' => 'Paket lengkap lamie ayam dengan berbagai tambahan pilihan.',
                
            ],
            [   
                'id' => 32,
                'name' => 'Bakso Campur',
                'desc' => 'Campuran bakso segar dengan berbagai pilihan isian.',
                
            ],
            [   
                'id' => 33,
                'name' => 'Bakso Sapi (Isi 6 Biji)',
                'desc' => 'Bakso sapi berkualitas dengan 6 biji per porsi.',
                
            ],

            // Nasi Goreng Menu
            [   
                'id' => 34,
                'name' => 'Nasi Goreng Hongkong',
                'desc' => 'Nasi goreng dengan cita rasa khas Hongkong.',
                
            ],
            [   
                'id' => 35,
                'name' => 'Nasi Goreng Spesial',
                'desc' => 'Nasi goreng spesial dengan tambahan istimewa.',
                
            ],
            [   
                'id' => 36,
                'name' => 'Nasi Ayam Lada Hitam',
                'desc' => 'Nasi dengan ayam berlada hitam yang pedas menggugah selera.',
                
            ],
            [   
                'id' => 37,
                'name' => 'Nasi Ayam Saos Teur Asin',
                'desc' => 'Nasi ayam dengan saus tahu asin yang unik.',
                
            ],

            // Pangsit Menu
            [   
                'id' => 38,
                'name' => 'Pangsit Rebus (Isi 8)',
                'desc' => 'Pangsit rebus lembut dengan isian berkualitas.',
                
            ],
            [   
                'id' => 39,
                'name' => 'Pangsit Goreng (Isi 8)',
                'desc' => 'Pangsit goreng renyah dengan isian istimewa.',
                
            ],
            [   
                'id' => 40,
                'name' => 'Siomay Udang Ayam (Isi 3)',
                'desc' => 'Siomay dengan campuran udang dan ayam.',
                
            ],
            [   
                'id' => 41,
                'name' => 'Bakso Goreng Udang Ayam (Isi 3)',
                'desc' => 'Bakso goreng dengan campuran udang dan ayam.',
                
            ],

            // Dimsum Menu
            [   
                'id' => 42,
                'name' => 'Hakau Udang',
                'desc' => 'Dimsum hakau dengan isian udang segar.',
                
            ],
            [   
                'id' => 43,
                'name' => 'Lunpia Kulit Tahu',
                'desc' => 'Lunpia dengan kulit tahu renyah.',
                
            ],
            [   
                'id' => 44,
                'name' => 'Ceker Ayam',
                'desc' => 'Ceker ayam empuk dengan bumbu spesial.',
                
            ],
            [   
                'id' => 45,
                'name' => 'Bakpao Chasiu',
                'desc' => 'Bakpao dengan isian chasiu lezat.',
                
            ],

            // Tahu Menu
            [   
                'id' => 46,
                'name' => 'Tahu Tek',
                'desc' => 'Hidangan tahu dengan bumbu khas yang lezat.',
                
            ],
            [   
                'id' => 47,
                'name' => 'Tahu Tek + Telur',
                'desc' => 'Tahu tek dengan tambahan telur segar.',
                
            ],
            [   
                'id' => 48,
                'name' => 'Tahu Gimbal',
                'desc' => 'Tahu gimbal dengan campuran bahan berkualitas.',
                
            ],
            [   
                'id' => 49,
                'name' => 'Tahu Gimbal + Telur',
                'desc' => 'Tahu gimbal dengan tambahan telur istimewa.',
                
            ],

            // Mbak Tum
            [   
                'id' => 50,
                'name' => 'Nasi Gudeg',
                'desc' => 'Nasi dengan hidangan gudeg khas tradisional.',
                
            ],
            [   
                'id' => 51,
                'name' => 'Lontong Opor',
                'desc' => 'Lontong disajikan dengan opor yang lezat.',
                
            ],
            [   
                'id' => 52,
                'name' => 'Koyor',
                'desc' => 'Hidangan spesial berbahan dasar koyor.',
                
            ],
            [   
                'id' => 53,
                'name' => 'Ayam Goreng',
                'desc' => 'Ayam goreng renyah dengan bumbu rahasia.',
                
            ],
            [   
                'id' => 54,
                'name' => 'Babat Goreng',
                'desc' => 'Babat goreng garing dengan cita rasa istimewa.',
                
            ],
            [   
                'id' => 55,
                'name' => 'Sambal Pete',
                'desc' => 'Sambal pedas dengan tambahan pete segar.',
                
            ],

            // Lumpia Cik Me Me Menu
            [
                'id' => 56,
                'name' => 'Lumpia Cik Me Me Raja Nusantara',
                'desc' => 'Lumpia istimewa dengan cita rasa nusantara.',
                
            ],
            [
                'id' => 57,
                'name' => 'Lumpia Cik Me Me Ikan Kakap',
                'desc' => 'Lumpia dengan isian ikan kakap segar.',
                
            ],
            [   
                'id' => 58,
                'name' => 'Lumpia Cik Me Me Kepiting',
                'desc' => 'Lumpia dengan isian daging kepiting pilihan.',
                
            ],
            [   
                'id' => 59,
                'name' => 'Lumpia Cik Me Me KaJaMu',
                'desc' => 'Lumpia dengan campuran bahan khas.',
                
            ],
            [   
                'id' => 60,
                'name' => 'Lumpia Cik Me Me Original',
                'desc' => 'Lumpia klasik dengan resep asli.',
                
            ],
            [   
                'id' => 61,
                'name' => 'Keripik Lumpia',
                'desc' => 'Keripik lumpia renyah dan gurih.',
                
            ],

            // Bandeng Juwana
            [   
                'id' => 62,
                'name' => 'Tahu Bakso',
                'desc' => 'Tahu dengan campuran bakso yang lezat.',
                
            ],
            [   
                'id' => 63,
                'name' => 'Bandeng Duri Lunak',
                'desc' => 'Ikan bandeng dengan duri yang telah dilunahkan.',
                
            ],
            [   
                'id' => 64,
                'name' => 'Otak-otak Bandeng',
                'desc' => 'Otak-otak yang terbuat dari ikan bandeng segar.',
                
            ],
            [   
                'id' => 65,
                'name' => 'Tahu Bakso',
                'desc' => 'Variasi lain dari tahu bakso dengan cita rasa istimewa.',
                
            ],

            // Minuman Menu
            [
                'id' => 66,
                'name' => 'Teh Tawar',
                'desc' => 'Teh hangat tanpa tambahan gula.',
                
            ],
            [   
                'id' => 67,
                'name' => 'Teh Manis',
                'desc' => 'Teh segar dengan tambahan gula.',
                
            ],
            [   
                'id' => 68,
                'name' => 'Lemon Tea',
                'desc' => 'Teh segar dengan perasan jeruk lemon.',
                
            ],
            [   
                'id' => 69,
                'name' => 'Jeruk',
                'desc' => 'Air jeruk segar asli.',
                
            ],
            [   
                'id' => 70,
                'name' => 'Es Lychee Tea',
                'desc' => 'Teh dingin dengan rasa lychee segar.',
                
            ],
            [   
                'id' => 71,
                'name' => 'Es Strawberry Tea',
                'desc' => 'Teh dingin dengan rasa strawberry manis.',
                
            ],
            [   
                'id' => 72,
                'name' => 'Es Soda Gembira',
                'desc' => 'Minuman soda yang menyegarkan.',
                
            ],
            [   
                'id' => 73,
                'name' => 'Es Lychee Soda',
                'desc' => 'Soda dingin dengan rasa lychee.',
                
            ],
            [   
                'id' => 74,
                'name' => 'Es Strawberry Soda',
                'desc' => 'Soda dingin dengan rasa strawberry.',
                
            ],
            [   
                'id' => 75,
                'name' => 'Air Mineral',
                'desc' => 'Air mineral dalam kemasan.',
                
            ],
            [   
                'id' => 76,
                'name' => 'Es Batu',
                'desc' => 'Es batu segar.',
                
            ],
        ];
        DB::table('culinaries')->insert($culinaryData);
    }
}