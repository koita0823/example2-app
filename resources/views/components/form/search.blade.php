@props([
   'keyword' => '',
   'posts' => []
])
<div>
        <form action="{{ route('post.search') }}" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" class="border border-transparent
            shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 
            hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2
            focus:ring-blue-500" value="検索">
        </form>       
        @csrf
</div>              