<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @php
            $today = new DateTime("now");
            $receivedate = date_create_from_format("Y-m-d",$post->date);
            $createdate = date_create_from_format("Y-m-d H:i:s",$post->created_at);
        @endphp
        @if($today < $receivedate)
            <p>まだ見る訳にはいかない！</p>
        @else
        <h1>詳細画面</h1>
        <div>
            <p>タイトル：{{ $post->title }}</p>
            <p>本文：{{ $post->body }}</p>
            <p>宛先：{{ $post->user->name }}</p>
            <p>届く日付：{{$post->date}}</p>
            
            <div>
            <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
        </div>
        @endif
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
