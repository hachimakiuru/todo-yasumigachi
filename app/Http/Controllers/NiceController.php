<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NiceController as MyNiceController;


class NiceController extends Controller
{
    //いいねをつける
    public function nice(Post $post){
        $nice = New Nice();
        $nice->post_id = $post->id;
        $nice->user_id = Auth::user()->id;
        $nice->save();

        return back();

    }

    //いいねを表示するページ
    public function index(Post $post){
        $posts = Post::all();
        $user = Auth::user();
        $nice = Nice::where('post_id' , $post->id)->where('user_id' , $user)->first();
        return view('posts.show' , compact('posts','nice','user'));
    }

    //いいねを消す。
    public function unnice(Post $post){
        $user = Auth::user()->id;
        $nice = Nice::where('post_id', $post->id)->where('user_id', $user)->first();
        $nice -> delete();
        return back();
    }
}
