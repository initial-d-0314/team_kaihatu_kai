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
        <h2>送った側一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <div>
            @php
            $today = new DateTime("now");
            @endphp
            @foreach ($posts as $post)
            @php
            $senddate = date_create_from_format("Y-m-d",$post->date);
            $createdate = date_create_from_format("Y-m-d H:i:s",$post->created_at);
            $interval = date_diff($today,$senddate);
            $showdate = $interval->format("%a");
            @endphp
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        送信先：{{ $post->user->name}}
                        作成日：{{ $createdate->format('Y年m月d日')}}
                        送信予定日：{{ $senddate->format('Y年m月d日')}}
                        @if($today < $senddate)
                        あと{{$showdate}}日で送信される
                        @endif
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
