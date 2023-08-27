<x-app-layout>
    <div class="w-full h-screen bg-scroll ... ">
        <a href='/posts/create'>新規投稿</a>
        <div class="w-full h-screen"style="background-image: url('/img/background.jpg');background-repeat:no-repeat;background-size:cover">
            <h1 class="font-bold text-5xl text-gray-800 flex justify-center ...  relative top-[7%] text-black italic font-serif ">投稿一覧画面（受信)</h1>
            <div class="w-3/4 mx-auto mt-8 bg-white p-5 relative top-[25%] ">
                
                <div class="grid grid-cols-3  justify-items-center mt-10  "> 
                    @php
                    $today = new DateTime("now");
                    @endphp
                    
                    @foreach ($receivers as $receiver)
                    @php
                    $receivedate = date_create_from_format("Y-m-d",$receiver->date);
                    $createdate = date_create_from_format("Y-m-d H:i:s",$receiver->created_at);
                    $interval = date_diff($today,$receivedate);
                    $showdate = $interval->format("%a");
                    @endphp
                        <a href="/posts/{{ $receiver->id }}" type="button" class="bg-gradient-to-r from-pink-500 to-yellow-500 shadow-lg rounded px-2 py-1 my-4 hover:from-green-400 hover:to-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition    ">
                            <h2 class="font-bold text-xl text-black  text-center">タイトル:{{  $receiver->title }} </h2>
                            <p>送信元：{{ $receiver->user->name}} </p>
                            <p>作成日：{{ $createdate->format('Y年m月d日');}} </p>
                            <p> 受信予定日：{{ $receivedate->format('Y年m月d日');}} </p>
                            @if($today < $receivedate)
                                <p>あと{{$showdate}}日で受信できる</p>
                            @endif
                        </a>
                    @endforeach
                </div>   
            </div>   
        </div>
        <div>
            {{ $receivers->links() }}
    </div>
</x-app-layout>
