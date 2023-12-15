<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facads\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 20; $i++) { 
            DB::table('user')->insert([
                'name' => $faker->name,
                'emaail' =>$faker->emaail,
                'email_verified_at'=>now(),
                'password'=>Hash::make('password'),
                'created-at'=> now(),
                'updated-at'=> now(),

            ]);
        }

    }
}
