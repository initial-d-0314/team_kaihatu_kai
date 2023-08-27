<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チーム開発会へようこそ！</h1>
        <h2>送られた側一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <div>
            @php
            $today = new DateTime("now");
            @endphp
            
            @foreach ($receivers as $receiver)
            @php
            $receivedate = date_create_from_format("Y-m-d",$receiver->date);
            $createdate = date_create_from_format("Y-m-d H:i:s",$receiver->created_at);
            
            @endphp
            @if($today > $receivedate|| $today == $receivedate)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        送信元：{{ $receiver->user->name}}
                        作成日：{{ $createdate->format('Y年m月d日');}}
                        送信予定日：{{ $receivedate->format('Y年m月d日');}}
                        タイトル：<a href="/posts/{{ $receiver->id }}">{{ $receiver->title }}</a>
                    </p>
                </div>
            @else
            @php
            $interval = date_diff($today,$receivedate);
            $showdate = $interval->format("%a");
            @endphp
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        あと{{$showdate}}日で見ることができるけど
                        期限前なので見えるわけにはいかない！
                    </p>
                </div>
            @endif
            @endforeach
        </div>
        <div>
            {{ $receivers->links() }}
        </div>
    </body>
</html>
