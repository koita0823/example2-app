<x-layout title="TOP | NikoLog"> 
    @auth 
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            NikoLog
        </h2>
        <a href="/post"><x-element.button>戻る</x-element.button></a>
        <div class="bg-white rounded-md shadow-lg mt-5 mb-5">
            <ul>
            @forelse($posts as $post)
                <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
			        <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                        <p>{{ $post->user->name }}</p>
					        {{ $post->created_at->format('Y-m-d H:i') }}/
					        ・{{ $post->about->name }}
					        ・{{ $post->feeling->name }}
                    </span>   
                    <p class="text-gray-600">{!! nl2br(e($post->content)) !!}</p>
                    <x-post.options :postId="$post->id" :userId="$post->user_id"></x-post.options>
                    @empty
                    <p>投稿がありません</p>
                </li>
                @endforelse
            </ul>     
        </div> 
    </x-layout.single>   
    @endauth
</x-layout>         