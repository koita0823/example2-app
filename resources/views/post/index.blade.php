<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<x-layout title="TOP | NikoLog">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            NikoLog
        </h2>
        <x-post.myList :posts="$posts" :like_model="$like_model"></x-post.myList>
    </x-layout.single>                        
</x-layout>  