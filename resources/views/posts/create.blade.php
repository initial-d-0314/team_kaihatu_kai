<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>チーム開発会へようこそ！</h1>
        <h2>投稿作成</h2>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <!-- ここから追加 -->
            <div class="image">
                <input type="file" name="image">
            </div>
            <!-- ここまで追加 -->
            <input type="date" id="start" name="post[date]"value="{{old('post.date')}}"/>
            <p class="date__error" style="color:red">{{ $errors->first('post.date') }}</p>
            
            <fieldset>
            <legend>だれ？</legend>
            <div>
                @foreach($users as $user)
                    <input type="radio" id="personselect{{$user->id}}" name="post[user_id]" value="{{$user->id}}" {{ old('post.user_id') == $user->id ? 'checked' : '' }}/>
                    <label for="personselect{{$user->id}}">{{$user->name}}</label>
                @endforeach
                </div>
            </div>
            </fieldset>
            <p class="user_id__error" style="color:red">{{ $errors->first('post.user_id') }}</p>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
