<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Kashan",
                "email" => "abbaskashan234@gmail.com",
                "password" => Hash::make("kashan123"),
                "role" => 1,
            ],
            [
                "name" => "Kashan123",
                "email" => "kashan2209e@aptechgdn.net",
                "password" => Hash::make("kashan123"),
                "role" => 0,
            ],
            // Add more users as needed
        ]);
    }
    
}
