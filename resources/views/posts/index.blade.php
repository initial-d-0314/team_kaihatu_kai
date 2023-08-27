  <x-app-layout>
    <div class="w-full h-screen bg-scroll ... ">
        <!--<h1>チーム開発会へようこそ！</h1>-->
        <div class="w-full h-screen"style="background-image: url('/img/background.jpg');background-repeat:no-repeat;background-size:cover">
            <h1 class="font-bold text-5xl text-gray-800 flex justify-center ...  relative top-[5%] text-black italic font-serif ">投稿一覧画面(送信)</h1>
            <div class="w-3/4 mx-auto mt-8 bg-white p-5 relative top-[25%] ">
                
                 <div class="grid grid-cols-3  justify-items-center mt-10  "> 
                    @foreach ($posts as $post)
                        <a href="/posts/{{ $post->id }}" type="button" class="bg-gradient-to-r from-pink-500 to-yellow-500 shadow-lg rounded px-2 py-1 my-4 hover:from-green-400 hover:to-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition    ">
                            <h2 class="font-bold text-xl text-black  text-center">タイトル:{{ $post->title }} </h2>
                        </a>
                    @endforeach
                </div>
                </div>
            <div>
                {{ $posts->links() }}
            </div>
    </div>
</x-app-layout>


        <!--<h2>投稿一覧画面</h2>-->
        <!--<a href='/posts/create'>新規投稿</a>-->
