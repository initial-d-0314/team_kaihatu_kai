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
            'title' => 'ありがとうチーム開発会',
            'body' => '1番が2番のユーザーに送るよ',
            'date' => '2000-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 1,
            'user_id' => 2
        ]);
        DB::table('posts')->insert([
            'title' => 'おつかれさまチーム開発会',
            'body' => '2番が1番に送るよ,これは見れるよ！',
            'date' => '2010-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 2,
            'user_id' => 1
        ]);
        DB::table('posts')->insert([
            'title' => 'まだ見えない投稿',
            'body' => '1から2番に送るよ,',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 1,
            'user_id' => 2
        ]);
        DB::table('posts')->insert([
            'title' => '未来に送信される投稿',
            'body' => '2から1番に送るよ',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 2,
            'user_id' => 1
        ]);
        DB::table('posts')->insert([
            'title' => 'フロントエンドの熱闘',
            'body' => '2から1番に送るよ',
            'date' => '2020-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 1,
            'user_id' => 2
        ]);
        DB::table('posts')->insert([
            'title' => 'バックエンドの奮闘',
            'body' => '2から1番に送るよ',
            'date' => '2020-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' => 2,
            'user_id' => 1
        ]);
        DB::table('posts')->insert([
            'title' => '知恵熱の出る経験',
            'body' => '3から4番に送るよ',
            'date' => '2015-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'auth_send_user' =>3,
            'user_id' => 4
        ]);
        
    }
}
