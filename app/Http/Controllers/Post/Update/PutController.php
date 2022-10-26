<?php

namespace App\Http\Controllers\Post\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Services\PostService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, PostService $postService)
    {
        if (!$postService->checkOwnPost($request->user()->id, $request->id())) {
            throw new AccessDeniedHttpException();
        }
        $post = Post::where('id', $request->id())->firstOrFail();
        $post->content = $request->tweet();
        $post->feeling_id = $request->feeling();
        $post->about_id = $request->about_what();
        $post->save();
        return redirect()
            ->route('post.update.index', ['postId' =>$post->id])
            ->with('feedback.success', "投稿を編集しました");
    }
}
