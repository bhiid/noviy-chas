@extends('layouts.app')

@section('content')

<h1 class="section-title">Наші Роботи</h1>
<div class="section-line"></div>

<div class="services-grid">
    @foreach($items as $item)
        <div class="service-card">

            <div class="service-image">
                <img src="{{ $item->image }}" alt="{{ $item->title }}">
            </div>

            <div class="service-content">
                <h3 class="service-title">{{ $item->title }}</h3>

                <p class="service-description">
                    {{ Str::limit($item->description, 120) }}
                </p>

                <a href="{{ route('portfolio.show', $item->id) }}" class="btn-view">
                    Переглянути
                </a>
            </div>

        </div>
    @endforeach
</div>

@endsection