<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    
    
    
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ミヤッチ',
            'email' => 'Mhiroakimiyahra1102@gmail.com',
            'password' => '199811021'
        ]);
        
        DB::table('users')->insert([
            'name' => 'サウナー',
            'email' => 'hiroakimiyahra11022@gmail.com',
            'password' => '101102'
            
        ]);
        
        DB::table('users')->insert([
            'name' => 'サウナ好きすぎる',
            'email' => 'hiroakimiyahra11023@gmail.com',
            'password' => '111111'
            
        ]);
        
        DB::table('users')->insert([
            'name' => 'サウナ週2',
            'email' => 'hiroakimiyahra11024@gmail.com',
            'password' => '373737'
            
        ]);
        
    }
}
