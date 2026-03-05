@extends('layouts.app')

@section('content')

<div class="login-container">

    <div class="login-card">

        <h2 class="login-title">Відновлення пароля</h2>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label class="login-label">Ваш Email</label>
            <input type="email" name="email" class="login-input mb-4" required>

            <button class="login-button w-100">Надіслати посилання</button>

            <div class="login-footer">
                <a href="{{ route('login') }}" class="login-link">Повернутися до входу</a>
            </div>

        </form>

    </div>

</div>

@endsection