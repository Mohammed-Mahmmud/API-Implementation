<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
    DB::table('users')->insert([
        'username' => 'Mohamed',
        'email' => 'mohamed@mail.com',
        'password' => Hash::make('123456789'),
        'phone' => '0123456789',
        'profile_picture' => '\storage\app\public\1.png',
        'remember_token' => Str::random(10),
    ]);

    }
}
