@extends('layouts.app')

@section('content')

<h1 class="section-title">Адмін Панель</h1>
<div class="section-line"></div>

{{-- СТАТИСТИКА --}}
<div class="row g-4 mb-5">

    <div class="col-md-4">
        <div class="glass-card p-4 text-center">
            <h3 class="service-title">Послуги</h3>
            <p class="hero-title" style="font-size: 2.4rem;">
                {{ $servicesCount }}
            </p>
            <a href="{{ route('admin.services.index') }}" class="btn-view">Перейти</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="glass-card p-4 text-center">
            <h3 class="service-title">Портфоліо</h3>
            <p class="hero-title" style="font-size: 2.4rem;">
                {{ $portfolioCount }}
            </p>
            <a href="{{ route('admin.portfolio.index') }}" class="btn-view">Перейти</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="glass-card p-4 text-center">
            <h3 class="service-title">Пости</h3>
            <p class="hero-title" style="font-size: 2.4rem;">
                {{ $postsCount }}
            </p>
            <a href="{{ route('admin.posts.index') }}" class="btn-view">Перейти</a>
        </div>
    </div>

</div>

{{-- КНОПКИ ДЛЯ ШВИДКОГО ДОСТУПУ --}}
<h2 class="section-title" style="font-size: 2rem;">Швидкі Дії</h2>
<div class="section-line"></div>

<div class="row g-4">

    <div class="col-md-4">
        <div class="glass-card p-4 text-center">
            <h4 class="service-title">Додати Послугу</h4>
            <a href="{{ route('admin.services.create') }}" class="btn-view">Створити</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="glass-card p-4 text-center">
            <h4 class="service-title">Додати Роботу</h4>
            <a href="{{ route('admin.portfolio.create') }}" class="btn-view">Створити</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="glass-card p-4 text-center">
            <h4 class="service-title">Додати Пост</h4>
            <a href="{{ route('admin.posts.create') }}" class="btn-view">Створити</a>
        </div>
    </div>

</div>

@endsection
