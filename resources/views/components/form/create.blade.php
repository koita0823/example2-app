@auth
    <a href="/post">
        <x-element.button>戻る</x-element.button>
    </a>
    <div class="p-4">
            <form "action="{{ route('post.create') }}" method="post">
                @csrf
                <div class="mt-1">
                    <textarea type="text" 
                        class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full 
                            sm:text-sm border border-gray-300 rounded-md p-2" 
                        name="post" 
                        rows="4" 
                        placeholder="どんなことがありましたか？出来事や感じたとこを書いてみましょう。">
                    </textarea>
                </div>
                <label class="text-sm font-medium text-gray-500">どんな気持ち？</label>
                <select type="text" name="feeling" class="bg-white border border-gray-300 text-gray-900 text-sm 
                    rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option disabled style='display:none;' @if (empty($feeling->id)) selected @endif>
                        選択してください
                    </option>
                    @foreach (config('feel') as $key => $name)
                        <option value="{{ $key }}">{{ $name }}</option>
                    @endforeach
                </select> 
                <label class="text-sm font-medium text-gray-500">何について？</label>
                <select type="text" name="about" class="bg-white border border-gray-300 text-gray-900 text-sm 
                    rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option disabled style='display:none;' @if (empty($about_what->id)) selected @endif>
                        選択してください
                    </option>
                    @foreach (config('about') as $key => $name)
                        <option value="{{ $key }}">{{ $name }}</option>
                    @endforeach 
                </select>      
                @error('post', 'feeling', 'about')
                    <x-alert.error>{{ $message }}</x-alert.error>
                @enderror
                <div class="flex flex-wrap justify-end">       
                    <x-element.button>投稿する</x-element.button>
                </div>    
            </form>      
    </div> 
@endauth  