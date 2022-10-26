<?php

namespace App\Http\Controllers\Post\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Policies\PostPolicy;
use App\Models\Post;
use App\Services\PostService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class IndexController extends Controller
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
        return view('post.update')->with('post', $post);
    }
}
