<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\PostService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, PostService $postService)
    {
        $postId = (int) $request->route('postId');
 
        if (!$postService->checkOwnPost($request->user()->id, $postId)) {
            throw new AccessDeniedHttpException();
        }
        $post = Post::where('id', $postId)->firstOrFail();
        $post->delete();
        return redirect()
            ->route('post.myPage')
            ->with('feedback.success', "投稿を削除しました");
    }
}
