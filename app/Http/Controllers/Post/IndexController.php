<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Models\Like;

class IndexController extends Controller
{
    public function index(PostService $postService)
    {  
        $posts = $postService->getPosts();
        $like_model = new Like;

        return view('post.index')
            ->with('posts', $posts)
            ->with('like_model', $like_model);
    }

    public function store($postId) {
        $user = \Auth::user();
        if (!$user->is_like($postId)) {
            $user->like_posts()->attach($postId);
        }
        return back();
    }
    public function destroy($postId) {
        $user = \Auth::user();
        if ($user->is_like($postId)) {
            $user->like_posts()->detach($postId);
        }
        return back();
    }
}
