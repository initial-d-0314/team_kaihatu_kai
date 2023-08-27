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
            $receivedate = date_create_from_format("Y-m-d",$receiver->date);
            $createdate = date_create_from_format("Y-m-d H:i:s",$receiver->created_at);
        @endphp
        @if($today < $receivedate)
            <p>まだ見る訳にはいかない！<\p>
        @else
        <h1>詳細画面</h1>
        <div>
            <p>タイトル：{{ $receiver->title }}</p>
            <p>本文：{{ $receiver->body }}</p>
            <p>送り主：{{ $receiver->user->name }}</p>
            <p>届く日付：{{ $receiver->date}}</p>
            
            @if($receiver->image_url)
            <div>
                <img src="{{ $receiver->image_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
        </div>
        @endif
        <div>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
