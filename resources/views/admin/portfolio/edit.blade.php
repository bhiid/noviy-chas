@extends('layouts.app')

@section('content')

<h1 class="section-title">Редагувати Роботу</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form action="{{ route('admin.portfolio.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="login-label">Назва</label>
        <input type="text" name="title" class="login-input mb-3" value="{{ $item->title }}">

        <label class="login-label">Опис</label>
        <textarea name="description" class="login-input mb-3" rows="4">{{ $item->description }}</textarea>

        <label class="login-label">Зображення (URL)</label>
        <input type="text" name="image" class="login-input mb-4" value="{{ $item->image }}">

        <button class="login-button w-100">Оновити</button>
    </form>

</div>

@endsection