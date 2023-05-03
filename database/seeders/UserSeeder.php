<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            # code...
            User::insert(
                [
                    "name" => Str::random(12),
                    "email" => Str::random(8).'@gmail.com',
                    "password" => Hash::make('password'),
                ]
                );
        }
    }
}
