<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Receiver;

class ReceiverController extends Controller
{
    public function index(Receiver $receiver)
    {
        //vewの名前は後ですり合わせる
        return view('posts/index')->with(['receivers' => $receiver->getPaginateByLimit()]);
    }

    public function show(Receiver $receiver)
    {
        return view('posts/show')->with(['receiver' => $receiver]);
    }
}
