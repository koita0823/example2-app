<x-layout title="編集 | NikoLog">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            NikoLog
        </h2>
        @php
            $breadcrumbs = [
                ['href' => route('post.myPage'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集']
            ];
        @endphp
        <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
        <x-post.form.put :post="$post"></x-post.form.put>
    </x-layout.single>
</x-layout>            