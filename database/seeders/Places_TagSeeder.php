<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Places_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['placeid' => 1, 'tagid' => 1],
            ['placeid' => 2, 'tagid' => 1],
            ['placeid' => 3, 'tagid' => 1],
            ['placeid' => 4, 'tagid' => 2],
            ['placeid' => 5, 'tagid' => 2],
            ['placeid' => 6, 'tagid' => 2],
            ['placeid' => 7, 'tagid' => 5],
            ['placeid' => 8, 'tagid' => 5],
            ['placeid' => 9, 'tagid' => 3],
            ['placeid' => 10, 'tagid' => 3],
            ['placeid' => 11, 'tagid' => 3],
            ['placeid' => 12, 'tagid' => 3],
            ['placeid' => 13, 'tagid' => 4],
            ['placeid' => 14, 'tagid' => 4],
            ['placeid' => 15, 'tagid' => 4],
            ['placeid' => 16, 'tagid' => 4],
            
        ];

        DB::table('places_tags')->insert($tags);
    }
}