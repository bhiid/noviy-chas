@extends('layouts.app')

@section('content')

<div class="login-container">

    <div class="login-card">

        <h2 class="login-title">Новий пароль</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <label class="login-label">Email</label>
            <input type="email" name="email" class="login-input mb-3" required>

            <label class="login-label">Новий пароль</label>
            <input type="password" name="password" class="login-input mb-3" required>

            <label class="login-label">Підтвердження</label>
            <input type="password" name="password_confirmation" class="login-input mb-4" required>

            <button class="login-button w-100">Оновити пароль</button>

        </form>

    </div>

</div>

@endsection