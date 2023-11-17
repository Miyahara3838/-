<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'facility_name' => 'ゆらの里',
                'good' => '5',
                'temperature' => 'サウナ90℃　水風呂15℃',
                'outside_air' => '整い椅子は15脚',
                'meal' => '生姜焼き',
                'other' => 'ご飯は最高',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
            ]);
        DB::table('posts')->insert([
                'facility_name' => '湯いる',
                'good' => '2',
                'temperature' => 'サウナ80℃　水風呂150',
                'outside_air' => '整い椅子は10脚',
                'meal' => 'ハンバーグ',
                'other' => '食べてない',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
