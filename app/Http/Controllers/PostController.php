<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Receiver;
use App\Models\User;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    //受け取った側の一覧表示（テスト）
    public function index2(Receiver $receiver)
    {
        return view('posts/index2')->with(['receivers' => $receiver->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    //受け取る側のテスト表示
    public function show2(Receiver $receiver)
    {
        return view('posts/show2')->with(['receiver' => $receiver]);
    }
    
    //要変更である//検証用に変えている
    public function create(User $user)
    {
        return view('posts/create')->with(['users' => $user->get()]);
    }
    
    //変更済み、リダイレクト先が要編集
    public function store(Post $post,Receiver $receiver, PostRequest $request)
    {
        $input = $request['post'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];  //追加
        }
        $post->fill($input)->save();
        
        $input += ['post_id' => $post->id];  //追加
        $input['user_id'] = \Auth::user()->id ;
        $receiver->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
