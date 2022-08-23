<x-guest-layout>
    <header class="fixed flex items-center h-12 w-full bg-white">
        <h1 class="text-xl font-bold my-4 ml-8">Atte</h1>
    </header>
    <x-auth-card>
        <x-slot name="logo">
            <p class="text-lg font-bold">会員登録</p>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="名前" />
            </div>

            <!-- Email Address -->
            <div class="mt-8">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="メールアドレス"/>
            </div>

            <!-- Password -->
            <div class="mt-8">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="パスワード"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-8">
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required placeholder="確認用パスワード"/>
            </div>

            <div class="mt-8">
                <button class="rounded-md w-full bg-blue-500 text-white py-2">
                    会員登録
                </button>
            </div>

            <div class="flex flex-col justify-center mt-8 text-xs">
                <p class="text-center">アカウントをお持ちの方はこちらから</p>
                <p>
                <a href="/login" class="block text-center text-blue-500">ログイン</a>
                </p>
                
            </div>
        </form>
    </x-auth-card>
    
    <footer class="h-8 flex items-center justify-center text-xs bg-white">
        <p>Atte,inc.</p>
    </footer>

</x-guest-layout>
