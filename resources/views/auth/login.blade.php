@extends('layouts.app')

@section('content')

<div class="login-container">

    <div class="login-card">

        <h2 class="login-title">Вхід в акаунт</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label class="login-label">Email</label>
            <input id="email" type="email" name="email" class="login-input mb-3" required autofocus>

            <label class="login-label">Пароль</label>
            <input id="password" type="password" name="password" class="login-input mb-3" required>

            <div class="login-remember">
                <input type="checkbox" name="remember">
                <span class="login-remember-text">Запамʼятати мене</span>
            </div>

            <button class="login-button w-100 mt-4">Увійти</button>

            <div class="login-footer">
                <a href="{{ route('password.request') }}" class="login-link">Забули пароль?</a>
                <a href="{{ route('register') }}" class="login-link">Реєстрація</a>
            </div>

        </form>

    </div>

</div>

@endsection