@extends('layouts.app')

@section('content')

<h1 class="section-title">Ваш Кабінет</h1>
<div class="section-line"></div>

<div class="glass-card p-4 mt-6">
    <h2 class="hero-title mb-3">
        Вітаємо, {{ auth()->user()->name }}!
    </h2>

    <p style="opacity: 0.85;">
        Ви успішно увійшли в систему. Тут ви можете керувати своїм профілем.
    </p>

    <div class="mt-4">
        <a href="{{ route('profile.edit') }}" class="btn-view">
            Редагувати профіль
        </a>
    </div>
</div>

@endsection