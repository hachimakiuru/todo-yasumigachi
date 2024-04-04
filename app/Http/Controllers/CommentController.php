<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create($post_id)
    {
        $post = Post::find($post_id);
        return view('comments.create' , ['post'=>$post]);
    }

    public function store(Request $request)
    {
        $post = Post::find($request->post_id);
        $comment = new Comment;
        $comment -> body = $request -> body;
        $comment -> user_id = Auth::id();
        $comment ->post_id = $request -> post_id;
        $comment -> save();

        return redirect()->route('posts.show' , $post->id);
        }

        public function edit(Comment $comment)
{
    return view('comments.edit', compact('comment'));
}

public function update(Request $request, Comment $comment)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    $comment->update([
        'content' => $request->content,
    ]);

    return redirect()->route('posts.show', $comment->post_id)->with('success', 'コメントが更新されました。');
}
    

// CommentController.php

public function destroy(Comment $comment)
{
    $postId = $comment->post_id;
    $comment->delete();

    return redirect()->route('posts.show', $postId)->with('success', 'コメントが削除されました。');
}

}
