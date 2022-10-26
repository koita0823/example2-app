<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;


class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $post = new Post;
        $post->user_id = $request->userId();
        $post->feeling_id = $request->feeling();
        $post->about_id = $request->about_what();
        $post->content = $request->tweet();
        $post->save();
        return redirect()->route('post.myPage');
    }
}
