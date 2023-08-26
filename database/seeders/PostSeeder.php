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
            'title' => 'チーム開発会って？',
            'body' => 'チームで協力して一つの成果物を作るイベントです！メンバー全員で助け合いましょう！',
            'date' => '2000-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 2
        ]);
        DB::table('posts')->insert([
            'title' => 'ポポリポポ',
            'body' => 'ばしゃときれぼし',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1
        ]);
        
    }
}
