<?php 

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function getPosts()
    {
        return Post::withCount('likes')->orderBy('created_at', 'DESC')->get();
    }

    public function checkOwnPost(int $userId, int $postId): bool
    {
        $post = Post::where('id', $postId)->first();
        if (!$post) {
            return false;
        }

        return $post->user_id === $userId;
    }
}