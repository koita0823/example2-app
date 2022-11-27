<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
                NikoLog
            </h2>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('メールアドレスを送信していただければ、新しいパスワードを作成できるパスワードリセットリンクをメールでお送りします。') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('パスワードリセットリンク') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
