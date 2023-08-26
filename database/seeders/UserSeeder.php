<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'lev',
            'email' => 'lev@gmail.com',
            'password' => Hash::make('lev'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'tech',
            'email' => 'tech@gmail.com',
            'password' => Hash::make('tech'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}