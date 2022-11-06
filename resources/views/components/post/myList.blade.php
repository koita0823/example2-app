@props([
    'posts' => [],
    'like_model' => []
])

@auth
<div class="flex mb-4 items-center justify-between">
    <a href="/create" class="text-lg">
        <x-element.button>投稿する</x-element.button>
    </a>
    <a href="/chart" class="text-lg">
        <x-element.button>ムードチャート</x-element.button>
    </a>
    <x-form.search></x-form.search>  
</div>          
    <div class="bg-white rounded-md shadow-lg mt-5 mb-5">
        <ul>
            @foreach($posts as $post)
				<li class="border-b last:border-b-0 border-gray-400 p-4 flex items-start justify-between">
                    <div>
						<span class="inline-block rounded-full bg-gray-100 px-2 py-1 text-xs mb-2">
                            <span class="text-blue-500"><p>{{ $post->user->name }}</p></span>
								{{ $post->created_at->format('Y-m-d H:i') }}/
								・{{ $post->about->name }}
								・{{ $post->feeling->name }}
						</span>   
                        <p class="text-gray-600">{!! nl2br(e($post->content)) !!}</p>
                            <p>
                                @if (!Auth::user()->is_like($post->id))
                                <form action="{{ route('post.likes', $post) }}" method="post">
                                @csrf
                                    <button onclick="like({{$post->id}})">
                                        いいね
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('post.unlike', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button onclick="unlike({{$post->id}})">
                                        いいね解除
                                    </button>
                                </form>
                                @endif 
                            </p>    
                    </div>
					<x-post.options :postId="$post->id" :userId="$post->user_id"></x-post.options>
				</li>					
            @endforeach
		</ul>	
    </div>    
@endauth	