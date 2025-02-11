<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['id'=> '1','name' => 'Hotel'],
            ['id'=> '2','name' => 'Restaurant'],
            ['id'=> '3','name' => 'Entertainment'],
            ['id'=> '4','name' => 'Tourist Attraction'],
            ['id'=> '5','name' => 'Shopping'],
        ];

        DB::table('tags')->insert($tags);
    }
}