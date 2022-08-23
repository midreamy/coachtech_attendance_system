<x-guest-layout>
    <header class="fixed flex items-center h-12 w-full bg-white">
        <h1 class="text-xl font-bold my-4 ml-8">Atte</h1>
    </header>
    <x-auth-card>
        <x-slot name="logo">
            <p class="text-lg font-bold">ログイン</p>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="メールアドレス"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="パスワード"/>
            </div>

            <div class="mt-8">
                <button class="rounded-md w-full bg-blue-500 text-white py-2">
                    ログイン
                </button>
            </div>

            <div class="flex flex-col justify-center mt-8 text-xs">
                <p class="text-center">アカウントをお持ちでない方はこちらから</p>
                <p>
                <a href="/register" class="block text-center text-blue-500">会員登録</a>
                </p>
            </div>
            
        </form>
    </x-auth-card>

    <footer class="h-8 flex items-center justify-center text-xs bg-white">
        <p>Atte,inc.</p>
    </footer>
    
</x-guest-layout>
