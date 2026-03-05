@extends('layouts.app')

@section('content')

<h1 class="section-title">Додати Роботу</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form action="{{ route('admin.portfolio.store') }}" method="POST">
        @csrf

        <label class="login-label">Назва</label>
        <input type="text" name="title" class="login-input mb-3">

        <label class="login-label">Опис</label>
        <textarea name="description" class="login-input mb-3" rows="4"></textarea>

        <label class="login-label">Зображення (URL)</label>
        <input type="text" name="image" class="login-input mb-4">

        <button class="login-button w-100">Створити</button>
    </form>

</div>

@endsection