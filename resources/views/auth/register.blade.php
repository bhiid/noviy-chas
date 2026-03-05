@extends('layouts.app')

@section('content')

<div class="login-container">

    <div class="login-card">

        <h2 class="login-title">Створити акаунт</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label class="login-label">Імʼя</label>
            <input type="text" name="name" class="login-input mb-3" required>

            <label class="login-label">Email</label>
            <input type="email" name="email" class="login-input mb-3" required>

            <label class="login-label">Пароль</label>
            <input type="password" name="password" class="login-input mb-3" required>

            <label class="login-label">Підтвердження пароля</label>
            <input type="password" name="password_confirmation" class="login-input mb-4" required>

            <button class="login-button w-100">Зареєструватися</button>

            <div class="login-footer">
                <a href="{{ route('login') }}" class="login-link">Вже є акаунт?</a>
            </div>

        </form>

    </div>

</div>

@endsection