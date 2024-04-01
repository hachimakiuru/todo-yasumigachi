<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;




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

            $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'image' => 'required|image',
            ]);
            //->validate function might the reason of can't save posts-> skip this part = low priority
            
            $post = new Post;

            $post -> title = $request ->title;
            $post -> body = $request ->body;

            if ($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/images'), $imageName);
                $post->image = $imageName;
            }
            $post -> user_id = Auth::id();

            $post -> save();

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

            $post = Post::findOrFail($id);

            // same validation as store
            $validateData = $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'image' => 'required|image',
            ]);
    

            $post -> title = $validateData['title'];
            $post -> body = $validateData['body']; 

            
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/images'), $imageName);
                $post->image = $imageName;
            
            
            $post -> user_id = Auth::id();

            $post -> save();

            return redirect()->route('posts.index');
        }

        public function destroy($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
