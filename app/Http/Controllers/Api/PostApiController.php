<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->latest()
            ->with('user')
            ->paginate(10);

        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Post::with('user')
            ->where('id', $id)
            ->where('status', 'published')
            ->firstOrFail();

        return response()->json($post);
    }
}

