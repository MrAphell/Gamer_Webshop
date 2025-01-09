<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Elektronika', 'description' => 'Mindenféle elektronikai eszköz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Játékok', 'description' => 'Szórakoztató játékok minden korosztálynak', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Kiegészítők', 'description' => 'Tartozékok és kiegészítők', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Számítástechnikai eszközök', 'description' => 'Minden ami számítástechnika', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Otthoni eszközök', 'description' => 'Különféle háztartási eszközök', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
