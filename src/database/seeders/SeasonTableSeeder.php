<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert(
            ['id' => 1, 'name' => '春']
        );
        DB::table('seasons')->insert(
            ['id' => 2, 'name' => '夏']
        );
        DB::table('seasons')->insert(
            ['id' => 3, 'name' => '秋']
        );
        DB::table('seasons')->insert(
            ['id' => 4, 'name' => '冬']
        );
    }
}
