@extends('layouts.default')

@section('content')
<header>
  <h1>Atte</h1>
</header>

<div class="content">
    <div class="content__title">
        <p class="text-lg font-bold">ログイン</p>
    </div>

    <div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>

    <div class="content__input">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="メールアドレス"/>
            </div>

            <!-- Password -->
            <div>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="パスワード"/>
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
    </div>
</div>

<footer>
    <p>Atte,inc.</p>
</footer>

@endsection
