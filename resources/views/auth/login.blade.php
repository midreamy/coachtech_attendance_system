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
                <input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="メールアドレス" />
            </div>

            <!-- Password -->
            <div>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="パスワード" />
            </div>

            <div class="mt-8">
                <button>
                    ログイン
                </button>
            </div>

            <div class="content__input--guide">
                <p>アカウントをお持ちでない方はこちらから</p>
                <a href="/register">会員登録</a>
            </div>

        </form>
    </div>

</div>

<footer>
    <p>Atte,inc.</p>
</footer>

@endsection