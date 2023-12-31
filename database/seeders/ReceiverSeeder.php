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
            'title' => 'ありがとうチーム開発会',
            'body' => '2番のユーザーに送るよ',
            'date' => '2000-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 1,
            'receive_user' => 2,
            'user_id' => 1
        ]);
        DB::table('receivers')->insert([
            'title' => '長い本文のテスト(100文字)',
            'body' => 'あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお',
            'date' => '2010-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 2,
            'receive_user' => 1,
            'user_id' => 2
        ]);
        DB::table('receivers')->insert([
            'title' => 'まだ見えない投稿',
            'body' => '1から3番に送るよ',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 3,
            'receive_user' => 3,
            'user_id' => 1
        ]);
        DB::table('receivers')->insert([
            'title' => '未来への投稿',
            'body' => '3から1番に送るよ',
            'date' => '2050-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 4,
            'receive_user' => 1,
            'user_id' => 3
        ]);
        DB::table('receivers')->insert([
            'title' => 'フロントエンドの熱闘',
            'body' => '1から2番に送るよ',
            'date' => '2020-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 5,
            'receive_user' => 2,
            'user_id' => 1
        ]);
        DB::table('receivers')->insert([
            'title' => 'バックエンドの奮闘',
            'body' => '3から2番に送るよ',
            'date' => '2020-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 5,
            'receive_user' => 2,
            'user_id' => 3
        ]);
        DB::table('receivers')->insert([
            'title' => '知恵熱の出る経験',
            'body' => '3から4番に送るよ',
            'date' => '2015-01-01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'post_id' => 5,
            'receive_user' => 4,
            'user_id' => 3
            ]);
        
    }
}
