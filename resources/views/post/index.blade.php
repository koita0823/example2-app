<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<x-layout title="TOP | NikoLog">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            NikoLog
        </h2>
        <x-post.myList :posts="$posts" :like_model="$like_model"></x-post.myList>
        @guest 
        <div class="flex flex-wrap justify-center">
            <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
                <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
                <x-element.button-a :href="route('register')" theme="secondary">ユーザー登録</x-element.button-a>
            </div>
        </div>  
        @endguest  
    </x-layout.single>                        
</x-layout>  