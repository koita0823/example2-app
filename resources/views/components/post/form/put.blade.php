@props([
    'post',
])
<div class="p-4">
    <form action="{{ route('post.update.put', ['postId' => $post->id]) }}"
        method="post">
        @method('PUT')
        @csrf
        @if (session('feedback.success'))
        <x-alert.success>{{ session('feedback.success') }}</x-alert.success>
        @endif    
        <div class="mt-1">
            <textarea name="post" rows="4" 
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block 
                w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="どんなことがありましたか？出来事や感じたとこを書いてみましょう。">
                {{ $post->content }}
            </textarea>
        </div>    
        <label class="text-sm font-medium text-gray-500">どんな気持ち？</label>
        <select type="text" name="feeling" class="bg-white border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            <option disabled style="display:none;" @if (empty($post->feeling_id)) selected @endif>
                {{ $post->feeling->name }}
            </option>
            @foreach (config('feel') as $key => $name)
                <option value="{{ $key }}">{{ $name }}</option>
            @endforeach
        </select> 
        <label class="text-sm font-medium text-gray-500">何について？</label>
            <select type="text" name="about" class="bg-white border border-gray-300 text-gray-900 text-sm 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                <option disabled style='display:none;' @if (empty($post->about_id)) selected @endif>
                    {{ $post->about->name }}
                </option>
                @foreach (config('about') as $key => $name)
                    <option value="{{ $key }}">{{ $name }}</option>
                @endforeach 
            </select>    
            @error('post', 'feeling', 'about')
                <x-alert.error>{{ $message }}</x-alert.error>
            @enderror
            <div class="flex flex-wrap justify-end">
                <x-element.button>編集</x-element.button>
            </div>
    </form>
</div>