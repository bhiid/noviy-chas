@extends('layouts.app')

@section('content')

<h1 class="section-title">Редагувати Користувача</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="login-label">Імʼя</label>
        <input type="text" name="name" class="login-input mb-3" value="{{ $user->name }}">

        <label class="login-label">Email</label>
        <input type="email" name="email" class="login-input mb-3" value="{{ $user->email }}">

        <label class="login-label">Роль</label>
        <select name="role" class="login-input mb-4" style="background: rgba(255,255,255,0.07);">
            <option value="user" @selected($user->role === 'user')>Користувач</option>
            <option value="admin" @selected($user->role === 'admin')>Адмін</option>
        </select>

        <button class="login-button w-100">Оновити</button>
    </form>

</div>

@endsection