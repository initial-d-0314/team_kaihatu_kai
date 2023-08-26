<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class ReceiverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receivers')->insert([
            'title' => 'チーム開発会って？',
            'body' => '2番のユーザーに送るよ',
            'date' => '2000-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 1,
            'user_id' => 1
        ]);
        DB::table('receivers')->insert([
            'title' => 'ポポリポポ',
            'body' => '1番に送るよ',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 2,
            'user_id' => 2
        ]);
    }
}
