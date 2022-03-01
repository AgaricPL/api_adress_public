<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert(
            ['name' => 'Sierakowice Lewe', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );
        DB::table('city')->insert(
            ['name' => 'Skierniewice', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );
        DB::table('city')->insert(
            ['name' => 'Łowicz', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );
        DB::table('city')->insert(
            ['name' => 'Warszawa', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );
        DB::table('city')->insert(
            ['name' => 'Grodzisk Mazowiecki', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );
        DB::table('city')->insert(
            ['name' => 'Łódź', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );
        DB::table('city')->insert(
             ['name' => 'Mińsk Mazowiecki', 'created_at' => '2021-01-01', 'updated_at' => '2021-01-01']
        );


    }
}
