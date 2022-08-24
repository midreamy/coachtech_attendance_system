@extends('layouts.default')

@section('content')
<header>
    <h1>Atte</h1>
</header>

<div class="content">
    <div class="content__title">
        <p>会員登録</p>
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="content__input">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="名前" />
            </div>

            <!-- Email Address -->
            <div class="mt-8">
                <input id="email" type="email" name="email" :value="old('email')" required placeholder="メールアドレス" />
            </div>

            <!-- Password -->
            <div class="mt-8">
                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="パスワード" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-8">
                <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="確認用パスワード" />
            </div>

            <div class="mt-8">
                <button>
                    会員登録
                </button>
            </div>

            <div class="content__input--guide">
                <p class="text-center">アカウントをお持ちの方はこちらから</p>
                <a href="/login">ログイン</a>
            </div>

        </form>
    </div>

</div>

<footer>
    <p>Atte,inc.</p>
</footer>

@endsection