<x-app-layout>
    <div class="h-screen w-full" style="background-image: url('/create_background.jpg'); background-repeat:no-repeat; background-size:cover">
        <div class="w-2/3 mx-auto bg-white px-4 sm:px-6 lg:px-8 font-bold text-5xl text-gray-800 flex justify-center ...  relative top-[7%] text-black italic font-serif ">
        <div class="w-2/3 mx-auto bg-white px-4 sm:px-6 lg:px-8">
        <h1  class="text-4xl mt-10">新規メッセージ</h1>
        <div class="mt-8 mx-5">
        <h2>投稿作成</h2>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
                <p>送信予定日時</p>
                <div class="mx-5">
                    <input type="date" id="start" name="post[date]"value="{{old('post.date')}}"/>
                    <p class="date__error" style="color:red">{{ $errors->first('post.date') }}</p>
                </div>
                 <fieldset>
                    <legend class="mt-5">To</legend>
                    <div>
                        @foreach($users as $user)
                            <input type="radio" id="personselect{{$user->id}}" name="post[user_id]" value="{{$user->id}}" {{ old('post.user_id') == $user->id ? 'checked' : '' }}/>
                            <label for="personselect{{$user->id}}">{{$user->name}}</label>
                        @endforeach
                    </div>
                </fieldset
                <p class="user_id__error" style="color:red">{{ $errors->first('post.user_id') }}</p>>
                <div>
                        <p class="mt-5"><h2>タイトル</h2>
                        <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p></p>
            　　</div>
                 <div class="mt-12">
                <h2>本文</h2>
                    <textarea name="post[body]" placeholder="自分の気持ちを伝えてください。"  style="width: 600px; height: 600px;" >{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div class="image mt-20">
                    <h3>画像</h3>
                    <input type="file" name="image">
                </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </div>
    </div>
    </div>
    </div>
</x-app-layout>