<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ChartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::where('user_id', \Auth::user()->id)
        ->select('feeling_id')
        ->selectRaw('COUNT(feeling_id) as count_feelingId')
        ->groupBy('feeling_id')
        ->get();
       
        return view('post.chart', compact('posts'));
    }
}
