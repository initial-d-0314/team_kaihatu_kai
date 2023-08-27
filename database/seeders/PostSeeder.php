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
            'body' => '1番が2番のユーザーに送るよ',
            'date' => '2000-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 1,
            'user_id' => 2
        ]);
        DB::table('posts')->insert([
            'title' => 'ポポリポポ',
            'body' => '2番が1番に送るよ,これは見れるよ！',
            'date' => '2010-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 2,
            'user_id' => 1
        ]);
        DB::table('posts')->insert([
            'title' => 'ぴぎょはむ',
            'body' => '1から2番に送るよ,',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 1,
            'user_id' => 2
        ]);
        DB::table('posts')->insert([
            'title' => 'グルグルグルンガスト',
            'body' => '2から1番に送るよ',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 2,
            'user_id' => 1
        ]);
        
    }
}
