@extends('layouts.app')

@section('content')

<h1 class="section-title">Редагувати Пост</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="login-label">Назва</label>
        <input type="text" name="title" class="login-input mb-3" value="{{ $post->title }}">

        <label class="login-label">Контент</label>
        <textarea name="content" class="login-input mb-3" rows="5">{{ $post->content }}</textarea>

        <label class="login-label">Зображення (URL)</label>
        <input type="text" name="image" class="login-input mb-4" value="{{ $post->image }}">

        <button class="login-button w-100">Оновити</button>
    </form>

</div>

@endsection