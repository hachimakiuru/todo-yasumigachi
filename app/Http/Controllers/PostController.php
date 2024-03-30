<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;




class PostController extends Controller
{
        function index()
        {
            $posts = Post::all();
        return view('posts.index', compact('posts'));
        }

        function create()
        {
            return view('posts.create');
        }

        function store(Request $request)
        {

            // $request->validate([
            //     'title' => 'required|string|max:255',
            //     'body' => 'required|string',
            //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);
            //->validate function might the reason of can't save posts-> skip this part = low priority
            
            $post = new Post;

            $post -> title = $request ->title;
            $post -> body = $request ->body;
            $post -> user_id = Auth::id();
            $post -> save();

            if ($request->hasFile('image')){
                $filename = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('images', $filename);
                $post->image = $filename;
            }

            return redirect()->route('posts.index');
        }

        function show($id)
        {
            $post = Post::find($id);
            return view('posts.show' ,['post'=>$post]);
        }

        function edit($id)
        {
            $post = Post::find($id);
            return view('posts.edit', ['post'=>$post]);
        }

        function update(Request $request, $id)
        {
            $post = Post::find($id);

            $post -> title = $request -> title;
            $post -> body = $request -> body;
            $post -> save();

            return view('posts.show' , ['post' => $post]);
        }

        function destroy($id)
        {
            $post = Post::find($id);

            $post -> delete();

            return redirect()->route('posts.index');
        }
}
