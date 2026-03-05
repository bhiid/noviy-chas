@extends('layouts.app')

@section('content')

<h1 class="section-title">Редагувати Послугу</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="login-label">Назва</label>
        <input type="text" name="title" class="login-input mb-3" value="{{ $service->title }}">

        <label class="login-label">Опис</label>
        <textarea name="description" class="login-input mb-3" rows="4">{{ $service->description }}</textarea>

        <label class="login-label">Ціна</label>
        <input type="number" name="price" class="login-input mb-3" value="{{ $service->price }}">

        <label class="login-label">Зображення (URL)</label>
        <input type="text" name="image" class="login-input mb-4" value="{{ $service->image }}">

        <button class="login-button w-100">Оновити</button>
    </form>

</div>

@endsection