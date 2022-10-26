<x-layout title="TOP | NikoLog"> 
    @auth 
        <x-layout.single>
            <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
                NikoLog
            </h2>
            <x-form.create></x-form.create> 
        </x-layout.single> 
    @endauth     
</x-layout>    