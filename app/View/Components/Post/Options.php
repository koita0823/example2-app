<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Options extends Component
{
    private int $postId;
    private int $userId;

    public function __construct(int $postId, int $userId)
    {
        $this->postId = $postId;
        $this->userId = $userId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.options')
            ->with('postId', $this->postId)
            ->with('myPost', \Illuminate\Support\Facades\Auth::id() === $this->userId);
    }
}
