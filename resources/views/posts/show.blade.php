<x-app-layout>
    <div class="w-full h-screen bg-scroll ... ">
        @php
            $today = new DateTime("now");
            $receivedate = date_create_from_format("Y-m-d",$post->date);
            $createdate = date_create_from_format("Y-m-d H:i:s",$post->created_at);
        @endphp
        @if($today < $receivedate)
            <p>まだ見る訳にはいかない！</p>
        @else
        <div class="w-full h-screen"style="background-image: url('/img/background.jpg');background-repeat:no-repeat;background-size:cover">
            <h1 class="font-bold text-5xl text-gray-800 flex justify-center ...  relative top-[7%] text-black italic font-serif ">詳細画面</h1>
            <div class="w-3/4 mx-auto mt-8 bg-white p-5 relative top-[25%] ">
                <div class="justify-items-center mt-10  ">
                    <p class="font-bold text-4xl text-gray-800">タイトル：{{ $post->title }}</p>
                    <p class="font-bold text-xl text-gray-800">宛先：{{ $post->user->name }}</p>
                    <p class="font-bold text-xl text-gray-800">届く日付：{{$post->date}}</p>
                    <p class="font-bold text-2xl text-gray-800 note">本文：{{ $post->body }}</p>
                    <div>
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                    </div>
                </div>
                @endif
                <div>
                    <p class="edit">[
                        <a href="/posts/{{ $post->id }}/edit">編集</a>]
                    </p>
                    <a href="/">戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

