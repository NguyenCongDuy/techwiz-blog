<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Notifications\NewCommentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);
        $comment = $post->comments()->create([
            'content' => $request->input('content'),
            'user_id' => Auth::id(),
        ]);

        if ($post->user->id !== Auth::id()) {
            $post->user->notify(new NewCommentNotification($comment));
        }

        return redirect()->route('posts.show', $post)->with('success', 'Đã gửi bình luận!');
    }

    public function destroy(Comment $comment)
    {
        if (Auth::id() === $comment->user_id || Auth::id() === $comment->post->user_id) {
            $comment->delete();
            return back()->with('success', 'Đã ẩn bình luận.');
        }

        abort(403);
    }
}
