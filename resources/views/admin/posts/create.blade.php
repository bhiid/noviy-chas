@extends('layouts.app')

@section('content')

<h1 class="section-title">Додати Пост</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <label class="login-label">Назва</label>
        <input type="text" name="title" class="login-input mb-3">

        <label class="login-label">Контент</label>
        <textarea name="content" class="login-input mb-3" rows="5"></textarea>

        <label class="login-label">Зображення (URL)</label>
        <input type="text" name="image" class="login-input mb-4">

        <button class="login-button w-100">Створити</button>
    </form>

</div>

@endsection